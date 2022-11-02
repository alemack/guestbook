<?php

namespace App\Http\Controllers\Record;

use App\Models\Record;
use Mews\Captcha\Captcha;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use function PHPSTORM_META\type;

class IndexController extends Controller
{
    public function __invoke()
    {
        $records = Record::all();
        $records = Record::paginate(25);
        return view('record.index', compact('records'));
    }
}
