<?php

namespace App\Http\Controllers;

use App\Models\fkFeedback;
use App\Models\AnswerAPL02;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;

class AK03Controller extends Controller
{
    public function index()
    {
        $apl_02 = AnswerAPL02::all();
        $feedback = fkFeedback::where('status', '1')->get();


        return view('pages.perangkat_assessment.fr_ak_03.index', [
            'apl_02'   => $apl_02,
            'feedback'   => $feedback,
        ]);
    }

    public function store(Request $request)
    {
        fkFeedback::create($request->all());
        return redirect()->route('get.fr_ak_03');
    }

    public function get()
    {
        $datas = fkFeedback::latest()
            ->limit(1)
            ->get();
        return view('pages.perangkat_assessment.fr_ak_03.get', [
            'datas' => $datas
        ]);
    }

    public function show($id)
    {
        $show = fkFeedback::find($id);

        return view('pages.perangkat_assessment.fr_ak_03.create', [
            'show'  => $show,
        ]);
    }

    public function update(Request $request, $id)
    {
        // dd($request);
        $data = $request->all();
        $model = fkFeedback::findOrFail($id);
        $model->fill($data);
        $model->status = 1;
        $model->save();
        return redirect()->route('fr_ak_03.index')->with('success', 'Success ! Data Banding Berhasil di Tambahkan');
    }

    public function edit($id)
    {
        $edit = fkFeedback::find($id);
        return view('pages.perangkat_assessment.fr_ak_03.edit', [
            'edit'   => $edit,
        ]);
    }

    public function update_data(Request $request, $id)
    {
        $data = $request->all();
        $model = fkFeedback::findOrFail($id);
        $model->fill($data);
        $model->status = 1;
        $model->save();
        return redirect()->route('fr_ak_03.index')->with('success', 'Success ! Berhasil di Update');
    }

    public function detail($id)
    {
        $show = fkFeedback::find($id);

        return view('pages.perangkat_assessment.fr_ak_03.detail', [
            'show'  => $show,
        ]);
    }

    public function pdf($id)
    {
        $datas = fkFeedback::find($id);
        $pdf = PDF::loadview('pages.perangkat_assessment.fr_ak_03.print', [
            'datas' => $datas,
        ]);
        $pdf->set_paper('letter', 'potrait');
        $pdf->set_option("isPhpEnabled", true);
        return $pdf->stream('FK.AK-03. UMPAN BALIK DAN CATATAN ASESMEN.pdf');
    }

    public function destroy($id)
    {
        $delete = fkFeedback::find($id);
        if (!$delete) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }
        $delete->delete();
        return redirect()->back()->with('success', 'Success ! Data Berhasil di Hapus');
    }
}