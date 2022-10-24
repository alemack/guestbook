<?php

namespace App\Http\Controllers\Record;

use App\Http\Controllers\Controller;
use App\Models\Record;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke()
    {
        $data = request()->validate([
            'user_name'=>'string|required',
            'email'=>'email',
            'homepage'=>'string',
            'text'=>'string|required',


            // 'text'=>'string|required'
        ]);

        dd($data);

        Record::create($data);
        return redirect()->route('record.index');
    }
}
