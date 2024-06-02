<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\FieldController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TimeSlotController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::middleware('can:manage fields')->group(function () {
            Route::resource('fields', FieldController::class);
        });

        Route::middleware('can:manage timeslot')->group(function () {
            Route::resource('timeslot', TimeSlotController::class);
        });

        Route::middleware('can:manage booking')->group(function () {
            Route::resource('bookings', BookingController::class);
        });
    });
});



require __DIR__ . '/auth.php';
