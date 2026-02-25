<?php

namespace App\Http\Controllers;

use App\Models\MataPelajaranSekolah;
use Illuminate\Http\Request;

class MapelSekolahController extends Controller
{
    public function index()
    {
        $list = MataPelajaranSekolah::all();
        return view('halaman.mapel.index', compact('list'));
    }

    public function create()
    {
        return view('halaman.mapel.tambah');
    }

    public function store(Request $request)
    {
        $item = new MataPelajaranSekolah();
        $item->nama_mapel = $request->nama_mapel;
        $item->kategori_mapel = $request->kategori_mapel;
        $item->save();
        return redirect('/mapel')->with('pesan', 'Mata pelajaran disimpan!');
    }

    public function edit($id)
    {
        $item = MataPelajaranSekolah::findOrFail($id);
        return view('halaman.mapel.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = MataPelajaranSekolah::findOrFail($id);
        $item->nama_mapel = $request->nama_mapel;
        $item->kategori_mapel = $request->kategori_mapel;
        $item->save();
        return redirect('/mapel')->with('pesan', 'Mata pelajaran diupdate!');
    }

    public function destroy($id)
    {
        MataPelajaranSekolah::destroy($id);
        return redirect('/mapel')->with('pesan', 'Mata pelajaran dihapus!');
    }
}
