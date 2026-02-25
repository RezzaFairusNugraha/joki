<?php

namespace App\Http\Controllers;

use App\Models\Pelajaran;
use Illuminate\Http\Request;

class MataPelajaranController extends Controller
{
    public function index()
    {
        $mapels = Pelajaran::all();
        return view('pelajaran.index', compact('mapels'));
    }

    public function create()
    {
        return view('pelajaran.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pelajaran' => 'required',
            'tipe' => 'required',
        ]);

        Pelajaran::create($request->all());

        return redirect()->route('pelajaran.index')->with('success', 'Data pelajaran berhasil ditambahkan');
    }

    public function edit($id)
    {
        $mapel = Pelajaran::findOrFail($id);
        return view('pelajaran.edit', compact('mapel'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pelajaran' => 'required',
            'tipe' => 'required',
        ]);

        $mapel = Pelajaran::findOrFail($id);
        $mapel->update($request->all());

        return redirect()->route('pelajaran.index')->with('success', 'Data pelajaran berhasil diperbarui');
    }

    public function destroy($id)
    {
        $mapel = Pelajaran::findOrFail($id);
        $mapel->delete();

        return redirect()->route('pelajaran.index')->with('success', 'Data pelajaran berhasil dihapus');
    }
}
