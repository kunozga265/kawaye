<?php

namespace App\Http\Controllers;

use App\Mail\SendMessageMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class AppController extends Controller
{
    public function sendMessage(Request $request)
    {
        $request->validate([
           "name" => ["required"],
           "email" => ["required"],
           "subject" => ["required"],
           "message" => ["required"],
        ]);

        Mail::to(env('MAIL_TO'))->send(new SendMessageMail($request));


        return Redirect::back()->with("success","Email sent successfully");
    }
}
