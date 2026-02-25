<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataPelajaran;

// Controller untuk mengelola data Mata Pelajaran
class MapelController extends Controller
{
    public function index()
    {
        $mapel = MataPelajaran::all();
        return view('Mata_Pelajaran.index', compact('mapel'));
    }

    public function create()
    {
        return view('Mata_Pelajaran.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_mapel' => 'required',
            'kategori' => 'required',
        ]);

        $mapel = new MataPelajaran();
        $mapel->nama_mapel = $request->nama_mapel;
        $mapel->kategori = $request->kategori;
        $mapel->save();

        return redirect()->route('Mata_Pelajaran.index')->with('success', 'Data mapel berhasil ditambah!');
    }

    public function edit($id)
    {
        $mapel = MataPelajaran::find($id);
        return view('Mata_Pelajaran.edit', compact('mapel'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_mapel' => 'required',
            'kategori' => 'required',
        ]);

        $mapel = MataPelajaran::find($id);
        $mapel->nama_mapel = $request->nama_mapel;
        $mapel->kategori = $request->kategori;
        $mapel->save();

        return redirect()->route('Mata_Pelajaran.index')->with('success', 'Data mapel berhasil diubah!');
    }

    public function destroy($id)
    {
        $mapel = MataPelajaran::find($id);
        $mapel->delete();

        return redirect()->route('Mata_Pelajaran.index')->with('success', 'Data mapel berhasil dihapus!');
    }
}
