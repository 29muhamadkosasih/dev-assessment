<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Kompetensi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Personaldetail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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
        // dd($request->all());
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
            'ktp' => 'required|mimes:jpeg,png,jpg,gif,pdf|max:10048',
            'surat_keterangan_perusahaan' => 'required|mimes:jpeg,png,jpg,gif,pdf|max:10048',
            'ijazah' => 'required|mimes:jpeg,png,jpg,gif,pdf|max:10048',
            'sertifikat_pendukung' => 'required|mimes:jpeg,png,jpg,gif,pdf|max:10048',
            'cv' => 'required|mimes:jpeg,png,jpg,gif,pdf|max:10048',
            'p_cbt' => 'required|mimes:jpeg,png,jpg,gif,pdf|max:10048',
        ]);


        // $folderPath = storage_path('app/public/ttd/'); // create signatures folder in public directory
        // $image_parts = explode(";base64,", $request->signed);
        // $image_type_aux = explode("image/", $image_parts[0]);
        // $image_type = $image_type_aux[1];
        // $image_base64 = base64_decode($image_parts[1]);
        // $file = $folderPath . uniqid() . '.' . $image_type;
        // file_put_contents($file, $image_base64);

        // $image = $request->file('ttd');
        // $image->storeAs('public/ttd', $image->hashName());


        $randomString = Str::random(5);
        $username = Auth::user()->name;

        $documentNumber = $username . '_' .  $randomString;
        $data2 = $request->ktp;
        if ($data2 == NULL) {
            $filename1 = 0;
        } else {
            if ($request->hasFile('ktp')) {
                $this->validate($request, [
                    'ktp'          => 'mimes:jpeg,png,jpg,gif,pdf|max:15048',
                ]);
                $file               = $request->file('ktp');
                $temp               = str_replace('/', '_', $documentNumber);
                $filename1          = $temp . '_KTP' . '.' . $file->getClientOriginalExtension();
                $destinationPath    = 'storage/Uploads';
                $file->move($destinationPath, $filename1);
            }
        }

        $data3 = $request->p_cbt;
        if ($data3 == NULL) {
            $filename2 = 0;
        } else {
            if ($request->hasFile('p_cbt')) {
                $this->validate($request, [
                    'p_cbt'          => 'mimes:jpeg,png,jpg,gif,pdf|max:15048',
                ]);
                $file               = $request->file('p_cbt');
                $temp               = str_replace('/', '_', $documentNumber);
                $filename2          = $temp . '_Pelatihan_CBT' .  '.' . $file->getClientOriginalExtension();
                $destinationPath    = 'storage/Uploads';
                $file->move($destinationPath, $filename2);
            }
        }


        $data4 = $request->sertifikat_pendukung;
        if ($data4 == NULL) {
            $filename3 = 0;
        } else {
            if ($request->hasFile('sertifikat_pendukung')) {
                $this->validate($request, [
                    'sertifikat_pendukung'          => 'mimes:jpeg,png,jpg,gif,pdf|max:15048',
                ]);
                $file               = $request->file('sertifikat_pendukung');
                $temp               = str_replace('/', '_', $documentNumber);
                $filename3          = $temp . '_Sertifikat_Pendukung' .  '.' . $file->getClientOriginalExtension();
                $destinationPath    = 'storage/Uploads';
                $file->move($destinationPath, $filename3);
            }
        }

        $data5 = $request->cv;
        if ($data5 == NULL) {
            $filename4 = 0;
        } else {
            if ($request->hasFile('cv')) {
                $this->validate($request, [
                    'cv'          => 'mimes:jpeg,png,jpg,gif,pdf|max:15048',
                ]);
                $file               = $request->file('cv');
                $temp               = str_replace('/', '_', $documentNumber);
                $filename4          = $temp . '_CV' .  '.' . $file->getClientOriginalExtension();
                $destinationPath    = 'storage/Uploads';
                $file->move($destinationPath, $filename4);
            }
        }

        $data6 = $request->surat_keterangan_perusahaan;
        if ($data6 == NULL) {
            $filename5 = 0;
        } else {
            if ($request->hasFile('surat_keterangan_perusahaan')) {
                $this->validate($request, [
                    'surat_keterangan_perusahaan'          => 'mimes:jpeg,png,jpg,gif,pdf|max:15048',
                ]);
                $file               = $request->file('surat_keterangan_perusahaan');
                $temp               = str_replace('/', '_', $documentNumber);
                $filename5          =   $temp . '_SKP' . '.' . $file->getClientOriginalExtension();
                $destinationPath    = 'storage/Uploads';
                $file->move($destinationPath, $filename5);
            }
        }


        $data7 = $request->ijazah;
        if ($data7 == NULL) {
            $filename6 = 0;
        } else {
            if ($request->hasFile('ijazah')) {
                $this->validate($request, [
                    'ijazah'          => 'mimes:jpeg,png,jpg,gif,pdf|max:15048',
                ]);
                $file               = $request->file('ijazah');
                $temp               = str_replace('/', '_', $documentNumber);
                $filename6          =  $temp . '_Ijazah' . '.' . $file->getClientOriginalExtension();
                $destinationPath    = 'storage/Uploads';
                $file->move($destinationPath, $filename6);
            }
        }


        // $image2 = $request->file('ktp');
        // $image2->storeAs('public/ktp', $image2->hashName());

        // $image3 = $request->file('p_cbt');
        // $image3->storeAs('public/p_cbt', $image3->hashName());

        // $image4 = $request->file('sertifikat_pendukung');
        // $image4->storeAs('public/sertifikat_pendukung', $image4->hashName());

        // $image5 = $request->file('cv');
        // $image5->storeAs('public/cv', $image5->hashName());

        // $image6 = $request->file('surat_keterangan_perusahaan');
        // $image6->storeAs('public/surat_keterangan_perusahaan', $image6->hashName());

        // $image7 = $request->file('ijazah');
        // $image7->storeAs('public/ijazah', $image7->hashName());

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
            // 'signature'     => uniqid() . '.' . $image_type,
            'ktp'     => $filename1,
            'p_cbt'     => $filename2,
            'sertifikat_pendukung'     => $filename3,
            'cv'     => $filename4,
            'surat_keterangan_perusahaan'     => $filename5,
            'ijazah'     => $filename6
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
        Storage::disk('local')->delete('public/Uploads/' . $delete->ttd);
        Storage::disk('local')->delete('public/Uploads/' . $delete->cv);
        Storage::disk('local')->delete('public/Uploads/' . $delete->ijazah);
        Storage::disk('local')->delete('public/Uploads/' . $delete->p_cbt);
        Storage::disk('local')->delete('public/Uploads/' . $delete->ktp);
        Storage::disk('local')->delete('public/Uploads/' . $delete->surat_keterangan_perusahaan);
        Storage::disk('local')->delete('public/Uploads/' . $delete->sertifikat_pendukung);
        // dd($delete);
        $delete->delete();
        return redirect()->route('validasi.index')
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
        $pdf->set_option("isPhpEnabled", true);
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

    public function download($file)
    {
        $pathToFile = public_path('storage/Uploads/' . $file);
        return response()->download($pathToFile);
    }
}