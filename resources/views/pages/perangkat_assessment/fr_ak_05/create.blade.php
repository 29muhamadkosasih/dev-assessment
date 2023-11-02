@extends('layouts/master')
@section('title', 'FK AK-05')
@section('content')
<form action="{{ route('fr_ak_05.update', $show->id) }}" method="POST" enctype="multipart/form-data">
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
                                <th colspan="4">
                                    <b>{{ $show->kompetensiLaporan->skema->nama_skema
                                        }}</b>
                                </th>
                            </tr>
                            <tr>
                                <th>Nomor</th>
                                <th>:</th>
                                <th colspan="4"><b>{{ $show->kompetensiLaporan->skema->no }}</b>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="2">TUK</td>
                                <td>:</td>
                                <td colspan="4" style="text-align: left">
                                    {{ $show->tuk }}

                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">Unit Kompetensi</td>
                                <td>:</td>
                                <td colspan="4">

                                    {{ $show->kompetensiLaporan->unit_kompetensi }} <br>
                                    {{ $show->kompetensiLaporan->unit_kompetensi2 }} <br>

                                    @switch($show)
                                    @case($show->kompetensiLaporan->unit_kompetensi3 == null)
                                    @break
                                    @default
                                    {{ $show->kompetensiLaporan->unit_kompetensi3 }} <br>
                                    @endswitch

                                    @switch($show)
                                    @case($show->kompetensiLaporan->unit_kompetensi4 == null)
                                    @break
                                    @default
                                    {{ $show->kompetensiLaporan->unit_kompetensi4 }} <br>
                                    @endswitch

                                    @switch($show)
                                    @case($show->kompetensiLaporan->unit_kompetensi5 == null)
                                    @break
                                    @default
                                    {{ $show->kompetensiLaporan->unit_kompetensi5 }} <br>
                                    @endswitch

                                    @switch($show)
                                    @case($show->kompetensiLaporan->unit_kompetensi6 == null)
                                    @break
                                    @default
                                    {{ $show->kompetensiLaporan->unit_kompetensi6 }} <br>
                                    @endswitch

                                    @switch($show)
                                    @case($show->kompetensiLaporan->unit_kompetensi7 == null)
                                    @break
                                    @default
                                    {{ $show->kompetensiLaporan->unit_kompetensi7 }} <br>
                                    @endswitch

                                    @switch($show)
                                    @case($show->kompetensiLaporan->unit_kompetensi8 == null)
                                    @break
                                    @default
                                    {{ $show->kompetensiLaporan->unit_kompetensi8 }} <br>
                                    @endswitch

                                    @switch($show)
                                    @case($show->kompetensiLaporan->unit_kompetensi9 == null)
                                    @break
                                    @default
                                    {{ $show->kompetensiLaporan->unit_kompetensi9 }} <br>
                                    @endswitch

                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">Nama Asesor</td>
                                <td>:</td>
                                <td colspan="4">{{ $show->asesor->nama }}</td>
                            </tr>
                            <tr>
                                <td colspan="2">Tanggal Asesmen</td>
                                <td>:</td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
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
                                <td>{{$show->laporanPertama->apl02->personal_detail->nama_lengkap->name}}</td>
                                <td class="text-center">
                                    <input name="rek" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio1">
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>
                                <td class="text-center">
                                    <input name="rek" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio1">
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>
                                <td>
                                    <textarea name="ket" class="form-control" id="" cols="0" rows="0"></textarea>
                                </td>
                            </tr>
                            @switch($show)
                            @case($show->answer_apl02_id_2 == null)
                            @break
                            @default
                            <tr>
                                <td>2</td>
                                <td> {{$show->laporan2->apl02->personal_detail->nama_lengkap->name}}
                                </td>
                                <td class="text-center">
                                    <input name="rek_2" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio1">
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>
                                <td class="text-center">
                                    <input name="rek_2" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio1">
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>
                                <td>
                                    <textarea name="ket_2" class="form-control" id="" cols="0" rows="0"></textarea>
                                </td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->answer_apl02_id_3 == null)
                            @break
                            @default
                            <tr>
                                <td>3</td>
                                <td> {{$show->laporan3->apl02->personal_detail->nama_lengkap->name}}
                                </td>
                                <td class="text-center">
                                    <input name="rek_3" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio1">
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>
                                <td class="text-center">
                                    <input name="rek_3" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio1">
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>
                                <td>
                                    <textarea name="ket_3" class="form-control" id="" cols="0" rows="0"></textarea>
                                </td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->answer_apl02_id_4 == null)
                            @break
                            @default
                            <tr>
                                <td>4</td>
                                <td> {{$show->laporan4->apl02->personal_detail->nama_lengkap->name}}
                                </td>
                                <td class="text-center">
                                    <input name="rek_4" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio1">
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>
                                <td class="text-center">
                                    <input name="rek_4" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio1">
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>
                                <td>
                                    <textarea name="ket_4" class="form-control" id="" cols="0" rows="0"></textarea>
                                </td>
                            </tr>
                            @endswitch


                            @switch($show)
                            @case($show->answer_apl02_id_5 == null)
                            @break
                            @default
                            <tr>
                                <td>5</td>
                                <td> {{$show->laporan5->apl02->personal_detail->nama_lengkap->name}}
                                </td>
                                <td class="text-center">
                                    <input name="rek_5" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio1">
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>
                                <td class="text-center">
                                    <input name="rek_5" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio1">
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>
                                <td>
                                    <textarea name="ket_5" class="form-control" id="" cols="0" rows="0"></textarea>
                                </td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->answer_apl02_id_6 == null)
                            @break
                            @default
                            <tr>
                                <td>6</td>
                                <td> {{$show->laporan6->apl02->personal_detail->nama_lengkap->name}}
                                </td>
                                <td class="text-center">
                                    <input name="rek_6" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio1">
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>
                                <td class="text-center">
                                    <input name="rek_6" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio1">
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>
                                <td>
                                    <textarea name="ket_6" class="form-control" id="" cols="0" rows="0"></textarea>
                                </td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->answer_apl02_id_7 == null)
                            @break
                            @default
                            <tr>
                                <td>7</td>
                                <td> {{$show->laporan7->apl02->personal_detail->nama_lengkap->name}}
                                </td>
                                <td class="text-center">
                                    <input name="rek_7" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio1">
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>
                                <td class="text-center">
                                    <input name="rek_7" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio1">
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>
                                <td>
                                    <textarea name="ket_7" class="form-control" id="" cols="0" rows="0"></textarea>
                                </td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->answer_apl02_id_8 == null)
                            @break
                            @default
                            <tr>
                                <td>8</td>
                                <td> {{$show->laporan8->apl02->personal_detail->nama_lengkap->name}}
                                </td>
                                <td class="text-center">
                                    <input name="rek_8" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio1">
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>
                                <td class="text-center">
                                    <input name="rek_8" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio1">
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>
                                <td>
                                    <textarea name="ket_8" class="form-control" id="" cols="0" rows="0"></textarea>
                                </td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->answer_apl02_id_9 == null)
                            @break
                            @default
                            <tr>
                                <td>9</td>
                                <td> {{$show->laporan9->apl02->personal_detail->nama_lengkap->name}}
                                </td>
                                <td class="text-center">
                                    <input name="rek_9" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio1">
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>
                                <td class="text-center">
                                    <input name="rek_9" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio1">
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>
                                <td>
                                    <textarea name="ket_9" class="form-control" id="" cols="0" rows="0"></textarea>
                                </td>
                            </tr>
                            @endswitch


                            @switch($show)
                            @case($show->answer_apl02_id_10 == null)
                            @break
                            @default
                            <tr>
                                <td>10</td>
                                <td> {{$show->laporan10->apl02->personal_detail->nama_lengkap->name}}
                                </td>
                                <td class="text-center">
                                    <input name="rek_10" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio1">
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>
                                <td class="text-center">
                                    <input name="rek_10" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio1">
                                    <label class="form-check-label" for="defaultRadio1"></label>
                                </td>
                                <td>
                                    <textarea name="ket_10" class="form-control" id="" cols="0" rows="0"></textarea>
                                </td>
                            </tr>
                            @endswitch
                        </tbody>
                    </table>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-hover mt-4">
                        <thead>
                            <tr>
                                <th width="300px" class="text-center">laporan Negatif dan Positif dalam asesmen</th>
                                <th width="300px" class="text-center">Pencatatan Penolakan Hasil Asesmen </th>
                                <th width="300px" class="text-center">Saran Perbaikan : <br> (Asesor/Personil Terkait)
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <textarea name="laporan" class="form-control" id="" cols="0" rows="0"></textarea>
                                </td>
                                <td>
                                    <textarea name="pencatatan" class="form-control" id="" cols="0" rows="0"></textarea>
                                </td>
                                <td>
                                    <textarea name="saran" class="form-control" id="" cols="0" rows="0"></textarea>
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
                                    <textarea name="catatan" class="form-control" id="" cols="0" rows="0"></textarea>
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
