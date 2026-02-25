<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataMurid;
use App\Models\DataPengajar;
use App\Models\DataKelas;
use App\Models\MataAjar;

class DashboardController extends Controller
{
    public function index()
    {
        $statistik = [
            'murid' => DataMurid::count(),
            'pengajar' => DataPengajar::count(),
            'kelas' => DataKelas::count(),
            'mapel' => MataAjar::count(),
        ];

        return view('dashboard', compact('statistik'));
    }
}
