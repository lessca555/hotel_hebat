<?php

use App\Http\Controllers\BedController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'pageUserAccess'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/room', [RoomController::class, 'index'])->name('room.index');
    Route::get('/bed', [BedController::class, 'index'])->name('bed.index');
    Route::get('/facility', [FacilityController::class, 'index'])->name('facility.index');
});

require __DIR__.'/auth.php';
