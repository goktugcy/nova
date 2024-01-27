<?php
use App\Core\Controller;

function view($viewName, $data = [])
{
    $controller = new Controller();
    return $controller->view($viewName, $data);
}
function config($key, $default = null)
{
    static $config = null;

    if ($config === null) {
        $config = require_once __DIR__ . '/../config/app.php';
    }

    return $config[$key] ?? $default;
}

function assets($url)
{
    return config('APP_URL') . '/public/' . $url;
}
