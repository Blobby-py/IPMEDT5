<?php

use App\Http\Middleware\UpdateUserActivity;
use App\Http\Middleware\CheckMacMiddleware;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::middleware([CheckMacMiddleware::class, UpdateUserActivity::class])->get('/', [WelcomeController::class, 'index'])->name('welcome');
// Route::middleware([UpdateUserActivity::class, CheckMacMiddleware::class])->get('/', [WelcomeController::class, 'index'])->name('welcome');

// use App\Http\Middleware\UpdateUserActivity;
// use Illuminate\Support\Facades\DB;
// use App\Http\Middleware\CheckMacMiddleware;
// use App\Http\Controllers\WelcomeController;

// Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

// Route::middleware([UpdateUserActivity::class])->get('/', function () {
//     $activeUsers = DB::table('user_activities')->get();
//     return view('welcome', ['activeUsers' => $activeUsers]);
// });

// Route::middleware([CheckMacMiddleware::class])->get('/', 'WelcomeController@index');

