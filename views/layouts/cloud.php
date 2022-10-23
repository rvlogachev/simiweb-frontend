<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;

AppAsset::register($this);
\app\assets\CloudAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-full bg-gray-200">
<head>
    <base href="<?= Url::base(true) ?>">
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title><?= Html::encode($this->title) ?></title>
    <link rel="shortcut icon" href="assets/inertia/img/favicon.ico">
    <link rel="mask-icon" href="assets/inertia/img/safari-pinned-tab.svg" color="#0089c5">
    <link rel="manifest" href="assets/inertia/img/site.webmanifest">
    <link rel="stylesheet" href="assets/inertia/font-awesome/css/font-awesome.min.css">
<!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">-->
    <?php $this->head() ?>
    <script type="text/javascript">
        // NOTE: We use these hard-coded ziggy routes for the moment.
        // The idea is to replace this with a similar Yii 2 solution.
        var Ziggy = {
            namedRoutes: {
                "login": {"uri": "login", "methods": ["GET", "HEAD"], "domain": null},
                "login.attempt": {"uri": "login", "methods": ["POST"], "domain": null},
                "logout": {"uri": "logout", "methods": ["POST"], "domain": null},
                "dashboard": {"uri": "\/", "methods": ["GET", "HEAD"], "domain": null},
                "start": {"uri": "site\/start", "methods": ["GET", "HEAD"], "domain": null},

                "all_spr": {"uri": "all-spr\/index", "methods": ["GET", "HEAD"], "domain": null},
                "all_spr.create": {"uri": "all-spr\/create", "methods": ["GET", "HEAD"], "domain": null},
                "all_spr.filecreate": {"uri": "all-spr\/create\/{filecode}", "methods": ["GET", "HEAD"], "domain": null},

                "all_spr.store": {"uri": "all-spr", "methods": ["POST"], "domain": null},

                "all_spr.guide": {"uri": "all-spr\/guide", "methods": ["POST"], "domain": null},

                "ba": {"uri": "settings\/ba", "methods": ["GET", "HEAD"], "domain": null},
                "settings.manual": {"uri": "settings\/manual", "methods": ["GET", "HEAD"], "domain": null},
                "settings.listevent": {"uri": "settings\/listevent", "methods": ["GET", "HEAD"], "domain": null},
                "settings.investevent": {"uri": "settings\/investevent", "methods": ["GET", "HEAD"], "domain": null},

                "experiment": {"uri": "experiment", "methods": ["GET", "HEAD"], "domain": null},
                "experiment.create": {"uri": "experiment\/create", "methods": ["GET", "HEAD"], "domain": null},
                "experiment.store": {"uri": "experiment", "methods": ["POST"], "domain": null},
                "experiment.edit": {"uri": "experiment\/{id}\/edit", "methods": ["GET", "HEAD"], "domain": null},
                "experiment.update": {"uri": "experiment\/{id}", "methods": ["PUT"], "domain": null},
                "experiment.destroy": {"uri": "experiment\/{id}", "methods": ["DELETE"], "domain": null},
                "experiment.restore": {"uri": "experiment\/{id}\/restore", "methods": ["PUT"], "domain": null},

                //Рёбра
                "edges": {"uri": "edges\/{file}", "methods": ["GET", "HEAD"], "domain": null},

                "edges.create": {"uri": "edges\/create", "methods": ["GET", "HEAD"], "domain": null},
                "edges.store": {"uri": "edges", "methods": ["POST"], "domain": null},
                "edges.edit": {"uri": "edges\/{edge}\/edit", "methods": ["GET", "HEAD"], "domain": null},
                "edges.update": {"uri": "edges\/{edge}", "methods": ["PUT"], "domain": null},
                "edges.destroy": {"uri": "edges\/{edge}", "methods": ["DELETE"], "domain": null},
                "edges.restore": {"uri": "edges\/{edge}\/restore", "methods": ["PUT"], "domain": null},


                //Рёбра

                "visualisation": {"uri": "visualisation", "methods": ["GET", "HEAD"], "domain": null},
                "visualisation.graph": {"uri": "visualisation\/{id}", "methods": ["GET", "HEAD"], "domain": null},
                "scenarios": {"uri": "scenarios", "methods": ["GET", "HEAD"], "domain": null},
                "scenarios.create": {"uri": "scenarios\/create", "methods": ["GET", "HEAD"], "domain": null},
                "scenarios.store": {"uri": "scenarios", "methods": ["POST"], "domain": null},
                "scenarios.edit": {"uri": "scenarios\/{id}\/edit", "methods": ["GET", "HEAD"], "domain": null},
                "scenarios.update": {"uri": "scenarios\/{id}", "methods": ["PUT"], "domain": null},
                "scenarios.destroy": {"uri": "scenarios\/{id}", "methods": ["DELETE"], "domain": null},
                "scenarios.restore": {"uri": "scenarios\/{id}\/restore", "methods": ["PUT"], "domain": null},





                "graph": {"uri": "graph", "methods": ["GET", "HEAD"], "domain": null},
                "graph.create": {"uri": "graph\/create", "methods": ["GET", "HEAD"], "domain": null},
                "graph.store": {"uri": "graph", "methods": ["POST"], "domain": null},
                "graph.edit": {"uri": "graph\/{id}\/edit", "methods": ["GET", "HEAD"], "domain": null},
                "graph.update": {"uri": "graph\/{id}", "methods": ["PUT"], "domain": null},
                "graph.destroy": {"uri": "graph\/{id}", "methods": ["DELETE"], "domain": null},
                "graph.restore": {"uri": "graph\/{id}\/restore", "methods": ["PUT"], "domain": null},

                "plan": {"uri": "plan", "methods": ["GET", "HEAD"], "domain": null},
                "plan.create": {"uri": "plan\/create", "methods": ["GET", "HEAD"], "domain": null},
                "plan.store": {"uri": "plan", "methods": ["POST"], "domain": null},
                "plan.edit": {"uri": "plan\/{id}\/edit", "methods": ["GET", "HEAD"], "domain": null},
                "plan.update": {"uri": "plan\/{id}", "methods": ["PUT"], "domain": null},
                "plan.destroy": {"uri": "plan\/{id}", "methods": ["DELETE"], "domain": null},
                "plan.restore": {"uri": "plan\/{id}\/restore", "methods": ["PUT"], "domain": null},

                "macroeconomics": {"uri": "macroeconomics", "methods": ["GET", "HEAD"], "domain": null},
                "macroeconomics.create": {"uri": "macroeconomics\/create", "methods": ["GET", "HEAD"], "domain": null},
                "macroeconomics.store": {"uri": "macroeconomics", "methods": ["POST"], "domain": null},
                "macroeconomics.edit": {"uri": "macroeconomics\/{id}\/edit", "methods": ["GET", "HEAD"], "domain": null},
                "macroeconomics.update": {"uri": "macroeconomics\/{id}", "methods": ["PUT"], "domain": null},
                "macroeconomics.destroy": {"uri": "macroeconomics\/{id}", "methods": ["DELETE"], "domain": null},
                "macroeconomics.restore": {"uri": "macroeconomics\/{id}\/restore", "methods": ["PUT"], "domain": null},

                "cost": {"uri": "cost", "methods": ["GET", "HEAD"], "domain": null},
                "cost.create": {"uri": "cost\/create", "methods": ["GET", "HEAD"], "domain": null},
                "cost.store": {"uri": "cost", "methods": ["POST"], "domain": null},
                "cost.edit": {"uri": "cost\/{id}\/edit", "methods": ["GET", "HEAD"], "domain": null},
                "cost.update": {"uri": "cost\/{id}", "methods": ["PUT"], "domain": null},
                "cost.destroy": {"uri": "cost\/{id}", "methods": ["DELETE"], "domain": null},
                "cost.restore": {"uri": "cost\/{id}\/restore", "methods": ["PUT"], "domain": null},



                "invest-event": {"uri": "invest-event", "methods": ["GET", "HEAD"], "domain": null},
                "invest-event.create": {"uri": "invest-event\/create", "methods": ["GET", "HEAD"], "domain": null},
                "invest-event.store": {"uri": "invest-event", "methods": ["POST"], "domain": null},
                "invest-event.edit": {"uri": "invest-event\/{id}\/edit", "methods": ["GET", "HEAD"], "domain": null},
                "invest-event.update": {"uri": "invest-event\/{id}", "methods": ["PUT"], "domain": null},
                "invest-event.destroy": {"uri": "invest-event\/{id}", "methods": ["DELETE"], "domain": null},
                "invest-event.restore": {"uri": "invest-event\/{id}\/restore", "methods": ["PUT"], "domain": null},


                "operational-event": {"uri": "operational-event", "methods": ["GET", "HEAD"], "domain": null},
                "operational-event.create": {"uri": "operational-event\/create", "methods": ["GET", "HEAD"], "domain": null},
                "operational-event.store": {"uri": "operational-event", "methods": ["POST"], "domain": null},
                "operational-event.edit": {"uri": "operational-event\/{id}\/edit", "methods": ["GET", "HEAD"], "domain": null},
                "operational-event.update": {"uri": "operational-event\/{id}", "methods": ["PUT"], "domain": null},
                "operational-event.destroy": {"uri": "operational-event\/{id}", "methods": ["DELETE"], "domain": null},
                "operational-event.restore": {"uri": "operational-event\/{id}\/restore", "methods": ["PUT"], "domain": null},

                "tpr": {"uri": "tpr", "methods": ["GET", "HEAD"], "domain": null},
                "tpr.create": {"uri": "tpr\/create", "methods": ["GET", "HEAD"], "domain": null},
                "tpr.store": {"uri": "tpr", "methods": ["POST"], "domain": null},
                "tpr.edit": {"uri": "tpr\/{id}\/edit", "methods": ["GET", "HEAD"], "domain": null},
                "tpr.update": {"uri": "tpr\/{id}", "methods": ["PUT"], "domain": null},
                "tpr.destroy": {"uri": "tpr\/{id}", "methods": ["DELETE"], "domain": null},
                "tpr.restore": {"uri": "tpr\/{id}\/restore", "methods": ["PUT"], "domain": null},

                "failure-schedule": {"uri": "failure-schedule", "methods": ["GET", "HEAD"], "domain": null},
                "failure-schedule.create": {"uri": "failure-schedule\/create", "methods": ["GET", "HEAD"], "domain": null},
                "failure-schedule.store": {"uri": "failure-schedule", "methods": ["POST"], "domain": null},
                "failure-schedule.edit": {"uri": "failure-schedule\/{id}\/edit", "methods": ["GET", "HEAD"], "domain": null},
                "failure-schedule.update": {"uri": "failure-schedule\/{id}", "methods": ["PUT"], "domain": null},
                "failure-schedule.destroy": {"uri": "failure-schedule\/{id}", "methods": ["DELETE"], "domain": null},
                "failure-schedule.restore": {"uri": "failure-schedule\/{id}\/restore", "methods": ["PUT"], "domain": null},

                "pnd": {"uri": "pnd", "methods": ["GET", "HEAD"], "domain": null},
                "pnd.create": {"uri": "pnd\/create", "methods": ["GET", "HEAD"], "domain": null},
                "pnd.store": {"uri": "pnd", "methods": ["POST"], "domain": null},
                "pnd.edit": {"uri": "pnd\/{id}\/edit", "methods": ["GET", "HEAD"], "domain": null},
                "pnd.update": {"uri": "pnd\/{id}", "methods": ["PUT"], "domain": null},
                "pnd.destroy": {"uri": "pnd\/{id}", "methods": ["DELETE"], "domain": null},
                "pnd.restore": {"uri": "pnd\/{id}\/restore", "methods": ["PUT"], "domain": null},
                //UploadFiles
                "uploads": {"uri": "uploads\/index", "methods": ["GET", "HEAD"], "domain": null},
                "uploads.maindata": {"uri": "uploads\/maindata", "methods": ["GET", "HEAD"], "domain": null},
                "uploads.businessalgorythms": {"uri": "uploads\/businessalgorythms", "methods": ["GET", "HEAD"], "domain": null},


                "uploads.graph": {"uri": "uploads\/graph", "methods": ["POST"], "domain": null},
                "uploads.ugraph": {"uri": "uploads\/ugraph", "methods": ["GET", "HEAD"], "domain": null},
                "uploads.plan": {"uri": "uploads\/plan", "methods": ["POST"], "domain": null},
                "uploads.uplan": {"uri": "uploads\/uplan", "methods": ["GET", "HEAD"], "domain": null},
                "uploads.cost": {"uri": "uploads\/cost", "methods": ["POST"], "domain": null},
                "uploads.ucost": {"uri": "uploads\/ucost", "methods": ["GET", "HEAD"], "domain": null},
                "uploads.ucoststaging": {"uri": "uploads\/ucoststaging", "methods": ["GET", "HEAD"], "domain": null},

                "uploads.macroeconomics": {"uri": "uploads\/macroeconomics", "methods": ["POST"], "domain": null},
                "uploads.umacroeconomics": {"uri": "uploads\/umacroeconomics", "methods": ["GET", "HEAD"], "domain": null},
                "uploads.investevent": {"uri": "uploads\/investevent", "methods": ["GET", "HEAD"], "domain": null},
                "uploads.uinvestevent": {"uri": "uploads\/uinvestevent", "methods": ["GET", "HEAD"], "domain": null},
                "uploads.uinvesteventstaging": {"uri": "uploads\/uinvesteventstaging", "methods": ["GET", "HEAD"], "domain": null},
                "uploads.uoperationalevent": {"uri": "uploads\/uoperationalevent", "methods": ["GET", "HEAD"], "domain": null},
                "uploads.uoperationaleventstaging": {"uri": "uploads\/uoperationaleventstaging", "methods": ["GET", "HEAD"], "domain": null},
                "uploads.choice": {"uri": "uploads\/choice", "methods": ["POST"], "domain": null},




                "uploads.store": {"uri": "uploads", "methods": ["POST"], "domain": null},
                "uploads.edit": {"uri": "uploads\/{id}\/edit", "methods": ["GET", "HEAD"], "domain": null},


                "report": {"uri": "site\/report", "methods": ["GET", "HEAD"], "domain": null},
                "test": {"uri": "site\/test", "methods": ["GET", "HEAD"], "domain": null},
                "test2": {"uri": "site\/test2", "methods": ["GET", "HEAD"], "domain": null},
                "users": {"uri": "users", "methods": ["GET", "HEAD"], "domain": null},
                "users.create": {"uri": "users\/create", "methods": ["GET", "HEAD"], "domain": null},
                "users.store": {"uri": "users", "methods": ["POST"], "domain": null},
                "users.edit": {"uri": "users\/{user}\/edit", "methods": ["GET", "HEAD"], "domain": null},
                "users.update": {"uri": "users\/{user}", "methods": ["PUT"], "domain": null},
                "users.destroy": {"uri": "users\/{user}", "methods": ["DELETE"], "domain": null},
                "users.restore": {"uri": "users\/{user}\/restore", "methods": ["PUT"], "domain": null},
                "organizations": {"uri": "organizations", "methods": ["GET", "HEAD"], "domain": null},
                "organizations.create": {"uri": "organizations\/create", "methods": ["GET", "HEAD"], "domain": null},
                "organizations.store": {"uri": "organizations", "methods": ["POST"], "domain": null},
                "organizations.edit": {
                    "uri": "organizations\/{organization}\/edit",
                    "methods": ["GET", "HEAD"],
                    "domain": null
                },
                "organizations.update": {"uri": "organizations\/{organization}", "methods": ["PUT"], "domain": null},
                "organizations.destroy": {
                    "uri": "organizations\/{organization}",
                    "methods": ["DELETE"],
                    "domain": null
                },
                "organizations.restore": {
                    "uri": "organizations\/{organization}\/restore",
                    "methods": ["PUT"],
                    "domain": null
                },
                "contacts": {"uri": "contacts", "methods": ["GET", "HEAD"], "domain": null},
                "contacts.create": {"uri": "contacts\/create", "methods": ["GET", "HEAD"], "domain": null},
                "contacts.store": {"uri": "contacts", "methods": ["POST"], "domain": null},
                "contacts.edit": {"uri": "contacts\/{id}\/edit", "methods": ["GET", "HEAD"], "domain": null},
                "contacts.update": {"uri": "contacts\/{id}", "methods": ["PUT"], "domain": null},
                "contacts.destroy": {"uri": "contacts\/{id}", "methods": ["DELETE"], "domain": null},
                "contacts.restore": {"uri": "contacts\/{id}\/restore", "methods": ["PUT"], "domain": null},

                "production_unit_spr": {"uri": "production-unit-spr", "methods": ["GET", "HEAD"], "domain": null},
                "production_unit_spr.create": {"uri": "production-unit-spr\/create", "methods": ["GET", "HEAD"], "domain": null},
                "production_unit_spr.store": {"uri": "production-unit-spr\/insert", "methods": ["POST"], "domain": null},
                "production_unit_spr.edit": {"uri": "production-unit-spr\/{id}\/edit", "methods": ["GET", "HEAD"], "domain": null},
                "production_unit_spr.view": {"uri": "production-unit-spr\/{id}\/view", "methods": ["GET", "HEAD"], "domain": null},
                "production_unit_spr.update": {"uri": "production-unit-spr\/{id}", "methods": ["PUT"], "domain": null},
                "production_unit_spr.destroy": {"uri": "production-unit-spr\/{id}", "methods": ["DELETE"], "domain": null},
                "production_unit_spr.restore": {"uri": "production-unit-spr\/{id}\/restore", "methods": ["PUT"], "domain": null},

                "redevs_spr": {"uri": "redevs-spr", "methods": ["GET", "HEAD"], "domain": null},
                "redevs_spr.create": {"uri": "redevs-spr\/create", "methods": ["GET", "HEAD"], "domain": null},
                "redevs_spr.store": {"uri": "redevs-spr\/insert", "methods": ["POST"], "domain": null},
                "redevs_spr.edit": {"uri": "redevs-spr\/{id}\/edit", "methods": ["GET", "HEAD"], "domain": null},
                "redevs_spr.view": {"uri": "redevs-spr\/{id}\/view", "methods": ["GET", "HEAD"], "domain": null},
                "redevs_spr.update": {"uri": "redevs-spr\/{id}", "methods": ["PUT"], "domain": null},
                "redevs_spr.destroy": {"uri": "redevs-spr\/{id}", "methods": ["DELETE"], "domain": null},
                "redevs_spr.restore": {"uri": "redevs-spr\/{id}\/restore", "methods": ["PUT"], "domain": null},

                "transfer_base_spr": {"uri": "transfer-base-spr", "methods": ["GET", "HEAD"], "domain": null},
                "transfer_base_spr.create": {"uri": "transfer-base-spr\/create", "methods": ["GET", "HEAD"], "domain": null},
                "transfer_base_spr.store": {"uri": "transfer-base-spr\/insert", "methods": ["POST"], "domain": null},
                "transfer_base_spr.edit": {"uri": "transfer-base-spr\/{id}\/edit", "methods": ["GET", "HEAD"], "domain": null},
                "transfer_base_spr.view": {"uri": "transfer-base-spr\/{id}\/view", "methods": ["GET", "HEAD"], "domain": null},
                "transfer_base_spr.update": {"uri": "transfer-base-spr\/{id}", "methods": ["PUT"], "domain": null},
                "transfer_base_spr.destroy": {"uri": "transfer-base-spr\/{id}", "methods": ["DELETE"], "domain": null},
                "transfer_base_spr.restore": {"uri": "transfer-base-spr\/{id}\/restore", "methods": ["PUT"], "domain": null},

                "invest_types_spr": {"uri": "invest-types-spr", "methods": ["GET", "HEAD"], "domain": null},
                "invest_types_spr.create": {"uri": "invest-types-spr\/create", "methods": ["GET", "HEAD"], "domain": null},
                "invest_types_spr.store": {"uri": "invest-types-spr\/insert", "methods": ["POST"], "domain": null},
                "invest_types_spr.edit": {"uri": "invest-types-spr\/{id}\/edit", "methods": ["GET", "HEAD"], "domain": null},
                "invest_types_spr.view": {"uri": "invest-types-spr\/{id}\/view", "methods": ["GET", "HEAD"], "domain": null},
                "invest_types_spr.update": {"uri": "invest-types-spr\/{id}", "methods": ["PUT"], "domain": null},
                "invest_types_spr.destroy": {"uri": "invest-types-spr\/{id}", "methods": ["DELETE"], "domain": null},
                "invest_types_spr.restore": {"uri": "invest-types-spr\/{id}\/restore", "methods": ["PUT"], "domain": null},


                "corner_end_spr": {"uri": "corner-end-spr", "methods": ["GET", "HEAD"], "domain": null},
                "corner_end_spr.create": {"uri": "corner-end-spr\/create", "methods": ["GET", "HEAD"], "domain": null},
                "corner_end_spr.store": {"uri": "corner-end-spr\/insert", "methods": ["POST"], "domain": null},
                "corner_end_spr.edit": {"uri": "corner-end-spr\/{id}\/edit", "methods": ["GET", "HEAD"], "domain": null},
                "corner_end_spr.view": {"uri": "corner-end-spr\/{id}\/view", "methods": ["GET", "HEAD"], "domain": null},
                "corner_end_spr.update": {"uri": "corner-end-spr\/{id}", "methods": ["PUT"], "domain": null},
                "corner_end_spr.destroy": {"uri": "corner-end-spr\/{id}", "methods": ["DELETE"], "domain": null},
                "corner_end_spr.restore": {"uri": "corner-end-spr\/{id}\/restore", "methods": ["PUT"], "domain": null},



                "outer_source_spr": {"uri": "outer-source-spr", "methods": ["GET", "HEAD"], "domain": null},
                "outer_source_spr.create": {"uri": "outer-source-spr\/create", "methods": ["GET", "HEAD"], "domain": null},
                "outer_source_spr.store": {"uri": "outer-source-spr\/insert", "methods": ["POST"], "domain": null},
                "outer_source_spr.edit": {"uri": "outer-source-spr\/{id}\/edit", "methods": ["GET", "HEAD"], "domain": null},
                "outer_source_spr.view": {"uri": "outer-source-spr\/{id}\/view", "methods": ["GET", "HEAD"], "domain": null},
                "outer_source_spr.update": {"uri": "outer-source-spr\/{id}", "methods": ["PUT"], "domain": null},
                "outer_source_spr.destroy": {"uri": "outer-source-spr\/{id}", "methods": ["DELETE"], "domain": null},
                "outer_source_spr.restore": {"uri": "outer-source-spr\/{id}\/restore", "methods": ["PUT"], "domain": null},

                "logical_nodes_spr": {"uri": "logical-nodes-spr", "methods": ["GET", "HEAD"], "domain": null},
                "logical_nodes_spr.create": {"uri": "logical-nodes-spr\/create", "methods": ["GET", "HEAD"], "domain": null},
                "logical_nodes_spr.store": {"uri": "logical-nodes-spr\/insert", "methods": ["POST"], "domain": null},
                "logical_nodes_spr.edit": {"uri": "logical-nodes-spr\/{id}\/edit", "methods": ["GET", "HEAD"], "domain": null},
                "logical_nodes_spr.view": {"uri": "logical-nodes-spr\/{id}\/view", "methods": ["GET", "HEAD"], "domain": null},
                "logical_nodes_spr.update": {"uri": "logical-nodes-spr\/{id}", "methods": ["PUT"], "domain": null},
                "logical_nodes_spr.destroy": {"uri": "logical-nodes-spr\/{id}", "methods": ["DELETE"], "domain": null},
                "logical_nodes_spr.restore": {"uri": "logical-nodes-spr\/{id}\/restore", "methods": ["PUT"], "domain": null},


                "products_spr": {"uri": "products-spr", "methods": ["GET", "HEAD"], "domain": null},
                "products_spr.create": {"uri": "products-spr\/create", "methods": ["GET", "HEAD"], "domain": null},
                "products_spr.store": {"uri": "products-spr\/insert", "methods": ["POST"], "domain": null},
                "products_spr.edit": {"uri": "products-spr\/{id}\/edit", "methods": ["GET", "HEAD"], "domain": null},
                "products_spr.view": {"uri": "products-spr\/{id}\/view", "methods": ["GET", "HEAD"], "domain": null},
                "products_spr.update": {"uri": "products-spr\/{id}", "methods": ["PUT"], "domain": null},
                "products_spr.destroy": {"uri": "products-spr\/{id}", "methods": ["DELETE"], "domain": null},
                "products_spr.restore": {"uri": "products-spr\/{id}\/restore", "methods": ["PUT"], "domain": null},

                "transport_spr": {"uri": "transport-spr", "methods": ["GET", "HEAD"], "domain": null},
                "transport_spr.create": {"uri": "transport-spr\/create", "methods": ["GET", "HEAD"], "domain": null},
                "transport_spr.store": {"uri": "transport-spr\/insert", "methods": ["POST"], "domain": null},
                "transport_spr.edit": {"uri": "transport-spr\/{id}\/edit", "methods": ["GET", "HEAD"], "domain": null},
                "transport_spr.view": {"uri": "transport-spr\/{id}\/view", "methods": ["GET", "HEAD"], "domain": null},
                "transport_spr.update": {"uri": "transport-spr\/{id}", "methods": ["PUT"], "domain": null},
                "transport_spr.destroy": {"uri": "transport-spr\/{id}", "methods": ["DELETE"], "domain": null},
                "transport_spr.restore": {"uri": "transport-spr\/{id}\/restore", "methods": ["PUT"], "domain": null},

                "tasker": {"uri": "task", "methods": ["GET", "HEAD"], "domain": null},
                "tasker.create": {"uri": "task\/create", "methods": ["GET", "HEAD"], "domain": null},
                "tasker.store": {"uri": "task\/insert", "methods": ["POST"], "domain": null},
                "tasker.edit": {"uri": "task\/{task_id}\/edit", "methods": ["GET", "HEAD"], "domain": null},
                "tasker.view": {"uri": "task\/{task_id}\/view", "methods": ["GET", "HEAD"], "domain": null},
                "tasker.update": {"uri": "task\/{task_id}", "methods": ["PUT"], "domain": null},
                "tasker.destroy": {"uri": "task\/{task_id}", "methods": ["DELETE"], "domain": null},
                "tasker.restore": {"uri": "task\/{task_id}\/restore", "methods": ["PUT"], "domain": null},

                "rudnik_spr": {"uri": "rudnik-spr", "methods": ["GET", "HEAD"], "domain": null},
                "rudnik_spr.create": {"uri": "rudnik-spr\/create", "methods": ["GET", "HEAD"], "domain": null},
                "rudnik_spr.store": {"uri": "rudnik-spr\/insert", "methods": ["POST"], "domain": null},
                "rudnik_spr.edit": {"uri": "rudnik-spr\/{id}\/edit", "methods": ["GET", "HEAD"], "domain": null},
                "rudnik_spr.view": {"uri": "rudnik-spr\/{id}\/view", "methods": ["GET", "HEAD"], "domain": null},
                "rudnik_spr.update": {"uri": "rudnik-spr\/{id}", "methods": ["PUT"], "domain": null},
                "rudnik_spr.destroy": {"uri": "rudnik-spr\/{id}", "methods": ["DELETE"], "domain": null},
                "rudnik_spr.restore": {"uri": "rudnik-spr\/{id}\/restore", "methods": ["PUT"], "domain": null},

                "redevs_auxiliary_spr": {"uri": "redevs-auxiliary-spr", "methods": ["GET", "HEAD"], "domain": null},
                "redevs_auxiliary_spr.create": {"uri": "redevs-auxiliary-spr\/create", "methods": ["GET", "HEAD"], "domain": null},
                "redevs_auxiliary_spr.store": {"uri": "redevs-auxiliary-spr\/insert", "methods": ["POST"], "domain": null},
                "redevs_auxiliary_spr.edit": {"uri": "redevs-auxiliary-spr\/{id}\/edit", "methods": ["GET", "HEAD"], "domain": null},
                "redevs_auxiliary_spr.view": {"uri": "redevs-auxiliary-spr\/{id}\/view", "methods": ["GET", "HEAD"], "domain": null},
                "redevs_auxiliary_spr.update": {"uri": "redevs-auxiliary-spr\/{id}", "methods": ["PUT"], "domain": null},
                "redevs_auxiliary_spr.destroy": {"uri": "redevs-auxiliary-spr\/{id}", "methods": ["DELETE"], "domain": null},
                "redevs_auxiliary_spr.restore": {"uri": "redevs-auxiliary-spr\/{id}\/restore", "methods": ["PUT"], "domain": null},


                "redevs_affects_spr": {"uri": "redevs-affects-spr", "methods": ["GET", "HEAD"], "domain": null},
                "redevs_affects_spr.create": {"uri": "redevs-affects-spr\/create", "methods": ["GET", "HEAD"], "domain": null},
                "redevs_affects_spr.store": {"uri": "redevs-affects-spr\/insert", "methods": ["POST"], "domain": null},
                "redevs_affects_spr.edit": {"uri": "redevs-affects-spr\/{id}\/edit", "methods": ["GET", "HEAD"], "domain": null},
                "redevs_affects_spr.view": {"uri": "redevs-affects-spr\/{id}\/view", "methods": ["GET", "HEAD"], "domain": null},
                "redevs_affects_spr.update": {"uri": "redevs-affects-spr\/{id}", "methods": ["PUT"], "domain": null},
                "redevs_affects_spr.destroy": {"uri": "redevs-affects-spr\/{id}", "methods": ["DELETE"], "domain": null},
                "redevs_affects_spr.restore": {"uri": "redevs-affects-spr\/{id}\/restore", "methods": ["PUT"], "domain": null},

                "business_orgs_spr": {"uri": "business-orgs-spr", "methods": ["GET", "HEAD"], "domain": null},
                "business_orgs_spr.create": {"uri": "business-orgs-spr\/create", "methods": ["GET", "HEAD"], "domain": null},
                "business_orgs_spr.store": {"uri": "business-orgs-spr\/insert", "methods": ["POST"], "domain": null},
                "business_orgs_spr.edit": {"uri": "business-orgs-spr\/{id}\/edit", "methods": ["GET", "HEAD"], "domain": null},
                "business_orgs_spr.view": {"uri": "business-orgs-spr\/{id}\/view", "methods": ["GET", "HEAD"], "domain": null},
                "business_orgs_spr.update": {"uri": "business-orgs-spr\/{id}", "methods": ["PUT"], "domain": null},
                "business_orgs_spr.destroy": {"uri": "business-orgs-spr\/{id}", "methods": ["DELETE"], "domain": null},
                "business_orgs_spr.restore": {"uri": "business-orgs-spr\/{id}\/restore", "methods": ["PUT"], "domain": null},

                "warehouse_spr": {"uri": "warehouse-spr", "methods": ["GET", "HEAD"], "domain": null},
                "warehouse_spr.create": {"uri": "warehouse-spr\/create", "methods": ["GET", "HEAD"], "domain": null},
                "warehouse_spr.store": {"uri": "warehouse-spr\/insert", "methods": ["POST"], "domain": null},
                "warehouse_spr.edit": {"uri": "warehouse-spr\/{id}\/edit", "methods": ["GET", "HEAD"], "domain": null},
                "warehouse_spr.view": {"uri": "warehouse-spr\/{id}\/view", "methods": ["GET", "HEAD"], "domain": null},
                "warehouse_spr.update": {"uri": "warehouse-spr\/{id}", "methods": ["PUT"], "domain": null},
                "warehouse_spr.destroy": {"uri": "warehouse-spr\/{id}", "methods": ["DELETE"], "domain": null},
                "warehouse_spr.restore": {"uri": "warehouse-spr\/{id}\/restore", "methods": ["PUT"], "domain": null},

                "transport_type_spr": {"uri": "transport-type-spr", "methods": ["GET", "HEAD"], "domain": null},
                "transport_type_spr.create": {"uri": "transport-type-spr\/create", "methods": ["GET", "HEAD"], "domain": null},
                "transport_type_spr.store": {"uri": "transport-type-spr\/insert", "methods": ["POST"], "domain": null},
                "transport_type_spr.edit": {"uri": "transport-type-spr\/{id}\/edit", "methods": ["GET", "HEAD"], "domain": null},
                "transport_type_spr.view": {"uri": "transport-type-spr\/{id}\/view", "methods": ["GET", "HEAD"], "domain": null},
                "transport_type_spr.update": {"uri": "transport-type-spr\/{id}", "methods": ["PUT"], "domain": null},
                "transport_type_spr.destroy": {"uri": "transport-type-spr\/{id}", "methods": ["DELETE"], "domain": null},
                "transport_type_spr.restore": {"uri": "transport-type-spr\/{id}\/restore", "methods": ["PUT"], "domain": null},

                "reports_spr": {"uri": "reports-spr", "methods": ["GET", "HEAD"], "domain": null},
                "reports_spr.create": {"uri": "reports-spr\/create", "methods": ["GET", "HEAD"], "domain": null},
                "reports_spr.store": {"uri": "reports-spr\/insert", "methods": ["POST"], "domain": null},
                "reports_spr.edit": {"uri": "reports-spr\/{id}\/edit", "methods": ["GET", "HEAD"], "domain": null},
                "reports_spr.view": {"uri": "reports-spr\/{id}\/view", "methods": ["GET", "HEAD"], "domain": null},
                "reports_spr.update": {"uri": "reports-spr\/{id}", "methods": ["PUT"], "domain": null},
                "reports_spr.destroy": {"uri": "reports-spr\/{id}", "methods": ["DELETE"], "domain": null},
                "reports_spr.restore": {"uri": "reports-spr\/{id}\/restore", "methods": ["PUT"], "domain": null},

                "files_spr": {"uri": "files-spr", "methods": ["GET", "HEAD"], "domain": null},
                "files_spr.create": {"uri": "files-spr\/create", "methods": ["GET", "HEAD"], "domain": null},
                "files_spr.store": {"uri": "files-spr\/insert", "methods": ["POST"], "domain": null},
                "files_spr.edit": {"uri": "files-spr\/{id}\/edit", "methods": ["GET", "HEAD"], "domain": null},
                "files_spr.view": {"uri": "files-spr\/{id}\/view", "methods": ["GET", "HEAD"], "domain": null},
                "files_spr.update": {"uri": "files-spr\/{id}", "methods": ["PUT"], "domain": null},
                "files_spr.destroy": {"uri": "files-spr\/{id}", "methods": ["DELETE"], "domain": null},
                "files_spr.restore": {"uri": "files-spr\/{id}\/restore", "methods": ["PUT"], "domain": null},

                "units_spr": {"uri": "units-spr", "methods": ["GET", "HEAD"], "domain": null},
                "units_spr.create": {"uri": "units-spr\/create", "methods": ["GET", "HEAD"], "domain": null},
                "units_spr.store": {"uri": "units-spr\/insert", "methods": ["POST"], "domain": null},
                "units_spr.edit": {"uri": "units-spr\/{id}\/edit", "methods": ["GET", "HEAD"], "domain": null},
                "units_spr.view": {"uri": "units-spr\/{id}\/view", "methods": ["GET", "HEAD"], "domain": null},
                "units_spr.update": {"uri": "units-spr\/{id}", "methods": ["PUT"], "domain": null},
                "units_spr.destroy": {"uri": "units-spr\/{id}", "methods": ["DELETE"], "domain": null},
                "units_spr.restore": {"uri": "units-spr\/{id}\/restore", "methods": ["PUT"], "domain": null},

                "currencies_spr": {"uri": "currencies-spr", "methods": ["GET", "HEAD"], "domain": null},
                "currencies_spr.create": {"uri": "currencies-spr\/create", "methods": ["GET", "HEAD"], "domain": null},
                "currencies_spr.store": {"uri": "currencies-spr\/insert", "methods": ["POST"], "domain": null},
                "currencies_spr.edit": {"uri": "currencies-spr\/{id}\/edit", "methods": ["GET", "HEAD"], "domain": null},
                "currencies_spr.view": {"uri": "currencies-spr\/{id}\/view", "methods": ["GET", "HEAD"], "domain": null},
                "currencies_spr.update": {"uri": "currencies-spr\/{id}", "methods": ["PUT"], "domain": null},
                "currencies_spr.destroy": {"uri": "currencies-spr\/{id}", "methods": ["DELETE"], "domain": null},
                "currencies_spr.restore": {"uri": "currencies-spr\/{id}\/restore", "methods": ["PUT"], "domain": null},

                "damage_level_spr": {"uri": "damage-level-spr", "methods": ["GET", "HEAD"], "domain": null},
                "damage_level_spr.create": {"uri": "damage-level-spr\/create", "methods": ["GET", "HEAD"], "domain": null},
                "damage_level_spr.store": {"uri": "damage-level-spr\/insert", "methods": ["POST"], "domain": null},
                "damage_level_spr.edit": {"uri": "damage-level-spr\/{id}\/edit", "methods": ["GET", "HEAD"], "domain": null},
                "damage_level_spr.view": {"uri": "damage-level-spr\/{id}\/view", "methods": ["GET", "HEAD"], "domain": null},
                "damage_level_spr.update": {"uri": "damage-level-spr\/{id}", "methods": ["PUT"], "domain": null},
                "damage_level_spr.destroy": {"uri": "damage-level-spr\/{id}", "methods": ["DELETE"], "domain": null},
                "damage_level_spr.restore": {"uri": "damage-level-spr\/{id}\/restore", "methods": ["PUT"], "domain": null},

                "equipment_types_spr": {"uri": "equipment-types-spr", "methods": ["GET", "HEAD"], "domain": null},
                "equipment_types_spr.create": {"uri": "equipment-types-spr\/create", "methods": ["GET", "HEAD"], "domain": null},
                "equipment_types_spr.store": {"uri": "equipment-types-spr\/insert", "methods": ["POST"], "domain": null},
                "equipment_types_spr.edit": {"uri": "equipment-types-spr\/{id}\/edit", "methods": ["GET", "HEAD"], "domain": null},
                "equipment_types_spr.view": {"uri": "equipment-types-spr\/{id}\/view", "methods": ["GET", "HEAD"], "domain": null},
                "equipment_types_spr.update": {"uri": "equipment-types-spr\/{id}", "methods": ["PUT"], "domain": null},
                "equipment_types_spr.destroy": {"uri": "equipment-types-spr\/{id}", "methods": ["DELETE"], "domain": null},
                "equipment_types_spr.restore": {"uri": "equipment-types-spr\/{id}\/restore", "methods": ["PUT"], "domain": null},

                "event_types_spr": {"uri": "event-types-spr", "methods": ["GET", "HEAD"], "domain": null},
                "event_types_spr.create": {"uri": "event-types-spr\/create", "methods": ["GET", "HEAD"], "domain": null},
                "event_types_spr.store": {"uri": "event-types-spr\/insert", "methods": ["POST"], "domain": null},
                "event_types_spr.edit": {"uri": "event-types-spr\/{id}\/edit", "methods": ["GET", "HEAD"], "domain": null},
                "event_types_spr.view": {"uri": "event-types-spr\/{id}\/view", "methods": ["GET", "HEAD"], "domain": null},
                "event_types_spr.update": {"uri": "event-types-spr\/{id}", "methods": ["PUT"], "domain": null},
                "event_types_spr.destroy": {"uri": "event-types-spr\/{id}", "methods": ["DELETE"], "domain": null},
                "event_types_spr.restore": {"uri": "event-types-spr\/{id}\/restore", "methods": ["PUT"], "domain": null},

                "cost_types_spr": {"uri": "cost-types-spr", "methods": ["GET", "HEAD"], "domain": null},
                "cost_types_spr.create": {"uri": "cost-types-spr\/create", "methods": ["GET", "HEAD"], "domain": null},
                "cost_types_spr.store": {"uri": "cost-types-spr\/insert", "methods": ["POST"], "domain": null},
                "cost_types_spr.edit": {"uri": "cost-types-spr\/{id}\/edit", "methods": ["GET", "HEAD"], "domain": null},
                "cost_types_spr.view": {"uri": "cost-types-spr\/{id}\/view", "methods": ["GET", "HEAD"], "domain": null},
                "cost_types_spr.update": {"uri": "cost-types-spr\/{id}", "methods": ["PUT"], "domain": null},
                "cost_types_spr.destroy": {"uri": "cost-types-spr\/{id}", "methods": ["DELETE"], "domain": null},
                "cost_types_spr.restore": {"uri": "cost-types-spr\/{id}\/restore", "methods": ["PUT"], "domain": null},

                "fcos_spr": {"uri": "fcos-spr", "methods": ["GET", "HEAD"], "domain": null},
                "fcos_spr.create": {"uri": "fcos-spr\/create", "methods": ["GET", "HEAD"], "domain": null},
                "fcos_spr.store": {"uri": "fcos-spr\/insert", "methods": ["POST"], "domain": null},
                "fcos_spr.edit": {"uri": "fcos-spr\/{id}\/edit", "methods": ["GET", "HEAD"], "domain": null},
                "fcos_spr.view": {"uri": "fcos-spr\/{id}\/view", "methods": ["GET", "HEAD"], "domain": null},
                "fcos_spr.update": {"uri": "fcos-spr\/{id}", "methods": ["PUT"], "domain": null},
                "fcos_spr.destroy": {"uri": "fcos-spr\/{id}", "methods": ["DELETE"], "domain": null},
                "fcos_spr.restore": {"uri": "fcos-spr\/{id}\/restore", "methods": ["PUT"], "domain": null},

                "index_score_level_spr": {"uri": "index-score-level-spr", "methods": ["GET", "HEAD"], "domain": null},
                "index_score_level_spr.create": {"uri": "index-score-level-spr\/create", "methods": ["GET", "HEAD"], "domain": null},
                "index_score_level_spr.store": {"uri": "index-score-level-spr\/insert", "methods": ["POST"], "domain": null},
                "index_score_level_spr.edit": {"uri": "index-score-level-spr\/{id}\/edit", "methods": ["GET", "HEAD"], "domain": null},
                "index_score_level_spr.view": {"uri": "index-score-level-spr\/{id}\/view", "methods": ["GET", "HEAD"], "domain": null},
                "index_score_level_spr.update": {"uri": "index-score-level-spr\/{id}", "methods": ["PUT"], "domain": null},
                "index_score_level_spr.destroy": {"uri": "index-score-level-spr\/{id}", "methods": ["DELETE"], "domain": null},
                "index_score_level_spr.restore": {"uri": "index-score-level-spr\/{id}\/restore", "methods": ["PUT"], "domain": null},

                "criticals_spr": {"uri": "criticals-spr", "methods": ["GET", "HEAD"], "domain": null},
                "criticals_spr.create": {"uri": "criticals-spr\/create", "methods": ["GET", "HEAD"], "domain": null},
                "criticals_spr.store": {"uri": "criticals-spr\/insert", "methods": ["POST"], "domain": null},
                "criticals_spr.edit": {"uri": "criticals-spr\/{id}\/edit", "methods": ["GET", "HEAD"], "domain": null},
                "criticals_spr.view": {"uri": "criticals-spr\/{id}\/view", "methods": ["GET", "HEAD"], "domain": null},
                "criticals_spr.update": {"uri": "criticals-spr\/{id}", "methods": ["PUT"], "domain": null},

                "criticals_spr.destroy": {"uri": "criticals-spr\/{id}", "methods": ["DELETE"], "domain": null},
                "criticals_spr.restore": {"uri": "criticals-spr\/{id}\/restore", "methods": ["PUT"], "domain": null},

                "components_spr": {"uri": "components-spr", "methods": ["GET", "HEAD"], "domain": null},
                "components_spr.create": {"uri": "components-spr\/create", "methods": ["GET", "HEAD"], "domain": null},
                "components_spr.store": {"uri": "components-spr\/insert", "methods": ["POST"], "domain": null},
                "components_spr.edit": {"uri": "components-spr\/{id}\/edit", "methods": ["GET", "HEAD"], "domain": null},
                "components_spr.view": {"uri": "components-spr\/{id}\/view", "methods": ["GET", "HEAD"], "domain": null},
                "components_spr.update": {"uri": "components-spr\/{id}", "methods": ["PUT"], "domain": null},
                "components_spr.destroy": {"uri": "components-spr\/{id}", "methods": ["DELETE"], "domain": null},
                "components_spr.restore": {"uri": "components-spr\/{id}\/restore", "methods": ["PUT"], "domain": null},

                "departments_spr": {"uri": "departments-spr", "methods": ["GET", "HEAD"], "domain": null},
                "departments_spr.create": {"uri": "departments-spr\/create", "methods": ["GET", "HEAD"], "domain": null},
                "departments_spr.store": {"uri": "departments-spr\/insert", "methods": ["POST"], "domain": null},
                "departments_spr.edit": {"uri": "departments-spr\/{id}\/edit", "methods": ["GET", "HEAD"], "domain": null},
                "departments_spr.view": {"uri": "departments-spr\/{id}\/view", "methods": ["GET", "HEAD"], "domain": null},
                "departments_spr.update": {"uri": "departments-spr\/{id}", "methods": ["PUT"], "domain": null},
                "departments_spr.destroy": {"uri": "departments-spr\/{id}", "methods": ["DELETE"], "domain": null},
                "departments_spr.restore": {"uri": "departments-spr\/{id}\/restore", "methods": ["PUT"], "domain": null},


                "business_algorythms_spr": {"uri": "business-algorythms-spr", "methods": ["GET", "HEAD"], "domain": null},
                "business_algorythms_spr.create": {"uri": "business-algorythms-spr\/create", "methods": ["GET", "HEAD"], "domain": null},
                "business_algorythms_spr.store": {"uri": "business-algorythms-spr\/insert", "methods": ["POST"], "domain": null},
                "business_algorythms_spr.edit": {"uri": "business-algorythms-spr\/{id}\/edit", "methods": ["GET", "HEAD"], "domain": null},
                "business_algorythms_spr.view": {"uri": "business-algorythms-spr\/{id}\/view", "methods": ["GET", "HEAD"], "domain": null},
                "business_algorythms_spr.update": {"uri": "business-algorythms-spr\/{id}", "methods": ["PUT"], "domain": null},
                "business_algorythms_spr.destroy": {"uri": "business-algorythms-spr\/{id}", "methods": ["DELETE"], "domain": null},
                "business_algorythms_spr.restore": {"uri": "business-algorythms-spr\/{id}\/restore", "methods": ["PUT"], "domain": null},


                "accounts": {"uri": "accounts", "methods": ["GET", "HEAD"], "domain": null},
                "accounts.create": {"uri": "accounts\/create", "methods": ["GET", "HEAD"], "domain": null},
                "accounts.store": {"uri": "accounts", "methods": ["POST"], "domain": null},
                "accounts.edit": {"uri": "accounts\/{id}\/edit", "methods": ["GET", "HEAD"], "domain": null},
                "accounts.view": {"uri": "accounts\/{id}\/view", "methods": ["GET", "HEAD"], "domain": null},
                "accounts.update": {"uri": "accounts\/{id}", "methods": ["PUT"], "domain": null},
                "accounts.destroy": {"uri": "accounts\/{id}", "methods": ["DELETE"], "domain": null},
                "accounts.restore": {"uri": "accounts\/{id}\/restore", "methods": ["PUT"], "domain": null},

                "reports": {"uri": "reports", "methods": ["GET", "HEAD"], "domain": null},
                "api.index": {"uri": "api", "methods": ["GET", "HEAD"], "domain": null}
            },
            baseUrl: '<?= Url::base(true) ?>',
            baseProtocol: 'http',
            baseDomain: '<?= Url::base('') ?>',
            basePort: false,
            defaultParameters: []
        };
        // see https://github.com/tightenco/ziggy/tree/master/dist/js
        !function(e,t){"object"==typeof exports&&"object"==typeof module?module.exports=t():"function"==typeof define&&define.amd?define("route",[],t):"object"==typeof exports?exports.route=t():e.route=t()}(this,function(){return function(e){var t={};function r(n){if(t[n])return t[n].exports;var o=t[n]={i:n,l:!1,exports:{}};return e[n].call(o.exports,o,o.exports,r),o.l=!0,o.exports}return r.m=e,r.c=t,r.d=function(e,t,n){r.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},r.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},r.t=function(e,t){if(1&t&&(e=r(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(r.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)r.d(n,o,function(t){return e[t]}.bind(null,o));return n},r.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return r.d(t,"a",t),t},r.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},r.p="",r(r.s=5)}([function(e,t,r){"use strict";var n=Object.prototype.hasOwnProperty,o=Array.isArray,i=function(){for(var e=[],t=0;t<256;++t)e.push("%"+((t<16?"0":"")+t.toString(16)).toUpperCase());return e}(),a=function(e,t){for(var r=t&&t.plainObjects?Object.create(null):{},n=0;n<e.length;++n)void 0!==e[n]&&(r[n]=e[n]);return r};e.exports={arrayToObject:a,assign:function(e,t){return Object.keys(t).reduce(function(e,r){return e[r]=t[r],e},e)},combine:function(e,t){return[].concat(e,t)},compact:function(e){for(var t=[{obj:{o:e},prop:"o"}],r=[],n=0;n<t.length;++n)for(var i=t[n],a=i.obj[i.prop],u=Object.keys(a),c=0;c<u.length;++c){var l=u[c],s=a[l];"object"==typeof s&&null!==s&&-1===r.indexOf(s)&&(t.push({obj:a,prop:l}),r.push(s))}return function(e){for(;e.length>1;){var t=e.pop(),r=t.obj[t.prop];if(o(r)){for(var n=[],i=0;i<r.length;++i)void 0!==r[i]&&n.push(r[i]);t.obj[t.prop]=n}}}(t),e},decode:function(e,t,r){var n=e.replace(/\+/g," ");if("iso-8859-1"===r)return n.replace(/%[0-9a-f]{2}/gi,unescape);try{return decodeURIComponent(n)}catch(e){return n}},encode:function(e,t,r){if(0===e.length)return e;var n=e;if("symbol"==typeof e?n=Symbol.prototype.toString.call(e):"string"!=typeof e&&(n=String(e)),"iso-8859-1"===r)return escape(n).replace(/%u[0-9a-f]{4}/gi,function(e){return"%26%23"+parseInt(e.slice(2),16)+"%3B"});for(var o="",a=0;a<n.length;++a){var u=n.charCodeAt(a);45===u||46===u||95===u||126===u||u>=48&&u<=57||u>=65&&u<=90||u>=97&&u<=122?o+=n.charAt(a):u<128?o+=i[u]:u<2048?o+=i[192|u>>6]+i[128|63&u]:u<55296||u>=57344?o+=i[224|u>>12]+i[128|u>>6&63]+i[128|63&u]:(a+=1,u=65536+((1023&u)<<10|1023&n.charCodeAt(a)),o+=i[240|u>>18]+i[128|u>>12&63]+i[128|u>>6&63]+i[128|63&u])}return o},isBuffer:function(e){return!(!e||"object"!=typeof e||!(e.constructor&&e.constructor.isBuffer&&e.constructor.isBuffer(e)))},isRegExp:function(e){return"[object RegExp]"===Object.prototype.toString.call(e)},merge:function e(t,r,i){if(!r)return t;if("object"!=typeof r){if(o(t))t.push(r);else{if(!t||"object"!=typeof t)return[t,r];(i&&(i.plainObjects||i.allowPrototypes)||!n.call(Object.prototype,r))&&(t[r]=!0)}return t}if(!t||"object"!=typeof t)return[t].concat(r);var u=t;return o(t)&&!o(r)&&(u=a(t,i)),o(t)&&o(r)?(r.forEach(function(r,o){if(n.call(t,o)){var a=t[o];a&&"object"==typeof a&&r&&"object"==typeof r?t[o]=e(a,r,i):t.push(r)}else t[o]=r}),t):Object.keys(r).reduce(function(t,o){var a=r[o];return n.call(t,o)?t[o]=e(t[o],a,i):t[o]=a,t},u)}}},function(e,t,r){"use strict";var n=String.prototype.replace,o=/%20/g,i=r(0),a={RFC1738:"RFC1738",RFC3986:"RFC3986"};e.exports=i.assign({default:a.RFC3986,formatters:{RFC1738:function(e){return n.call(e,o,"+")},RFC3986:function(e){return String(e)}}},a)},function(e,t,r){"use strict";var n=r(3),o=r(4),i=r(1);e.exports={formats:i,parse:o,stringify:n}},function(e,t,r){"use strict";var n=r(0),o=r(1),i=Object.prototype.hasOwnProperty,a={brackets:function(e){return e+"[]"},comma:"comma",indices:function(e,t){return e+"["+t+"]"},repeat:function(e){return e}},u=Array.isArray,c=Array.prototype.push,l=function(e,t){c.apply(e,u(t)?t:[t])},s=Date.prototype.toISOString,f=o.default,p={addQueryPrefix:!1,allowDots:!1,charset:"utf-8",charsetSentinel:!1,delimiter:"&",encode:!0,encoder:n.encode,encodeValuesOnly:!1,format:f,formatter:o.formatters[f],indices:!1,serializeDate:function(e){return s.call(e)},skipNulls:!1,strictNullHandling:!1},d=function e(t,r,o,i,a,c,s,f,d,y,h,m,b){var g,v=t;if("function"==typeof s?v=s(r,v):v instanceof Date?v=y(v):"comma"===o&&u(v)&&(v=v.join(",")),null===v){if(i)return c&&!m?c(r,p.encoder,b):r;v=""}if("string"==typeof(g=v)||"number"==typeof g||"boolean"==typeof g||"symbol"==typeof g||"bigint"==typeof g||n.isBuffer(v))return c?[h(m?r:c(r,p.encoder,b))+"="+h(c(v,p.encoder,b))]:[h(r)+"="+h(String(v))];var O,w=[];if(void 0===v)return w;if(u(s))O=s;else{var j=Object.keys(v);O=f?j.sort(f):j}for(var P=0;P<O.length;++P){var x=O[P];a&&null===v[x]||(u(v)?l(w,e(v[x],"function"==typeof o?o(r,x):r,o,i,a,c,s,f,d,y,h,m,b)):l(w,e(v[x],r+(d?"."+x:"["+x+"]"),o,i,a,c,s,f,d,y,h,m,b)))}return w};e.exports=function(e,t){var r,n=e,c=function(e){if(!e)return p;if(null!==e.encoder&&void 0!==e.encoder&&"function"!=typeof e.encoder)throw new TypeError("Encoder has to be a function.");var t=e.charset||p.charset;if(void 0!==e.charset&&"utf-8"!==e.charset&&"iso-8859-1"!==e.charset)throw new TypeError("The charset option must be either utf-8, iso-8859-1, or undefined");var r=o.default;if(void 0!==e.format){if(!i.call(o.formatters,e.format))throw new TypeError("Unknown format option provided.");r=e.format}var n=o.formatters[r],a=p.filter;return("function"==typeof e.filter||u(e.filter))&&(a=e.filter),{addQueryPrefix:"boolean"==typeof e.addQueryPrefix?e.addQueryPrefix:p.addQueryPrefix,allowDots:void 0===e.allowDots?p.allowDots:!!e.allowDots,charset:t,charsetSentinel:"boolean"==typeof e.charsetSentinel?e.charsetSentinel:p.charsetSentinel,delimiter:void 0===e.delimiter?p.delimiter:e.delimiter,encode:"boolean"==typeof e.encode?e.encode:p.encode,encoder:"function"==typeof e.encoder?e.encoder:p.encoder,encodeValuesOnly:"boolean"==typeof e.encodeValuesOnly?e.encodeValuesOnly:p.encodeValuesOnly,filter:a,formatter:n,serializeDate:"function"==typeof e.serializeDate?e.serializeDate:p.serializeDate,skipNulls:"boolean"==typeof e.skipNulls?e.skipNulls:p.skipNulls,sort:"function"==typeof e.sort?e.sort:null,strictNullHandling:"boolean"==typeof e.strictNullHandling?e.strictNullHandling:p.strictNullHandling}}(t);"function"==typeof c.filter?n=(0,c.filter)("",n):u(c.filter)&&(r=c.filter);var s,f=[];if("object"!=typeof n||null===n)return"";s=t&&t.arrayFormat in a?t.arrayFormat:t&&"indices"in t?t.indices?"indices":"repeat":"indices";var y=a[s];r||(r=Object.keys(n)),c.sort&&r.sort(c.sort);for(var h=0;h<r.length;++h){var m=r[h];c.skipNulls&&null===n[m]||l(f,d(n[m],m,y,c.strictNullHandling,c.skipNulls,c.encode?c.encoder:null,c.filter,c.sort,c.allowDots,c.serializeDate,c.formatter,c.encodeValuesOnly,c.charset))}var b=f.join(c.delimiter),g=!0===c.addQueryPrefix?"?":"";return c.charsetSentinel&&("iso-8859-1"===c.charset?g+="utf8=%26%2310003%3B&":g+="utf8=%E2%9C%93&"),b.length>0?g+b:""}},function(e,t,r){"use strict";var n=r(0),o=Object.prototype.hasOwnProperty,i={allowDots:!1,allowPrototypes:!1,arrayLimit:20,charset:"utf-8",charsetSentinel:!1,comma:!1,decoder:n.decode,delimiter:"&",depth:5,ignoreQueryPrefix:!1,interpretNumericEntities:!1,parameterLimit:1e3,parseArrays:!0,plainObjects:!1,strictNullHandling:!1},a=function(e){return e.replace(/&#(\d+);/g,function(e,t){return String.fromCharCode(parseInt(t,10))})},u=function(e,t,r){if(e){var n=r.allowDots?e.replace(/\.([^.[]+)/g,"[$1]"):e,i=/(\[[^[\]]*])/g,a=r.depth>0&&/(\[[^[\]]*])/.exec(n),u=a?n.slice(0,a.index):n,c=[];if(u){if(!r.plainObjects&&o.call(Object.prototype,u)&&!r.allowPrototypes)return;c.push(u)}for(var l=0;r.depth>0&&null!==(a=i.exec(n))&&l<r.depth;){if(l+=1,!r.plainObjects&&o.call(Object.prototype,a[1].slice(1,-1))&&!r.allowPrototypes)return;c.push(a[1])}return a&&c.push("["+n.slice(a.index)+"]"),function(e,t,r){for(var n=t,o=e.length-1;o>=0;--o){var i,a=e[o];if("[]"===a&&r.parseArrays)i=[].concat(n);else{i=r.plainObjects?Object.create(null):{};var u="["===a.charAt(0)&&"]"===a.charAt(a.length-1)?a.slice(1,-1):a,c=parseInt(u,10);r.parseArrays||""!==u?!isNaN(c)&&a!==u&&String(c)===u&&c>=0&&r.parseArrays&&c<=r.arrayLimit?(i=[])[c]=n:i[u]=n:i={0:n}}n=i}return n}(c,t,r)}};e.exports=function(e,t){var r=function(e){if(!e)return i;if(null!==e.decoder&&void 0!==e.decoder&&"function"!=typeof e.decoder)throw new TypeError("Decoder has to be a function.");if(void 0!==e.charset&&"utf-8"!==e.charset&&"iso-8859-1"!==e.charset)throw new Error("The charset option must be either utf-8, iso-8859-1, or undefined");var t=void 0===e.charset?i.charset:e.charset;return{allowDots:void 0===e.allowDots?i.allowDots:!!e.allowDots,allowPrototypes:"boolean"==typeof e.allowPrototypes?e.allowPrototypes:i.allowPrototypes,arrayLimit:"number"==typeof e.arrayLimit?e.arrayLimit:i.arrayLimit,charset:t,charsetSentinel:"boolean"==typeof e.charsetSentinel?e.charsetSentinel:i.charsetSentinel,comma:"boolean"==typeof e.comma?e.comma:i.comma,decoder:"function"==typeof e.decoder?e.decoder:i.decoder,delimiter:"string"==typeof e.delimiter||n.isRegExp(e.delimiter)?e.delimiter:i.delimiter,depth:"number"==typeof e.depth||!1===e.depth?+e.depth:i.depth,ignoreQueryPrefix:!0===e.ignoreQueryPrefix,interpretNumericEntities:"boolean"==typeof e.interpretNumericEntities?e.interpretNumericEntities:i.interpretNumericEntities,parameterLimit:"number"==typeof e.parameterLimit?e.parameterLimit:i.parameterLimit,parseArrays:!1!==e.parseArrays,plainObjects:"boolean"==typeof e.plainObjects?e.plainObjects:i.plainObjects,strictNullHandling:"boolean"==typeof e.strictNullHandling?e.strictNullHandling:i.strictNullHandling}}(t);if(""===e||null==e)return r.plainObjects?Object.create(null):{};for(var c="string"==typeof e?function(e,t){var r,u={},c=t.ignoreQueryPrefix?e.replace(/^\?/,""):e,l=t.parameterLimit===1/0?void 0:t.parameterLimit,s=c.split(t.delimiter,l),f=-1,p=t.charset;if(t.charsetSentinel)for(r=0;r<s.length;++r)0===s[r].indexOf("utf8=")&&("utf8=%E2%9C%93"===s[r]?p="utf-8":"utf8=%26%2310003%3B"===s[r]&&(p="iso-8859-1"),f=r,r=s.length);for(r=0;r<s.length;++r)if(r!==f){var d,y,h=s[r],m=h.indexOf("]="),b=-1===m?h.indexOf("="):m+1;-1===b?(d=t.decoder(h,i.decoder,p),y=t.strictNullHandling?null:""):(d=t.decoder(h.slice(0,b),i.decoder,p),y=t.decoder(h.slice(b+1),i.decoder,p)),y&&t.interpretNumericEntities&&"iso-8859-1"===p&&(y=a(y)),y&&t.comma&&y.indexOf(",")>-1&&(y=y.split(",")),o.call(u,d)?u[d]=n.combine(u[d],y):u[d]=y}return u}(e,r):e,l=r.plainObjects?Object.create(null):{},s=Object.keys(c),f=0;f<s.length;++f){var p=s[f],d=u(p,c[p],r);l=n.merge(l,d,r)}return n.compact(l)}},function(e,t,r){"use strict";function n(e,t){for(var r=0;r<t.length;r++){var n=t[r];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}}r.r(t);var o=function(){function e(t,r,n){if(function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.name=t,this.ziggy=n,this.route=this.ziggy.namedRoutes[this.name],void 0===this.name)throw new Error("Ziggy Error: You must provide a route name");if(void 0===this.route)throw new Error("Ziggy Error: route '".concat(this.name,"' is not found in the route list"));this.absolute=void 0===r||r,this.domain=this.setDomain(),this.path=this.route.uri.replace(/^\//,"")}var t,r;return t=e,(r=[{key:"setDomain",value:function(){if(!this.absolute)return"/";if(!this.route.domain)return this.ziggy.baseUrl.replace(/\/?$/,"/");var e=(this.route.domain||this.ziggy.baseDomain).replace(/\/+$/,"");return this.ziggy.basePort&&e.replace(/\/+$/,"")===this.ziggy.baseDomain.replace(/\/+$/,"")&&(e=this.ziggy.baseDomain+":"+this.ziggy.basePort),this.ziggy.baseProtocol+"://"+e+"/"}},{key:"construct",value:function(){return this.domain+this.path}}])&&n(t.prototype,r),e}(),i=r(2);function a(){return(a=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var r=arguments[t];for(var n in r)Object.prototype.hasOwnProperty.call(r,n)&&(e[n]=r[n])}return e}).apply(this,arguments)}function u(e){return(u="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}function c(e,t){for(var r=0;r<t.length;r++){var n=t[r];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}}function l(e){var t="function"==typeof Map?new Map:void 0;return(l=function(e){if(null===e||(r=e,-1===Function.toString.call(r).indexOf("[native code]")))return e;var r;if("function"!=typeof e)throw new TypeError("Super expression must either be null or a function");if(void 0!==t){if(t.has(e))return t.get(e);t.set(e,n)}function n(){return function(e,t,r){return(function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Date.prototype.toString.call(Reflect.construct(Date,[],function(){})),!0}catch(e){return!1}}()?Reflect.construct:function(e,t,r){var n=[null];n.push.apply(n,t);var o=new(Function.bind.apply(e,n));return r&&s(o,r.prototype),o}).apply(null,arguments)}(e,arguments,f(this).constructor)}return n.prototype=Object.create(e.prototype,{constructor:{value:n,enumerable:!1,writable:!0,configurable:!0}}),s(n,e)})(e)}function s(e,t){return(s=Object.setPrototypeOf||function(e,t){return e.__proto__=t,e})(e,t)}function f(e){return(f=Object.setPrototypeOf?Object.getPrototypeOf:function(e){return e.__proto__||Object.getPrototypeOf(e)})(e)}r.d(t,"default",function(){return d});var p=function(e){function t(e,r,n){var i,a=arguments.length>3&&void 0!==arguments[3]?arguments[3]:null;return function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,t),(i=function(e,t){return!t||"object"!==u(t)&&"function"!=typeof t?function(e){if(void 0===e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return e}(e):t}(this,f(t).call(this))).name=e,i.absolute=n,i.ziggy=a||Ziggy,i.urlBuilder=i.name?new o(e,n,i.ziggy):null,i.template=i.urlBuilder?i.urlBuilder.construct():"",i.urlParams=i.normalizeParams(r),i.queryParams={},i.hydrated="",i}var r,n;return function(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function");e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,writable:!0,configurable:!0}}),t&&s(e,t)}(t,l(String)),r=t,(n=[{key:"normalizeParams",value:function(e){return void 0===e?{}:((e="object"!==u(e)?[e]:e).hasOwnProperty("id")&&-1==this.template.indexOf("{id}")&&(e=[e.id]),this.numericParamIndices=Array.isArray(e),a({},e))}},{key:"with",value:function(e){return this.urlParams=this.normalizeParams(e),this}},{key:"withQuery",value:function(e){return a(this.queryParams,e),this}},{key:"hydrateUrl",value:function(){var e=this;if(this.hydrated)return this.hydrated;var t=this.template.replace(/{([^}]+)}/gi,function(t,r){var n,o,i=e.trimParam(t);if(e.ziggy.defaultParameters.hasOwnProperty(i)&&(n=e.ziggy.defaultParameters[i]),n&&!e.urlParams[i])return delete e.urlParams[i],n;if(e.numericParamIndices?(e.urlParams=Object.values(e.urlParams),o=e.urlParams.shift()):(o=e.urlParams[i],delete e.urlParams[i]),void 0===o){if(-1===t.indexOf("?"))throw new Error("Ziggy Error: '"+i+"' key is required for route '"+e.name+"'");return""}return o.id?encodeURIComponent(o.id):encodeURIComponent(o)});return null!=this.urlBuilder&&""!==this.urlBuilder.path&&(t=t.replace(/\/+$/,"")),this.hydrated=t,this.hydrated}},{key:"matchUrl",value:function(){var e=window.location.hostname+(window.location.port?":"+window.location.port:"")+window.location.pathname,t=this.template.replace(/(\/\{[^\}]*\?\})/g,"/").replace(/(\{[^\}]*\})/gi,"[^/?]+").replace(/\/?$/,"").split("://")[1],r=this.template.replace(/(\{[^\}]*\})/gi,"[^/?]+").split("://")[1],n=e.replace(/\/?$/,"/"),o=new RegExp("^"+r+"/$").test(n),i=new RegExp("^"+t+"/$").test(n);return o||i}},{key:"constructQuery",value:function(){if(0===Object.keys(this.queryParams).length&&0===Object.keys(this.urlParams).length)return"";var e=a(this.urlParams,this.queryParams);return Object(i.stringify)(e,{encodeValuesOnly:!0,skipNulls:!0,addQueryPrefix:!0,arrayFormat:"indices"})}},{key:"current",value:function(){var e=this,r=arguments.length>0&&void 0!==arguments[0]?arguments[0]:null,n=Object.keys(this.ziggy.namedRoutes),o=n.filter(function(r){return-1!==e.ziggy.namedRoutes[r].methods.indexOf("GET")&&new t(r,void 0,void 0,e.ziggy).matchUrl()})[0];if(r){var i=new RegExp("^"+r.replace("*",".*").replace(".",".")+"$","i");return i.test(o)}return o}},{key:"check",value:function(e){return Object.keys(this.ziggy.namedRoutes).includes(e)}},{key:"extractParams",value:function(e,t,r){var n=this,o=e.split(r);return t.split(r).reduce(function(e,t,r){return 0===t.indexOf("{")&&-1!==t.indexOf("}")&&o[r]?a(e,(i={},u=n.trimParam(t),c=o[r],u in i?Object.defineProperty(i,u,{value:c,enumerable:!0,configurable:!0,writable:!0}):i[u]=c,i)):e;var i,u,c},{})}},{key:"parse",value:function(){this.return=this.hydrateUrl()+this.constructQuery()}},{key:"url",value:function(){return this.parse(),this.return}},{key:"toString",value:function(){return this.url()}},{key:"trimParam",value:function(e){return e.replace(/{|}|\?/g,"")}},{key:"valueOf",value:function(){return this.url()}},{key:"params",get:function(){var e=this.ziggy.namedRoutes[this.current()];return a(this.extractParams(window.location.hostname,e.domain||"","."),this.extractParams(window.location.pathname.slice(1),e.uri,"/"))}}])&&c(r.prototype,n),t}();function d(e,t,r,n){return new p(e,t,r,n)}}]).default});
    </script>
</head>
<body class="font-sans leading-none text-gray-700 antialiased">
<?php $this->beginBody() ?>
<?= $content ?>
<?php $this->endBody() ?>
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>-->
<!--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>-->
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>-->
<!--<script src="https://code.jquery.com/jquery-3.6.1.slim.min.js" integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>-->
<!--<script src="https://cloud.anylogic.com/assets/js-client-8.5.0/cloud-client.js"></script>-->
</body>
</html>
<?php $this->endPage() ?>
