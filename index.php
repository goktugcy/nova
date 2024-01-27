<?php

require __DIR__ . '/vendor/autoload.php';

// Dotenv library usage for environment variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Debugging
if (getenv('APP_DEBUG') === 'true') {
    $error1 = ini_set('display_errors', 1);
    $error2 = error_reporting(E_ALL);

    return $error1 && $error2;
} else {
    ini_set('display_errors', 0);
}

$app = new \App\Core\Bootstrap();
$router = $app->router;

require __DIR__ . '/routes/web.php';

$app->run();
