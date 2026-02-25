<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MapelDiampu;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\MataPelajaran;

// Controller untuk mengelola data Pembagian Mapel yang diampu oleh Guru
class MapelDiampuController extends Controller
{
    public function index()
    {
        $ampu = MapelDiampu::with(['guru', 'kelas', 'mataPelajaran'])->get();
        return view('Mapel_Diampu.index', compact('ampu'));
    }

    public function create()
    {
        $guru = Guru::all();
        $kelas = Kelas::all();
        $mapel = MataPelajaran::all();
        return view('Mapel_Diampu.tambah', compact('guru', 'kelas', 'mapel'));
    }

    public function store(Request $request)
    {
        $ampu = new MapelDiampu();
        $ampu->id_guru = $request->id_guru;
        $ampu->id_kelas = $request->id_kelas;
        $ampu->id_mapel = $request->id_mapel;
        $ampu->save();

        return redirect()->route('Mapel_Diampu.index')->with('success', 'Data ampu berhasil ditambah!');
    }

    public function edit($id)
    {
        $ampu = MapelDiampu::find($id);
        $guru = Guru::all();
        $kelas = Kelas::all();
        $mapel = MataPelajaran::all();
        return view('Mapel_Diampu.edit', compact('ampu', 'guru', 'kelas', 'mapel'));
    }

    public function update(Request $request, $id)
    {
        $ampu = MapelDiampu::find($id);
        $ampu->id_guru = $request->id_guru;
        $ampu->id_kelas = $request->id_kelas;
        $ampu->id_mapel = $request->id_mapel;
        $ampu->save();

        return redirect()->route('Mapel_Diampu.index')->with('success', 'Data ampu berhasil diubah!');
    }

    public function destroy($id)
    {
        $ampu = MapelDiampu::find($id);
        $ampu->delete();

        return redirect()->route('Mapel_Diampu.index')->with('success', 'Data ampu berhasil dihapus!');
    }
}
