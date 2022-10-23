class FullScreenUtils {
    static isFullScreenEnabled() {
        return document.fullscreenEnabled || document.mozFullScreenEnabled ||
            document.webkitFullscreenEnabled || document.msFullscreenEnabled;
    }

    static isFullScreen() {
        return document.fullscreenElement || document.mozFullScreenElement ||
            document.webkitFullscreenElement || document.msFullscreenElement;
    }

    static requestFullScreen(element) {
        if (element.requestFullscreen) {
            element.requestFullscreen();
        } else if (element.mozRequestFullScreen) {
            element.mozRequestFullScreen();
        } else if (element.webkitRequestFullscreen) {
            element.webkitRequestFullscreen();
        } else if (element.msRequestFullscreen) {
            element.msRequestFullscreen();
        }
    }

    static cancelFullScreen() {
        if (document.cancelFullScreen) { // Standard API
            document.cancelFullScreen();
        } else if (document.mozCancelFullScreen) { // Firefox
            document.mozCancelFullScreen();
        } else if (document.webkitCancelFullScreen) { // Chrome and Safari
            document.webkitCancelFullScreen();
        } else if (document.msExitFullscreen) { // IE
            document.msExitFullscreen();
        }
    }

    static toggleFullScreen(id) {
        if (FullScreenUtils.isFullScreen()) {
            FullScreenUtils.cancelFullScreen();
        } else {
            let element = document.getElementById(id);
            FullScreenUtils.requestFullScreen(element);
        }
    }
}

class ModelRun {
    constructor(modelVersion, type) {
        this.modelVersion = modelVersion;
        this.type = type;
        this.outputs = modelVersion.experimentTemplate.outputs;
        this.setDefaultInputs();
    }

    setDefaultInputs() {
        this.inputs = this.modelVersion.experimentTemplate.inputs.map(i => Object.assign({}, i));
        switch (this.type) {
            case "PARAMETER_VARIATION":
                this.inputs.push({name: "{RANDOM_SEED}", type: "LONG", units: null, value: "1"});
                break;
        }
    }

    setInput(name, value) {
        let input = this.inputs.find(i => i.name === name);
        input.value = value;
    }

    setRangeInput(name, min, max, step) {
        let input = this.inputs.find(i => i.name === name);
        input.type = "FIXED_RANGE_DOUBLE";
        input.value ='{"min":"' + min + '","max":"' + max + '","step":"' + step + '"}';
    }

    setInputsFromExperiment(experiment) {
        this.inputs = experiment.inputs.map(i => Object.assign({}, i));
    }

    getData() {
        return JSON.stringify({
            inputs: this.inputs,
            experimentType: this.type
        });
    }
}

class CloudClient {
    static create(apiKey, host) {
        return new CloudClient(apiKey, host ? host : "https://cloud.anylogic.com");
    }

    constructor(apiKey, host) {
        this.VERSION = "8.3.0";
        this.apiKey = apiKey;
        this.setHost(host);
        this.loadHeaders();
    }

    setHost(host) {
        this.HOST_URL = host;
        this.REST_URL = this.HOST_URL + "/api";
        this.OPEN_API_URL = this.REST_URL + "/open/" + this.VERSION;
    }

    getModels() {
        return this.apiRequest(this.OPEN_API_URL + "/models");
    }

    getModelById(id) {
        return this.apiRequest(this.OPEN_API_URL + "/models/" + id);
    }

    getModelByName(name) {
        return this.apiRequest(this.OPEN_API_URL + "/models/name/" + name);
    }

    getModelVersionById(model, versionId) {
        return this.apiRequest(this.OPEN_API_URL + "/models/" + model.id + "/versions/" + versionId);
    }

    getModelVersionByNumber(model, versionNumber) {
        return this.apiRequest(this.OPEN_API_URL + "/models/" + model.id + "/versions/number/" + versionNumber);
    }

    getLatestModelVersion(model) {
        let versionId = model.modelVersions[model.modelVersions.length - 1];
        return this.getModelVersionById(model, versionId);
    }

    getModelVersionExperiments(modelVersion) {
        return this.apiRequest(this.OPEN_API_URL + "/versions/" + modelVersion.id + "/experiments");
    }

    createSimulation(version) {
        return new ModelRun(version, "SIMULATION");
    }

    createParameterVariation(version) {
        return new ModelRun(version, "PARAMETER_VARIATION");
    }

    createAnimation(version, divId) {
        let modelRun = new ModelRun(version, "ANIMATION_SVG");
        modelRun.divId = divId;
        return modelRun;
    }

    run(modelRun) {
        let requestData = {
            data: modelRun.getData(),
            contentType: "application/json"
        };
        if (modelRun.type == "ANIMATION_SVG") {
            return this.apiRequest(this.OPEN_API_URL + "/versions/" + modelRun.modelVersion.id + "/runs/animation", "POST", requestData).then(info => {
                return this.loadContentToDiv("assets/svg-template.html", modelRun.divId).then(() => {
                    let client = SVGFactory.createClient(info.version);
                    info.host = this.HOST_URL;
                    if (FullScreenUtils.isFullScreenEnabled()) {
                        client.setCallback("ontogglefullscreen", () => FullScreenUtils.toggleFullScreen("svg-video-container"));
                    }
                    modelRun.stop = () => this.apiRequest(info.host + "/nodes/" + info.restUrl + "sessions/" + info.sessionUuid + "/stop", "POST").then(() => {
                        client.stop({type: "STOPPED"});
                    });
                    client.setCallback("onstop", () => modelRun.stop());
                    client.start(info);
                    return Promise.resolve(modelRun);
                });
            });
        } else {
            modelRun.stop =
                () => this.apiRequest(this.OPEN_API_URL + "/versions/" + modelRun.modelVersion.id + "/runs/stop", "POST", requestData);
            return this.apiRequest(this.OPEN_API_URL + "/versions/" + modelRun.modelVersion.id + "/runs", "POST", requestData)
                .then(() => this.requestOutputs(modelRun));
        }
    }

    stop(modelRun) {
        modelRun.stop();
    }

    requestOutputs(modelRun) {
        return this.apiRequest(this.OPEN_API_URL + "/versions/" + modelRun.modelVersion.id + "/run", "POST", {
            data: modelRun.getData(),
            contentType: "application/json"
        })
            .then(runState => {
                switch (runState.status) {
                    case "FRESH":
                    case "RUNNING":
                        return new Promise(resolve => setTimeout(() => resolve(this.requestOutputs(modelRun)), 5000));
                    case "COMPLETED":
                        return this.getRunOutputs(modelRun, runState);
                    case "ERROR":
                    case "STOPPED":
                        return Promise.reject(runState.status);
                    default:
                        // Unexpected status
                        break;
                }
            });
    }

    getRunOutputs(modelRun, runState) {
        switch (modelRun.type) {
            case "SIMULATION":
                return this.getSimulationRunOutputs(modelRun, runState);
            case "PARAMETER_VARIATION":
                return this.getVariationRunOutputs(modelRun, runState);
            default:
                return Promise.reject(runState);
        }
    }

    getSimulationRunOutputs(modelRun, runState) {
        let aggregations = modelRun.outputs.map(output => {
            return {
                aggregationType: "IDENTITY",
                inputs: [],
                outputs: [output]
            }
        });
        return this.apiRequest(this.OPEN_API_URL + "/versions/" + modelRun.modelVersion.id + "/runs/" + runState.id, "POST", {
            data: JSON.stringify(aggregations)
        })
            .then(result => {
                return result.map(r => Object.assign({}, r.outputs[0], {value: r.value}));
            });
    }

    getVariationRunOutputs(modelRun, runState) {
        let aggregations = modelRun.outputs.map(output => {
            return {
                aggregationType: "ARRAY",
                inputs: [],
                outputs: [output]
            }
        });
        return this.apiRequest(this.OPEN_API_URL + "/versions/" + modelRun.modelVersion.id + "/runs/" + runState.id, "POST", {
            data: JSON.stringify(aggregations),
            contentType: "application/json"
        })
            .then(result => {
                return result.map(r => Object.assign({}, r.outputs[0], {value: r.value}));
            });
    }

    loadContentToDiv(url, id) {
        return this.apiRequest(url, "GET", {responseType: "text"}).then(content => {
            document.getElementById(id).innerHTML = content;
        });
    }

    apiRequest(url, type, params) {
        return new Promise((resolve, reject) => {
            let xhttp = new XMLHttpRequest();
            if (!type) type = "GET";
            if (!params) params = {};
            xhttp.open(type, url, true);
            if (params.contentType)
                xhttp.setRequestHeader("Content-Type", "application/json");
            xhttp.setRequestHeader("Authorization", this.apiKey);
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4) {
                    if (this.status == 200) {
                        let result = xhttp.responseText;
                        if (!params.responseType)
                            result = JSON.parse(result);
                        resolve(result);
                    } else {
                        reject("Request error status " + this.status);
                    }
                }
            };
            xhttp.send(params.data);
        });
    }

    loadHeaders() {
        this.loadScript("assets/api.bundle.js");
        this.loadStyle("assets/svg/css/presentation-html.css");
        this.loadStyle("assets/svg/css/presentation-svg.css");
    }

    loadScript(url){
        let script = document.createElement("script");
        script.type = "text/javascript";
        // script.onload = () => callback();
        script.src = url;
        document.getElementsByTagName("head")[0].appendChild(script);
    }

    loadStyle(url){
        let link = document.createElement("link");
        link.rel = "stylesheet";
        link.href = url;
        document.getElementsByTagName("head")[0].appendChild(link);
    }
}

window.CloudClient = CloudClient;
