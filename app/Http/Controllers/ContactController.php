<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactForm;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request){
    	$email = new ContactForm($request);
    	Mail::to($request->email)->send($email);
    	return "OK";
    }
}
