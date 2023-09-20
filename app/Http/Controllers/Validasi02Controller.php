<?php

namespace App\Http\Controllers;

use App\Models\AnswerAPL02;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class Validasi02Controller extends Controller
{
    public function index()
    {
        $apl_02 = AnswerAPL02::all();

        return view('pages.validasi02.index', [
            'apl_02'    => $apl_02
        ]);
    }

    public function show($id)
    {
        $show = AnswerAPL02::find($id);
        return view('pages.validasi02.show', [
            'show'   => $show
        ]);
    }

    public function update(Request $request, $id)
    {

        // dd($request->all());
        $currentDateTime = Carbon::now();
        $formattedDate = $currentDateTime->format('d-m-Y'); // Format: '2023-08-23'

        // dd($formattedDate);
        $this->validate($request, [
            'nama_asesor_lsp' => 'required',
            'proses_assessment' => 'required',
            'status' => ['required', 'in:Dapat,Tidak dapat'],
            'no_reg' => 'required',

        ]);

        // $folderPath = storage_path('app/public/ttd_asesor_lsp/'); // create signatures folder in public directory
        // $image_parts = explode(";base64,", $request->signature_asesor);
        // $image_type_aux = explode("image/", $image_parts[0]);
        // $image_type = $image_type_aux[1];
        // $image_base64 = base64_decode($image_parts[1]);
        // $file = $folderPath . uniqid() . '.' . $image_type;
        // file_put_contents($file, $image_base64);
        // dd($request->all());

        $data = AnswerAPL02::find($id);

        $data->update([
            // 'signature_asesor'      => uniqid() . '.' . $image_type,
            'nama_asesor_lsp'       => $request->nama_asesor_lsp,
            'no_reg'                => $request->no_reg,
            'status'                => $request->status,
            'proses_assessment'     => $request->proses_assessment,
            'catatan'               => $request->catatan,
            'tanggal_validasi'      => $formattedDate,
            'is_validasi'           => 1,
        ]);

        return redirect()->route('validasi02.index')->with('success', 'Success ! Data Berhasil di Validasi');
    }
}