<?php

namespace App\Http\Controllers;

use App\Models\Nilai_Siswa;
use App\Models\Murid;
use App\Models\Pelajaran;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        $nilais = Nilai_Siswa::with(['murid', 'pelajaran'])->get();
        return view('nilai_siswa.index', compact('nilais'));
    }

    public function create()
    {
        $siswas = Murid::all();
        $mapels = Pelajaran::all();
        return view('nilai_siswa.create', compact('siswas', 'mapels'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_murid' => 'required|exists:Murid,id_murid',
            'id_pelajaran' => 'required|exists:Pelajaran,id_pelajaran',
            'nilai_uts' => 'nullable|integer',
            'nilai_uas' => 'nullable|integer',
            'nilai_akhir' => 'nullable|integer',
        ]);

        Nilai_Siswa::create($request->all());
        return redirect()->route('nilai_siswa.index')->with('success', 'Nilai berhasil ditambahkan');
    }

    public function edit($id)
    {
        $nilai = Nilai_Siswa::findOrFail($id);
        $siswas = Murid::all();
        $mapels = Pelajaran::all();
        return view('nilai_siswa.edit', compact('nilai', 'siswas', 'mapels'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_murid' => 'required|exists:Murid,id_murid',
            'id_pelajaran' => 'required|exists:Pelajaran,id_pelajaran',
            'nilai_uts' => 'nullable|integer',
            'nilai_uas' => 'nullable|integer',
            'nilai_akhir' => 'nullable|integer',
        ]);

        $nilai = Nilai_Siswa::findOrFail($id);
        $nilai->update($request->all());
        return redirect()->route('nilai_siswa.index')->with('success', 'Nilai berhasil diupdate');
    }

    public function destroy($id)
    {
        $nilai = Nilai_Siswa::findOrFail($id);
        $nilai->delete();
        return redirect()->route('nilai_siswa.index')->with('success', 'Nilai berhasil dihapus');
    }
}
