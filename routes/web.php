<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return redirect()->route('backend.login');
});

Route::get('backend/beranda', [BerandaController::class, 'berandaBackend'])
    ->name('backend.beranda')
    ->middleware('auth');

Route::get('backend/login', [LoginController::class, 'loginBackend'])->name('backend.login');
Route::post('backend/login', [LoginController::class, 'authenticateBackend']);
Route::post('backend/logout', [LoginController::class, 'logoutBackend'])->name('backend.logout');
Route::get('backend/beranda', [BerandaController::class, 'berandaBackend'])
    ->name('backend.beranda')
    ->middleware('auth'); // <--- Baris ini yang paling penting

// Rute untuk menampilkan halaman login
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Rute untuk memproses data login (POST)
Route::post('/login', function () {
    // Sementara kosongkan atau arahkan ke controller autentikasi kamu
})->name('login.post');
