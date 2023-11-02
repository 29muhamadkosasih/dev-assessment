<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\fkBanding;
use App\Models\AnswerAPL02;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class AK04Controller extends Controller
{
    public function index()
    {
        $apl_02 = AnswerAPL02::all();
        $banding = fkBanding::where('status', '1')->get();


        return view('pages.perangkat_assessment.fr_ak_04.index', [
            'apl_02'   => $apl_02,
            'banding'   => $banding,
        ]);
    }

    public function store(Request $request)
    {
        fkBanding::create($request->all());
        return redirect()->route('get.fr_ak_04');
    }

    public function show($id)
    {
        $show = fkBanding::find($id);

        return view('pages.perangkat_assessment.fr_ak_04.create', [
            'show'  => $show,
        ]);
    }

    public function get()
    {
        $datas = fkBanding::latest()
            ->limit(1)
            ->get();
        return view('pages.perangkat_assessment.fr_ak_04.get', [
            'datas' => $datas
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $model = fkBanding::findOrFail($id);
        $model->fill($data);
        $model->save();
        return redirect()->route('fr_ak_04.index')->with('success', 'Success ! Data Banding Berhasil di Tambahkan');
    }

    public function pdf($id)
    {
        $datas = fkBanding::find($id);
        // dd($datas);
        $pdf = PDF::loadview('pages.perangkat_assessment.fr_ak_04.print', [
            'datas' => $datas,
        ]);
        $pdf->set_paper('letter', 'potrait');
        $pdf->set_option("isPhpEnabled", true);
        return $pdf->stream('FK.AK-04. BANDING ASESMEN.pdf');
    }

    public function destroy($id)
    {
        $delete = fkBanding::find($id);
        if (!$delete) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }
        $delete->delete();
        return redirect()->route('fr_ak_04.index')->with('success', 'Data berhasil dihapus.');
    }

    public function detail($id)
    {
        $show = fkBanding::find($id);

        return view('pages.perangkat_assessment.fr_ak_04.detail', [
            'show'  => $show,
        ]);
    }

    public function edit($id)
    {
        $edit = fkBanding::find($id);
        return view('pages.perangkat_assessment.fr_ak_04.edit', [
            'edit'   => $edit,
        ]);
    }

    public function update_data(Request $request, $id)
    {
        // dd($request);
        $data = $request->all();
        $model = fkBanding::findOrFail($id);
        $model->fill($data);
        $model->status = 1;
        $model->save();
        return redirect()->route('fr_ak_04.index')->with('success', 'Success ! Berhasil di Update');
    }
}