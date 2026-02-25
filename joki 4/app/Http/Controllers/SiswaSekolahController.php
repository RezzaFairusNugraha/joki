<?php

namespace App\Http\Controllers;

use App\Models\SiswaSekolah;
use App\Models\KelasSekolah;
use Illuminate\Http\Request;

class SiswaSekolahController extends Controller
{
    public function index()
    {
        $list = SiswaSekolah::with('kelas')->get();
        return view('halaman.siswa.index', compact('list'));
    }

    public function create()
    {
        $kelas = KelasSekolah::all();
        return view('halaman.siswa.tambah', compact('kelas'));
    }

    public function store(Request $request)
    {
        $item = new SiswaSekolah();
        $item->id_kelas = $request->id_kelas;
        $item->nisn_siswa = $request->nisn_siswa;
        $item->nama_siswa = $request->nama_siswa;
        $item->jenis_kelamin = $request->jenis_kelamin;
        $item->alamat_siswa = $request->alamat_siswa;
        $item->no_hp_siswa = $request->no_hp_siswa;
        $item->tgl_lahir = $request->tgl_lahir;
        $item->save();
        return redirect('/siswa')->with('pesan', 'Data siswa disimpan!');
    }

    public function edit($id)
    {
        $item = SiswaSekolah::findOrFail($id);
        $kelas = KelasSekolah::all();
        return view('halaman.siswa.edit', compact('item', 'kelas'));
    }

    public function update(Request $request, $id)
    {
        $item = SiswaSekolah::findOrFail($id);
        $item->id_kelas = $request->id_kelas;
        $item->nama_siswa = $request->nama_siswa;
        $item->jenis_kelamin = $request->jenis_kelamin;
        $item->alamat_siswa = $request->alamat_siswa;
        $item->no_hp_siswa = $request->no_hp_siswa;
        $item->save();
        return redirect('/siswa')->with('pesan', 'Data siswa diupdate!');
    }

    public function destroy($id)
    {
        SiswaSekolah::destroy($id);
        return redirect('/siswa')->with('pesan', 'Data siswa dihapus!');
    }
}
