<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalonSiswaController;

Route::get('/daftar', [CalonSiswaController::class, 'create'])->name('calon-siswa.create');
Route::post('/daftar', [CalonSiswaController::class, 'store'])->name('calon-siswa.store');

Route::get('/', function () {
    return view('welcome');
});
