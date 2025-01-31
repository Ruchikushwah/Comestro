<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::middleware('auth')->get('/support',function(){
    return view('support.manage_tickets');
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

Route::get('services',function () {
    return view('services');
});

Route::get('contactus',function () {
    return view('contactus');
});


Route::get('/get-touch',function(){
    return view('get-touch');
});


Route::prefix("auth")->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::match(["get", "post"], "/login", "login")->name("auth.login");
        Route::match(["get", "post"], "/register", "register")->name("auth.register");
        
    });
});


Route::get('/support/view/{id}',[TicketController::class, 'view'])->name('support.ticket.view');
