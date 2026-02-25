<?php

namespace App\Http\Controllers;

use App\Models\MapelDiampuKelas;
use App\Models\GuruSekolah;
use App\Models\KelasSekolah;
use App\Models\MataPelajaranSekolah;
use Illuminate\Http\Request;

class MapelDiampuKelasController extends Controller
{
    public function index()
    {
        $list = MapelDiampuKelas::with(['guru', 'kelas', 'mapel'])->get();
        return view('mapel_diampu_kelas.index', compact('list'));
    }

    public function create()
    {
        $guru = GuruSekolah::all();
        $kelas = KelasSekolah::all();
        $mapel = MataPelajaranSekolah::all();
        return view('mapel_diampu_kelas.tambah', compact('guru', 'kelas', 'mapel'));
    }

    public function store(Request $request)
    {
        $item = new MapelDiampuKelas();
        $item->id_guru = $request->id_guru;
        $item->id_kelas = $request->id_kelas;
        $item->id_mapel = $request->id_mapel;
        $item->save();
        return redirect()->route('mapel_diampu_kelas.index')->with('pesan', 'Tugas mengajar berhasil diatur!');
    }

    public function destroy($id)
    {
        MapelDiampuKelas::destroy($id);
        return redirect()->route('mapel_diampu_kelas.index')->with('pesan', 'Tugas mengajar dihapus!');
    }
}
