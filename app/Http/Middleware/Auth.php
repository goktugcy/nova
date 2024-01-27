<?php

namespace App\Http\Middleware;

use Buki\Router\Http\Middleware;

class Auth extends Middleware
{
    public function handle()
    {
        session_start();
        if (!isset($_SESSION['user_authenticated']) || $_SESSION['user_authenticated'] !== true) {
            header('Location: /login');
            exit;
        }
        return true;
    }
}
