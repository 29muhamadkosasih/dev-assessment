@extends('layouts/master')
@section('title', 'FK AK-05')
@section('content')
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
                                    $show->laporanPertama->apl02->kompetensi02->kompetensi->skema->nama_skema
                                    }}</b>
                            </th>
                        </tr>
                        <tr>
                            <th>Nomor</th>
                            <th>:</th>
                            <th colspan="4"><b>{{ $show->laporanPertama->apl02->kompetensi02->kompetensi->skema->no
                                    }}</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="2">TUK</td>
                            <td>:</td>
                            <td colspan="4" style="text-align: left">
                                {{ $show->laporanPertama->tuk }}

                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">Unit Kompetensi</td>
                            <td>:</td>
                            <td colspan="4">

                                {{ $show->laporanPertama->apl02->kompetensi02->kompetensi->unit_kompetensi }} <br>
                                {{ $show->laporanPertama->apl02->kompetensi02->kompetensi->unit_kompetensi2 }} <br>

                                @switch($show)
                                @case($show->laporanPertama->apl02->kompetensi02->kompetensi->unit_kompetensi3 == null)
                                @break
                                @default
                                {{ $show->laporanPertama->apl02->kompetensi02->kompetensi->unit_kompetensi3 }} <br>
                                @endswitch

                                @switch($show)
                                @case($show->laporanPertama->apl02->kompetensi02->kompetensi->unit_kompetensi4 == null)
                                @break
                                @default
                                {{ $show->laporanPertama->apl02->kompetensi02->kompetensi->unit_kompetensi4 }} <br>
                                @endswitch

                                @switch($show)
                                @case($show->laporanPertama->apl02->kompetensi02->kompetensi->unit_kompetensi5 == null)
                                @break
                                @default
                                {{ $show->laporanPertama->apl02->kompetensi02->kompetensi->unit_kompetensi5 }} <br>
                                @endswitch

                                @switch($show)
                                @case($show->laporanPertama->apl02->kompetensi02->kompetensi->unit_kompetensi6 == null)
                                @break
                                @default
                                {{ $show->laporanPertama->apl02->kompetensi02->kompetensi->unit_kompetensi6 }} <br>
                                @endswitch

                                @switch($show)
                                @case($show->laporanPertama->apl02->kompetensi02->kompetensi->unit_kompetensi7 == null)
                                @break
                                @default
                                {{ $show->laporanPertama->apl02->kompetensi02->kompetensi->unit_kompetensi7 }} <br>
                                @endswitch

                                @switch($show)
                                @case($show->laporanPertama->apl02->kompetensi02->kompetensi->unit_kompetensi8 == null)
                                @break
                                @default
                                {{ $show->laporanPertama->apl02->kompetensi02->kompetensi->unit_kompetensi8 }} <br>
                                @endswitch

                                @switch($show)
                                @case($show->laporanPertama->apl02->kompetensi02->kompetensi->unit_kompetensi9 == null)
                                @break
                                @default
                                {{ $show->laporanPertama->apl02->kompetensi02->kompetensi->unit_kompetensi9 }} <br>
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

                            @switch($show)
                            @case($show->rek == 1 )

                            <td class="text-center">
                                <input name="rek" class="form-check-input" type="radio" value="1" id="defaultRadio1"
                                    checked>
                                <label class="form-check-label" for="defaultRadio1"></label>
                            </td>

                            <td class="text-center">
                                <input name="rek" class="form-check-input" type="radio" value="2" id="defaultRadio1">
                                <label class="form-check-label" for="defaultRadio1"></label>
                            </td>
                            @break
                            @default

                            <td class="text-center">
                                <input name="rek" class="form-check-input" type="radio" value="1" id="defaultRadio1">
                                <label class="form-check-label" for="defaultRadio1"></label>
                            </td>

                            <td class="text-center">
                                <input name="rek" class="form-check-input" type="radio" value="2" id="defaultRadio1"
                                    checked>
                                <label class="form-check-label" for="defaultRadio1"></label>
                            </td>

                            @endswitch

                            <td>{{ $show->ket }} </td>

                        </tr>
                        @switch($show)
                        @case($show->answer_apl02_id_2 == null)
                        @break
                        @default
                        <tr>
                            <td>2</td>
                            <td> {{$show->laporan2->apl02->personal_detail->nama_lengkap->name}}
                            </td>
                            @switch($show)
                            @case($show->rek_2 == 1 )

                            <td class="text-center">
                                <input name="rek_2" class="form-check-input" type="radio" value="1" id="defaultRadio1"
                                    checked>
                                <label class="form-check-label" for="defaultRadio1"></label>
                            </td>

                            <td class="text-center">
                                <input name="rek_2" class="form-check-input" type="radio" value="2" id="defaultRadio1">
                                <label class="form-check-label" for="defaultRadio1"></label>
                            </td>
                            @break
                            @default

                            <td class="text-center">
                                <input name="rek_2" class="form-check-input" type="radio" value="1" id="defaultRadio1">
                                <label class="form-check-label" for="defaultRadio1"></label>
                            </td>

                            <td class="text-center">
                                <input name="rek_2" class="form-check-input" type="radio" value="2" id="defaultRadio1"
                                    checked>
                                <label class="form-check-label" for="defaultRadio1"></label>
                            </td>

                            @endswitch
                            <td>{{ $show->ket_2 }} </td>
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
                            @switch($show)
                            @case($show->rek_3 == 1 )

                            <td class="text-center">
                                <input name="rek_3" class="form-check-input" type="radio" value="1" id="defaultRadio1"
                                    checked>
                                <label class="form-check-label" for="defaultRadio1"></label>
                            </td>

                            <td class="text-center">
                                <input name="rek_3" class="form-check-input" type="radio" value="2" id="defaultRadio1">
                                <label class="form-check-label" for="defaultRadio1"></label>
                            </td>
                            @break
                            @default

                            <td class="text-center">
                                <input name="rek_3" class="form-check-input" type="radio" value="1" id="defaultRadio1">
                                <label class="form-check-label" for="defaultRadio1"></label>
                            </td>

                            <td class="text-center">
                                <input name="rek_3" class="form-check-input" type="radio" value="2" id="defaultRadio1"
                                    checked>
                                <label class="form-check-label" for="defaultRadio1"></label>
                            </td>

                            @endswitch
                            <td>{{ $show->ket_3 }} </td>
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
                            @switch($show)
                            @case($show->rek_4 == 1 )

                            <td class="text-center">
                                <input name="rek_4" class="form-check-input" type="radio" value="1" id="defaultRadio1"
                                    checked>
                                <label class="form-check-label" for="defaultRadio1"></label>
                            </td>

                            <td class="text-center">
                                <input name="rek_4" class="form-check-input" type="radio" value="2" id="defaultRadio1">
                                <label class="form-check-label" for="defaultRadio1"></label>
                            </td>
                            @break
                            @default

                            <td class="text-center">
                                <input name="rek_4" class="form-check-input" type="radio" value="1" id="defaultRadio1">
                                <label class="form-check-label" for="defaultRadio1"></label>
                            </td>

                            <td class="text-center">
                                <input name="rek_4" class="form-check-input" type="radio" value="2" id="defaultRadio1"
                                    checked>
                                <label class="form-check-label" for="defaultRadio1"></label>
                            </td>

                            @endswitch
                            <td>{{ $show->ket_4 }} </td>
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
                            @switch($show)
                            @case($show->rek_5 == 1 )

                            <td class="text-center">
                                <input name="rek_5" class="form-check-input" type="radio" value="1" id="defaultRadio1"
                                    checked>
                                <label class="form-check-label" for="defaultRadio1"></label>
                            </td>

                            <td class="text-center">
                                <input name="rek_5" class="form-check-input" type="radio" value="2" id="defaultRadio1">
                                <label class="form-check-label" for="defaultRadio1"></label>
                            </td>
                            @break
                            @default

                            <td class="text-center">
                                <input name="rek_5" class="form-check-input" type="radio" value="1" id="defaultRadio1">
                                <label class="form-check-label" for="defaultRadio1"></label>
                            </td>

                            <td class="text-center">
                                <input name="rek_5" class="form-check-input" type="radio" value="2" id="defaultRadio1"
                                    checked>
                                <label class="form-check-label" for="defaultRadio1"></label>
                            </td>

                            @endswitch
                            <td>{{ $show->ket_5 }} </td>
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
                            @switch($show)
                            @case($show->rek_6 == 1 )

                            <td class="text-center">
                                <input name="rek_6" class="form-check-input" type="radio" value="1" id="defaultRadio1"
                                    checked>
                                <label class="form-check-label" for="defaultRadio1"></label>
                            </td>

                            <td class="text-center">
                                <input name="rek_6" class="form-check-input" type="radio" value="2" id="defaultRadio1">
                                <label class="form-check-label" for="defaultRadio1"></label>
                            </td>
                            @break
                            @default

                            <td class="text-center">
                                <input name="rek_6" class="form-check-input" type="radio" value="1" id="defaultRadio1">
                                <label class="form-check-label" for="defaultRadio1"></label>
                            </td>

                            <td class="text-center">
                                <input name="rek_6" class="form-check-input" type="radio" value="2" id="defaultRadio1"
                                    checked>
                                <label class="form-check-label" for="defaultRadio1"></label>
                            </td>

                            @endswitch
                            <td>{{ $show->ket_6 }} </td>

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
                            @switch($show)
                            @case($show->rek_7 == 1 )

                            <td class="text-center">
                                <input name="rek_7" class="form-check-input" type="radio" value="1" id="defaultRadio1"
                                    checked>
                                <label class="form-check-label" for="defaultRadio1"></label>
                            </td>

                            <td class="text-center">
                                <input name="rek_7" class="form-check-input" type="radio" value="2" id="defaultRadio1">
                                <label class="form-check-label" for="defaultRadio1"></label>
                            </td>
                            @break
                            @default

                            <td class="text-center">
                                <input name="rek_7" class="form-check-input" type="radio" value="1" id="defaultRadio1">
                                <label class="form-check-label" for="defaultRadio1"></label>
                            </td>

                            <td class="text-center">
                                <input name="rek_7" class="form-check-input" type="radio" value="2" id="defaultRadio1"
                                    checked>
                                <label class="form-check-label" for="defaultRadio1"></label>
                            </td>

                            @endswitch
                            <td>{{ $show->ket_7 }} </td>
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
                            @switch($show)
                            @case($show->rek_8 == 1 )

                            <td class="text-center">
                                <input name="rek_8" class="form-check-input" type="radio" value="1" id="defaultRadio1"
                                    checked>
                                <label class="form-check-label" for="defaultRadio1"></label>
                            </td>

                            <td class="text-center">
                                <input name="rek_8" class="form-check-input" type="radio" value="2" id="defaultRadio1">
                                <label class="form-check-label" for="defaultRadio1"></label>
                            </td>
                            @break
                            @default

                            <td class="text-center">
                                <input name="rek_8" class="form-check-input" type="radio" value="1" id="defaultRadio1">
                                <label class="form-check-label" for="defaultRadio1"></label>
                            </td>

                            <td class="text-center">
                                <input name="rek_8" class="form-check-input" type="radio" value="2" id="defaultRadio1"
                                    checked>
                                <label class="form-check-label" for="defaultRadio1"></label>
                            </td>

                            @endswitch
                            <td>{{ $show->ket_8 }} </td>
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
                            @switch($show)
                            @case($show->rek_9 == 1 )

                            <td class="text-center">
                                <input name="rek_9" class="form-check-input" type="radio" value="1" id="defaultRadio1"
                                    checked>
                                <label class="form-check-label" for="defaultRadio1"></label>
                            </td>

                            <td class="text-center">
                                <input name="rek_9" class="form-check-input" type="radio" value="2" id="defaultRadio1">
                                <label class="form-check-label" for="defaultRadio1"></label>
                            </td>
                            @break
                            @default

                            <td class="text-center">
                                <input name="rek_9" class="form-check-input" type="radio" value="1" id="defaultRadio1">
                                <label class="form-check-label" for="defaultRadio1"></label>
                            </td>

                            <td class="text-center">
                                <input name="rek_9" class="form-check-input" type="radio" value="2" id="defaultRadio1"
                                    checked>
                                <label class="form-check-label" for="defaultRadio1"></label>
                            </td>

                            @endswitch
                            <td>{{ $show->ket_9 }} </td>
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
                            @switch($show)
                            @case($show->rek_10 == 1 )

                            <td class="text-center">
                                <input name="rek_10" class="form-check-input" type="radio" value="1" id="defaultRadio1"
                                    checked>
                                <label class="form-check-label" for="defaultRadio1"></label>
                            </td>

                            <td class="text-center">
                                <input name="rek_10" class="form-check-input" type="radio" value="2" id="defaultRadio1">
                                <label class="form-check-label" for="defaultRadio1"></label>
                            </td>
                            @break
                            @default

                            <td class="text-center">
                                <input name="rek_10" class="form-check-input" type="radio" value="1" id="defaultRadio1">
                                <label class="form-check-label" for="defaultRadio1"></label>
                            </td>

                            <td class="text-center">
                                <input name="rek_10" class="form-check-input" type="radio" value="2" id="defaultRadio1"
                                    checked>
                                <label class="form-check-label" for="defaultRadio1"></label>
                            </td>

                            @endswitch
                            <td>{{ $show->ket_10 }} </td>
                        </tr>
                        @endswitch
                        </thead>
                </table>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-hover mt-4">
                    <thead>
                        <tr>
                            <th width="300px" class="text-center">laporanPertama Negatif dan Positif dalam asesmen</th>
                            <th width="300px" class="text-center">Pencatatan Penolakan Hasil Asesmen </th>
                            <th width="300px" class="text-center">Saran Perbaikan : <br> (Asesor/Personil Terkait)
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                {{ $show->laporan }} <br> <br>
                            </td>
                            <td>
                                {{ $show->pencatatan }} <br> <br>
                            </td>
                            <td>
                                {{ $show->saran }} <br> <br>
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
                                {{ $show->catatan }} <br> <br> <br><br>
                            </td>
                        </tr>
                        </thead>
                </table>
            </div>
            <input type="hidden" name="status" value="1">
            <div class="col-12 d-flex justify-content-end mt-3">
                <a href="{{ route('fr_ak_05.index') }}" class="btn btn-primary btn-submit" type="submit">Back</a>
            </div>
        </div>
    </div>
</div>
@endsection