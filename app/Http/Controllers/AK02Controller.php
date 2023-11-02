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
        $Asm = fkRekAsm::where('status', '1')->get();
        return view('pages.perangkat_assessment.fr_ak_02.index', [
            'apl_02'   => $apl_02,
            'Asm'   => $Asm,
        ]);
    }

    public function store(Request $request)
    {
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
        $model->status = 1;
        $model->save();
        return redirect()->route('fr_ak_02.index')->with('success', 'Success ! Berhasil di Tambahkan');
    }

    public function pdf($id)
    {
        $datas = fkRekAsm::find($id);
        $pdf = PDF::loadview('pages.perangkat_assessment.fr_ak_02.print', [
            'datas' => $datas,
        ]);
        $pdf->set_paper('letter', 'potrait');
        $pdf->set_option("isPhpEnabled", true);
        return $pdf->stream('FK.AK-04. BANDING ASESMEN.pdf');
    }

    public function destroy($id)
    {
        $delete = fkRekAsm::find($id);
        if (!$delete) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }
        $delete->delete();
        return redirect()->back()->with('success', 'Success ! Data Berhasil di Hapus');
    }

    public function detail($id)
    {
        $show = fkRekAsm::find($id);

        return view('pages.perangkat_assessment.fr_ak_02.detail', [
            'show'  => $show,
        ]);
    }

    public function edit($id)
    {
        $edit = fkRekAsm::find($id);
        return view('pages.perangkat_assessment.fr_ak_02.edit', [
            'edit'   => $edit,
        ]);
    }

    public function update_data(Request $request, $id)
    {
        $data = $request->all();
        $model = fkRekAsm::findOrFail($id);
        $model->fill($data);
        $model->status = 1;
        $model->save();
        return redirect()->route('fr_ak_02.index')->with('success', 'Success ! Berhasil di Update');
    }
}