<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Personaldetail;
use Illuminate\Support\Facades\Auth;

class ValidasiController extends Controller
{
    public function index()
    {
        // return view('layouts.maintenance');

        $apl_01 = Personaldetail::all();

        return view('pages.validasi.index', [
            'apl_01'    => $apl_01
        ]);
    }

    public function show($id)
    {
        $show = Personaldetail::find($id);
        return view('pages.validasi.show', [
            'show'   => $show
        ]);
    }

    public function update(Request $request, $id)
    {

        $currentDateTime = Carbon::now();
        $formattedDate = $currentDateTime->format('d-m-Y'); // Format: '2023-08-23'

        // dd($formattedDate);
        $this->validate($request, [
            'nama_admin_lsp' => 'required',
            'tujuan_assessment' => ['required', 'in:Sertifikasi,RCC, RPL,Hasil Pelatihan/Proses Pembelajaran, Lainnya'],
            'status' => ['required', 'in:Lengkap,Belum Lengkap'],
            'no_reg' => 'required',

        ]);

        $folderPath = storage_path('app/public/ttd_admin_lsp/'); // create signatures folder in public directory
        $image_parts = explode(";base64,", $request->signature_admin);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $file = $folderPath . uniqid() . '.' . $image_type;
        file_put_contents($file, $image_base64);
        // dd($request->all());

        $data = Personaldetail::find($id);
        // $image = $request->file('ttd_admin_lsp');
        // $image->storeAs('public/ttd_admin_lsp', $image->hashName());
        $data->update([
            'signature_admin'     => uniqid() . '.' . $image_type,
            'nama_admin_lsp'     => $request->nama_admin_lsp,
            'no_reg'     => $request->no_reg,
            'status'     => $request->status,
            'tujuan_assessment'     => $request->tujuan_assessment,
            'catatan'     => $request->catatan,
            'tanggal_validasi'     => $formattedDate,
            'is_validasi'     => 1,
        ]);

        return redirect()->route('validasi.index')->with('success', 'Success ! Data Berhasil di Validasi');
    }
}