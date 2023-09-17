<?php

namespace App\Http\Controllers;

class EnvironmentController extends Controller
{
    public static function get(string $variable) : string
    {
        return config($variable);
    }
}