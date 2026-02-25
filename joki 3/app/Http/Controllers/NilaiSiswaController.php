<?php

namespace App\Http\Controllers;

use App\Models\NilaiSiswa;
use App\Models\SiswaSekolah;
use App\Models\MataPelajaranSekolah;
use Illuminate\Http\Request;

class NilaiSiswaController extends Controller
{
    public function index()
    {
        $data = NilaiSiswa::with(['siswa', 'mapel'])->get();
        return view('nilai_siswa.index', compact('data'));
    }

    public function create()
    {
        $siswa = SiswaSekolah::all();
        $mapel = MataPelajaranSekolah::all();
        return view('nilai_siswa.tambah', compact('siswa', 'mapel'));
    }

    public function store(Request $request)
    {
        $item = new NilaiSiswa();
        $item->id_siswa = $request->id_siswa;
        $item->id_mapel = $request->id_mapel;
        $item->nilai_uts = $request->nilai_uts;
        $item->nilai_uas = $request->nilai_uas;
        $item->nilai_akhir = ($request->nilai_uts + $request->nilai_uas) / 2;
        $item->save();
        return redirect()->route('nilai_siswa.index')->with('pesan', 'Laporan nilai disimpan!');
    }

    public function destroy($id)
    {
        NilaiSiswa::destroy($id);
        return redirect()->route('nilai_siswa.index')->with('pesan', 'Laporan nilai dihapus!');
    }
}
