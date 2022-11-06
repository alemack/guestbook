<?php

namespace App\Http\Controllers\Record;

use App\Http\Controllers\Controller;
use App\Models\Record;
use Illuminate\Http\Request;

class BlockedController extends Controller
{
    public function __invoke()
    {
        $records = Record::onlyTrashed()->paginate(25);
        // $records = Record::paginate(25);
        return view('record.block', compact('records'));
    }
}
