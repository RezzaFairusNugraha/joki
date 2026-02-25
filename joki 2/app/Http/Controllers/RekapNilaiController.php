<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RekapNilai;
use App\Models\DataMurid;
use App\Models\MataAjar;

class RekapNilaiController extends Controller
{
    public function index()
    {
        $data = RekapNilai::with(['murid', 'mataAjar'])->get();
        return view('rekap_nilai.index', compact('data'));
    }

    public function create()
    {
        $murid = DataMurid::all();
        $mapel = MataAjar::all();
        return view('rekap_nilai.tambah', compact('murid', 'mapel'));
    }

    public function store(Request $request)
    {
        $uts = $request->nilai_tengah;
        $uas = $request->nilai_akhir_semester;
        $rata = ($uts + $uas) / 2;

        $n = new RekapNilai();
        $n->murid_id = $request->murid_id;
        $n->mapel_id = $request->mapel_id;
        $n->nilai_tengah = $uts;
        $n->nilai_akhir_semester = $uas;
        $n->nilai_rata = $rata;
        $n->save();

        return redirect()->route('rekap_nilai.index')->with('pesan', 'Nilai tersimpan!');
    }

    public function edit($id)
    {
        $item = RekapNilai::find($id);
        $murid = DataMurid::all();
        $mapel = MataAjar::all();
        return view('rekap_nilai.edit', compact('item', 'murid', 'mapel'));
    }

    public function update(Request $request, $id)
    {
        $uts = $request->nilai_tengah;
        $uas = $request->nilai_akhir_semester;
        $rata = ($uts + $uas) / 2;

        $n = RekapNilai::find($id);
        $n->murid_id = $request->murid_id;
        $n->mapel_id = $request->mapel_id;
        $n->nilai_tengah = $uts;
        $n->nilai_akhir_semester = $uas;
        $n->nilai_rata = $rata;
        $n->save();

        return redirect()->route('rekap_nilai.index')->with('pesan', 'Nilai diupdate!');
    }

    public function destroy($id)
    {
        RekapNilai::find($id)->delete();
        return redirect()->route('rekap_nilai.index')->with('pesan', 'Nilai dihapus!');
    }
}
