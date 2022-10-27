<?php

namespace App\Http\Controllers\Record;

use App\Models\Record;
use Mews\Captcha\Captcha;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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



        // if (request()->getMethod() == 'POST') {
        //     $rules = ['captcha' => 'required|captcha'];
        //     $validator = validator()->make(request()->all(), $rules);
        //     if ($validator->fails()) {
        //         echo '<p style="color: #ff0000;">Incorrect!</p>';
        //     } else {
        //         echo '<p style="color: #00ff30;">Matched :)</p>';
        //     }
        // }

        // $form = '<form method="post" action="captcha-test">';
        // $form .= '<input type="hidden" name="_token" value="' . csrf_token() . '">';
        // $form .= '<p>' . captcha_image_html('default') . '</p>';
        // $form .= '<p><input type="text" name="captcha"></p>';
        // $form .= '<p><button type="submit" name="check">Check</button></p>';
        // $form .= '</form>';
        // return $form;



        return view('record.index', compact('records'));
    }
}
