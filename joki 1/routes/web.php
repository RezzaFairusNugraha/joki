<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\MapelDiampuController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\BeritaController;

// Halaman Utama (Dashboard)
Route::get('/', [DashboardController::class, 'index']);

// Resource Routes (Simplified)
Route::resource('Kelas', KelasController::class);
Route::resource('Siswa', SiswaController::class);
Route::resource('Guru', GuruController::class);
Route::resource('Mata_Pelajaran', MapelController::class);
Route::resource('Mapel_Diampu', MapelDiampuController::class);
Route::resource('Nilai', NilaiController::class);
Route::resource('Berita', BeritaController::class);

