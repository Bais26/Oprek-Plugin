<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CalonSiswaController;
use App\Http\Controllers\ClassController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ClassController::class, 'index'])->name('welcome');
Route::get('/kelas/{id}', [ClassController::class, 'show'])->name('kelas.detail');

Route::get('/daftarkelas', function () {
    return view('daftarkelas');
})->name('daftar-kelas');

Route::post('/calon_siswa', [CalonSiswaController::class, 'store'])->name('calon_siswa.store');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

