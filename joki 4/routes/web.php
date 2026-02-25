<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MataPelajaranController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\MapelDiampuController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('kelas_sekolah', KelasController::class);
Route::resource('pelajaran', MataPelajaranController::class);
Route::resource('murid', SiswaController::class);
Route::resource('pengajar', GuruController::class);
Route::resource('pengumuman', BeritaController::class);
Route::resource('nilai_siswa', NilaiController::class);
Route::resource('mengajar', MapelDiampuController::class);
