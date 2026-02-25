<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataKelasController;
use App\Http\Controllers\DataMuridController;
use App\Http\Controllers\DataPengajarController;
use App\Http\Controllers\MataAjarController;
use App\Http\Controllers\PengajarMengajarController;
use App\Http\Controllers\RekapNilaiController;
use App\Http\Controllers\InfoSekolahController;

// Dashboard
Route::get('/', [DashboardController::class, 'index']);

// Resource Routes (Simplified)
Route::resource('data_kelas', DataKelasController::class);
Route::resource('data_murid', DataMuridController::class);
Route::resource('data_pengajar', DataPengajarController::class);
Route::resource('mata_ajar', MataAjarController::class);
Route::resource('pengajar_mengajar', PengajarMengajarController::class);
Route::resource('rekap_nilai', RekapNilaiController::class);
Route::resource('info_sekolah', InfoSekolahController::class);

