<?php

namespace App\Core;

use Jenssegers\Blade\Blade;

class Controller extends Bootstrap
{
    public function view($viewName, $data = [])
    {
        $blade = new Blade('./resources/views', './storage/cache');
        return $blade->render($viewName, $data);
    }

}
