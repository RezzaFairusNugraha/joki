<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nilai;
use App\Models\Siswa;
use App\Models\MataPelajaran;

// Controller untuk mengelola data Nilai Siswa
class NilaiController extends Controller
{
    public function index()
    {
        $nilai = Nilai::with(['siswa', 'mataPelajaran'])->get();
        return view('Nilai.index', compact('nilai'));
    }

    public function create()
    {
        $siswa = Siswa::all();
        $mapel = MataPelajaran::all();
        return view('Nilai.tambah', compact('siswa', 'mapel'));
    }

    public function store(Request $request)
    {
        $uts = $request->nilai_uts;
        $uas = $request->nilai_uas;
        $akhir = ($uts + $uas) / 2; // Hitung rata-rata sederhana

        $nilai = new Nilai();
        $nilai->id_siswa = $request->id_siswa;
        $nilai->id_mapel = $request->id_mapel;
        $nilai->nilai_uts = $uts;
        $nilai->nilai_uas = $uas;
        $nilai->nilai_akhir = $akhir;
        $nilai->save();

        return redirect()->route('Nilai.index')->with('success', 'Data nilai berhasil ditambah!');
    }

    public function edit($id)
    {
        $nilai = Nilai::find($id);
        $siswa = Siswa::all();
        $mapel = MataPelajaran::all();
        return view('Nilai.edit', compact('nilai', 'siswa', 'mapel'));
    }

    public function update(Request $request, $id)
    {
        $uts = $request->nilai_uts;
        $uas = $request->nilai_uas;
        $akhir = ($uts + $uas) / 2;

        $nilai = Nilai::find($id);
        $nilai->id_siswa = $request->id_siswa;
        $nilai->id_mapel = $request->id_mapel;
        $nilai->nilai_uts = $uts;
        $nilai->nilai_uas = $uas;
        $nilai->nilai_akhir = $akhir;
        $nilai->save();

        return redirect()->route('Nilai.index')->with('success', 'Data nilai berhasil diubah!');
    }

    public function destroy($id)
    {
        $nilai = Nilai::find($id);
        $nilai->delete();

        return redirect()->route('Nilai.index')->with('success', 'Data nilai berhasil dihapus!');
    }
}
