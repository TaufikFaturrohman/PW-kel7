<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/berita', function () {
    return view('berita.berita');
});
Route::get('/detail', function () {
    return view('berita.detail');
});

// login
Route::get('/login',[AuthController::class,'index'])->name('login');
Route::post('/login',[AuthController::class,'store']);
Route::post('/logout',[AuthController::class,'destroy'])->name('logout');
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard')->middleware('auth');

// Route::get('/mahasiswa',[MahasiswaController::class,'mahasiswa']);
Route::get('/profil', function () {
    return view('form.profile');
});