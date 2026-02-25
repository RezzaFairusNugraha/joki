<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengajarMengajar;
use App\Models\DataPengajar;
use App\Models\DataKelas;
use App\Models\MataAjar;

class PengajarMengajarController extends Controller
{
    public function index()
    {
        $list = PengajarMengajar::with(['pengajar', 'kelas', 'mataAjar'])->get();
        return view('pengajar_mengajar.index', compact('list'));
    }

    public function create()
    {
        $pengajar = DataPengajar::all();
        $kelas = DataKelas::all();
        $mapel = MataAjar::all();
        return view('pengajar_mengajar.tambah', compact('pengajar', 'kelas', 'mapel'));
    }

    public function store(Request $request)
    {
        $t = new PengajarMengajar();
        $t->pengajar_id = $request->pengajar_id;
        $t->kelas_id = $request->kelas_id;
        $t->mapel_id = $request->mapel_id;
        $t->save();

        return redirect()->route('pengajar_mengajar.index')->with('pesan', 'Penugasan berhasil!');
    }

    public function edit($id)
    {
        $item = PengajarMengajar::find($id);
        $pengajar = DataPengajar::all();
        $kelas = DataKelas::all();
        $mapel = MataAjar::all();
        return view('pengajar_mengajar.edit', compact('item', 'pengajar', 'kelas', 'mapel'));
    }

    public function update(Request $request, $id)
    {
        $t = PengajarMengajar::find($id);
        $t->pengajar_id = $request->pengajar_id;
        $t->kelas_id = $request->kelas_id;
        $t->mapel_id = $request->mapel_id;
        $t->save();

        return redirect()->route('pengajar_mengajar.index')->with('pesan', 'Penugasan diupdate!');
    }

    public function destroy($id)
    {
        PengajarMengajar::find($id)->delete();
        return redirect()->route('pengajar_mengajar.index')->with('pesan', 'Penugasan dihapus!');
    }
}
