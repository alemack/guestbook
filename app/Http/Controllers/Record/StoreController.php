<?php

namespace App\Http\Controllers\Record;

use App\Http\Controllers\Controller;
use App\Models\Record;
use Illuminate\Http\Request;
use Jenssegers\Agent\Facades\Agent;

use function PHPSTORM_META\type;

class StoreController extends Controller
{
    public function __invoke()
    {
        $data = request()->validate([
            'user_name'=>'string|required',
            'email'=>'email',
            'homepage'=>'string',
            'text'=>'string|required',
            'ip'=>'',
            'browser'=>'',

        ]);

        $ip = request()->ip();
        $browser = Agent::browser();
        $version = Agent::version($browser);

        $data += ['ip'=>$ip, 'browser'=>$browser.' '.$version];

        Record::create($data);
        return redirect()->route('record.index');
    }
}
