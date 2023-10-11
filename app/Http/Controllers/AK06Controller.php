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
}