<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Frontend\FrontController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::prefix('backend')->group(function () {
    // Route::middleware('')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('home', HomeController::class)->names('home');
    // });
});

Route::prefix('')->group(function () {
        Route::get('/', [FrontController::class, 'index'])->name('front');
});
