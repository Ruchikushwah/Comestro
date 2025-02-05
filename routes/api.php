<?php

use App\Http\Controllers\GenerateTicketApiController;
use App\Http\Controllers\MessageApiController;
use App\Http\Controllers\ProblemCateogryApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/messages',[MessageApiController::class, 'storeMessage']);
Route::get('/messages/{ticketId}',[MessageApiController::class, 'getMessage']);

Route::get('/support/call_tickets', [GenerateTicketApiController::class, 'index']);
Route::post('/support/generate_tickets',[GenerateTicketApiController::class, 'store']);
Route::get('/support/view_tickets/{id}',[GenerateTicketApiController::class, 'show']);
Route::post('/support/close/{id}', [GenerateTicketApiController::class, 'closeTicket']);

Route::post('/support',[ProblemCateogryApiController::class, 'store'])->name('problem.store');
Route::get('/support',[ProblemCateogryApiController::class, 'index'])->name('support.index');
Route::get('/support/{id}',[ProblemCateogryApiController::class, 'show'])->name('support.show');

