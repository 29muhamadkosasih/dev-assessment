<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Laporan;
use App\Models\fkLaporan;
use App\Models\Kompetensi;
use App\Models\AnswerAPL02;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Asesor;
use App\Models\fkAspek;

class AK05Controller extends Controller
{
    public function index()
    {
        $laporan = fkLaporan::all();


        return view('pages.perangkat_assessment.fr_ak_05.index', [
            'laporan'   => $laporan,
        ]);
    }

    public function create_data()
    {
        $apl_02 = AnswerAPL02::all();
        $kompetensi = Kompetensi::all();
        $asesor = Asesor::all();
        $laporan = fkLaporan::where('status', '1')->get();


        return view('pages.perangkat_assessment.fr_ak_05.create_data', [
            'apl_02'   => $apl_02,
            'laporan'   => $laporan,
            'kompetensi'   => $kompetensi,
            'asesor'   => $asesor,
        ]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        fkLaporan::create($request->all());
        return redirect()->route('get.fr_ak_05');
    }

    public function get()
    {
        $datas = fkLaporan::latest()
            ->limit(1)
            ->get();
        return view('pages.perangkat_assessment.fr_ak_05.get', [
            'datas' => $datas
        ]);
    }
    public function show($id)
    {
        $show = fkLaporan::find($id);

        return view('pages.perangkat_assessment.fr_ak_05.create', [
            'show'  => $show,
        ]);
    }
    public function update(Request $request, $id)
    {
        // dd($request);
        $data = $request->all();
        $model = fkLaporan::findOrFail($id);
        $model->fill($data);
        $model->status = 1;
        // dd($model);
        $model->save();
        return redirect()->route('fr_ak_05.index')->with('success', 'Success ! Data Banding Berhasil di Tambahkan');
    }

    public function detail($id)
    {
        $show = fkLaporan::find($id);

        return view('pages.perangkat_assessment.fr_ak_05.detail', [
            'show'  => $show,
        ]);
    }

    public function destroy($id)
    {
        $delete = fkLaporan::find($id);
        if (!$delete) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }
        $delete->delete();
        return redirect()->route('fr_ak_05.index')->with('success', 'Data berhasil dihapus.');
    }

    public function edit($id)
    {
        $edit = fkLaporan::find($id);
        return view('pages.perangkat_assessment.fr_ak_05.edit', [
            'edit'   => $edit,
        ]);
    }

    public function update_data(Request $request, $id)
    {
        // dd($request);
        $data = $request->all();
        $model = fkLaporan::findOrFail($id);
        $model->fill($data);
        $model->status = 1;
        $model->save();
        return redirect()->route('fr_ak_05.index')->with('success', 'Success ! Berhasil di Update');
    }

    public function pdf($id)
    {
        $datas = fkLaporan::find($id);
        // dd($datas);
        $pdf = PDF::loadview('pages.perangkat_assessment.fr_ak_05.print', [
            'datas' => $datas,
        ]);
        $pdf->set_paper('letter', 'potrait');
        $pdf->set_option("isPhpEnabled", true);
        return $pdf->stream('FK.AK-05. LAPORAN ASESMEN.pdf');
    }
}