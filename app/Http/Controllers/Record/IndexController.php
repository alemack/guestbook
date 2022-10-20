<?php

namespace App\Http\Controllers\Record;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $records = '111';
        return view('record.index', compact('records'));
    }
}
