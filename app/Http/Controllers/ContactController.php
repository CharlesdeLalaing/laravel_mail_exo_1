<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\MailSubject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(){
        $mailOptions = MailSubject::all();
        return view('contact-us', compact('mailOptions'));
    }

    public function sendEmail(Request $request){
        $details = [
            'name' => $request->name,
            'subject' => $request->subject,
            'email' => $request->email,
            'message' => $request->message,
        ];

        Mail::to('Charles.delalaing@gmail.com')->send(new ContactMail($details));

        return back()->with('message_send', 'Your message has been sent successfully !');
    }
}
