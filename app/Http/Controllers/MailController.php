<?php

namespace App\Http\Controllers;

use App\Mail\mailSend;
use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{

    public function send()
    {
        Mail::send(new mailSend());
    }

    public function email()
    {
        return view('emailMessage');
    }

}
