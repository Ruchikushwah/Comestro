<?php

namespace App\Http\Controllers;

use App\Models\Otp;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function showLoginForm()
    {

        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->withErrors(['email' => 'The provided email does not match our records.']);
        }

        // Check if email is verified
        if (!$user->hasVerifiedEmail()) {
            return back()->withErrors(['email' => 'Please verify your email first.']);
        }

        // Generate a new OTP
        $otp = rand(100000, 999999);

        // Delete any previous OTPs for this user before inserting a new one
        Otp::where('email', $request->email)->delete();

        // Store OTP in the database
        Otp::create([
            'email' => $request->email,
            'otp' => $otp,
            'otp_expires_at' => Carbon::now()->addMinutes(10),
        ]);

        // Send OTP email
        try {
            Mail::send('emails.otp', ['otp' => $otp], function ($message) use ($user) {
                $message->to($user->email)->subject('Your OTP for Login');
            });

            return redirect()->route('auth.verify-otp', ['email' => $request->email])
                ->with('success', 'OTP sent successfully. Please check your email.');
        } catch (\Exception $e) {
            Log::error("Failed to send OTP email: " . $e->getMessage());
            return back()->with('error', 'Failed to send OTP. Please try again.');
        }
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'otp' => 'required|string',
        ]);

        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return back()->withErrors(['email' => 'User not found.']);
        }

        // Check OTP in Otp model
        $otpRecord = Otp::where('email', $request->email)
            ->where('otp', $request->otp)
            ->where('otp_expires_at', '>', now())
            ->first();

        if (!$otpRecord) {
            return back()->withErrors(['otp' => 'Invalid or expired OTP.']);
        }

        // Delete OTP after successful verification
        $otpRecord->delete();

        // Log the user in
        Auth::login($user);
        session(['user_id' => Auth::id()]);

        return redirect()->route('crm.lead')->with('success', 'Logged in successfully.');
    }


    public function sendOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);
    
        $email = $request->input('email');
        $otp = rand(100000, 999999);
    
        // Delete expired OTPs
        Otp::where('otp_expires_at', '<', now())->delete();
    
        // Store OTP in Otp table (not User model)
        Otp::updateOrCreate(
            ['email' => $email],
            ['otp' => $otp, 'otp_expires_at' => Carbon::now()->addMinutes(10)]
        );
    
        // Send OTP email
        try {
            Mail::send('emails.otp', ['otp' => $otp], function ($message) use ($email) {
                $message->to($email)->subject('Your OTP Code');
            });
    
            return redirect()->back()->with(['otp_sent' => true, 'email' => $email]);
        } catch (\Exception $e) {
            Log::error("Failed to send OTP email to {$email}: " . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to send OTP. Please try again.');
        }
    }
    


    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users,email',
            'contact' => 'required|digits:10|unique:users,contact',
            'g-recaptcha-response' => 'required',
        ], [
            'email.unique' => 'The email address is already taken.',
            'contact.unique' => 'The contact number is already in use.',
            'contact.digits' => 'The contact number must be exactly 10 digits.',

        ]);

        // Verify reCAPTCHA
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => config('services.recaptcha.secret_key'),
            'response' => $request->input('g-recaptcha-response'),
            'remoteip' => $request->ip(),
        ]);

        $result = $response->json();

        if (!$result['success']) {
            return back()->withErrors(['captcha' => 'Captcha verification failed. Please try again.'])->withInput();
        }

        // Create user with hashed password
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'contact' => $request->contact,

        ]);

        // Send confirmation email
        Mail::send('emails.registration', ['user' => $user], function ($message) use ($user) {
            $message->to($user->email)->subject('Registration Successful');
        });

        return redirect()->route('login')->with('success', 'Registration successful. A confirmation email has been sent.');
    }



    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'You have been logged out.');
    }
}
