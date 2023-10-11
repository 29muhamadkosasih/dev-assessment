<?php

namespace App\Http\Controllers;

use App\Models\fkRekAsm;
use App\Models\AnswerAPL02;
use Illuminate\Http\Request;
use PDF;

class AK02Controller extends Controller
{
    public function index()
    {
        $apl_02 = AnswerAPL02::all();
        $Asm = fkRekAsm::all();


        return view('pages.perangkat_assessment.fr_ak_02.index', [
            'apl_02'   => $apl_02,
            'Asm'   => $Asm,
        ]);
    }

    public function store(Request $request)
    {
        // dd($request);
        fkRekAsm::create($request->all());
        return redirect()->route('get.fr_ak_02');
    }

    public function get()
    {
        $datas = fkRekAsm::latest()
            ->limit(1)
            ->get();
        return view('pages.perangkat_assessment.fr_ak_02.get', [
            'datas' => $datas
        ]);
    }

    public function show($id)
    {
        $show = fkRekAsm::find($id);

        return view('pages.perangkat_assessment.fr_ak_02.create', [
            'show'  => $show,
        ]);
    }

    public function update(Request $request, $id)
    {
        // dd($request);
        $data = $request->all();
        $model = fkRekAsm::findOrFail($id);
        $model->fill($data);
        $model->save();
        return redirect()->route('fr_ak_02.index')->with('success', 'Success ! Berhasil di Tambahkan');
    }

    public function pdf($id)
    {
        $datas = fkRekAsm::find($id);
        // dd($datas);
        $pdf = PDF::loadview('pages.perangkat_assessment.fr_ak_02.print', [
            'datas' => $datas,
        ]);
        $pdf->set_paper('letter', 'potrait');
        $pdf->set_option("isPhpEnabled", true);
        return $pdf->stream('FK.AK-04. BANDING ASESMEN.pdf');
    }
}