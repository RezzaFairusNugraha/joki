<?php

namespace App\Http\Controllers;

use App\Models\Kelas_Sekolah;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $kelases = Kelas_Sekolah::all();
        return view('kelas_sekolah.index', compact('kelases'));
    }

    public function create()
    {
        return view('kelas_sekolah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jurusan_kelas' => 'required',
            'nama_kelas' => 'required',
        ]);

        Kelas_Sekolah::create($request->all());

        return redirect()->route('kelas_sekolah.index')->with('success', 'Data kelas berhasil ditambahkan');
    }

    public function edit($id)
    {
        $kela = Kelas_Sekolah::findOrFail($id);
        return view('kelas_sekolah.edit', compact('kela'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'jurusan_kelas' => 'required',
            'nama_kelas' => 'required',
        ]);

        $kela = Kelas_Sekolah::findOrFail($id);
        $kela->update($request->all());

        return redirect()->route('kelas_sekolah.index')->with('success', 'Data kelas berhasil diperbarui');
    }

    public function destroy($id)
    {
        $kela = Kelas_Sekolah::findOrFail($id);
        $kela->delete();

        return redirect()->route('kelas_sekolah.index')->with('success', 'Data kelas berhasil dihapus');
    }
}
