<?php

namespace App\Core;

use Buki\Router\Router;
use Illuminate\Database\Capsule\Manager as Capsule;
use Jenssegers\Blade\Blade;

class Bootstrap
{
    public $router;
    /**
     *
     */
    public function __construct()
    {
        $this->router = new Router(
            [
                'paths' => [
                    'controllers' => 'app/Http/Controllers',
                    'middleware' => 'app/Http/Middleware',
                ],
                'namespaces' => [
                    'controllers' => 'App\Http\Controllers',
                    'middleware' => 'App\Http\Middleware',
                ],
            ]
        );
        $capsule = new Capsule;
        $capsule->addConnection([
            'driver' => config('DB_DRIVER'),
            'host' => config('DB_HOST'),
            'database' => config('DB_NAME'),
            'username' => config('DB_USER'),
            'password' => config('DB_PASS'),
            'charset' => config('DB_CHARSET'),
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
        ]);
        $capsule->setAsGlobal();
        $capsule->bootEloquent();

        $this->setupErrorHandling();

        if (config('app.debug')) {
            ini_set('display_errors', 1);
            error_reporting(E_ALL);
        } else {
            ini_set('display_errors', 0);
        }

    }

    /**
     * @throws \Exception
     */

    public function setupErrorHandling()
    {
        set_exception_handler([$this, 'handleException']);
        set_error_handler([$this, 'handleError']);
    }

    public function handleException($exception)
    {
        if ($exception instanceof NotFoundException) {
            $this->renderHttpError(404, 'Not Found');
        } else {
            $this->renderHttpError(500, 'Internal Server Error');
        }

        // Log the exception
        $this->logError($exception);
    }

    public function handleError($errno, $errstr, $errfile, $errline)
    {
        // PHP errors are converted to ErrorException objects by that function
        throw new \ErrorException($errstr, $errno, 0, $errfile, $errline);
    }

    private function renderHttpError($statusCode, $message)
    {
        http_response_code($statusCode);

        $blade = new Blade('resources/views/errors', 'storage/cache');
        echo $blade->render("errors.$statusCode", ['message' => $message]);
    }

    private function logError($exception)
    {
        // Error logging can be done here
        error_log($exception->getMessage());
    }

    public function run()
    {
        $this->router->run();
    }
}
