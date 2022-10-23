<?php

return [
    'class' => 'yii\db\Connection',
//    //'dsn' => 'pgsql:host=127.0.0.1;port=5432;dbname=ebitda',
//
//    //'dsn' => 'pgsql:host=172.20.0.3;port=5432;dbname=ebitda',
//    'dsn' => 'pgsql:host=192.168.48.3;port=5432;dbname=ebitda',
//    'username' => 'postgres',
//    'password' => 'Chd56@&rT',
//
//    'charset' => 'utf8',
    'dsn' => getenv('DB_DSN'),
    'username' => getenv('DB_USERNAME'),
    'password' => getenv('DB_PASSWORD'),
    'tablePrefix' => getenv('DB_TABLE_PREFIX'),
    'charset' => getenv('DB_CHARSET'),
    'schemaMap' => [
        'pgsql' => [
            'class' => 'yii\db\pgsql\Schema',
            'defaultSchema' => 'staging' //specify your schema here
        ]
    ],
    'enableSchemaCache' => !YII_DEBUG,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];

