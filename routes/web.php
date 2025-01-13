<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\RegistrationController;
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


// nav
Route::get('/profil', function () {
    return view('form.profile');
});

Route::get('/prodi', function () {
    return view('form.prodi');
});

Route::get('/prestasi', function () {
    return view('form.prestasi');
});
Route::get('/mesjid', function () {
    return view('form.mesjid');
});

Route::get('/labkom', function () {
    return view('form.labkom');
});

Route::get('/visimisi', function () {
    return view('form.visi-misi');
});

// daftar

Route::get('/pendaftaran', [RegistrationController::class, 'create'])->name('form.form-daftar');
Route::post('/pendaftaran', [RegistrationController::class, 'store'])->name('form.create');

