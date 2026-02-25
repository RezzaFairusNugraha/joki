<?php

namespace App\Http\Controllers;

use App\Models\BeritaSekolah;
use App\Models\GuruSekolah;
use Illuminate\Http\Request;

class BeritaSekolahController extends Controller
{
    public function index()
    {
        $feeds = BeritaSekolah::with('guru')->latest('tanggal_post')->get();
        return view('halaman.berita.index', compact('feeds'));
    }

    public function create()
    {
        $guru = GuruSekolah::all();
        return view('halaman.berita.tambah', compact('guru'));
    }

    public function store(Request $request)
    {
        $item = new BeritaSekolah();
        $item->id_guru = $request->id_guru;
        $item->judul = $request->judul;
        $item->isi = $request->isi;
        $item->save();
        return redirect('/berita')->with('pesan', 'Berita berhasil diposting!');
    }

    public function edit($id)
    {
        $item = BeritaSekolah::findOrFail($id);
        $guru = GuruSekolah::all();
        return view('halaman.berita.edit', compact('item', 'guru'));
    }

    public function update(Request $request, $id)
    {
        $item = BeritaSekolah::findOrFail($id);
        $item->id_guru = $request->id_guru;
        $item->judul = $request->judul;
        $item->isi = $request->isi;
        $item->save();
        return redirect('/berita')->with('pesan', 'Berita berhasil diupdate!');
    }

    public function destroy($id)
    {
        BeritaSekolah::destroy($id);
        return redirect('/berita')->with('pesan', 'Berita berhasil dihapus!');
    }
}
