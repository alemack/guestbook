<?php

namespace App\Http\Controllers\Record;

use App\Http\Controllers\Controller;
use App\Http\Requests\record\StoreRequest;
use App\Models\Record;
use Illuminate\Http\Request;
use Jenssegers\Agent\Facades\Agent;

use function PHPSTORM_META\type;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $ip = request()->ip();
        $browser = Agent::browser();
        $browserVersion = Agent::version($browser);

        $data += ['ip'=>$ip, 'browser'=>$browser.' '.$browserVersion];

        Record::create($data);

        return redirect()->route('record.index');
    }
}
