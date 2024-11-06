<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DailyActivityController;
use App\Http\Controllers\AssetController;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/assets', [AssetController::class, 'index'])->name('assets.index');
Route::resource('assets', AssetController::class);


// routes/web.php
Route::get('/activities', [DailyActivityController::class, 'activities'])->name('activities.activities');
