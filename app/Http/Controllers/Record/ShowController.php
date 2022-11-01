<?php

namespace App\Http\Controllers\Record;

use App\Http\Controllers\Controller;
use App\Models\Record;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Record $record)
    {
        return view('record.show', compact('record'));
    }
}
