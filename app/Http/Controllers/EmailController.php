<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class EmailController extends Controller
{
    public static function sendemail(Request $request){
        // dd($request);

        // $data['title'] = "Website Mail";
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['subject'] = $request->subject;
        $data['msg'] = $request->message;
        Mail::send('email', $data, function ($message) use ($data) {
            $message->to('nikhilnsalokhe12@gmail.com')
            ->subject($data['subject']);
    });

    return response('success');
}
}
