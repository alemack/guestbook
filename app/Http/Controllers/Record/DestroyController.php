<?php

namespace App\Http\Controllers\Record;

use App\Models\Record;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use function PHPUnit\Framework\returnSelf;

class DestroyController extends Controller
{
    public function __invoke(Record $record)
    {
        $record->delete();
        return redirect()->route('record.index');
    }
}
