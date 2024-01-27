<?php

return [
    'name' => config('APP_NAME', 'Nova'),
    'url' => config('APP_URL', 'http://localhost:8000'),
    'debug' => config('APP_DEBUG', false),
    'db' => [
        'driver' => config('DB_DRIVER', 'mysql'),
        'host' => config('DB_HOST', '127.0.0.1'),
        'database' => config('DB_NAME', 'nova'),
        'username' => config('DB_USER', 'root'),
        'password' => '',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix' => '',
    ],

    'lifetime' => config('SESSION_LIFETIME', 120),

    'mail' => [
        'host' => 'smtp.gmail.com',
        'port' => 587,
        'username' => '',
        'password' => '',
        'from' => [
            'address' => '',
            'name' => '',
        ],
    ],

    'hash' => [
        'algo' => PASSWORD_BCRYPT,
        'cost' => 10,
    ],

];
