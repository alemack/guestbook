<?php

namespace App\Http\Controllers\Record;

use App\Models\Record;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateRequest;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Record $record)
    {
        $data = $request->validated();

        $record->update($data);

        //принудительное обновление
        $record->fresh();

        return redirect()->route('record.index');
    }
}
