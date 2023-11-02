<?php

namespace App\Http\Controllers;

use App\Models\fkRahasia;
use App\Models\AnswerAPL02;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;

class AK01Controller extends Controller
{
    public function index()
    {
        $apl_02 = AnswerAPL02::all();
        $datas = fkRahasia::where('status', '1')->get();


        return view('pages.perangkat_assessment.fr_ak_01.index', [
            'apl_02'   => $apl_02,
            'datas'   => $datas,
        ]);
    }

    public function store(Request $request)
    {
        fkRahasia::create($request->all());
        return redirect()->route('get.fr_ak_01');
    }

    public function get()
    {
        $datas = fkRahasia::latest()
            ->limit(1)
            ->get();
        return view('pages.perangkat_assessment.fr_ak_01.get', [
            'datas' => $datas
        ]);
    }

    public function show($id)
    {
        $show = fkRahasia::find($id);

        return view('pages.perangkat_assessment.fr_ak_01.create', [
            'show'  => $show,
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        // dd($data);
        $model = fkRahasia::findOrFail($id);
        $model->fill($data);
        $model->status = 1;
        $model->save();
        return redirect()->route('fr_ak_01.index')->with('success', 'Success ! Berhasil di Tambahkan');
    }

    public function destroy($id)
    {
        $delete = fkRahasia::find($id);
        $delete->delete();
        return redirect()->back()->with('success', 'Success ! Data Berhasil di Hapus');
    }

    public function pdf($id)
    {
        $datas = fkRahasia::find($id);
        $pdf = PDF::loadview('pages.perangkat_assessment.fr_ak_01.print', [
            'datas' => $datas,
        ]);
        $pdf->set_paper('letter', 'potrait');
        $pdf->set_option("isPhpEnabled", true);
        return $pdf->stream('FK.AK-04. BANDING ASESMEN.pdf');
    }

    public function edit($id)
    {
        $edit = fkRahasia::find($id);
        return view('pages.perangkat_assessment.fr_ak_01.edit', [
            'edit'   => $edit,
        ]);
    }

    public function update_data(Request $request, $id)
    {
        // dd($request);

        $data = $request->all();
        $model = fkRahasia::findOrFail($id);
        $model->fill($data);
        $model->status = 1;
        $model->save();
        return redirect()->route('fr_ak_01.index')->with('success', 'Success ! Data Berhasil di Update');
    }

    public function detail($id)
    {
        $show = fkRahasia::find($id);
        return view('pages.perangkat_assessment.fr_ak_01.detail', [
            'show'  => $show,
        ]);
    }

    public function multipleusersdelete(Request $request)
    {
        $id = $request->id;
        foreach ($id as $user) {
            fkRahasia::where('id', $user)->delete();
        }
        return redirect()->back()->with('success', 'Success ! Data Berhasil di Hapus');
    }
}
