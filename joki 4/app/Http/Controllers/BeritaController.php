<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use App\Models\Pengajar;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Pengumuman::with('pengajar')->get();
        return view('pengumuman.index', compact('beritas'));
    }

    public function create()
    {
        $gurus = Pengajar::all();
        return view('pengumuman.create', compact('gurus'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_pengajar' => 'nullable|exists:Pengajar,id_pengajar',
            'judul' => 'required|string|max:150',
            'isi' => 'required|string',
        ]);

        Pengumuman::create($request->all());
        return redirect()->route('pengumuman.index')->with('success', 'Pengumuman berhasil ditambahkan');
    }

    public function edit($id)
    {
        $berita = Pengumuman::findOrFail($id);
        $gurus = Pengajar::all();
        return view('pengumuman.edit', compact('berita', 'gurus'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_pengajar' => 'nullable|exists:Pengajar,id_pengajar',
            'judul' => 'required|string|max:150',
            'isi' => 'required|string',
        ]);

        $berita = Pengumuman::findOrFail($id);
        $berita->update($request->all());
        return redirect()->route('pengumuman.index')->with('success', 'Pengumuman berhasil diupdate');
    }

    public function destroy($id)
    {
        $berita = Pengumuman::findOrFail($id);
        $berita->delete();
        return redirect()->route('pengumuman.index')->with('success', 'Pengumuman berhasil dihapus');
    }
}
