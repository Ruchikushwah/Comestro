<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GenerateTicketApiController;
use App\Http\Controllers\MessageApiController;
use App\Http\Controllers\ProblemCateogryApiController;
use App\Http\Controllers\TicketController;
use App\Livewire\Contact\CreateContact;
use App\Livewire\Contact\ManageContact;
use App\Livewire\CrmDashboard;
use App\Livewire\Lead\CreateLead;
use App\Livewire\Lead\ManageLead;
use App\Livewire\Quote\CreateQuote;
use App\Livewire\Quote\ManageQuote;
use App\Livewire\Support\ViewTickets;
use App\Models\Tickets;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::middleware('auth')->get('/support', function () {
    return view('support.manage_tickets');
})->name('support.generate.ticket');


Route::get("/services", function () {
    return view('services');
})->name("services");


Route::get('/admin', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::prefix("admin")->group(function(){
    Route::get("/support/tickets", function () {
        return view("support.admin.ticketList", ['userName' => Auth::user()->name]);
    })->middleware('auth');

    Route::get("/support/tickets/{ticket}", function (Tickets $ticket) {
        return view("support.admin.viewTickets", ["ticket"=>$ticket]);
    })->middleware('auth')->name('admin.support.ticket.view');

    // Route::get("/support/tickets/{ticketId}", ViewTickets::class)->middleware('auth')->name('admin.support.ticket.view');

});


Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

Route::get('/footer', function () {
    return view('footer');
});
Route::get('/about', function () {
    return view('about/about');
})->name('about');

Route::get('contactus', function () {
    return view('contactus');
})->name('contactus');

Route::get('code', function () {
    return view('component.code');
});

// Route::get('contact-us', function () {
//     return view('contact-us');
// });

Route::get('/get-touch', function () {
    return view('component.get-touch');
});
Route::get('/brands', function () {
    return view('brands');
});

Route::prefix("crm")->group(function () {
    Route::get("/", function () {
        return view("crm.dashboard", ['userName' => Auth::user()->name]);
    })->middleware('auth');

    Route::get("/lead", function () {
        return view("crm.lead", ['userName' => Auth::user()->name]);
    })->name("crm.lead")->middleware('auth');
    Route::get("/contact", function () {
        return view("crm.contact", ['userName' => Auth::user()->name]);
    })->name("crm.contact")->middleware('auth');
    Route::get("/quote", function () {
        return view("crm.quote", ['userName' => Auth::user()->name]);
    })->name("crm.quote")->middleware('auth');
});

Route::get('/send-message', function () {
    return view('send-message');
})->name('send-message');

Route::post('/send-message', [ContactController::class, 'sendMessage'])->name('send.message');
Route::get('/create-lead', CreateLead::class)->name('create-lead');
Route::get('/create-lead/edit/{id}', CreateLead::class)->name('create-lead.edit');
//Route::get('/create-lead/delete/{id}', CreateLead::class)->name('create-lead.delete');
Route::get('/manage-leads', ManageLead::class)->name('lead.manage-leads');

Route::get('/create-contact', CreateContact::class)->name('create-contact');
Route::get('/create-contact/edit/{id}', CreateContact::class)->name('create-contact.edit');
//Route::get('/create-contact/delete/{id}', CreateContact::class)->name('create-contact.delete');
Route::get('/manage-contact', ManageContact::class)->name('contact.manage-contact');

Route::get('/create-quote', CreateQuote::class)->name('create-quote');
Route::get('/create-quote/edit/{id}', CreateQuote::class)->name('create-quote.edit');
Route::get('/manage-quote', ManageQuote::class)->name('contact.manage-quote');

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




Route::middleware('auth')->group(function () {
    Route::post('/messages', [MessageApiController::class, 'storeMessage']);
    Route::get('/messages/{ticketId}', [MessageApiController::class, 'getMessage']);

    Route::get('/support/call_tickets', [GenerateTicketApiController::class, 'index']);
    Route::post('/support/generate_tickets', [GenerateTicketApiController::class, 'store']);
    Route::get('/support/view_tickets/{id}', [GenerateTicketApiController::class, 'show']);
    Route::post('/support/close/{id}', [GenerateTicketApiController::class, 'closeTicket']);
    Route::get('/support', [TicketController::class, 'manageTickets'])->name('support.tickets.manage');

    Route::post('/support', [ProblemCateogryApiController::class, 'store'])->name('problem.store');
    Route::get('/support-api', [ProblemCateogryApiController::class, 'index'])->name('support.index');
    Route::get('/support/{id}', [ProblemCateogryApiController::class, 'show'])->name('support.show');
    Route::get('/support/view/{id}', [TicketController::class, 'viewTicket'])->name('support.tickets.view');
});

Route::get('/error-test', function () {
    abort(500); // This will trigger the custom 500 error page
});
