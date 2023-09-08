<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Kompetensi;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Personaldetail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class APL01Controller extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('apl_01.index'), Response::HTTP_FORBIDDEN, 'Forbidden');

        $apl_01 = Personaldetail::all();

        return view('pages.apl_01.index', [
            'apl_01'    => $apl_01
        ]);
    }

    public function create()
    {
        // abort_if(Gate::denies('apl_01.create'), Response::HTTP_FORBIDDEN, 'Forbidden');

        $kompetensi = Kompetensi::all();
        return view('pages.apl_01.create', [
            'kompetensi'  => $kompetensi
        ]);
    }

    public function store(Request $request)
    {
        $userId = auth()->id();
        $this->validate($request, [
            'jabatan' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => ['required', 'in:Laki-laki, Wanita'],
            'no_hp' => 'required',
            'pendidikan_terakhir' => ['required', 'not_in:Open this select'],
            'kebangsaan' => ['required', 'not_in:Open this select'],
            'alamat' => 'required',
            'nama_perusahaan' => 'required',
            'email_perusahaan' => 'required',
            'no_hp_perusahaan' => 'required',
            'alamat_perusahaan' => 'required',
            'kompetensi_id' => ['required', 'not_in:Open this select'],
            'ktp' => 'required|mimes:jpeg,png,jpg,gif,pdf|max:8048',
            'surat_keterangan_perusahaan' => 'required|mimes:jpeg,png,jpg,gif,pdf|max:8048',
            'ijazah' => 'required|mimes:jpeg,png,jpg,gif,pdf|max:8048',
            'sertifikat_pendukung' => 'required|mimes:jpeg,png,jpg,gif,pdf|max:8048',
            'cv' => 'required|mimes:jpeg,png,jpg,gif,pdf|max:8048',
            'p_cbt' => 'required|mimes:jpeg,png,jpg,gif,pdf|max:8048',
            'ttd' => 'required|mimes:jpeg,png,jpg|max:8048'
        ]);


        $image = $request->file('ttd');
        $image->storeAs('public/ttd', $image->hashName());

        $image2 = $request->file('ktp');
        $image2->storeAs('public/ktp', $image2->hashName());

        $image3 = $request->file('p_cbt');
        $image3->storeAs('public/p_cbt', $image3->hashName());

        $image4 = $request->file('sertifikat_pendukung');
        $image4->storeAs('public/sertifikat_pendukung', $image4->hashName());

        $image5 = $request->file('cv');
        $image5->storeAs('public/cv', $image5->hashName());

        $image6 = $request->file('surat_keterangan_perusahaan');
        $image6->storeAs('public/surat_keterangan_perusahaan', $image6->hashName());

        $image7 = $request->file('ijazah');
        $image7->storeAs('public/ijazah', $image7->hashName());

        $no_pendaftaran = Personaldetail::generateInvoiceNumber();
        Personaldetail::create([
            'no_pendaftaran'   => $no_pendaftaran,
            'nama_lengkap_id'  => $userId,
            'email_id'  => $userId,
            'tempat_lahir'  => $request->tempat_lahir,
            'tanggal_lahir'  => $request->tanggal_lahir,
            'kebangsaan'  => $request->kebangsaan,
            'jenis_kelamin'  => $request->jenis_kelamin,
            'alamat'  => $request->alamat,
            'no_hp'  => $request->no_hp,
            'pendidikan_terakhir'  => $request->pendidikan_terakhir,
            'nama_perusahaan'  => $request->nama_perusahaan,
            'jabatan'  => $request->jabatan,
            'no_hp_perusahaan'  => $request->no_hp_perusahaan,
            'email_perusahaan'  => $request->email_perusahaan,
            'alamat_perusahaan'  => $request->alamat_perusahaan,
            'kompetensi_id'  => $request->kompetensi_id,
            'ttd'     => $image->hashName(),
            'ktp'     => $image2->hashName(),
            'p_cbt'     => $image3->hashName(),
            'sertifikat_pendukung'     => $image4->hashName(),
            'cv'     => $image5->hashName(),
            'surat_keterangan_perusahaan'     => $image6->hashName(),
            'ijazah'     => $image7->hashName(),
        ]);
        return redirect()->route('get.apl01')->with('success', 'Success ! Pengisian Form APL-01  Berhasil ');
    }

    public function edit($id)
    {
        // abort_if(Gate::denies('apl_01.edit'), Response::HTTP_FORBIDDEN, 'Forbidden');

        $edit = Bank::find($id);
        $bank = Bank::all();
        return view('pages.apl_01.edit', [
            'edit'   => $edit,
            'bank'    => $bank
        ]);
    }

    public function update(Request $request, $id)
    {
        $bank   = Bank::find($id);
        $this->validate($request, [
            'nama_bank' => 'required|max:255|min:5|unique:bank',
        ]);
        $bank->update([
            'nama_bank'   => $request->nama_bank
        ]);

        return redirect()->route('apl_01.index')
            ->with('success', 'Success ! Data Bank Berhasil di Update');
    }


    public function destroy($id)
    {
        $delete = Personaldetail::findOrFail($id);
        Storage::disk('local')->delete('public/ttd/' . $delete->ttd);
        Storage::disk('local')->delete('public/cv/' . $delete->cv);
        Storage::disk('local')->delete('public/ijazah/' . $delete->ijazah);
        Storage::disk('local')->delete('public/p_cbt/' . $delete->p_cbt);
        Storage::disk('local')->delete('public/ktp/' . $delete->ktp);
        Storage::disk('local')->delete('public/surat_keterangan_perusahaan/' . $delete->surat_keterangan_perusahaan);
        Storage::disk('local')->delete('public/sertifikat_pendukung/' . $delete->sertifikat_pendukung);
        // dd($delete);
        $delete->delete();
        return redirect()->route('apl_01.index')
            ->with('success', 'Success ! Data Bank Berhasil di Hapus');
    }

    public function pdf($id)
    {
        $datas = Personaldetail::find($id);
        // dd($datas);
        $pdf = \PDF::loadview('pages.apl_01.print', [
            'datas' => $datas,
        ]);
        $pdf->set_paper('letter', 'potrait');
        return $pdf->stream('FR-APL-01 FORMULIR PERMOHONAN SERTIFIKASI KOMPETENSI.pdf');
    }

    public function get()
    {
        $userId = auth()->user()->id;
        // dd()
        $datas = Personaldetail::where('nama_lengkap_id', $userId)
            ->latest()
            ->limit(1)
            ->get();
        // dd($datas);
        return view('pages.apl_01.get', [

            'datas' => $datas
        ]);
    }
}
