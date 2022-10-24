<?php

namespace App\Http\Controllers\Record;

use App\Http\Controllers\Controller;
use App\Models\Record;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $records = Record::all();
        // foreach ($records as $record) {
        //     dump($record->user_name);

        // }
        // dd('1');
        // $records = '111';
        return view('record.index', compact('records'));
    }
}
