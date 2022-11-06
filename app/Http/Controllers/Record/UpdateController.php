<?php

namespace App\Http\Controllers\Record;

use App\Models\Record;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UpdateController extends Controller
{
    public function __invoke(Record $record)
    {
        $data = request()->validate([
            'user_name'=>'string|required',
            'email'=>'email',
            'homepage'=>'string',
            'text'=>'string|required',
            'ip'=>'',
            'browser'=>'',
        ]);



            $record->update($data);


        //принудительное обновление
        $record->fresh();
        return redirect()->route('record.index');

        // dd($data);
    }
}
