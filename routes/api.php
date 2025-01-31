<?php

use App\Http\Controllers\GenerateTicketApiController;
use App\Http\Controllers\ProblemCateogryApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/support/call_tickets', [GenerateTicketApiController::class, 'index']);
Route::post('/support/generate_tickets',[GenerateTicketApiController::class, 'store']);
Route::post('/support/view/${id}',[GenerateTicketApiController::class, 'show']);
Route::post('/support',[ProblemCateogryApiController::class, 'store'])->name('problem.store');
Route::get('/support',[ProblemCateogryApiController::class, 'index'])->name('support.index');
Route::get('/support/{id}',[ProblemCateogryApiController::class, 'show'])->name('support.show');

