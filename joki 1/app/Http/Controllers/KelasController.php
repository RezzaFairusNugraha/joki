<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

// Controller untuk mengelola data Kelas
class KelasController extends Controller
{
    // Tampilkan semua data kelas
    public function index()
    {
        $kelas = Kelas::all();
        return view('Kelas.index', compact('kelas'));
    }

    // Tampilkan form tambah kelas
    public function create()
    {
        return view('Kelas.tambah');
    }

    // Simpan data kelas baru ke database
    public function store(Request $request)
    {
        // Validasi sederhana
        $request->validate([
            'jurusan' => 'required',
            'kelas' => 'required',
        ]);

        // Simpan data
        $kelas = new Kelas();
        $kelas->jurusan = $request->jurusan;
        $kelas->kelas = $request->kelas;
        $kelas->save();

        // Redirect kembali ke halaman index
        return redirect()->route('Kelas.index')->with('success', 'Data kelas berhasil ditambah!');
    }

    // Tampilkan form edit kelas
    public function edit($id)
    {
        $kelas = Kelas::find($id);
        return view('Kelas.edit', compact('kelas'));
    }

    // Update data kelas di database
    public function update(Request $request, $id)
    {
        $request->validate([
            'jurusan' => 'required',
            'kelas' => 'required',
        ]);

        $kelas = Kelas::find($id);
        $kelas->jurusan = $request->jurusan;
        $kelas->kelas = $request->kelas;
        $kelas->save();

        return redirect()->route('Kelas.index')->with('success', 'Data kelas berhasil diubah!');
    }

    // Hapus data kelas
    public function destroy($id)
    {
        $kelas = Kelas::find($id);
        $kelas->delete();

        return redirect()->route('Kelas.index')->with('success', 'Data kelas berhasil dihapus!');
    }
}
