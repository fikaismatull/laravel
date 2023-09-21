<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        return view('siswas.index', [
            'siswas' => sekolah::get(),
        ]);
    }

    public function tambah()
    {
        return view('siswas.tambah', [
        
        ]);
    }

   public function store(Request $request)
    {
        $sekolah = new Sekolah();

        $sekolah->nama_sekolah = $request->nama_sekolah;
        $sekolah->alamat = $request->alamat;
        $sekolah->jurusan = $request->jurusan;
        $sekolah->jumlah_guru = $request->jumlah_guru;

        $sekolah->save();

        return redirect()->route('Siswa.index');
    }
}