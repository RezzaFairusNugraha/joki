<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataAjar;

class MataAjarController extends Controller
{
    public function index()
    {
        $data = MataAjar::all();
        return view('mata_ajar.index', compact('data'));
    }

    public function create()
    {
        return view('mata_ajar.tambah');
    }

    public function store(Request $request)
    {
        $m = new MataAjar();
        $m->nama_pelajaran = $request->nama_pelajaran;
        $m->jenis_mapel = $request->jenis_mapel;
        $m->save();

        return redirect()->route('mata_ajar.index')->with('pesan', 'Mata ajar disimpan!');
    }

    public function edit($id)
    {
        $item = MataAjar::find($id);
        return view('mata_ajar.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $m = MataAjar::find($id);
        $m->nama_pelajaran = $request->nama_pelajaran;
        $m->jenis_mapel = $request->jenis_mapel;
        $m->save();

        return redirect()->route('mata_ajar.index')->with('pesan', 'Mata ajar diperbarui!');
    }

    public function destroy($id)
    {
        MataAjar::find($id)->delete();
        return redirect()->route('mata_ajar.index')->with('pesan', 'Mata ajar dihapus!');
    }
}
