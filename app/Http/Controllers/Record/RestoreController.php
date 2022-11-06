<?php

namespace App\Http\Controllers\Record;

use App\Models\Record;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RestoreController extends Controller
{
    public function __invoke(Request $request, $id)
    {
        $record = Record::withTrashed()->find($id);

        $record->restore();
        return redirect()->route('record.block');
    }
}
