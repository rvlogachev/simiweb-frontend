<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';
$integration = require __DIR__ . '/integration.php';
$config = [
    'id' => 'basic',
    'language' => 'ru-RU',
    'sourceLanguage' => 'en-US',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log', 'inertia'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [

        'formatter' => [
            'class' => 'yii\i18n\Formatter',
            'decimalSeparator' => ',',
        ],

//        'redis' => [
//            'class' => 'yii\redis\Connection',
//            'hostname' => 'localhost',
//            'port' => 6379,
//            'database' => 0,
//        ],
//        'ajax' => ['class' => common\modules\integration\components\ajax\AsyncResponse::class],
        'amqp' => [
            'class' => \devmustafa\amqp\components\Amqp::class,
            'host' =>       '172.25.0.20',
            'port' =>       '5672',
            'user' =>       'guest',
            'password' =>   'guest',
            'vhost' =>      '/',
//            'host' => '172.30.0.5',
//            'port' => 15672,
//            'user' => 'guest',
//            'password' => 'guest',
//            'vhost' => '/',
        ],
        'request' => [
            'class' => 'tebe\inertia\web\Request',
            'cookieValidationKey' => '7d0d683457df8f6ff9d65e2b507c08cd'
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
//        'log' => [
//            'traceLevel' => YII_DEBUG ? 3 : 0,
//            'targets' => [
//                'db' => [
//                    'class' => 'yii\log\DbTarget',
//                    'levels' => ['error', 'warning'],
//                    'except' => ['yii\web\HttpException:*', 'yii\i18n\I18N\*'],
//                    'prefix' => function () {
//                        $url = !Yii::$app->request->isConsoleRequest ? Yii::$app->request->getUrl() : null;
//                        return sprintf('[%s][%s]', Yii::$app->id, $url);
//                    },
//                    'logVars' => [],
//                    'logTable' => '{{%system_log}}'
//                ]
//            ],
//        ],
        'commandBus' => [
            'class' => '\trntv\tactician\Tactician',
            'commandNameExtractor' => '\League\Tactician\Handler\CommandNameExtractor\ClassNameExtractor',
            'methodNameInflector' => '\League\Tactician\Handler\MethodNameInflector\HandleInflector',
            'commandToHandlerMap' => [
                'commands\command\SendEmailCommand' => '\commands\handler\SendEmailHandler',
                'commands\command\SendCommand' => '\commands\handler\SendHandler',
                'commands\command\SendSocketCommand' => '\commands\handler\SendSocketHandler',
                'commands\command\AddToTimelineCommand' => '\commands\handler\AddToTimelineHandler'
            ]
        ],
        'db' => $db,
        'integration' => $integration,
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'login' => 'site/login',
                'logout' => 'site/logout',
                'accounts' => 'account/index',
                'business-orgs-spr' =>'business-orgs-spr/index',

                //Contacts


                'GET task' => 'task/index',
                'POST task' => 'task/insert',
                'GET task/create' => 'task/create',
                'GET task/<task_id:\d+>/edit' => 'task/edit',
                'PUT task/<task_id:\d+>' => 'task/update',
                'DELETE task/<task_id:\d+>' => 'task/delete',
                'PUT task/<task_id:\d+>/restore' => 'task/restore',

                // All Spr
                'GET all-spr' => 'all-spr/index',
                'POST all-spr' => 'all-spr/insert',
                'GET all-spr/create' => 'all-spr/create',
                'GET all-spr/create/<filecode:>' => 'all-spr/create',
                'GET all-spr/<id:\d+>/edit' => 'all-spr/edit',
                'PUT all-spr/<id:\d+>' => 'all-spr/update',
                'DELETE all-spr/<id:\d+>' => 'all-spr/delete',
                'PUT all-spr/<id:\d+>/restore' => 'all-spr/restore',

                // Production Unit Spr
                'GET production-unit-spr' => 'production-unit-spr/index',
                'POST production-unit-spr' => 'production-unit-spr/insert',
                'GET production-unit-spr/create' => 'production-unit-spr/create',
                'GET production-unit-spr/<id:\d+>/edit' => 'production-unit-spr/edit',
                'GET production-unit-spr/<id:\d+>/view' => 'production-unit-spr/view',
                'PUT production-unit-spr/<id:\d+>' => 'production-unit-spr/update',
                'DELETE production-unit-spr/<id:\d+>' => 'production-unit-spr/delete',
                'PUT production-unit-spr/<id:\d+>/restore' => 'production-unit-spr/restore',

                // Production Unit Spr
                'GET logical-nodes-spr' => 'logical-nodes-spr/index',
                'POST logical-nodes-spr' => 'logical-nodes-spr/insert',
                'GET logical-nodes-spr/create' => 'logical-nodes-spr/create',
                'GET logical-nodes-spr/<id:\d+>/edit' => 'logical-nodes-spr/edit',
                'GET logical-nodes-spr/<id:\d+>/view' => 'logical-nodes-spr/view',
                'PUT logical-nodes-spr/<id:\d+>' => 'logical-nodes-spr/update',
                'DELETE logical-nodes-spr/<id:\d+>' => 'logical-nodes-spr/delete',
                'PUT logical-nodes-spr/<id:\d+>/restore' => 'logical-nodes-spr/restore',

                // Redevs Spr
                'GET redevs-spr' => 'redevs-spr/index',
                'POST redevs-spr' => 'redevs-spr/insert',
                'GET redevs-spr/create' => 'redevs-spr/create',
                'GET redevs-spr/<id:\d+>/edit' => 'redevs-spr/edit',
                'GET redevs-spr/<id:\d+>/view' => 'redevs-spr/view',
                'PUT redevs-spr/<id:\d+>' => 'redevs-spr/update',
                'DELETE redevs-spr/<id:\d+>' => 'redevs-spr/delete',
                'PUT redevs-spr/<id:\d+>/restore' => 'redevs-spr/restore',

                // Scenario
                'GET scenarios' => 'scenarios/index',
                'POST scenarios' => 'scenarios/insert',
                'GET scenarios/create' => 'scenarios/create',
                'GET scenarios/<id:\d+>/edit' => 'scenarios/edit',
                'GET scenarios/<id:\d+>/view' => 'scenarios/view',
                'PUT scenarios/<id:\d+>' => 'scenarios/update',
                'DELETE scenarios/<id:\d+>' => 'scenarios/delete',
                'PUT scenarios/<id:\d+>/restore' => 'scenarios/restore',




                // Outer Source Spr
                'GET outer-source-spr' => 'outer-source-spr/index',
                'POST outer-source-spr' => 'outer-source-spr/insert',
                'GET outer-source-spr/create' => 'outer-source-spr/create',
                'GET outer-source-spr/<id:\d+>/edit' => 'outer-source-spr/edit',
                'GET outer-source-spr/<id:\d+>/view' => 'outer-source-spr/view',
                'PUT outer-source-spr/<id:\d+>' => 'outer-source-spr/update',
                'DELETE outer-source-spr/<id:\d+>' => 'outer-source-spr/delete',
                'PUT outer-source-spr/<id:\d+>/restore' => 'outer-source-spr/restore',

                // Redevs Spr
                'GET rudnik-spr' => 'rudnik-spr/index',
                'POST rudnik-spr' => 'rudnik-spr/insert',
                'GET rudnik-spr/create' => 'rudnik-spr/create',
                'GET rudnik-spr/<id:\d+>/edit' => 'rudnik-spr/edit',
                'GET rudnik-spr/<id:\d+>/view' => 'rudnik-spr/view',
                'PUT rudnik-spr/<id:\d+>' => 'rudnik-spr/update',
                'DELETE rudnik-spr/<id:\d+>' => 'rudnik-spr/delete',
                'PUT rudnik-spr/<id:\d+>/restore' => 'rudnik-spr/restore',

                // Redevs Affects Spr
                'GET redevs-affects-spr' => 'redevs-affects-spr/index',
                'POST redevs-affects-spr' => 'redevs-affects-spr/insert',
                'GET redevs-affects-spr/create' => 'redevs-affects-spr/create',
                'GET redevs-affects-spr/<id:\d+>/edit' => 'redevs-affects-spr/edit',
                'GET redevs-affects-spr/<id:\d+>/view' => 'redevs-affects-spr/view',
                'PUT redevs-affects-spr/<id:\d+>' => 'redevs-affects-spr/update',
                'DELETE redevs-affects-spr/<id:\d+>' => 'redevs-affects-spr/delete',
                'PUT redevs-affects-spr/<id:\d+>/restore' => 'redevs-affects-spr/restore',

                // Redevs Affects Spr
                'GET redevs-auxiliary-spr' => 'redevs-auxiliary-spr/index',
                'POST redevs-auxiliary-spr' => 'redevs-auxiliary-spr/insert',
                'GET redevs-auxiliary-spr/create' => 'redevs-auxiliary-spr/create',
                'GET redevs-auxiliary-spr/<id:\d+>/edit' => 'redevs-auxiliary-spr/edit',
                'GET redevs-auxiliary-spr/<id:\d+>/view' => 'redevs-auxiliary-spr/view',
                'PUT redevs-auxiliary-spr/<id:\d+>' => 'redevs-auxiliary-spr/update',
                'DELETE redevs-auxiliary-spr/<id:\d+>' => 'redevs-auxiliary-spr/delete',
                'PUT redevs-auxiliary-spr/<id:\d+>/restore' => 'redevs-auxiliary-spr/restore',

                // Business Orgs Spr
                'GET business-orgs-spr' => 'business-orgs-spr/index',
                'POST business-orgs-spr' => 'business-orgs-spr/insert',
                'GET business-orgs-spr/create' => 'business-orgs-spr/create',
                'GET business-orgs-spr/<id:\d+>/edit' => 'business-orgs-spr/edit',
                'GET business-orgs-spr/<id:\d+>/view' => 'business-orgs-spr/view',
                'PUT business-orgs-spr/<id:\d+>' => 'business-orgs-spr/update',
                'DELETE business-orgs-spr/<id:\d+>' => 'business-orgs-spr/delete',
                'PUT business-orgs-spr/<id:\d+>/restore' => 'business-orgs-spr/restore',

                // Warehouse Spr
                'GET warehouse-spr' => 'warehouse-spr/index',
                'POST warehouse-spr' => 'warehouse-spr/insert',
                'GET warehouse-spr/create' => 'warehouse-spr/create',
                'GET warehouse-spr/<id:\d+>/edit' => 'warehouse-spr/edit',
                'GET warehouse-spr/<id:\d+>/view' => 'warehouse-spr/view',
                'PUT warehouse-spr/<id:\d+>' => 'warehouse-spr/update',
                'DELETE warehouse-spr/<id:\d+>' => 'warehouse-spr/delete',
                'PUT warehouse-spr/<id:\d+>/restore' => 'warehouse-spr/restore',

                // Transport Type Spr
                'GET transport-type-spr' => 'transport-type-spr/index',
                'POST transport-type-spr' => 'transport-type-spr/insert',
                'GET transport-type-spr/create' => 'transport-type-spr/create',
                'GET transport-type-spr/<id:\d+>/edit' => 'transport-type-spr/edit',
                'GET transport-type-spr/<id:\d+>/view' => 'transport-type-spr/view',
                'PUT transport-type-spr/<id:\d+>' => 'transport-type-spr/update',
                'DELETE transport-type-spr/<id:\d+>' => 'transport-type-spr/delete',
                'PUT transport-type-spr/<id:\d+>/restore' => 'transport-type-spr/restore',

                // Reports Spr
                'GET reports-spr' => 'reports-spr/index',
                'POST reports-spr' => 'reports-spr/insert',
                'GET reports-spr/create' => 'reports-spr/create',
                'GET reports-spr/<id:\d+>/edit' => 'reports-spr/edit',
                'GET reports-spr/<id:\d+>/view' => 'reports-spr/view',
                'PUT reports-spr/<id:\d+>' => 'reports-spr/update',
                'DELETE reports-spr/<id:\d+>' => 'reports-spr/delete',
                'PUT reports-spr/<id:\d+>/restore' => 'reports-spr/restore',

                // Reports Spr
                'GET transport-spr' => 'transport-spr/index',
                'POST transport-spr' => 'transport-spr/insert',
                'GET transport-spr/create' => 'transport-spr/create',
                'GET transport-spr/<id:\d+>/edit' => 'transport-spr/edit',
                'GET transport-spr/<id:\d+>/view' => 'transport-spr/view',
                'PUT transport-spr/<id:\d+>' => 'transport-spr/update',
                'DELETE transport-spr/<id:\d+>' => 'transport-spr/delete',
                'PUT transport-spr/<id:\d+>/restore' => 'transport-spr/restore',

                'GET products-spr' => 'products-spr/index',
                'POST products-spr' => 'products-spr/insert',
                'GET products-spr/create' => 'products-spr/create',
                'GET products-spr/<id:\d+>/edit' => 'products-spr/edit',
                'GET products-spr/<id:\d+>/view' => 'products-spr/view',
                'PUT products-spr/<id:\d+>' => 'products-spr/update',
                'DELETE products-spr/<id:\d+>' => 'products-spr/delete',
                'PUT products-spr/<id:\d+>/restore' => 'products-spr/restore',

                // Files Spr
                'GET files-spr' => 'files-spr/index',
                'POST files-spr' => 'files-spr/insert',
                'GET files-spr/create' => 'files-spr/create',
                'GET files-spr/<id:\d+>/edit' => 'files-spr/edit',
                'GET files-spr/<id:\d+>/view' => 'files-spr/view',
                'PUT files-spr/<id:\d+>' => 'files-spr/update',
                'DELETE files-spr/<id:\d+>' => 'files-spr/delete',
                'PUT files-spr/<id:\d+>/restore' => 'files-spr/restore',

                // Departments Spr
                'GET departments-spr' => 'departments-spr/index',
                'POST departments-spr' => 'departments-spr/insert',
                'GET departments-spr/create' => 'departments-spr/create',
                'GET departments-spr/<id:\d+>/edit' => 'departments-spr/edit',
                'GET departments-spr/<id:\d+>/view' => 'departments-spr/view',
                'PUT departments-spr/<id:\d+>' => 'departments-spr/update',
                'DELETE departments-spr/<id:\d+>' => 'departments-spr/delete',
                'PUT departments-spr/<id:\d+>/restore' => 'departments-spr/restore',


                // Business Algorythms Spr
                'GET business-algorythms-spr' => 'business-algorythms-spr/index',
                'POST business-algorythms-spr' => 'business-algorythms-spr/insert',
                'GET business-algorythms-spr/create' => 'business-algorythms-spr/create',
                'GET business-algorythms-spr/<id:\d+>/edit' => 'business-algorythms-spr/edit',
                'GET business-algorythms-spr/<id:\d+>/view' => 'business-algorythms-spr/view',
                'PUT business-algorythms-spr/<id:\d+>' => 'business-algorythms-spr/update',
                'DELETE business-algorythms-spr/<id:\d+>' => 'business-algorythms-spr/delete',
                'PUT business-algorythms-spr/<id:\d+>/restore' => 'business-algorythms-spr/restore',

                // Currencies Spr
                'GET currencies-spr' => 'currencies-spr/index',
                'POST currencies-spr' => 'currencies-spr/insert',
                'GET currencies-spr/create' => 'currencies-spr/create',
                'GET currencies-spr/<id:\d+>/edit' => 'currencies-spr/edit',
                'GET currencies-spr/<id:\d+>/view' => 'currencies-spr/view',
                'PUT currencies-spr/<id:\d+>' => 'currencies-spr/update',
                'DELETE currencies-spr/<id:\d+>' => 'currencies-spr/delete',
                'PUT currencies-spr/<id:\d+>/restore' => 'currencies-spr/restore',

                // Currencies Spr
                'GET damage-level-spr' => 'damage-level-spr/index',
                'POST damage-level-spr' => 'damage-level-spr/insert',
                'GET damage-level-spr/create' => 'damage-level-spr/create',
                'GET damage-level-spr/<id:\d+>/edit' => 'damage-level-spr/edit',
                'GET damage-level-spr/<id:\d+>/view' => 'damage-level-spr/view',
                'PUT damage-level-spr/<id:\d+>' => 'damage-level-spr/update',
                'DELETE damage-level-spr/<id:\d+>' => 'damage-level-spr/delete',
                'PUT damage-level-spr/<id:\d+>/restore' => 'damage-level-spr/restore',
                // Equipment Types Spr
                'GET equipment-types-spr' => 'equipment-types-spr/index',
                'POST equipment-types-spr' => 'equipment-types-spr/insert',
                'GET equipment-types-spr/create' => 'equipment-types-spr/create',
                'GET equipment-types-spr/<id:\d+>/edit' => 'equipment-types-spr/edit',
                'GET equipment-types-spr/<id:\d+>/view' => 'equipment-types-spr/view',
                'PUT equipment-types-spr/<id:\d+>' => 'equipment-types-spr/update',
                'DELETE equipment-types-spr/<id:\d+>' => 'equipment-types-spr/delete',
                'PUT equipment-types-spr/<id:\d+>/restore' => 'equipment-types-spr/restore',

                // Event Types Spr
                'GET event-types-spr' => 'event-types-spr/index',
                'POST event-types-spr' => 'event-types-spr/insert',
                'GET event-types-spr/create' => 'event-types-spr/create',
                'GET event-types-spr/<id:\d+>/edit' => 'event-types-spr/edit',
                'GET event-types-spr/<id:\d+>/view' => 'event-types-spr/view',
                'PUT event-types-spr/<id:\d+>' => 'event-types-spr/update',
                'DELETE event-types-spr/<id:\d+>' => 'event-types-spr/delete',
                'PUT event-types-spr/<id:\d+>/restore' => 'event-types-spr/restore',

                // Cost Types Spr
                'GET cost-types-spr' => 'cost-types-spr/index',
                'POST cost-types-spr' => 'cost-types-spr/insert',
                'GET cost-types-spr/create' => 'cost-types-spr/create',
                'GET cost-types-spr/<id:\d+>/edit' => 'cost-types-spr/edit',
                'GET cost-types-spr/<id:\d+>/view' => 'cost-types-spr/view',
                'PUT cost-types-spr/<id:\d+>' => 'cost-types-spr/update',
                'DELETE cost-types-spr/<id:\d+>' => 'cost-types-spr/delete',
                'PUT cost-types-spr/<id:\d+>/restore' => 'cost-types-spr/restore',

                // Fcos Spr
                'GET fcos-spr' => 'fcos-spr/index',
                'POST fcos-spr' => 'fcos-spr/insert',
                'GET fcos-spr/create' => 'fcos-spr/create',
                'GET fcos-spr/<id:\d+>/edit' => 'fcos-spr/edit',
                'GET fcos-spr/<id:\d+>/view' => 'fcos-spr/view',
                'PUT fcos-spr/<id:\d+>' => 'fcos-spr/update',
                'DELETE fcos-spr/<id:\d+>' => 'fcos-spr/delete',
                'PUT fcos-spr/<id:\d+>/restore' => 'fcos-spr/restore',

                // Index Score Level Spr
                'GET index-score-level-spr' => 'index-score-level-spr/index',
                'POST index-score-level-spr' => 'index-score-level-spr/insert',
                'GET index-score-level-spr/create' => 'index-score-level-spr/create',
                'GET index-score-level-spr/<id:\d+>/edit' => 'index-score-level-spr/edit',
                'GET index-score-level-spr/<id:\d+>/view' => 'index-score-level-spr/view',
                'PUT index-score-level-spr/<id:\d+>' => 'index-score-level-spr/update',
                'DELETE index-score-level-spr/<id:\d+>' => 'index-score-level-spr/delete',
                'PUT index-score-level-spr/<id:\d+>/restore' => 'index-score-level-spr/restore',

                // Criticals Spr
                'GET criticals-spr' => 'criticals-spr/index',
                'POST criticals-spr' => 'criticals-spr/insert',
                'GET criticals-spr/create' => 'criticals-spr/create',
                'GET criticals-spr/<id:\d+>/edit' => 'criticals-spr/edit',
                'GET criticals-spr/<id:\d+>/view' => 'criticals-spr/view',
                'PUT criticals-spr/<id:\d+>' => 'criticals-spr/update',
                'DELETE criticals-spr/<id:\d+>' => 'criticals-spr/delete',
                'PUT criticals-spr/<id:\d+>/restore' => 'criticals-spr/restore',

                // Components Spr
                'GET components-spr' => 'components-spr/index',
                'POST components-spr' => 'components-spr/insert',
                'GET components-spr/create' => 'components-spr/create',
                'GET components-spr/<id:\d+>/edit' => 'components-spr/edit',
                'GET components-spr/<id:\d+>/view' => 'components-spr/view',
                'PUT components-spr/<id:\d+>' => 'components-spr/update',
                'DELETE components-spr/<id:\d+>' => 'components-spr/delete',
                'PUT components-spr/<id:\d+>/restore' => 'components-spr/restore',

                // Units Spr
                'GET units-spr' => 'units-spr/index',
                'POST units-spr' => 'units-spr/insert',
                'GET units-spr/create' => 'units-spr/create',
                'GET units-spr/<id:\d+>/edit' => 'units-spr/edit',
                'GET units-spr/<id:\d+>/view' => 'units-spr/view',
                'PUT units-spr/<id:\d+>' => 'units-spr/update',
                'DELETE units-spr/<id:\d+>' => 'units-spr/delete',
                'PUT units-spr/<id:\d+>/restore' => 'units-spr/restore',

                //invest-types
                'GET invest-types-spr' => 'invest-types-spr/index',
                'POST invest-types-spr' => 'invest-types-spr/insert',
                'GET invest-types-spr/create' => 'invest-types-spr/create',
                'GET invest-types-spr/<id:\d+>/edit' => 'invest-types-spr/edit',
                'GET invest-types-spr/<id:\d+>/view' => 'invest-types-spr/view',
                'PUT invest-types-spr/<id:\d+>' => 'invest-types-spr/update',
                'DELETE invest-types-spr/<id:\d+>' => 'invest-types-spr/delete',
                'PUT invest-types-spr/<id:\d+>/restore' => 'invest-types-spr/restore',

                // Organizations
                'GET organizations' => 'organization/index',
                'POST organizations' => 'organization/insert',
                'GET organizations/create' => 'organization/create',
                'GET organizations/<id:\d+>/edit' => 'organization/edit',
                'PUT organizations/<id:\d+>' => 'organization/update',
                'DELETE organizations/<id:\d+>' => 'organization/delete',
                'PUT organizations/<id:\d+>/restore' => 'organization/restore',

                // Organizations
                'GET corner-end-spr' => 'corner-end-spr/index',
                'POST corner-end-spr' => 'corner-end-spr/insert',
                'GET corner-end-spr/create' => 'corner-end-spr/create',
                'GET corner-end-spr/<id:\d+>/edit' => 'corner-end-spr/edit',
                'GET corner-end-spr/<id:\d+>/view' => 'corner-end-spr/view',
                'PUT corner-end-spr/<id:\d+>' => 'corner-end-spr/update',
                'DELETE corner-end-spr/<id:\d+>' => 'corner-end-spr/delete',
                'PUT corner-end-spr/<id:\d+>/restore' => 'corner-end-spr/restore',

                // Users
                'GET users' => 'user/index',
                'POST users' => 'user/insert',
                'GET users/create' => 'user/create',
                'GET users/<id:\d+>/edit' => 'user/edit',
                'PUT users/<id:\d+>' => 'user/update',
                'DELETE users/<id:\d+>' => 'user/delete',
                'PUT users/<id:\d+>/restore' => 'user/restore',

                //Production graph
                //'POST production-graph/upload' => 'productiongraph/production-graph/insert',
                //'PUT production-graph/upload' => 'productiongraph/production-graph/insert',

                //Production plan
                //'POST production-plan/upload' => 'productionplan/production-plan/insert',
                //'PUT production-plan/upload' => 'productionplan/production-plan/insert',

                //Macroeconomis
                //'POST macroeconomics/upload' => 'macroeconomics/macroeconomics/insert',
                //'PUT macroeconomics/upload' => 'macroeconomics/macroeconomics/insert',

                //Cost
                //'POST cost/upload' => 'cost/cost/insert',
                //'PUT cost/upload' => 'cost/cost/insert',

                //Edges
                'GET edges/<id:\d+>' => 'productiongraph/edge/index',
                'POST edges' => 'productiongraph/edge/insert',
                'GET edges/create' => 'productiongraph/edge/create',
                'GET edges/<id:\d+>/edit' => 'productiongraph/edge/edit',
                'PUT edges/<id:\d+>' => 'productiongraph/edge/update',
                'DELETE edges/<id:\d+>' => 'productiongraph/edge/delete',
                'PUT edges/<id:\d+>/restore' => 'productiongraph/edge/restore',


                //UploadFiles

                'GET uploads/graph' => 'uploads/graph',
                'GET uploads/plan' => 'uploads/plan',
                'GET uploads/cost' => 'uploads/cost',
                'GET uploads/macroeconomics' => 'uploads/macroeconomics',


                'GET uploads' => 'uploads/index',
                'POST uploads' => 'uploads/insert',


                //invest-types
                'GET graph' => 'graph/index',
                'POST graph' => 'graph/insert',
                'GET graph/create' => 'graph/create',
                'GET graph/<id:\d+>/edit' => 'graph/edit',
                'GET graph/<id:\d+>/view' => 'graph/view',
                'PUT graph/<id:\d+>' => 'graph/update',
                'DELETE graph/<id:\d+>' => 'graph/delete',
                'PUT graph/<id:\d+>/restore' => 'graph/restore',

                'GET plan' => 'plan/index',
                'POST plan' => 'plan/insert',
                'GET plan/create' => 'plan/create',
                'GET plan/<id:\d+>/edit' => 'plan/edit',
                'GET plan/<id:\d+>/view' => 'plan/view',
                'PUT plan/<id:\d+>' => 'plan/update',
                'DELETE plan/<id:\d+>' => 'plan/delete',
                'PUT plan/<id:\d+>/restore' => 'plan/restore',


                'GET macroeconomics' => 'macroeconomics/index',
                'POST macroeconomics' => 'macroeconomics/insert',
                'GET macroeconomics/create' => 'macroeconomics/create',
                'GET macroeconomics/<id:\d+>/edit' => 'macroeconomics/edit',
                'GET macroeconomics/<id:\d+>/view' => 'macroeconomics/view',
                'PUT macroeconomics/<id:\d+>' => 'macroeconomics/update',
                'DELETE macroeconomics/<id:\d+>' => 'macroeconomics/delete',
                'PUT macroeconomics/<id:\d+>/restore' => 'macroeconomics/restore',

                'GET cost' => 'cost/index',
                'POST cost' => 'cost/insert',
                'GET cost/create' => 'cost/create',
                'GET cost/<id:\d+>/edit' => 'cost/edit',
                'GET cost/<id:\d+>/view' => 'cost/view',
                'PUT cost/<id:\d+>' => 'cost/update',
                'DELETE cost/<id:\d+>' => 'cost/delete',
                'PUT cost/<id:\d+>/restore' => 'cost/restore',

                //invest-types
                'GET invest-event' => 'invest-event/index',
                'POST invest-event' => 'invest-event/insert',
                'GET invest-event/create' => 'invest-event/create',
                'GET invest-event/<id:\d+>/edit' => 'invest-event/edit',
                'GET invest-event/<id:\d+>/view' => 'invest-event/view',
                'PUT invest-event/<id:\d+>' => 'invest-event/update',
                'DELETE invest-event/<id:\d+>' => 'invest-event/delete',
                'PUT invest-event/<id:\d+>/restore' => 'invest-event/restore',

                //invest-types
                'GET operational-event' => 'operational-event/index',
                'POST operational-event' => 'operational-event/insert',
                'GET operational-event/create' => 'operational-event/create',
                'GET operational-event/<id:\d+>/edit' => 'operational-event/edit',
                'GET operational-event/<id:\d+>/view' => 'operational-event/view',
                'PUT operational-event/<id:\d+>' => 'operational-event/update',
                'DELETE operational-event/<id:\d+>' => 'operational-event/delete',
                'PUT operational-event/<id:\d+>/restore' => 'operational-event/restore',




                'GET uploads/<id:\d+>/edit' => 'uploads/edit',
                'PUT uploads/<id:\d+>' => 'uploads/update',
                'DELETE uploads/<id:\d+>' => 'uploads/delete',
                'PUT uploads/<id:\d+>/restore' => 'uploads/restore',

                'api' => 'api/index',
                'visualisation' => 'visualisation/graph',
                'GET visualisation/<id:\d+>' => 'visualisation/graph',
                'GET visual/<id:\d+>' => 'visual/graph',
                '500' => 'site/500'
            ]
        ],
        'inertia' => [
            'class' => 'tebe\inertia\Inertia',
            'assetsDirs' => [
                '@webroot/assets/inertia'
            ]
        ]
    ],
    'params' => $params,
    'modules'=> [
//        'api' => [
//            'class' => 'app\modules\api\Module',
//        ],

    ]
];

if (true) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        'allowedIPs' => ['*'],
    ];
}

return $config;
