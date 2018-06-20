<?php

namespace App\Http\Controllers\User;

use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('user.contact');
    }
    public function send(Request $request)
    {
        $token = $request->input('g-recaptcha-response');

        if ($token) {
            Mail::to('elispizzeria12@gmail.com')->send(new ContactMessage());
            return redirect()->back()->with('alert_message','Successfully sent message!');
        } else {
            return redirect()->back()->with('alert_message','You are robot!');
        }
    }
}
