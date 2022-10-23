<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic-console',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'app\commands',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
        '@tests' => '@app/tests',
    ],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
//        'amqp' => [
//            'class' =>  \devmustafa\amqp\components\Amqp::class,
//            'host' =>       '127.0.0.1',
//            'port' =>       '15555',
//            'user' =>       'guest',
//            'password' =>   'guest',
//            'vhost' =>      '/',
//
//        ],
        'amqp' => [
            'class' => \devmustafa\amqp\components\Amqp::class,
            'host' =>       'simiweb_rabbit',
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
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
    ],
    'params' => $params,
    /*
    'controllerMap' => [
        'fixture' => [ // Fixture generation command line.
            'class' => 'yii\faker\FixtureController',
        ],
    ],
    */
];

if (false && YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
