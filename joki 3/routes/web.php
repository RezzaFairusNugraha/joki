<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelasSekolahController;
use App\Http\Controllers\SiswaSekolahController;
use App\Http\Controllers\GuruSekolahController;
use App\Http\Controllers\MataPelajaranSekolahController;
use App\Http\Controllers\MapelDiampuKelasController;
use App\Http\Controllers\NilaiSiswaController;
use App\Http\Controllers\BeritaSekolahController;

// Dashboard
Route::get('/', [DashboardController::class, 'index']);

// Resource Routes (Simplified)
Route::resource('kelas_sekolah', KelasSekolahController::class);
Route::resource('siswa_sekolah', SiswaSekolahController::class);
Route::resource('guru_sekolah', GuruSekolahController::class);
Route::resource('mata_pelajaran_sekolah', MataPelajaranSekolahController::class);
Route::resource('mapel_diampu_kelas', MapelDiampuKelasController::class);
Route::resource('nilai_siswa', NilaiSiswaController::class);
Route::resource('berita_sekolah', BeritaSekolahController::class);
