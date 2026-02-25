<?php

namespace App\Http\Controllers;

use App\Models\Murid;
use App\Models\Pengajar;
use App\Models\Kelas_Sekolah;
use App\Models\Pelajaran;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalSiswa = Murid::count();
        $totalGuru = Pengajar::count();
        $totalKelas = Kelas_Sekolah::count();
        $totalMapel = Pelajaran::count();

        return view('dashboard', compact('totalSiswa', 'totalGuru', 'totalKelas', 'totalMapel'));
    }
}
