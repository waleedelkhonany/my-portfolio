<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::prefix('backend')->group(function () {
    // Route::middleware('')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('Dashboard');
    // });
});
