<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\DobbelstenenController;

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

// Route voor het bijwerken van dobbelstenen vanuit de ESP32
Route::post('/updateDobbelstenen', [DobbelstenenController::class, 'updateDobbelstenenFromESP32'])->name('updateDobbelstenen');


// use App\Http\Middleware\UpdateUserActivity;
// use App\Http\Middleware\CheckMacMiddleware;
// use App\Http\Controllers\WelcomeController;
// use App\Http\Controllers\BakController;
// use Illuminate\Support\Facades\Route;

// Route::middleware([CheckMacMiddleware::class, UpdateUserActivity::class])->get('/', [WelcomeController::class, 'index'])->name('welcome');
// Route::post("/updateDobbelstenen", [BakController::class, "updateDobbelstenen"]);
