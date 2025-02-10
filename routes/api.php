<?php

use App\Http\Controllers\GenerateTicketApiController;
use App\Http\Controllers\MessageApiController;
use App\Http\Controllers\ProblemCateogryApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/admin/support/messages',[MessageApiController::class, 'getMessageAdmin']);
Route::get('/admin/support/tickets',[GenerateTicketApiController::class, 'getTicketsAdmin']);