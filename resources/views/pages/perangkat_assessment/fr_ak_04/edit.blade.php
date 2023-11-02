@extends('layouts/master')
@section('title', 'FK AK-04')
@section('content')

<form action="{{ route('fr_ak_04.update_data', $edit->id) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">FK.AK-04. Banding ASESMEN</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th width="250px" rowspan="2" style="vertical-align: top;padding-top:28px">Skema
                                    Sertifikasi
                                    Okupasi Nasional</th>
                                <th width="200px">Judul</th>
                                <th width="10px">:</th>
                                <th colspan="4"><b>{{ $edit->banding->apl02->kompetensi02->kompetensi->skema->nama_skema
                                        }}</b>
                                </th>
                            </tr>
                            <tr>
                                <th>Nomor</th>
                                <th>:</th>
                                <th colspan="4"> <b>{{ $edit->banding->apl02->kompetensi02->kompetensi->skema->no }}</b>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="2">TUK</td>
                                <td>:</td>
                                <td colspan="4" style="text-align: left">
                                    <label class="form-check-label" for="defaultCheck1"> {{ $edit->banding->tuk }}
                                    </label>
                                    &nbsp;
                                    &nbsp;
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">Nama Asesor</td>
                                <td>:</td>
                                <td colspan="4">{{ $edit->banding->nama_asesor_lsp }}</td>
                            </tr>
                            <tr>
                                <td colspan="2">Nama Asesi</td>
                                <td>:</td>
                                <td colspan="4"> {{$edit->banding->apl02->personal_detail->nama_lengkap->name}}</td>
                            </tr>
                            <tr>
                                <td colspan="2">Tanggal</td>
                                <td>:</td>
                                <td colspan="2"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-hover mt-4">
                        <thead>
                            <tr>
                                <td width="900px"> <b>Jawablah dengan ya atau tidak pertanyaan pertanyaan berikut
                                        ini</b>
                                </td>
                                <th width="100px" style="text-align: center">Ya</th>
                                <th width="100px" style="text-align: center">Tidak</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Apakah proses banding telah dijelaskan kepada anda?</td>
                                <td style="text-align: center">

                                    @switch($edit)
                                    @case($edit->answer_1 == 1)
                                    <input name="answer_1" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio1" checked>
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="answer_1" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio1">
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                    @break
                                    @default

                                    <input name="answer_1" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio1">
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="answer_1" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio1" checked>
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                    @endswitch


                                </td>
                            </tr>
                            <tr>


                                <td>Apakah anda telah mendiskusikan banding dengan asesor?</td>
                                <td style="text-align: center">
                                    @switch($edit)
                                    @case($edit->answer_2 == 1)
                                    <input name="answer_2" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio2" checked>
                                    <label class="form-check-labe2" for="defaultRadio2"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="answer_2" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio2">
                                    <label class="form-check-labe2" for="defaultRadio2"></label>
                                    @break
                                    @default

                                    <input name="answer_2" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio2">
                                    <label class="form-check-labe2" for="defaultRadio2"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="answer_2" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio2" checked>
                                    <label class="form-check-labe2" for="defaultRadio2"></label>
                                    @endswitch
                                </td>
                            </tr>
                            <tr>
                                <td>Apakah anda mau melibatkan "orang lain " membantu anda dalam proses banding?</td>
                                <td style="text-align: center">

                                    @switch($edit)
                                    @case($edit->answer_3 == 1)

                                    <input name="answer_3" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio3" checked>
                                    <label class="form-check-label" for="defaultRadio3"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="answer_3" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio3">
                                    <label class="form-check-label" for="defaultRadio3"></label> @break

                                    @default

                                    <input name="answer_3" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio3">
                                    <label class="form-check-label" for="defaultRadio3"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="answer_3" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio3" checked>
                                    <label class="form-check-label" for="defaultRadio3"></label>
                                    @endswitch
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td>Banding ini diajukan atas keputusan assessment yang dibuat terhadap skema
                                    sertifikasi
                                    okupasi nasional berikut :
                                    <br>Skema : {{ $edit->banding->apl02->kompetensi02->kompetensi->skema->nama_skema
                                    }}
                                    <br>No. Skema : {{ $edit->banding->apl02->kompetensi02->kompetensi->skema->no }}
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td>Banding ini diajukan atas alasan sebagai berikut :
                                    <p>
                                        <textarea name="catatan" class="form-control" cols="113"
                                            rows="3">{{ $edit->catatan }}</textarea>
                                    </p>
                                </td>
                            </tr>
                        </thead>
                    </table>

                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td>Anda mempunyai hak mengajukan banding jika anda menilai proses assessment tidak
                                    sesuai
                                    SOP dan tidak memenuhi prinsip assessment. <br><br><br><br></td>
                            </tr>
                        </thead>
                    </table>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th height="100px" colspan="2"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td width="10px">Tanda tangan&nbsp;&nbsp;asesi : <br>

                                    {{-- <img src="{{ asset('uploads/Fatia_dKZml_CV.png) }}" alt="" style="width: 90px">
                                    --}}
                                    {{-- <img src="https://upload.wikimedia.org/wikipedia/commons/3/33/Vanamo_Logo.png"
                                        alt="" style="width: 90px"> --}}

                                </td>
                                {{-- <td width="10px">Tanggal : <br> --}}
                                    {{-- <img src="https://upload.wikimedia.org/wikipedia/commons/3/33/Vanamo_Logo.png"
                                        alt="" style="width: 90px"> --}}

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <input type="hidden" name="status" value="1">
                <div class="col-12 d-flex justify-content-end mt-2">
                    <button class="btn btn-primary btn-submit" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection