<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', DashboardController::class)->name('index');
Route::get('/dashboard', DashboardController::class)->name('dashboard');
