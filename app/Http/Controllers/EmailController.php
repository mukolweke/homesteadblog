<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{

    public function send(Request $request)
    {


//        $mail = $request->get('mail');
        $title = $request->get('title');
        $body = $request->get('body');



        Mail::send('mails.send', ['title' => $title, 'body' => $body], function ($message)
        {

            $message->from('molukaka@cytonn.com', 'Michael Olukaka');

            $message->to('molukaka-95e115@inbox.mailtrap.io');

        });


        return view('mails.subscribers', ['message' => 'Email Sent']);

//        return response()->json(['message' => 'Request completed']);


    }
}
