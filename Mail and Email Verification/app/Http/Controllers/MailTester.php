<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
use App\Http\Controllers\MailTester;

class MailTester extends Controller
{
    public function sendEmail(){
        $detalis=[
            'title' => 'Mail from surfside Media',
            'body' => 'This is for testing mail using mailtrap'

        ];

        Mail::to("adres.hadeel99@gmail.com")->send(new SendEmail($detalis));
        return "Email Sent";


    }
}
