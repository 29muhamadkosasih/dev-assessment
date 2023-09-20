<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\APL02;
use App\Models\AnswerAPL02;
use App\Models\Kompetensi02;
use Illuminate\Http\Request;
use App\Models\Personaldetail;
use Illuminate\Support\Carbon;

class APL02Controller extends Controller
{
    public function index()
    {
        $kompetensi = Kompetensi02::all();
        $apl01 = Personaldetail::all();
        $apl02 = APL02::all();
        $answer = AnswerAPL02::all();
        return view('pages.apl_02.index', [
            'kompetensi'   => $kompetensi,
            'apl01'   => $apl01,
            'apl02'   => $apl02,
            'answer'   => $answer,
        ]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'kompetensi02_id' => ['required', 'not_in:Open this select'],
            'apl01_id' => ['required', 'not_in:Open this select']
        ]);
        APL02::create($request->all());

        return redirect()->route('get.apl02')->with('success', 'Success ! Data Bank Berhasil di Tambahkan');
    }

    public function show($id)
    {
        $edit = APL02::find($id);

        $data2 = $edit->id;
        $apl02 = APL02::latest()
            ->limit(1)
            ->get();
        // dd($datas);
        return view('pages.apl_02.show', [
            'edit'   => $edit,
            'apl02'    => $apl02,
            'data2'    => $data2,
        ]);
    }

    public function getAnswer(Request $request)
    // {
    //     // dd($request);
    //     $data = APL02::findOrFail($id);
    //     $data2 = $data->id;
    //     dd($data);
    //     $get = new AnswerAPL02;
    //     $get->apl02_id = $data2;
    //     // element 1
    //     $get->element_kuk_1_01 = $request->input('element_kuk_1_01');
    //     $get->element_kuk_1_02 = $request->input('element_kuk_1_02');
    //     $get->element_kuk_1_03 = $request->input('element_kuk_1_03');
    //     $get->element_kuk_1_04 = $request->input('element_kuk_1_04');
    //     $get->element_kuk_1_05 = $request->input('element_kuk_1_05');
    //     $get->element_kuk_1_06 = $request->input('element_kuk_1_06');
    //     $get->element_kuk_1_07 = $request->input('element_kuk_1_07');
    //     $get->element_kuk_1_08 = $request->input('element_kuk_1_08');
    //     $get->element_kuk_1_09 = $request->input('element_kuk_1_09');
    //     $get->element_kuk_1_10 = $request->input('element_kuk_1_10');
    //     $get->element_kuk_1_11 = $request->input('element_kuk_1_11');
    //     // element 2
    //     $get->element_kuk_2_01 = $request->input('element_kuk_2_01');
    //     $get->element_kuk_2_02 = $request->input('element_kuk_2_02');
    //     $get->element_kuk_2_03 = $request->input('element_kuk_2_03');
    //     $get->element_kuk_2_04 = $request->input('element_kuk_2_04');
    //     $get->element_kuk_2_05 = $request->input('element_kuk_2_05');
    //     $get->element_kuk_2_06 = $request->input('element_kuk_2_06');
    //     $get->element_kuk_2_07 = $request->input('element_kuk_2_07');
    //     $get->element_kuk_2_08 = $request->input('element_kuk_2_08');
    //     $get->element_kuk_2_09 = $request->input('element_kuk_2_09');
    //     $get->element_kuk_2_10 = $request->input('element_kuk_2_10');
    //     $get->element_kuk_2_11 = $request->input('element_kuk_2_11');
    //     // element 3
    //     $get->element_kuk_3_01 = $request->input('element_kuk_3_01');
    //     $get->element_kuk_3_02 = $request->input('element_kuk_3_02');
    //     $get->element_kuk_3_03 = $request->input('element_kuk_3_03');
    //     $get->element_kuk_3_04 = $request->input('element_kuk_3_04');
    //     $get->element_kuk_3_05 = $request->input('element_kuk_3_05');
    //     $get->element_kuk_3_06 = $request->input('element_kuk_3_06');
    //     $get->element_kuk_3_07 = $request->input('element_kuk_3_07');
    //     $get->element_kuk_3_08 = $request->input('element_kuk_3_08');
    //     $get->element_kuk_3_09 = $request->input('element_kuk_3_09');
    //     $get->element_kuk_3_10 = $request->input('element_kuk_3_10');
    //     $get->element_kuk_3_11 = $request->input('element_kuk_3_11');
    //     // element 4
    //     $get->element_kuk_4_01 = $request->input('element_kuk_4_01');
    //     $get->element_kuk_4_02 = $request->input('element_kuk_4_02');
    //     $get->element_kuk_4_03 = $request->input('element_kuk_4_03');
    //     $get->element_kuk_4_04 = $request->input('element_kuk_4_04');
    //     $get->element_kuk_4_05 = $request->input('element_kuk_4_05');
    //     $get->element_kuk_4_06 = $request->input('element_kuk_4_06');
    //     $get->element_kuk_4_07 = $request->input('element_kuk_4_07');
    //     $get->element_kuk_4_08 = $request->input('element_kuk_4_08');
    //     $get->element_kuk_4_09 = $request->input('element_kuk_4_09');
    //     $get->element_kuk_4_10 = $request->input('element_kuk_4_10');
    //     $get->element_kuk_4_11 = $request->input('element_kuk_4_11');
    //     // element 5
    //     $get->element_kuk_5_01 = $request->input('element_kuk_5_01');
    //     $get->element_kuk_5_02 = $request->input('element_kuk_5_02');
    //     $get->element_kuk_5_03 = $request->input('element_kuk_5_03');
    //     $get->element_kuk_5_04 = $request->input('element_kuk_5_04');
    //     $get->element_kuk_5_05 = $request->input('element_kuk_5_05');
    //     $get->element_kuk_5_06 = $request->input('element_kuk_5_06');
    //     $get->element_kuk_5_07 = $request->input('element_kuk_5_07');
    //     $get->element_kuk_5_08 = $request->input('element_kuk_5_08');
    //     $get->element_kuk_5_09 = $request->input('element_kuk_5_09');
    //     $get->element_kuk_5_10 = $request->input('element_kuk_5_10');
    //     $get->element_kuk_5_11 = $request->input('element_kuk_5_11');
    //     // element 6
    //     $get->element_kuk_6_01 = $request->input('element_kuk_6_01');
    //     $get->element_kuk_6_02 = $request->input('element_kuk_6_02');
    //     $get->element_kuk_6_03 = $request->input('element_kuk_6_03');
    //     $get->element_kuk_6_04 = $request->input('element_kuk_6_04');
    //     $get->element_kuk_6_05 = $request->input('element_kuk_6_05');
    //     $get->element_kuk_6_06 = $request->input('element_kuk_6_06');
    //     $get->element_kuk_6_07 = $request->input('element_kuk_6_07');
    //     $get->element_kuk_6_08 = $request->input('element_kuk_6_08');
    //     $get->element_kuk_6_09 = $request->input('element_kuk_6_09');
    //     $get->element_kuk_6_10 = $request->input('element_kuk_6_10');
    //     $get->element_kuk_6_11 = $request->input('element_kuk_6_11');
    //     // element 7
    //     $get->element_kuk_7_01 = $request->input('element_kuk_7_01');
    //     $get->element_kuk_7_02 = $request->input('element_kuk_7_02');
    //     $get->element_kuk_7_03 = $request->input('element_kuk_7_03');
    //     $get->element_kuk_7_04 = $request->input('element_kuk_7_04');
    //     $get->element_kuk_7_05 = $request->input('element_kuk_7_05');
    //     $get->element_kuk_7_06 = $request->input('element_kuk_7_06');
    //     $get->element_kuk_7_07 = $request->input('element_kuk_7_07');
    //     $get->element_kuk_7_08 = $request->input('element_kuk_7_08');
    //     $get->element_kuk_7_09 = $request->input('element_kuk_7_09');
    //     $get->element_kuk_7_10 = $request->input('element_kuk_7_10');
    //     $get->element_kuk_7_11 = $request->input('element_kuk_7_11');
    //     // element 8
    //     $get->element_kuk_8_01 = $request->input('element_kuk_8_01');
    //     $get->element_kuk_8_02 = $request->input('element_kuk_8_02');
    //     $get->element_kuk_8_03 = $request->input('element_kuk_8_03');
    //     $get->element_kuk_8_04 = $request->input('element_kuk_8_04');
    //     $get->element_kuk_8_05 = $request->input('element_kuk_8_05');
    //     $get->element_kuk_8_06 = $request->input('element_kuk_8_06');
    //     $get->element_kuk_8_07 = $request->input('element_kuk_8_07');
    //     $get->element_kuk_8_08 = $request->input('element_kuk_8_08');
    //     $get->element_kuk_8_09 = $request->input('element_kuk_8_09');
    //     $get->element_kuk_8_10 = $request->input('element_kuk_8_10');
    //     $get->element_kuk_8_11 = $request->input('element_kuk_8_11');
    //     // element 9
    //     $get->element_kuk_9_01 = $request->input('element_kuk_9_01');
    //     $get->element_kuk_9_02 = $request->input('element_kuk_9_02');
    //     $get->element_kuk_9_03 = $request->input('element_kuk_9_03');
    //     $get->element_kuk_9_04 = $request->input('element_kuk_9_04');
    //     $get->element_kuk_9_05 = $request->input('element_kuk_9_05');
    //     $get->element_kuk_9_06 = $request->input('element_kuk_9_06');
    //     $get->element_kuk_9_07 = $request->input('element_kuk_9_07');
    //     $get->element_kuk_9_08 = $request->input('element_kuk_9_08');
    //     $get->element_kuk_9_09 = $request->input('element_kuk_9_09');
    //     $get->element_kuk_9_10 = $request->input('element_kuk_9_10');
    //     $get->element_kuk_9_11 = $request->input('element_kuk_9_11');
    //     // element 10
    //     $get->element_kuk_10_01 = $request->input('element_kuk_10_01');
    //     $get->element_kuk_10_02 = $request->input('element_kuk_10_02');
    //     $get->element_kuk_10_03 = $request->input('element_kuk_10_03');
    //     $get->element_kuk_10_04 = $request->input('element_kuk_10_04');
    //     $get->element_kuk_10_05 = $request->input('element_kuk_10_05');
    //     $get->element_kuk_10_06 = $request->input('element_kuk_10_06');
    //     $get->element_kuk_10_07 = $request->input('element_kuk_10_07');
    //     $get->element_kuk_10_08 = $request->input('element_kuk_10_08');
    //     $get->element_kuk_10_09 = $request->input('element_kuk_10_09');
    //     $get->element_kuk_10_10 = $request->input('element_kuk_10_10');
    //     $get->element_kuk_10_11 = $request->input('element_kuk_10_11');
    //     // element 11
    //     $get->element_kuk_11_01 = $request->input('element_kuk_11_01');
    //     $get->element_kuk_11_02 = $request->input('element_kuk_11_02');
    //     $get->element_kuk_11_03 = $request->input('element_kuk_11_03');
    //     $get->element_kuk_11_04 = $request->input('element_kuk_11_04');
    //     $get->element_kuk_11_05 = $request->input('element_kuk_11_05');
    //     $get->element_kuk_11_06 = $request->input('element_kuk_11_06');
    //     $get->element_kuk_11_07 = $request->input('element_kuk_11_07');
    //     $get->element_kuk_11_08 = $request->input('element_kuk_11_08');
    //     $get->element_kuk_11_09 = $request->input('element_kuk_11_09');
    //     $get->element_kuk_11_10 = $request->input('element_kuk_11_10');
    //     $get->element_kuk_11_11 = $request->input('element_kuk_11_11');
    //     $get->tuk = $request->input('tuk');
    //     dd($get);
    //     $get->save();

    //     return redirect()->route('apl_02.index')->with('success', 'Success ! Data Bank Berhasil di Tambahkan');
    // }
    {
        $requestData = $request->all();

        // dd($requestData);

        // Create a new model instance and fill it with the data
        $newRecord = new AnswerAPL02; // Replace with your actual model
        $newRecord->fill($requestData);
        $newRecord->save();
        // dd($newRecord);
        return redirect()->route('apl_02.index')->with('success', 'Success ! Data APL-02 Berhasil di Tambahkan');
    }


    public function get()
    {
        $userId = auth()->user()->id;
        // dd()
        $datas = APL02::latest()
            ->limit(1)
            ->get();
        // dd($datas);
        return view('pages.apl_02.get', [

            'datas' => $datas
        ]);
    }

    public function pdf($id)
    {
        $datas = AnswerAPL02::find($id);
        // dd($datas);
        $pdf = PDF::loadview('pages.apl_02.print', [
            'datas' => $datas,
        ]);
        $pdf->set_paper('letter', 'potrait');
        return $pdf->stream('FR-APL-02 FORMULIR PERMOHONAN SERTIFIKASI KOMPETENSI.pdf');
    }
}