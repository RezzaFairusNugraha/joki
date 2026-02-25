<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\Kelas;

// Controller untuk mengelola data Guru
class GuruController extends Controller
{
    public function index()
    {
        $guru = Guru::all();
        return view('Guru.index', compact('guru'));
    }

    public function create()
    {
        return view('Guru.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nip' => 'required|unique:Guru,nip',
        ]);

        $guru = new Guru();
        $guru->nama = $request->nama;
        $guru->nip = $request->nip;
        $guru->jenis_kelamin = $request->jenis_kelamin;
        $guru->email = $request->email;
        $guru->no_hp = $request->no_hp;
        $guru->save();

        return redirect()->route('Guru.index')->with('success', 'Data guru berhasil ditambah!');
    }

    public function edit($id)
    {
        $guru = Guru::find($id);
        return view('Guru.edit', compact('guru'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        $guru = Guru::find($id);
        $guru->nama = $request->nama;
        $guru->jenis_kelamin = $request->jenis_kelamin;
        $guru->email = $request->email;
        $guru->no_hp = $request->no_hp;
        $guru->save();

        return redirect()->route('Guru.index')->with('success', 'Data guru berhasil diubah!');
    }

    public function destroy($id)
    {
        $guru = Guru::find($id);
        $guru->delete();

        return redirect()->route('Guru.index')->with('success', 'Data guru berhasil dihapus!');
    }
}
