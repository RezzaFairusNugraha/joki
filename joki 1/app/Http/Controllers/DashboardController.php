<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\MataPelajaran;

// Controller untuk halaman utama (Dashboard)
class DashboardController extends Controller
{
    public function index()
    {
        // Hitung jumlah data untuk ditampilkan di dashboard
        $jumlah_siswa = Siswa::count();
        $jumlah_guru = Guru::count();
        $jumlah_kelas = Kelas::count();
        $jumlah_mapel = MataPelajaran::count();

        // Kirim data ke view dashboard
        return view('dashboard', compact('jumlah_siswa', 'jumlah_guru', 'jumlah_kelas', 'jumlah_mapel'));
    }
}
