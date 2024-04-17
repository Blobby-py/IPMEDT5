<?php

use App\Http\Middleware\UpdateUserActivity;
use App\Http\Middleware\CheckMacMiddleware;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Esp32Controller;

Route::middleware([CheckMacMiddleware::class, UpdateUserActivity::class])->get('/', [WelcomeController::class, 'index'])->name('welcome');


