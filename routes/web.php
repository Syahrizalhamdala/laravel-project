<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Arahkan root (/) langsung ke halaman login Breeze
Route::get('/', function () {
    return redirect()->route('login');
});

// Halaman dashboard, hanya bisa diakses setelah login
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/aktivitas', function () {
    return view('aktivitas');
})->name('aktivitas');
Route::get('/notifikasi', function () {
    return view('notifikasi');
})->name('notifikasi');

// Group route untuk profile, hanya bisa diakses setelah login
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Ini penting! Memuat semua route auth dari Breeze (login, register, logout, dll)
require __DIR__.'/auth.php';
