let cloudClient = CloudClient.create("ebb4b7c8-aef3-4e7e-b52b-74e4ac9a294e","http://vmshqebitda01");


function runAnimation(id) {
    cloudClient.getModelByName( "Risk" )
        .then( model => cloudClient.getLatestModelVersion(model) )
        .then( version => {
            modelRun = cloudClient.createAnimation( version, "animation-container" );
            modelRun.setInput( "Dataset id graph", id );
            modelRun.setInput( "Dataset id graph", id );
            return cloudClient.run( modelRun );
        })
        .catch( error => alert( "Unable to run animation. Error: " + error ) );
}

function runSimulation() {
    cloudClient.getModelByName( "Bass Diffusion Demo" )
        .then( model => cloudClient.getLatestModelVersion(model) )
        .then( version => {
            modelRun = cloudClient.createSimulation(version);
            modelRun.setInput( "Contact Rate", 40 );
            return cloudClient.run( modelRun );
        })
        .then( outputs => {
            let ap = outputs.find( output => output.name === "AdoptionPercent" ).value;
            document.getElementById( "text-output" ).innerText = "AdoptionPercent = " + ap;
            console.log( "AdoptionPercent = " + ap );
        })
        .catch( error => alert( "Unable to run simulation. Error: " + error ) );
}

function runParameterVariation() {
    cloudClient.getModelByName( "Bass Diffusion Demo" )
        .then( model => cloudClient.getLatestModelVersion(model) )
        .then( version => {
            modelRun = cloudClient.createParameterVariation(version);
            modelRun.setInput( "Adoption Fraction", 0.02 );
            modelRun.setRangeInput( "Contact Rate", 20, 180, 20 );
            return cloudClient.run( modelRun );
        })
        .then( outputs => {
            //find and print some particular output and the corresp input
            let ap = outputs.find( output => output.name === "AdoptionPercent" ).value;
            document.getElementById( "text-output" ).innerText = "AdoptionPercent = " + ap ;
            console.log( "AdoptionPercent = " + ap );
        })
        .catch( error => alert( "Unable to run parameter variation. Error: " + error ) );
}

function runThreeParallelSimulations() {
    let crValues = [ 20, 50, 100 ]; //three values for Contact Rate parameter

    cloudClient.getModelByName( "Bass Diffusion Demo" )
        .then( model => cloudClient.getLatestModelVersion(model) )
        .then( version => {
            let tasks = []; //this will be array of Promises
            //launch 3 runs in parallel
            for( cr of crValues ) {
                modelRun = cloudClient.createSimulation( version );
                modelRun.setInput( "Contact Rate", cr );
                tasks.push( cloudClient.run( modelRun ) ); //add run Promise to the array
            }
            return Promise.all( tasks ); //this waits for ALL promises to complete
        })
        .then( outputsArray => { //we now have array of three Output objects (order is kept)
            let text = "";
            for( let i = 0; i < crValues.length; i++ ) {
                //find and print some particular output and the corresp input
                let ap = outputsArray[i].find( output => output.name === "AdoptionPercent" ).value;
                text += "Contact Rate = " + crValues[i] + " --> " + "Adoption Percent = " + ap + "\n";
            }
            document.getElementById( "text-output" ).innerText = text;
            console.log( text );
        })
        .catch( error => alert( "Unable to run three parallel simulations. Error: " + error ) );

}