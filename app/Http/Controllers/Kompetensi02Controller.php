<?php

namespace App\Http\Controllers;

use App\Models\Skema;
use App\Models\Kompetensi02;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Kompetensi02Controller extends Controller
{
    public function index()
    {
        $kompetensi = Kompetensi02::all();
        return view('pages.master_data.kompetensi02.index', [
            'kompetensi'   => $kompetensi
        ]);
    }

    public function create()
    {
        $nama_skema = Skema::all();
        return view('pages.master_data.kompetensi02.create', [
            'nama_skema'  => $nama_skema
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_skema_id'     => 'required|numeric',
            'kode'              => 'required',
            'unit'   => 'required',
            'element_kuk_1_01' => 'required',
        ]);
        kompetensi02::create($request->all());
        return redirect()->route('kompetensi02.index')->with(
            'success',
            'Success ! Data Kompetensi Berhasil di Tambahkan'
        );
    }

    public function show($id)
    {
        $show = Kompetensi02::find($id);
        return view('pages.master_data.kompetensi02.show', [
            'show'   => $show
        ]);
    }
}