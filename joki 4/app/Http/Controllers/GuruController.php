<?php

namespace App\Http\Controllers;

use App\Models\Pengajar;
use App\Models\Kelas_Sekolah;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        $gurus = Pengajar::all();
        return view('pengajar.index', compact('gurus'));
    }

    public function create()
    {
        $kelases = Kelas_Sekolah::all();
        return view('pengajar.create', compact('kelases'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nip' => 'required|unique:Pengajar',
            'jk' => 'required',
        ]);

        Pengajar::create($request->all());

        return redirect()->route('pengajar.index')->with('success', 'Data pengajar berhasil ditambahkan');
    }

    public function edit($id)
    {
        $guru = Pengajar::findOrFail($id);
        $kelases = Kelas_Sekolah::all();
        return view('pengajar.edit', compact('guru', 'kelases'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'nip' => 'required|unique:Pengajar,nip,' . $id . ',id_pengajar',
            'jk' => 'required',
        ]);

        $guru = Pengajar::findOrFail($id);
        $guru->update($request->all());

        return redirect()->route('pengajar.index')->with('success', 'Data pengajar berhasil diperbarui');
    }

    public function destroy($id)
    {
        $guru = Pengajar::findOrFail($id);
        $guru->delete();

        return redirect()->route('pengajar.index')->with('success', 'Data pengajar berhasil dihapus');
    }
}
