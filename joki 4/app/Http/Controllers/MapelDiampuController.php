<?php

namespace App\Http\Controllers;

use App\Models\Mengajar;
use App\Models\Pengajar;
use App\Models\Kelas_Sekolah;
use App\Models\Pelajaran;
use Illuminate\Http\Request;

class MapelDiampuController extends Controller
{
    public function index()
    {
        $ampus = Mengajar::with(['pengajar', 'kelas', 'pelajaran'])->get();
        return view('mengajar.index', compact('ampus'));
    }

    public function create()
    {
        $gurus = Pengajar::all();
        $kelases = Kelas_Sekolah::all();
        $mapels = Pelajaran::all();
        return view('mengajar.create', compact('gurus', 'kelases', 'mapels'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_pengajar' => 'required|exists:Pengajar,id_pengajar',
            'id_kelas' => 'required|exists:Kelas_Sekolah,id_kelas',
            'id_pelajaran' => 'required|exists:Pelajaran,id_pelajaran',
        ]);

        Mengajar::create($request->all());
        return redirect()->route('mengajar.index')->with('success', 'Data mengajar berhasil ditambahkan');
    }

    public function edit($id)
    {
        $ampu = Mengajar::findOrFail($id);
        $gurus = Pengajar::all();
        $kelases = Kelas_Sekolah::all();
        $mapels = Pelajaran::all();
        return view('mengajar.edit', compact('ampu', 'gurus', 'kelases', 'mapels'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_pengajar' => 'required|exists:Pengajar,id_pengajar',
            'id_kelas' => 'required|exists:Kelas_Sekolah,id_kelas',
            'id_pelajaran' => 'required|exists:Pelajaran,id_pelajaran',
        ]);

        $ampu = Mengajar::findOrFail($id);
        $ampu->update($request->all());
        return redirect()->route('mengajar.index')->with('success', 'Data mengajar berhasil diupdate');
    }

    public function destroy($id)
    {
        $ampu = Mengajar::findOrFail($id);
        $ampu->delete();
        return redirect()->route('mengajar.index')->with('success', 'Data mengajar berhasil dihapus');
    }
}
