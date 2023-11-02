@extends('layouts/master')
@section('title', 'FK AK-05')
@section('content')
<form action="{{ route('fr_ak_05.update_data', $edit->id) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">FK.AK-05. LAPORAN ASESMEN</h5>
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
                                <th colspan="4"><b>{{
                                        $edit->laporanPertama->apl02->kompetensi02->kompetensi->skema->nama_skema
                                        }}</b>
                                </th>
                            </tr>
                            <tr>
                                <th>Nomor</th>
                                <th>:</th>
                                <th colspan="4"><b>{{ $edit->laporanPertama->apl02->kompetensi02->kompetensi->skema->no
                                        }}</b>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="2">TUK</td>
                                <td>:</td>
                                <td colspan="4" style="text-align: left">
                                    {{ $edit->laporanPertama->tuk }}

                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">Unit Kompetensi</td>
                                <td>:</td>
                                <td colspan="4">

                                    {{ $edit->laporanPertama->apl02->kompetensi02->kompetensi->unit_kompetensi }} <br>
                                    {{ $edit->laporanPertama->apl02->kompetensi02->kompetensi->unit_kompetensi2 }} <br>

                                    @switch($edit)
                                    @case($edit->laporanPertama->apl02->kompetensi02->kompetensi->unit_kompetensi3 ==
                                    null)
                                    @break
                                    @default
                                    {{ $edit->laporanPertama->apl02->kompetensi02->kompetensi->unit_kompetensi3 }} <br>
                                    @endswitch

                                    @switch($edit)
                                    @case($edit->laporanPertama->apl02->kompetensi02->kompetensi->unit_kompetensi4 ==
                                    null)
                                    @break
                                    @default
                                    {{ $edit->laporanPertama->apl02->kompetensi02->kompetensi->unit_kompetensi4 }} <br>
                                    @endswitch

                                    @switch($edit)
                                    @case($edit->laporanPertama->apl02->kompetensi02->kompetensi->unit_kompetensi5 ==
                                    null)
                                    @break
                                    @default
                                    {{ $edit->laporanPertama->apl02->kompetensi02->kompetensi->unit_kompetensi5 }} <br>
                                    @endswitch

                                    @switch($edit)
                                    @case($edit->laporanPertama->apl02->kompetensi02->kompetensi->unit_kompetensi6 ==
                                    null)
                                    @break
                                    @default
                                    {{ $edit->laporanPertama->apl02->kompetensi02->kompetensi->unit_kompetensi6 }} <br>
                                    @endswitch

                                    @switch($edit)
                                    @case($edit->laporanPertama->apl02->kompetensi02->kompetensi->unit_kompetensi7 ==
                                    null)
                                    @break
                                    @default
                                    {{ $edit->laporanPertama->apl02->kompetensi02->kompetensi->unit_kompetensi7 }} <br>
                                    @endswitch

                                    @switch($edit)
                                    @case($edit->laporanPertama->apl02->kompetensi02->kompetensi->unit_kompetensi8 ==
                                    null)
                                    @break
                                    @default
                                    {{ $edit->laporanPertama->apl02->kompetensi02->kompetensi->unit_kompetensi8 }} <br>
                                    @endswitch

                                    @switch($edit)
                                    @case($edit->laporanPertama->apl02->kompetensi02->kompetensi->unit_kompetensi9 ==
                                    null)
                                    @break
                                    @default
                                    {{ $edit->laporanPertama->apl02->kompetensi02->kompetensi->unit_kompetensi9 }} <br>
                                    @endswitch

                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">Nama Asesor</td>
                                <td>:</td>
                                <td colspan="4">{{ $edit->asesor->nama }}</td>
                            </tr>
                            <tr>
                                <td colspan="2">Tanggal Asesmen</td>
                                <td>:</td>
                                <td colspan="2"></td>
                                <td colspan="2">{{ $edit->tgl_asesmen }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-hover mt-4">
                        <thead>
                            <tr>
                                <th width="5px" class="text-center">No</th>
                                <th width="400px" class="text-center">Nama Asesi</th>
                                <th width="100px" class="text-center">K</th>
                                <th width="100px" class="text-center">bK</th>
                                <th width="300px" class="text-center">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>{{$edit->laporanPertama->apl02->personal_detail->nama_lengkap->name}}</td>

                                @switch($edit)
                                @case($edit->rek == 1 )

                                <td class="text-center">
                                    <input name="rek" class="form-check-input" type="radio" value="1" id="defaultRadio1"
                                        checked>
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>

                                <td class="text-center">
                                    <input name="rek" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio1">
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>
                                @break
                                @default

                                <td class="text-center">
                                    <input name="rek" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio1">
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>

                                <td class="text-center">
                                    <input name="rek" class="form-check-input" type="radio" value="2" id="defaultRadio1"
                                        checked>
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>

                                @endswitch


                                <td>

                                    <textarea name="ket" class="form-control" id="" cols="0"
                                        rows="0">{{ $edit->ket }}</textarea>

                                </td>

                            </tr>
                            @switch($edit)
                            @case($edit->answer_apl02_id_2 == null)
                            @break
                            @default
                            <tr>
                                <td>2</td>
                                <td> {{$edit->laporan2->apl02->personal_detail->nama_lengkap->name}}
                                </td>
                                @switch($edit)
                                @case($edit->rek_2 == 1 )

                                <td class="text-center">
                                    <input name="rek_2" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio1" checked>
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>

                                <td class="text-center">
                                    <input name="rek_2" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio1">
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>
                                @break
                                @default

                                <td class="text-center">
                                    <input name="rek_2" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio1">
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>

                                <td class="text-center">
                                    <input name="rek_2" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio1" checked>
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>

                                @endswitch
                                <td>
                                    <textarea name="ket_2" class="form-control" id="" cols="0"
                                        rows="0">{{ $edit->ket_2 }}</textarea>
                                </td>
                            </tr>
                            @endswitch

                            @switch($edit)
                            @case($edit->answer_apl02_id_3 == null)
                            @break
                            @default
                            <tr>
                                <td>3</td>
                                <td> {{$edit->laporan3->apl02->personal_detail->nama_lengkap->name}}
                                </td>
                                @switch($edit)
                                @case($edit->rek_3 == 1 )

                                <td class="text-center">
                                    <input name="rek_3" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio1" checked>
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>

                                <td class="text-center">
                                    <input name="rek_3" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio1">
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>
                                @break
                                @default

                                <td class="text-center">
                                    <input name="rek_3" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio1">
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>

                                <td class="text-center">
                                    <input name="rek_3" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio1" checked>
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>

                                @endswitch
                                <td>
                                    <textarea name="ket_3" class="form-control" id="" cols="0"
                                        rows="0">{{ $edit->ket_3 }}</textarea>
                                </td>
                            </tr>
                            @endswitch

                            @switch($edit)
                            @case($edit->answer_apl02_id_4 == null)
                            @break
                            @default
                            <tr>
                                <td>4</td>
                                <td> {{$edit->laporan4->apl02->personal_detail->nama_lengkap->name}}
                                </td>
                                @switch($edit)
                                @case($edit->rek_4 == 1 )

                                <td class="text-center">
                                    <input name="rek_4" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio1" checked>
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>

                                <td class="text-center">
                                    <input name="rek_4" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio1">
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>
                                @break
                                @default

                                <td class="text-center">
                                    <input name="rek_4" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio1">
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>

                                <td class="text-center">
                                    <input name="rek_4" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio1" checked>
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>

                                @endswitch
                                <td>
                                    <textarea name="ket_4" class="form-control" id="" cols="0"
                                        rows="0">{{ $edit->ket_4 }}</textarea>
                                </td>
                            </tr>
                            @endswitch


                            @switch($edit)
                            @case($edit->answer_apl02_id_5 == null)
                            @break
                            @default
                            <tr>
                                <td>5</td>
                                <td> {{$edit->laporan5->apl02->personal_detail->nama_lengkap->name}}
                                </td>
                                @switch($edit)
                                @case($edit->rek_5 == 1 )

                                <td class="text-center">
                                    <input name="rek_5" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio1" checked>
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>

                                <td class="text-center">
                                    <input name="rek_5" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio1">
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>
                                @break
                                @default

                                <td class="text-center">
                                    <input name="rek_5" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio1">
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>

                                <td class="text-center">
                                    <input name="rek_5" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio1" checked>
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>

                                @endswitch
                                <td>
                                    <textarea name="ket_5" class="form-control" id="" cols="0"
                                        rows="0">{{ $edit->ket_5 }}</textarea>
                                </td>
                            </tr>
                            @endswitch

                            @switch($edit)
                            @case($edit->answer_apl02_id_6 == null)
                            @break
                            @default
                            <tr>
                                <td>6</td>
                                <td> {{$edit->laporan6->apl02->personal_detail->nama_lengkap->name}}
                                </td>
                                @switch($edit)
                                @case($edit->rek_6 == 1 )

                                <td class="text-center">
                                    <input name="rek_6" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio1" checked>
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>

                                <td class="text-center">
                                    <input name="rek_6" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio1">
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>
                                @break
                                @default

                                <td class="text-center">
                                    <input name="rek_6" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio1">
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>

                                <td class="text-center">
                                    <input name="rek_6" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio1" checked>
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>

                                @endswitch
                                <td>
                                    <textarea name="ket_6" class="form-control" id="" cols="0"
                                        rows="0">{{ $edit->ket_6 }}</textarea>
                                </td>

                            </tr>
                            @endswitch

                            @switch($edit)
                            @case($edit->answer_apl02_id_7 == null)
                            @break
                            @default
                            <tr>
                                <td>7</td>
                                <td> {{$edit->laporan7->apl02->personal_detail->nama_lengkap->name}}
                                </td>
                                @switch($edit)
                                @case($edit->rek_7 == 1 )

                                <td class="text-center">
                                    <input name="rek_7" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio1" checked>
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>

                                <td class="text-center">
                                    <input name="rek_7" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio1">
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>
                                @break
                                @default

                                <td class="text-center">
                                    <input name="rek_7" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio1">
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>

                                <td class="text-center">
                                    <input name="rek_7" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio1" checked>
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>

                                @endswitch
                                <td>
                                    <textarea name="ket_7" class="form-control" id="" cols="0"
                                        rows="0">{{ $edit->ket_7 }}</textarea>
                                </td>
                            </tr>
                            @endswitch

                            @switch($edit)
                            @case($edit->answer_apl02_id_8 == null)
                            @break
                            @default
                            <tr>
                                <td>8</td>
                                <td> {{$edit->laporan8->apl02->personal_detail->nama_lengkap->name}}
                                </td>
                                @switch($edit)
                                @case($edit->rek_8 == 1 )

                                <td class="text-center">
                                    <input name="rek_8" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio1" checked>
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>

                                <td class="text-center">
                                    <input name="rek_8" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio1">
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>
                                @break
                                @default

                                <td class="text-center">
                                    <input name="rek_8" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio1">
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>

                                <td class="text-center">
                                    <input name="rek_8" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio1" checked>
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>

                                @endswitch
                                <td>
                                    <textarea name="ket_8" class="form-control" id="" cols="0"
                                        rows="0">{{ $edit->ket_8 }}</textarea>
                                </td>
                            </tr>
                            @endswitch

                            @switch($edit)
                            @case($edit->answer_apl02_id_9 == null)
                            @break
                            @default
                            <tr>
                                <td>9</td>
                                <td> {{$edit->laporan9->apl02->personal_detail->nama_lengkap->name}}
                                </td>
                                @switch($edit)
                                @case($edit->rek_9 == 1 )

                                <td class="text-center">
                                    <input name="rek_9" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio1" checked>
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>

                                <td class="text-center">
                                    <input name="rek_9" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio1">
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>
                                @break
                                @default

                                <td class="text-center">
                                    <input name="rek_9" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio1">
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>

                                <td class="text-center">
                                    <input name="rek_9" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio1" checked>
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>

                                @endswitch
                                <td>
                                    <textarea name="ket_9" class="form-control" id="" cols="0"
                                        rows="0">{{ $edit->ket_9 }}</textarea>
                                </td>
                            </tr>
                            @endswitch


                            @switch($edit)
                            @case($edit->answer_apl02_id_10 == null)
                            @break
                            @default
                            <tr>
                                <td>10</td>
                                <td> {{$edit->laporan10->apl02->personal_detail->nama_lengkap->name}}
                                </td>
                                @switch($edit)
                                @case($edit->rek_10 == 1 )

                                <td class="text-center">
                                    <input name="rek_10" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio1" checked>
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>

                                <td class="text-center">
                                    <input name="rek_10" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio1">
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>
                                @break
                                @default

                                <td class="text-center">
                                    <input name="rek_10" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio1">
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>

                                <td class="text-center">
                                    <input name="rek_10" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio1" checked>
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>

                                @endswitch
                                <td>
                                    <textarea name="ket_10" class="form-control" id="" cols="0"
                                        rows="0">{{ $edit->ket_10 }}</textarea>
                                </td>
                            </tr>
                            @endswitch
                            </thead>
                    </table>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-hover mt-4">
                        <thead>
                            <tr>
                                <th width="300px" class="text-center">laporanPertama Negatif dan Positif dalam asesmen
                                </th>
                                <th width="300px" class="text-center">Pencatatan Penolakan Hasil Asesmen </th>
                                <th width="300px" class="text-center">Saran Perbaikan : <br> (Asesor/Personil Terkait)
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <textarea name="laporan" class="form-control" id="" cols="0"
                                        rows="0">{{ $edit->laporan }}</textarea>
                                </td>
                                <td>
                                    <textarea name="pencatatan" class="form-control" id="" cols="0"
                                        rows="0">{{ $edit->pencatatan }}</textarea>
                                </td>
                                <td>
                                    <textarea name="saran" class="form-control" id="" cols="0"
                                        rows="0">{{ $edit->saran }}</textarea>
                                </td>
                            </tr>
                            </thead>
                    </table>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover mt-4">
                        <thead>
                            <tr>
                                <th width="300px" class="text-left">Catatan</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <textarea name="catatan" class="form-control" id="" cols="0"
                                        rows="0">{{ $edit->catatan }}</textarea>
                                </td>
                            </tr>
                            </thead>
                    </table>
                </div>
                <input type="hidden" name="status" value="1">
                <div class="col-12 d-flex justify-content-end mt-3">
                    <button class="btn btn-primary btn-submit" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection