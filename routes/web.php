<?php
namespace App\Http\Controllers;

use App\Http\Controllers\HomeController;

$router->get('/', function () {
    return view('welcome');
});

$router->get('/hello', [HomeController::class, 'show']);
