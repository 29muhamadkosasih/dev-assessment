<?php

namespace App\Http\Controllers;

use App\Models\fkAspek;
use App\Models\AnswerAPL02;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;

class AK06Controller extends Controller
{

    public function index()
    {
        $apl_02 = AnswerAPL02::all();
        $aspek = fkAspek::where('status', '1')->get();


        return view('pages.perangkat_assessment.fr_ak_06.index', [
            'apl_02'   => $apl_02,
            'aspek'   => $aspek,
        ]);
    }

    public function store(Request $request)
    {
        fkAspek::create($request->all());
        return redirect()->route('get.fr_ak_06');
    }

    public function get()
    {
        $datas = fkAspek::latest()
            ->limit(1)
            ->get();
        return view('pages.perangkat_assessment.fr_ak_06.get', [
            'datas' => $datas
        ]);
    }

    public function show($id)
    {
        $show = fkAspek::find($id);

        return view('pages.perangkat_assessment.fr_ak_06.create', [
            'show'  => $show,
        ]);
    }

    public function update(Request $request, $id)
    {
        // dd($request);
        $data = $request->all();
        $model = fkAspek::findOrFail($id);
        $model->fill($data);
        $model->status = 1;
        // dd($model);
        $model->save();
        return redirect()->route('fr_ak_06.index')->with('success', 'Success ! Data Banding Berhasil di Tambahkan');
    }

    public function pdf($id)
    {
        $datas = fkAspek::find($id);
        // dd($datas);
        $pdf = PDF::loadview('pages.perangkat_assessment.fr_ak_06.print', [
            'datas' => $datas,
        ]);
        $pdf->set_paper('letter', 'potrait');
        $pdf->set_option("isPhpEnabled", true);
        return $pdf->stream('FK.AK-04. BANDING ASESMEN.pdf');
    }

    public function destroy($id)
    {
        $delete = fkAspek::find($id);
        if (!$delete) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }
        $delete->delete();
        return redirect()->route('fr_ak_06.index')->with('success', 'Data berhasil dihapus.');
    }

    public function detail($id)
    {
        $show = fkAspek::find($id);

        return view('pages.perangkat_assessment.fr_ak_06.detail', [
            'show'  => $show,
        ]);
    }

    public function edit($id)
    {
        $edit = fkAspek::find($id);
        return view('pages.perangkat_assessment.fr_ak_06.edit', [
            'edit'   => $edit,
        ]);
    }

    public function update_data(Request $request, $id)
    {
        // dd($request);
        $data = $request->all();
        $model = fkAspek::findOrFail($id);
        $model->fill($data);
        $model->status = 1;
        $model->save();
        return redirect()->route('fr_ak_06.index')->with('success', 'Success ! Berhasil di Update');
    }
}