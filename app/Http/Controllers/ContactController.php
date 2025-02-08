<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function sendMessage(Request $request)
    {
        // Validate form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|max:5000',
        ]);

        // Prepare data
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ];

        // Send email
        Mail::to(config('mail.from.address'))->send(new ContactFormMail($data));


        // Return success response
        return back()->with('success', 'Your message has been sent successfully!');
    }
}
