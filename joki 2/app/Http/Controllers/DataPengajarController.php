<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPengajar;

class DataPengajarController extends Controller
{
    public function index()
    {
        $list = DataPengajar::all();
        return view('data_pengajar.index', compact('list'));
    }

    public function create()
    {
        return view('data_pengajar.tambah');
    }

    public function store(Request $request)
    {
        $p = new DataPengajar();
        $p->nip_pengajar = $request->nip_pengajar;
        $p->nama_pengajar = $request->nama_pengajar;
        $p->jenis_kelamin = $request->jenis_kelamin;
        $p->email_pengajar = $request->email_pengajar;
        $p->no_telepon = $request->no_telepon;
        $p->save();

        return redirect()->route('data_pengajar.index')->with('pesan', 'Pengajar berhasil simpan!');
    }

    public function edit($id)
    {
        $item = DataPengajar::find($id);
        return view('data_pengajar.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $p = DataPengajar::find($id);
        $p->nama_pengajar = $request->nama_pengajar;
        $p->jenis_kelamin = $request->jenis_kelamin;
        $p->email_pengajar = $request->email_pengajar;
        $p->no_telepon = $request->no_telepon;
        $p->save();

        return redirect()->route('data_pengajar.index')->with('pesan', 'Data pengajar diupdate!');
    }

    public function destroy($id)
    {
        DataPengajar::find($id)->delete();
        return redirect()->route('data_pengajar.index')->with('pesan', 'Pengajar dihapus!');
    }
}
