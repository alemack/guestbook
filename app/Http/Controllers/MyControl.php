<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyControl extends Controller
{
    public function __invoke()
    {
        dd('wd');
    }
}
