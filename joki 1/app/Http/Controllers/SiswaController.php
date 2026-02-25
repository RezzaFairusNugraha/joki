<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Kelas;

// Controller untuk mengelola data Siswa
class SiswaController extends Controller
{
    public function index()
    {
        // Ambil semua siswa beserta data kelasnya (relasi)
        $siswa = Siswa::with('kelas')->get();
        return view('Siswa.index', compact('siswa'));
    }

    public function create()
    {
        // Ambil data kelas untuk pilihan di dropdown
        $kelas = Kelas::all();
        return view('Siswa.tambah', compact('kelas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nisn' => 'required|unique:Siswa,nisn',
            'id_kelas' => 'required',
        ]);

        $siswa = new Siswa();
        $siswa->nama = $request->nama;
        $siswa->nisn = $request->nisn;
        $siswa->id_kelas = $request->id_kelas;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->alamat = $request->alamat;
        $siswa->no_hp = $request->no_hp;
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->save();

        return redirect()->route('Siswa.index')->with('success', 'Data siswa berhasil ditambah!');
    }

    public function edit($id)
    {
        $siswa = Siswa::find($id);
        $kelas = Kelas::all();
        return view('Siswa.edit', compact('siswa', 'kelas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'id_kelas' => 'required',
        ]);

        $siswa = Siswa::find($id);
        $siswa->nama = $request->nama;
        $siswa->id_kelas = $request->id_kelas;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->alamat = $request->alamat;
        $siswa->no_hp = $request->no_hp;
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->save();

        return redirect()->route('Siswa.index')->with('success', 'Data siswa berhasil diubah!');
    }

    public function destroy($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();

        return redirect()->route('Siswa.index')->with('success', 'Data siswa berhasil dihapus!');
    }
}
