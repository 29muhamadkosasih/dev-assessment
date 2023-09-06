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
            'ttd_admin_lsp' => 'mimes:jpeg,png,jpg|max:8048',

        ]);

        $data = Personaldetail::find($id);
        $image = $request->file('ttd_admin_lsp');
        $image->storeAs('public/ttd_admin_lsp', $image->hashName());
        $data->update([
            'ttd_admin_lsp'     => $image->hashName(),
            'nama_admin_lsp'     => $request->nama_admin_lsp,
            'no_reg'     => $request->no_reg,
            'status'     => $request->status,
            'tujuan_assessment'     => $request->tujuan_assessment,
            'catatan'     => $request->catatan,
            'tanggal_validasi'     => $formattedDate,
            'is_validasi'     => 1,
        ]);

        // if (!$data) {
        //     return redirect()->back()->with('error', 'Data tidak ditemukan');
        // }
        // $username = Auth::user()->name;
        // $documentNumber = $username;
        // $data2 = $request->ttd_admin_lsp;
        // if ($data2 == NULL) {
        //     $filename1 = 0;
        // } else {
        //     if ($request->hasFile('ttd_admin_lsp')) {
        //         $this->validate($request, [
        //             'ttd_admin_lsp'          => 'mimes:jpeg,png,jpg|max:8048',
        //         ]);
        //         $file               = $request->file('ttd_admin_lsp');
        //         $temp               = str_replace('/', '_', $documentNumber);
        //         $filename1          = 'TTD-Admin-' . $temp . '.' . $file->getClientOriginalExtension();
        //         $destinationPath    = 'storage/TTD-Admin';
        //         $file->move($destinationPath, $filename1);
        //     }
        // }
        // // Update field yang diinginkan dengan nilai baru
        // $data->nama_admin_lsp = $request->input('nama_admin_lsp'); // Ganti dengan nama field yang ingin Anda update
        // $data->no_reg = $request->input('no_reg');
        // $data->status = $request->input('status');
        // $data->ttd_admin_lsp = $filename1;
        // $data->tujuan_assessment = $request->input('tujuan_assessment');
        // $data->catatan = $request->input('catatan');
        // $data->tanggal_validasi = $formattedDate;
        // $data->is_validasi = 1;
        // // Simpan perubahan ke database
        // $data->save();

        return redirect()->route('validasi.index')->with('success', 'Success ! Data Berhasil di Validasi');
    }
}
