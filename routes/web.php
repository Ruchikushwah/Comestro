<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/footer', function () {
    return view('footer'); 
});

Route::get('/contact', function () {
    return view('contact'); 
});
