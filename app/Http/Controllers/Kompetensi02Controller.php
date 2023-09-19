<?php

namespace App\Http\Controllers;

use App\Models\Skema;
use App\Models\Kompetensi02;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kompetensi;

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
        $kompetensi = Kompetensi::all();
        return view('pages.master_data.kompetensi02.create', [
            'nama_skema'  => $nama_skema,
            'kompetensi'  => $kompetensi,
        ]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'kompetensi_id'     => 'required|numeric',
        ]);
        kompetensi02::create($request->all());
        return redirect()->route('get.kompetensi02')->with(
            'success',
            'Success ! Data Kompetensi Berhasil di Tambahkan'
        );
    }

    public function get()
    {
        $datas = kompetensi02::latest()
            ->limit(1)
            ->get();
        return view('pages.master_data.kompetensi02.get', [
            'datas' => $datas
        ]);
    }

    public function show($id)
    {
        $show = Kompetensi02::find($id);
        return view('pages.master_data.kompetensi02.show', [
            'show'   => $show
        ]);
    }

    public function edit_sub($id)
    {
        $nama_skema = Skema::all();
        $edit = Kompetensi02::find($id);
        $kompetensi = Kompetensi02::all();
        return view('pages.master_data.kompetensi02.edit_sub', [
            'edit'          => $edit,
            'kompetensi'    => $kompetensi,
            'nama_skema'    => $nama_skema,
        ]);
    }

    public function edit($id)
    {
        // dd($id);

        $nama_skema = Skema::all();
        $edit = Kompetensi02::find($id);
        $kompetensi = Kompetensi02::all();
        return view('pages.master_data.kompetensi02.edit', [
            'edit'          => $edit,
            'kompetensi'    => $kompetensi,
            'nama_skema'    => $nama_skema,
        ]);
    }

    public function update_sub(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            'kode'              => 'required',
            'unit'   => 'required',
            'element_kuk_1_01' => 'required',
        ]);
        // Mengambil semua data yang dikirimkan dalam permintaan
        $data = $request->all();

        $model = Kompetensi02::findOrFail($id);

        // Melakukan update data dengan menggunakan fill
        $model->fill($data);

        // Simpan perubahan ke database
        $model->save();
        return redirect()->route('kompetensi02.index')
            ->with('success', 'Success ! Data Kompetensi Berhasil di Update');
    }

    public function update(Request $request, $id)
    {

        // dd($request->all());
        $request->validate([
            'kode'              => 'required',
            'unit'   => 'required',
            'element_kuk_1_01' => 'required',
        ]);

        // Mengambil semua data yang dikirimkan dalam permintaan
        $data = $request->all();

        // Menggunakan model untuk menemukan data yang akan diupdate
        $model = Kompetensi02::findOrFail($id);

        // Melakukan update data dengan menggunakan fill
        $model->fill($data);

        // Simpan perubahan ke database
        $model->save();
        return redirect()->route('kompetensi02.index')
            ->with('success', 'Success ! Data Kompetensi Berhasil di Update');
    }

    public function destroy($id)
    {
        $delete = Kompetensi02::find($id);
        $delete->delete();
        return redirect()->route('kompetensi02.index')
            ->with('success', 'Success ! Data Kompetensi Berhasil di Hapus');
    }
}