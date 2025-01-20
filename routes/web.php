<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

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
