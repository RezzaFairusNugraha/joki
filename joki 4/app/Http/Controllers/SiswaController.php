<?php

namespace App\Http\Controllers;

use App\Models\Murid;
use App\Models\Kelas_Sekolah;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas = Murid::all();
        return view('murid.index', compact('siswas'));
    }

    public function create()
    {
        $kelases = Kelas_Sekolah::all();
        return view('murid.create', compact('kelases'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'id_kelas' => 'required',
            'nis' => 'required|unique:Murid',
            'jk' => 'required',
        ]);

        Murid::create($request->all());

        return redirect()->route('murid.index')->with('success', 'Data siswa berhasil ditambahkan');
    }

    public function edit($id)
    {
        $siswa = Murid::findOrFail($id);
        $kelases = Kelas_Sekolah::all();
        return view('murid.edit', compact('siswa', 'kelases'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'id_kelas' => 'required',
            'nis' => 'required|unique:Murid,nis,' . $id . ',id_murid',
            'jk' => 'required',
        ]);

        $siswa = Murid::findOrFail($id);
        $siswa->update($request->all());

        return redirect()->route('murid.index')->with('success', 'Data siswa berhasil diperbarui');
    }

    public function destroy($id)
    {
        $siswa = Murid::findOrFail($id);
        $siswa->delete();

        return redirect()->route('murid.index')->with('success', 'Data siswa berhasil dihapus');
    }
}
