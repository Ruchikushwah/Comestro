<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    public function sendMessage(Request $request)
    {
        // Validate basic form fields
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|max:5000',
            'g-recaptcha-response' => 'required',
        ]);

        // Verify reCAPTCHA
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => env('RECAPTCHA_SECRET_KEY'),
            'response' => $request->input('g-recaptcha-response')
        ]);

        $result = $response->json();

        if (!$result['success']) {
            return back()->withErrors(['captcha' => 'Captcha verification failed. Please try again.'])->withInput();
        }

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
