<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create()
    {
        
        return view('/contact');
    }

    public function sendEmail(Request $request)
    {
        request()->validate([
            'email' => ['required', 'email:rfc,dns'],
            'name' => 'required',
            'message' => 'required',
        ]);

        $details = [
            'email' => $request->email,
            'name' => $request->name,
            'lastName' => $request->lastName,
            'city' => $request->city,
            'message' => $request->message,

        ];

        Mail::to('basile.and.company@gmail.com')->send((new ContactMail($details)));
        return back()->with('message_sent', 'Your message has been sent successfully!');
    }
}

