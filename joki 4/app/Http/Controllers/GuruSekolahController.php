<?php

namespace App\Http\Controllers;

use App\Models\GuruSekolah;
use Illuminate\Http\Request;

class GuruSekolahController extends Controller
{
    public function index()
    {
        $list = GuruSekolah::all();
        return view('halaman.guru.index', compact('list'));
    }

    public function create()
    {
        return view('halaman.guru.tambah');
    }

    public function store(Request $request)
    {
        $item = new GuruSekolah();
        $item->nip_guru = $request->nip_guru;
        $item->nama_guru = $request->nama_guru;
        $item->jenis_kelamin = $request->jenis_kelamin;
        $item->email_guru = $request->email_guru;
        $item->no_hp_guru = $request->no_hp_guru;
        $item->save();
        return redirect('/guru')->with('pesan', 'Data guru disimpan!');
    }

    public function edit($id)
    {
        $item = GuruSekolah::findOrFail($id);
        return view('halaman.guru.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = GuruSekolah::findOrFail($id);
        $item->nama_guru = $request->nama_guru;
        $item->jenis_kelamin = $request->jenis_kelamin;
        $item->email_guru = $request->email_guru;
        $item->no_hp_guru = $request->no_hp_guru;
        $item->save();
        return redirect('/guru')->with('pesan', 'Data guru diupdate!');
    }

    public function destroy($id)
    {
        GuruSekolah::destroy($id);
        return redirect('/guru')->with('pesan', 'Data guru dihapus!');
    }
}
