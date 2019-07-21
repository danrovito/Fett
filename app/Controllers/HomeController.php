<?php

namespace App\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return env('APP_NAME', "Fett");
    }
}
