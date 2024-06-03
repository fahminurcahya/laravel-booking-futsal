<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\FieldController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TimeSlotController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// })->middleware(['auth', 'verified'])->name('admin.dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::group(['as' => 'admin.', 'prefix' => 'admin'], function () {
        Route::get('dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');
        Route::get('booking', [BookingController::class, 'index'])->name('booking');
        Route::get('timeslot', [TimeSlotController::class, 'index'])->name('timeslot');
        Route::get('field', [FieldController::class, 'index'])->name('field');
        Route::get('user', [UserController::class, 'index'])->name('user');



        //     Route::resource('field', FieldController::class)->names('field');

        //     // Route::middleware('can:manage timeslot')->group(function () {
        //     Route::resource('timeslot', TimeSlotController::class)->names('timeslot');
        //     // });

        //     // Route::middleware('can:manage booking')->group(function () {
        //     Route::resource('booking', BookingController::class)->names('booking');
        //     // });
    });
});



require __DIR__ . '/auth.php';
