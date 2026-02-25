<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataMurid;
use App\Models\DataKelas;

class DataMuridController extends Controller
{
    public function index()
    {
        $data = DataMurid::with('kelas')->get();
        return view('data_murid.index', compact('data'));
    }

    public function create()
    {
        $kelas = DataKelas::all();
        return view('data_murid.tambah', compact('kelas'));
    }

    public function store(Request $request)
    {
        $m = new DataMurid();
        $m->kelas_id = $request->kelas_id;
        $m->nomor_induk = $request->nomor_induk;
        $m->nama_murid = $request->nama_murid;
        $m->jk = $request->jk;
        $m->alamat_rumah = $request->alamat_rumah;
        $m->telepon = $request->telepon;
        $m->tgl_lahir = $request->tgl_lahir;
        $m->save();

        return redirect()->route('data_murid.index')->with('pesan', 'Data murid ditambahkan!');
    }

    public function edit($id)
    {
        $item = DataMurid::find($id);
        $kelas = DataKelas::all();
        return view('data_murid.edit', compact('item', 'kelas'));
    }

    public function update(Request $request, $id)
    {
        $m = DataMurid::find($id);
        $m->kelas_id = $request->kelas_id;
        $m->nama_murid = $request->nama_murid;
        $m->jk = $request->jk;
        $m->alamat_rumah = $request->alamat_rumah;
        $m->telepon = $request->telepon;
        $m->tgl_lahir = $request->tgl_lahir;
        $m->save();

        return redirect()->route('data_murid.index')->with('pesan', 'Data murid diperbarui!');
    }

    public function destroy($id)
    {
        DataMurid::find($id)->delete();
        return redirect()->route('data_murid.index')->with('pesan', 'Murid dihapus!');
    }
}
