<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataKelas;

class DataKelasController extends Controller
{
    public function index()
    {
        $data = DataKelas::all();
        return view('data_kelas.index', compact('data'));
    }

    public function create()
    {
        return view('data_kelas.tambah');
    }

    public function store(Request $request)
    {
        $kelas = new DataKelas();
        $kelas->nama_jurusan = $request->nama_jurusan;
        $kelas->nama_kelas = $request->nama_kelas;
        $kelas->save();

        return redirect()->route('data_kelas.index')->with('pesan', 'Kelas berhasil disimpan!');
    }

    public function edit($id)
    {
        $item = DataKelas::find($id);
        return view('data_kelas.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $kelas = DataKelas::find($id);
        $kelas->nama_jurusan = $request->nama_jurusan;
        $kelas->nama_kelas = $request->nama_kelas;
        $kelas->save();

        return redirect()->route('data_kelas.index')->with('pesan', 'Kelas berhasil diupdate!');
    }

    public function destroy($id)
    {
        DataKelas::find($id)->delete();
        return redirect()->route('data_kelas.index')->with('pesan', 'Kelas dihapus!');
    }
}
