<?php

namespace App\Http\Controllers;

use App\Models\Asesor;
use Illuminate\Http\Request;

class AsesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asesor = Asesor::all();
        return view('pages.master_data.asesor.index', [
            'asesor'  => $asesor
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255|min:5',
        ]);
        Asesor::create($request->all());
        return redirect()->route('asesor.index')->with('success', 'Success ! Data Asesor Berhasil di Tambahkan');
    }

    public function edit($id)
    {

        $edit = Asesor::find($id);
        $asesor = Asesor::all();
        return view('pages.master_data.asesor.index', [
            'edit'   => $edit,
            'asesor'    => $asesor
        ]);
    }

    public function update(Request $request, $id)
    {
        $asesor   = Asesor::find($id);
        $this->validate($request, [
            'nama' => 'required|max:255|min:5',
        ]);
        $asesor->update([
            'no_met'   => $request->no_met,
            'nama'   => $request->nama,
            'validiti_met'   => $request->validiti_met,
        ]);

        return redirect()->route('asesor.index')
            ->with('success', 'Success ! Data Asesor Berhasil di Update');
    }


    public function destroy($id)
    {

        $delete = Asesor::find($id);
        $delete->delete();
        return redirect()->route('asesor.index')
            ->with('success', 'Success ! Data Asesor Berhasil di Hapus');
    }
}
