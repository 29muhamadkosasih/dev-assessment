@extends('layouts/master')

@section('title', 'FK AK-02')

@section('content')

<form action="{{ route('fr_ak_02.update', $show->id) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">FK.AK-02. FORMULIR REKAMAN ASESMEN KOMPETENSI</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td width="300px">Nama Asesi</td>
                                <td>{{$show->rekAsm->apl02->personal_detail->nama_lengkap->name}}</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nama Asesor</td>
                                <td>{{ $show->rekAsm->nama_asesor_lsp }}</td>
                            </tr>
                            <tr>
                                <td>Skema&nbsp;&nbsp;Sertifikasi Okupasi</td>
                                <td> {{ $show->rekAsm->apl02->kompetensi02->kompetensi->skema->nama_skema }}</td>
                            </tr>
                            <tr>
                                <td>Unit Kompetensi</td>
                                <td>
                                    {{ $show->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi }} <br>
                                    {{ $show->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi2 }} <br>

                                    @switch($show)
                                    @case($show->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi3 == null)
                                    @break
                                    @default
                                    {{ $show->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi3 }} <br>
                                    @endswitch

                                    @switch($show)
                                    @case($show->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi4 == null)
                                    @break
                                    @default
                                    {{ $show->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi4 }} <br>
                                    @endswitch

                                    @switch($show)
                                    @case($show->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi5 == null)
                                    @break
                                    @default
                                    {{ $show->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi5 }} <br>
                                    @endswitch

                                    @switch($show)
                                    @case($show->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi6 == null)
                                    @break
                                    @default
                                    {{ $show->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi6 }} <br>
                                    @endswitch

                                    @switch($show)
                                    @case($show->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi7 == null)
                                    @break
                                    @default
                                    {{ $show->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi7 }} <br>
                                    @endswitch

                                    @switch($show)
                                    @case($show->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi8 == null)
                                    @break
                                    @default
                                    {{ $show->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi8 }} <br>
                                    @endswitch

                                    @switch($show)
                                    @case($show->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi9 == null)
                                    @break
                                    @default
                                    {{ $show->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi9 }} <br>
                                    @endswitch
                                </td>
                            </tr>
                            <tr>
                                <td>Tanggal Mulai Asesmen</td>
                                <td>
                                    <input type="date" class="form-control" name="tgl_mulai">
                                </td>
                            </tr>
                            <tr>
                                <td>Tanggal Selesai Asemen</td>
                                <td>
                                    <input type="date" class="form-control" name="tgl_selesai">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="mt-3 ">
                        Beri tanda (&#10004;) dikolom yang sesuai untuk mencermin bukti yang diproses untuk menentukan
                        kompetensi asesi untuk setiap unit kompetensi.
                    </p>

                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td width="350px">Unit Kompetensi</td>
                                <td>Observasi Demontrasi</td>
                                <td>Portfolio</td>
                                <td>Pertanyaan Wawancara</th>
                                <td>Pertanyaan Lisan</td>
                                <td>Pertanyaan Lisan</td>
                                <td>Proyek Kerja</td>
                                <td>Lainnya</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $show->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi }}</td>
                                <td style="text-align: center">
                                    <input name="unit_kom1_1" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom1_2" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom1_3" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom1_4" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom1_5" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom1_6" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom1_7" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                            </tr>

                            <tr>
                                <td>{{ $show->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi2 }}</td>
                                <td style="text-align: center">
                                    <input name="unit_kom2_1" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom2_2" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom2_3" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom2_4" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom2_5" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom2_6" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom2_7" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                            </tr>

                            @switch($show)
                            @case($show->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi3 == null)
                            @break
                            @default
                            <tr>
                                <td>{{ $show->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi3 }}</td>
                                <td style="text-align: center">
                                    <input name="unit_kom3_1" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom3_2" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom3_3" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom3_4" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom3_5" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom3_6" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom3_7" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi4 == null)
                            @break
                            @default
                            <tr>
                                <td>{{ $show->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi4 }}</td>
                                <td style="text-align: center">
                                    <input name="unit_kom4_1" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom4_2" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom4_3" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom4_4" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom4_5" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom4_6" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom4_7" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi5 == null)
                            @break
                            @default
                            <tr>
                                <td>{{ $show->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi5 }}</td>
                                <td style="text-align: center">
                                    <input name="unit_kom5_1" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom5_2" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom5_3" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom5_4" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom5_5" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom5_6" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom5_7" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi6 == null)
                            @break
                            @default
                            <tr>
                                <td>{{ $show->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi6 }}</td>
                                <td style="text-align: center">
                                    <input name="unit_kom6_1" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom6_2" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom6_3" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom6_4" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom6_5" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom6_6" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom6_7" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                            </tr>
                            @endswitch


                            @switch($show)
                            @case($show->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi7 == null)
                            @break
                            @default
                            <tr>
                                <td>{{ $show->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi7 }}</td>
                                <td style="text-align: center">
                                    <input name="unit_kom7_1" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom7_2" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom7_3" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom7_4" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom7_5" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom7_6" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom7_7" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi8 == null)
                            @break
                            @default
                            <tr>
                                <td>{{ $show->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi8 }}</td>
                                <td style="text-align: center">
                                    <input name="unit_kom8_1" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom8_2" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom8_3" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom8_4" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom8_5" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom8_6" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom8_7" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                            </tr>
                            @endswitch


                            @switch($show)
                            @case($show->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi9 == null)
                            @break
                            @default
                            <tr>
                                <td>{{ $show->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi9 }}</td>
                                <td style="text-align: center">
                                    <input name="unit_kom9_1" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom9_2" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom9_3" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom9_4" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom9_5" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom9_6" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom9_7" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                            </tr>
                            @endswitch


                            @switch($show)
                            @case($show->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi10 == null)
                            @break
                            @default
                            <tr>
                                <td>{{ $show->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi10 }}</td>
                                <td style="text-align: center">
                                    <input name="unit_kom10_1" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom10_2" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom10_3" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom10_4" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom10_5" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom10_6" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom10_7" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                            </tr>
                            @endswitch


                            @switch($show)
                            @case($show->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi11 == null)
                            @break
                            @default
                            <tr>
                                <td>{{ $show->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi11 }}</td>
                                <td style="text-align: center">
                                    <input name="unit_kom11_1" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom11_2" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom11_3" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom11_4" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom11_5" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom11_6" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="unit_kom11_7" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                            </tr>
                            @endswitch

                        </tbody>
                    </table>
                    <br>

                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td width="200px">Keputusan Asesmen</td>
                                <td>
                                    <input name="result" class="form-check-input" type="radio" value="Kompeten">
                                    <label class="form-check-label">Kompeten</label> &nbsp; &nbsp; &nbsp;

                                    <input name="result" class="form-check-input" type="radio" value="Belum Kompeten">
                                    <label class="form-check-label">Belum Kompeten</label>

                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tindak Lanjut yang dibutuhkan ** (masukkan pekerjaan tambahan dan asesmen yang
                                    diperlukan untuk mencapai
                                    kompeten)</td>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    <input name="tindak_lanjut" class="form-check-input mb-2" type="radio"
                                        value="Kompeten">
                                    <label class="form-check-label">Seluruh Element Komptetensi/Kriteria Unjuk Kerja
                                        (KUK)
                                        yang diajukan
                                        telah tercapai</label> <br>


                                    <input name="tindak_lanjut" class="form-check-input mb-3" type="radio"
                                        value="Belum Kompeten">
                                    <label class="form-check-label">Terdapat Element Komptetensi/Kriteria Unjuk Kerja
                                        (KUK)
                                        yang diujikan belum tercapai pada Element/Kriteria Unjuk Kerja :</label> <br>


                                    <textarea class="form-control" id="editor3" name="bk_tindak_lanjut"
                                        rows="5"></textarea>

                                </td>
                            </tr>
                            <tr>
                                <td>Kometar/Observasi Oleh Asesor</td>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    <input name="comment" class="form-check-input mb-2" type="radio" value="Kompeten">
                                    <label class="form-check-label">Tingkatkan Kompetensi anda atau kompetensi pada
                                        kualitas
                                        berikutnya</label> <br>


                                    <input name="comment" class="form-check-input mb-3" type="radio"
                                        value="Belum Kompeten">
                                    <label class="form-check-label">Perlu dilakukan asesmen ulang pada unit kompetensi
                                        :</label> <br>

                                    <textarea class="form-control" id="editor4" name="bk_comment" rows="5"></textarea>

                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="col-12 d-flex justify-content-end mt-3">
                        <button class="btn btn-primary btn-submit" type="submit">Submit</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</form>
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor3' ) )
        .catch( error => {
        console.error( error );
        } );

        ClassicEditor
        .create( document.querySelector( '#editor4' ) )
        .catch( error => {
        console.error( error );
        } );
</script>
@endsection