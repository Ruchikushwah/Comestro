<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TicketController;
use App\Livewire\Contact\CreateContact;
use App\Livewire\Contact\ManageContact;
use App\Livewire\Lead\CreateLead;
use App\Livewire\Lead\ManageLead;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/support', function () {
    return view('support.generate-ticket');
})->name('support.generate.ticket');

Route::get('/footer', function () {
    return view('footer');
});

Route::get('/portfolio/create', function () {
    return view('portfolio/create');
});
Route::get('/portfolio/edit', function () {
    return view('portfolio/edit');
});
Route::get('/portfolio/index', function () {
    return view('portfolio/index');
});

Route::get('/about', function () {
    return view('about/about');
});

Route::get('services', function () {
    return view('services');
});

Route::get('contactus', function () {
    return view('contactus');
});
Route::get('contact-us', function () {
    return view('contact-us');
});

Route::get('/get-touch', function () {
    return view('get-touch');
});
Route::get('/code', function () {
    return view('code');
});

Route::prefix("crm")->group(function () {
    Route::get("/", function () {
        // Pass the authenticated user's name to the dashboard view
        return view("crm.dashboard", ['userName' => Auth::user()->name]);
    })->middleware('auth'); // Ensure the user is authenticated

    Route::get("/lead", function () {
        return view("crm.lead", ['userName' => Auth::user()->name]);
    })->name("crm.lead")->middleware('auth');
    Route::get("/contact", function () {
        return view("crm.contact", ['userName' => Auth::user()->name]);
    })->name("crm.contact")->middleware('auth');
});

Route::get('/create-lead', CreateLead::class)->name('create-lead');
Route::get('/create-lead/edit/{id}', CreateLead::class)->name('create-lead.edit');
Route::get('/manage-leads', ManageLead::class)->name('lead.manage-leads');

Route::get('/create-contact', CreateContact::class)->name('create-contact');
Route::get('/create-contact/edit/{id}', CreateContact::class)->name('create-contact.edit');
Route::get('/manage-contact', ManageContact::class)->name('contact.manage-contact');



Route::prefix('auth')->controller(AuthController::class)->group(function () {
    Route::get('/login', 'showLoginForm')->name('login');
    Route::get("/register", "showRegister")->name('auth.register');
    Route::post('/login', 'login')->name('auth.login.post');
    Route::post('/register', 'register')->name('auth.register.post');
    Route::get('/verify-otp',  'showOtpForm')->name('show.otp.form');


    // OTP verification handling route (POST request to verify OTP)
    Route::post('verify-otp',  'verifyOtp')->name('auth.verify-otp');
    Route::post('send-otp', 'sendOtp')->name('auth.sendOtp');
    Route::get('/logout',  'logout')->name('auth.logout');
});


Route::get('/support/view/{id}', [TicketController::class, 'view'])->name('support.ticket.view');
