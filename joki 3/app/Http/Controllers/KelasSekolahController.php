<?php

namespace App\Http\Controllers;

use App\Models\KelasSekolah;
use Illuminate\Http\Request;

class KelasSekolahController extends Controller
{
    public function index()
    {
        $data = KelasSekolah::all();
        return view('kelas_sekolah.index', compact('data'));
    }

    public function create()
    {
        return view('kelas_sekolah.tambah');
    }

    public function store(Request $request)
    {
        $item = new KelasSekolah();
        $item->jurusan_kelas = $request->jurusan_kelas;
        $item->nama_kelas = $request->nama_kelas;
        $item->save();
        return redirect()->route('kelas_sekolah.index')->with('pesan', 'Kelas berhasil disimpan!');
    }

    public function edit($id)
    {
        $item = KelasSekolah::findOrFail($id);
        return view('kelas_sekolah.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = KelasSekolah::findOrFail($id);
        $item->jurusan_kelas = $request->jurusan_kelas;
        $item->nama_kelas = $request->nama_kelas;
        $item->save();
        return redirect()->route('kelas_sekolah.index')->with('pesan', 'Kelas berhasil diupdate!');
    }

    public function destroy($id)
    {
        KelasSekolah::destroy($id);
        return redirect()->route('kelas_sekolah.index')->with('pesan', 'Kelas berhasil dihapus!');
    }
}
