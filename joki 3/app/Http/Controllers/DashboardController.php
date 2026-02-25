<?php

namespace App\Http\Controllers;

use App\Models\SiswaSekolah;
use App\Models\GuruSekolah;
use App\Models\KelasSekolah;
use App\Models\MataPelajaranSekolah;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $statistik = [
            'siswa' => SiswaSekolah::count(),
            'guru' => GuruSekolah::count(),
            'kelas' => KelasSekolah::count(),
            'mapel' => MataPelajaranSekolah::count()
        ];
        return view('dashboard', compact('statistik'));
    }
}
