<?php

namespace App\Http\Controllers;

use App\Models\MataPelajaranSekolah;
use Illuminate\Http\Request;

class MataPelajaranSekolahController extends Controller
{
    public function index()
    {
        $list = MataPelajaranSekolah::all();
        return view('mata_pelajaran_sekolah.index', compact('list'));
    }

    public function create()
    {
        return view('mata_pelajaran_sekolah.tambah');
    }

    public function store(Request $request)
    {
        $item = new MataPelajaranSekolah();
        $item->nama_mapel = $request->nama_mapel;
        $item->kategori_mapel = $request->kategori_mapel;
        $item->save();
        return redirect()->route('mata_pelajaran_sekolah.index')->with('pesan', 'Mata pelajaran disimpan!');
    }

    public function edit($id)
    {
        $item = MataPelajaranSekolah::findOrFail($id);
        return view('mata_pelajaran_sekolah.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = MataPelajaranSekolah::findOrFail($id);
        $item->nama_mapel = $request->nama_mapel;
        $item->kategori_mapel = $request->kategori_mapel;
        $item->save();
        return redirect()->route('mata_pelajaran_sekolah.index')->with('pesan', 'Mata pelajaran diupdate!');
    }

    public function destroy($id)
    {
        MataPelajaranSekolah::destroy($id);
        return redirect()->route('mata_pelajaran_sekolah.index')->with('pesan', 'Mata pelajaran dihapus!');
    }
}
