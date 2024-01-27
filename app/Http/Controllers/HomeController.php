<?php

namespace App\Http\Controllers;

use App\Core\Controller;

class HomeController extends Controller
{
    /**
     * @return string
     */
    public function show(): string
    {
        $data = [
            'title' => 'Home',
            'content' => 'Welcome to the home page!',
        ];
        return view('hello', compact('data'));
    }
}
