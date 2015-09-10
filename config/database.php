<?php

return [
    'fetch'       => PDO::FETCH_CLASS,
    'default'     => 'mysql',
    'migrations'  => 'migrations',
    'connections' => [
        'mysql'     => [
            'driver'    => 'mysql',
            'host'      => env( 'DB_HOST', 'localhost' ),
            'database'  => env( 'DB_DATABASE', 'grubworm' ),
            'username'  => env( 'DB_USERNAME', 'grubworm' ),
            'password'  => env( 'DB_PASSWORD', 'grubworm' ),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],
        'dfe-local' => [
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'dfe_local',
            'username'  => 'dfe_user',
            'password'  => 'dfe_user',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],
    ],
];
