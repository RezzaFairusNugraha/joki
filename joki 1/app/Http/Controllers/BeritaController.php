<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Guru;

// Controller untuk mengelola data Berita Sekolah
class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::with('guru')->get();
        return view('Berita.index', compact('berita'));
    }

    public function create()
    {
        $guru = Guru::all();
        return view('Berita.tambah', compact('guru'));
    }

    public function store(Request $request)
    {
        $berita = new Berita();
        $berita->judul = $request->judul;
        $berita->isi = $request->isi;
        $berita->id_guru = $request->id_guru;
        $berita->save();

        return redirect()->route('Berita.index')->with('success', 'Berita berhasil diterbitkan!');
    }

    public function edit($id)
    {
        $berita = Berita::find($id);
        $guru = Guru::all();
        return view('Berita.edit', compact('berita', 'guru'));
    }

    public function update(Request $request, $id)
    {
        $berita = Berita::find($id);
        $berita->judul = $request->judul;
        $berita->isi = $request->isi;
        $berita->id_guru = $request->id_guru;
        $berita->save();

        return redirect()->route('Berita.index')->with('success', 'Berita berhasil diubah!');
    }

    public function destroy($id)
    {
        $berita = Berita::find($id);
        $berita->delete();

        return redirect()->route('Berita.index')->with('success', 'Berita berhasil dihapus!');
    }
}
