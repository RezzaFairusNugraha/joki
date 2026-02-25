<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InfoSekolah;
use App\Models\DataPengajar;

class InfoSekolahController extends Controller
{
    public function index()
    {
        $feeds = InfoSekolah::with('pengajar')->get();
        return view('info_sekolah.index', compact('feeds'));
    }

    public function create()
    {
        $pengajar = DataPengajar::all();
        return view('info_sekolah.tambah', compact('pengajar'));
    }

    public function store(Request $request)
    {
        $post = new InfoSekolah();
        $post->judul_berita = $request->judul_berita;
        $post->isi_berita = $request->isi_berita;
        $post->pengajar_id = $request->pengajar_id;
        $post->save();

        return redirect()->route('info_sekolah.index')->with('pesan', 'Postingan info sekolah terbit!');
    }

    public function edit($id)
    {
        $item = InfoSekolah::find($id);
        $pengajar = DataPengajar::all();
        return view('info_sekolah.edit', compact('item', 'pengajar'));
    }

    public function update(Request $request, $id)
    {
        $post = InfoSekolah::find($id);
        $post->judul_berita = $request->judul_berita;
        $post->isi_berita = $request->isi_berita;
        $post->pengajar_id = $request->pengajar_id;
        $post->save();

        return redirect()->route('info_sekolah.index')->with('pesan', 'Info sekolah diupdate!');
    }

    public function destroy($id)
    {
        InfoSekolah::find($id)->delete();
        return redirect()->route('info_sekolah.index')->with('pesan', 'Info sekolah dihapus!');
    }
}
