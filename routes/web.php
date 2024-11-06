<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DailyActivityController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\NotificationController;


Route::get('/login', function () {
    return view('login');
});

Route::get('/', function () {
    return view('login');
});

Route::get('/logout', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});


Route::get('/assets', [AssetController::class, 'index'])->name('assets.index');
Route::resource('assets', AssetController::class);

// Route untuk menampilkan halaman notifikasi
Route::get('/notification', [NotificationController::class, 'index'])->name('notification.index');


Route::get('/activities', [DailyActivityController::class, 'activities'])->name('activities.activities');
