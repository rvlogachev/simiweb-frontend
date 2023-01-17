<?php
define('TIMEZONE', 'Europe/Moscow');
date_default_timezone_set(TIMEZONE);
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'pgsql:host=192.168.0.105;port=5432;dbname=simiweb_frontend',
    'username' => 'postgres',
    'password' => 'guest',
    'charset' => 'utf8',
    'schemaMap' => [
        'pgsql' => [
            'class' => 'yii\db\pgsql\Schema',
            'defaultSchema' => 'public' //specify your schema here
        ]
    ],
    'enableSchemaCache' => !YII_DEBUG,

    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];

