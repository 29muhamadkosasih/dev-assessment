@extends('layouts/master')

@section('title', 'Kompetensi')

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-auto me-auto ">
                </div>
                <div class="col-auto">
                    <a href="{{ route('kompetensi02.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="300px" class="text-left" rowspan="2"
                                style="vertical-align: top;padding-top:28px">
                                Skema OKUPASI
                                <br>
                                SERTIFIKASI
                            </th>
                            <th width="250px">Judul </th>
                            <th width="1px">:</th>
                            <th width="750px">{{ $show->kompetensi->skema->nama_skema }}</th>
                        </tr>
                        <tr>
                            <th>Nomor</th>
                            <th>:</th>
                            <th>{{ $show->kompetensi->skema->no }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="2">TUK</td>
                            <td>:</td>
                            <td>Sewaktu/Tempat Kerja/Mandiri</td>
                        </tr>
                    </tbody>
                </table>

            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-hover mb-3 mt-3">
                    <thead>
                        <tr style="background-color: skyblue">
                            <th> <b>Panduan Assessment</b> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> <b>Instruksi :</b> <br>

                                <li>Baca setiap pertanyaan dikolom sebelah kiri</li>
                                <li>Isi dengan <b>"K"</b> pada kotak jika anda yakin dapat melakukan tugas yang di
                                    jelaskan </li>
                                <li>Isi kolom disebelah kanan dengan mendaftar bukti yang anda miliki untuk menunjukan
                                    bahwa anda melakukan tugas-tugas ini.</li>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="unit">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover"
                        style="background-color: skyblue;border-collapse: collapse;">
                        <thead>
                            <tr>
                                <td width="300px" style="vertical-align: top;padding: 20px;"> <b>Unit Kompetensi No.
                                        1</b> </td>
                                <td>{{ $show->kode }} <br>
                                    {{ $show->unit }}
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-hovermb-3">
                        <tbody>
                            <tr>
                                <td width="500px"> <b>Dapatkah saya?</b> </td>
                                <td width="50px" style="text-align: center">K</td>
                                <td width="50px" style="text-align: center">BK</td>
                                <td width="80px" style="text-align: center">Bukti</td>
                            </tr>
                            <tr>
                                <td>{!! $show->element_kuk_1_01 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            @unless(!$show->element_kuk_1_02)
                            <tr>
                                <td>{!! $show->element_kuk_1_02 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_1_03)
                            <tr>
                                <td>{!! $show->element_kuk_1_03 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_1_04)
                            <tr>
                                <td>{!! $show->element_kuk_1_04 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_1_05)
                            <tr>
                                <td>{!! $show->element_kuk_1_05 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_1_06)
                            <tr>
                                <td>{!! $show->element_kuk_1_06 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_1_07)
                            <tr>
                                <td>{!! $show->element_kuk_1_07 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_1_08)
                            <tr>
                                <td>{!! $show->element_kuk_1_08 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless


                            @unless(!$show->element_kuk_1_09)
                            <tr>
                                <td>{!! $show->element_kuk_1_09 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_1_10)
                            <!-- Tampilkan data -->
                            <tr>
                                <td>{!! $show->element_kuk_1_10 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @switch($show)
                            @case($show->element_kuk_1_11 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_1_11 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_1_12 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_1_12 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_1_13 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_1_13 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_1_14 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_1_14 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_1_15 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_1_15 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_1_16 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_1_16 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_1_17 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_1_17 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_1_18 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_1_18 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_1_19 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_1_19 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_1_20 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_1_20 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_1_21 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_1_11 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_1_22 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_1_22 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_1_23 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_1_23 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_1_24 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_1_24 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_1_25 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_1_25 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_1_26 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_1_26 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_1_27 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_1_27 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_1_28 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_1_28 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_1_29 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_1_29 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_1_30 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_1_30 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_1_31 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_1_31 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_1_32 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_1_32 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_1_33 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_1_33 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_1_34 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_1_34 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_1_35 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_1_35 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_1_36 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_1_36 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_1_37 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_1_37 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_1_38 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_1_38 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_1_39 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_1_39 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_1_40 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_1_40 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_1_41 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_1_41 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_1_42 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_1_42 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_1_43 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_1_43 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_1_44 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_1_44 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_1_45 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_1_45 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                        </tbody>
                    </table>
                </div>
            </div>

            @unless(!$show->kode2)
            <div class="mt-3">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover"
                        style="background-color: skyblue;border-collapse: collapse;">
                        <thead>
                            <tr>
                                <td width="300px" style="vertical-align: top;padding: 20px;"> <b>Unit Kompetensi No.
                                        2</b> </td>
                                <td>{{ $show->kode2 }} <br>
                                    {{ $show->unit2 }}
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-hovermb-3">
                        <tbody>
                            <tr>
                                <td width="500px"> <b>Dapatkah saya?</b> </td>
                                <td width="50px" style="text-align: center">K</td>
                                <td width="50px" style="text-align: center">BK</td>
                                <td width="80px" style="text-align: center">Bukti</td>
                            </tr>
                            <tr>
                                <td>{!! $show->element_kuk_2_01 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            @unless(!$show->element_kuk_2_02)
                            <tr>
                                <td>{!! $show->element_kuk_2_02 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_2_03)
                            <tr>
                                <td>{!! $show->element_kuk_2_03 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_2_04)
                            <tr>
                                <td>{!! $show->element_kuk_2_04 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_2_05)
                            <tr>
                                <td>{!! $show->element_kuk_2_05 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_2_06)
                            <tr>
                                <td>{!! $show->element_kuk_2_06 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_2_07)
                            <tr>
                                <td>{!! $show->element_kuk_2_07 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_2_08)
                            <tr>
                                <td>{!! $show->element_kuk_2_08 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless


                            @unless(!$show->element_kuk_2_09)
                            <tr>
                                <td>{!! $show->element_kuk_2_09 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_2_10)
                            <!-- Tampilkan data -->
                            <tr>
                                <td>{!! $show->element_kuk_2_10 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @switch($show)
                            @case($show->element_kuk_2_11 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_2_11 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_2_12 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_2_12 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_2_13 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_2_13 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_2_14 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_2_14 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_2_15 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_2_15 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_2_16 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_2_16 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_2_17 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_2_17 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_2_18 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_2_18 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_2_19 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_2_19 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_2_20 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_2_20 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_2_21 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_2_11 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_2_22 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_2_22 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_2_23 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_2_23 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_2_24 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_2_24 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_2_25 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_2_25 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_2_26 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_2_26 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_2_27 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_2_27 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_2_28 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_2_28 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_2_29 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_2_29 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_2_30 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_2_30 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_2_31 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_2_31 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_2_32 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_2_32 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_2_33 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_2_33 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_2_34 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_2_34 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_2_35 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_2_35 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_2_36 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_2_36 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_2_37 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_2_37 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_2_38 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_2_38 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_2_39 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_2_39 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_2_40 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_2_40 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_2_41 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_2_41 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_2_42 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_2_42 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_2_43 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_2_43 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_2_44 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_2_44 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_2_45 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_2_45 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                        </tbody>
                    </table>
                </div>
            </div>
            @endunless

            @unless(!$show->kode3)
            <div class="mt-3">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover"
                        style="background-color: skyblue;border-collapse: collapse;">
                        <thead>
                            <tr>
                                <td width="300px" style="vertical-align: top;padding: 20px;"> <b>Unit Kompetensi No.
                                        3</b> </td>
                                <td>{{ $show->kode3 }} <br>
                                    {{ $show->unit3 }}
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-hovermb-3">
                        <tbody>
                            <tr>
                                <td width="500px"> <b>Dapatkah saya?</b> </td>
                                <td width="50px" style="text-align: center">K</td>
                                <td width="50px" style="text-align: center">BK</td>
                                <td width="80px" style="text-align: center">Bukti</td>
                            </tr>
                            <tr>
                                <td>{!! $show->element_kuk_3_01 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            @unless(!$show->element_kuk_3_02)
                            <tr>
                                <td>{!! $show->element_kuk_3_02 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_3_03)
                            <tr>
                                <td>{!! $show->element_kuk_3_03 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_3_04)
                            <tr>
                                <td>{!! $show->element_kuk_3_04 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_3_05)
                            <tr>
                                <td>{!! $show->element_kuk_3_05 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_3_06)
                            <tr>
                                <td>{!! $show->element_kuk_3_06 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_3_07)
                            <tr>
                                <td>{!! $show->element_kuk_3_07 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_3_08)
                            <tr>
                                <td>{!! $show->element_kuk_3_08 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless


                            @unless(!$show->element_kuk_3_09)
                            <tr>
                                <td>{!! $show->element_kuk_3_09 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_3_10)
                            <!-- Tampilkan data -->
                            <tr>
                                <td>{!! $show->element_kuk_3_10 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @switch($show)
                            @case($show->element_kuk_3_11 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_3_11 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_3_12 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_3_12 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_3_13 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_3_13 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_3_14 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_3_14 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_3_15 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_3_15 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_3_16 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_3_16 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_3_17 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_3_17 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_3_18 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_3_18 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_3_19 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_3_19 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_3_20 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_3_20 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_3_21 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_3_21 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_3_22 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_3_22 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_3_23 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_3_23 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_3_24 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_3_24 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_3_25 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_3_25 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_3_26 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_3_26 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_3_27 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_3_27 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_3_28 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_3_28 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_3_29 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_3_29 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_3_30 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_3_30 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_3_31 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_3_31 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_3_32 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_3_32 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_3_33 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_3_33 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_3_34 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_3_34 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_3_35 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_3_35 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_3_36 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_3_36 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_3_37 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_3_37 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_3_38 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_3_38 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_3_39 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_3_39 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_3_40 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_3_40 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_3_41 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_3_41 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_3_42 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_3_42 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_3_43 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_3_43 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_3_44 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_3_44 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_3_45 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_3_45 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                        </tbody>
                    </table>
                </div>
            </div>
            @endunless

            @unless(!$show->kode4)
            <div class="mt-3">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover"
                        style="background-color: skyblue;border-collapse: collapse;">
                        <thead>
                            <tr>
                                <td width="300px" style="vertical-align: top;padding: 20px;"> <b>Unit Kompetensi No.
                                        4</b> </td>
                                <td>{{ $show->kode4 }} <br>
                                    {{ $show->unit4 }}
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-hovermb-3">
                        <tbody>
                            <tr>
                                <td width="500px"> <b>Dapatkah saya?</b> </td>
                                <td width="50px" style="text-align: center">K</td>
                                <td width="50px" style="text-align: center">BK</td>
                                <td width="80px" style="text-align: center">Bukti</td>
                            </tr>
                            <tr>
                                <td>{!! $show->element_kuk_4_01 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            @unless(!$show->element_kuk_4_02)
                            <tr>
                                <td>{!! $show->element_kuk_4_02 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_4_03)
                            <tr>
                                <td>{!! $show->element_kuk_4_03 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_4_04)
                            <tr>
                                <td>{!! $show->element_kuk_4_04 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_4_05)
                            <tr>
                                <td>{!! $show->element_kuk_4_05 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_4_06)
                            <tr>
                                <td>{!! $show->element_kuk_4_06 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_4_07)
                            <tr>
                                <td>{!! $show->element_kuk_4_07 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_4_08)
                            <tr>
                                <td>{!! $show->element_kuk_4_08 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless


                            @unless(!$show->element_kuk_4_09)
                            <tr>
                                <td>{!! $show->element_kuk_4_09 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_4_10)
                            <!-- Tampilkan data -->
                            <tr>
                                <td>{!! $show->element_kuk_4_10 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @switch($show)
                            @case($show->element_kuk_4_11 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_4_11 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_4_12 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_4_12 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_4_13 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_4_13 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_4_14 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_4_14 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_4_15 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_4_15 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_4_16 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_4_16 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_4_17 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_4_17 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_4_18 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_4_18 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_4_19 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_4_19 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_4_20 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_4_20 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_4_21 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_4_11 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_4_22 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_4_22 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_4_23 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_4_23 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_4_24 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_4_24 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_4_25 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_4_25 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_4_26 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_4_26 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_4_27 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_4_27 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_4_28 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_4_28 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_4_29 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_4_29 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_4_30 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_4_30 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_4_31 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_4_31 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_4_32 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_4_32 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_4_33 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_4_33 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_4_34 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_4_34 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_4_35 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_4_35 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_4_36 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_4_36 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_4_37 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_4_37 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_4_38 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_4_38 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_4_39 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_4_39 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_4_40 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_4_40 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_4_41 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_4_41 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_4_42 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_4_42 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_4_43 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_4_43 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_4_44 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_4_44 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_4_45 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_4_45 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                        </tbody>
                    </table>
                </div>
            </div>
            @endunless

            @unless(!$show->kode5)
            <div class="mt-3">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover"
                        style="background-color: skyblue;border-collapse: collapse;">
                        <thead>
                            <tr>
                                <td width="300px" style="vertical-align: top;padding: 20px;"> <b>Unit Kompetensi No.
                                        5</b> </td>
                                <td>{{ $show->kode5 }} <br>
                                    {{ $show->unit5 }}
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-hovermb-3">
                        <tbody>
                            <tr>
                                <td width="500px"> <b>Dapatkah saya?</b> </td>
                                <td width="50px" style="text-align: center">K</td>
                                <td width="50px" style="text-align: center">BK</td>
                                <td width="80px" style="text-align: center">Bukti</td>
                            </tr>
                            <tr>
                                <td>{!! $show->element_kuk_5_01 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            @unless(!$show->element_kuk_5_02)
                            <tr>
                                <td>{!! $show->element_kuk_5_02 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_5_03)
                            <tr>
                                <td>{!! $show->element_kuk_5_03 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_5_04)
                            <tr>
                                <td>{!! $show->element_kuk_5_04 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_5_05)
                            <tr>
                                <td>{!! $show->element_kuk_5_05 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_5_06)
                            <tr>
                                <td>{!! $show->element_kuk_5_06 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_5_07)
                            <tr>
                                <td>{!! $show->element_kuk_5_07 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_5_08)
                            <tr>
                                <td>{!! $show->element_kuk_5_08 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless


                            @unless(!$show->element_kuk_5_09)
                            <tr>
                                <td>{!! $show->element_kuk_5_09 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_5_10)
                            <!-- Tampilkan data -->
                            <tr>
                                <td>{!! $show->element_kuk_5_10 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @switch($show)
                            @case($show->element_kuk_5_11 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_5_11 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_5_12 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_5_12 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_5_13 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_5_13 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_5_14 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_5_14 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_5_15 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_5_15 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_5_16 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_5_16 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_5_17 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_5_17 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_5_18 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_5_18 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_5_19 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_5_19 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_5_20 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_5_20 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_5_21 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_5_11 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_5_22 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_5_22 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_5_23 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_5_23 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_5_24 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_5_24 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_5_25 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_5_25 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_5_26 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_5_26 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_5_27 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_5_27 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_5_28 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_5_28 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_5_29 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_5_29 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_5_30 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_5_30 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_5_31 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_5_31 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_5_32 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_5_32 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_5_33 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_5_33 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_5_34 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_5_34 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_5_35 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_5_35 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_5_36 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_5_36 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_5_37 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_5_37 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_5_38 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_5_38 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_5_39 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_5_39 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_5_40 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_5_40 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_5_41 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_5_41 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_5_42 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_5_42 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_5_43 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_5_43 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_5_44 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_5_44 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_5_45 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_5_45 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                        </tbody>
                    </table>
                </div>
            </div>
            @endunless

            @unless(!$show->kode6)
            <div class="mt-3">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover"
                        style="background-color: skyblue;border-collapse: collapse;">
                        <thead>
                            <tr>
                                <td width="300px" style="vertical-align: top;padding: 20px;"> <b>Unit Kompetensi No.
                                        6</b> </td>
                                <td>{{ $show->kode6 }} <br>
                                    {{ $show->unit6 }}
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-hovermb-3">
                        <tbody>
                            <tr>
                                <td width="500px"> <b>Dapatkah saya?</b> </td>
                                <td width="50px" style="text-align: center">K</td>
                                <td width="50px" style="text-align: center">BK</td>
                                <td width="80px" style="text-align: center">Bukti</td>
                            </tr>
                            <tr>
                                <td>{!! $show->element_kuk_6_01 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            @unless(!$show->element_kuk_6_02)
                            <tr>
                                <td>{!! $show->element_kuk_6_02 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_6_03)
                            <tr>
                                <td>{!! $show->element_kuk_6_03 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_6_04)
                            <tr>
                                <td>{!! $show->element_kuk_6_04 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_6_05)
                            <tr>
                                <td>{!! $show->element_kuk_6_05 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_6_06)
                            <tr>
                                <td>{!! $show->element_kuk_6_06 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_6_07)
                            <tr>
                                <td>{!! $show->element_kuk_6_07 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_6_08)
                            <tr>
                                <td>{!! $show->element_kuk_6_08 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless


                            @unless(!$show->element_kuk_6_09)
                            <tr>
                                <td>{!! $show->element_kuk_6_09 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_6_10)
                            <!-- Tampilkan data -->
                            <tr>
                                <td>{!! $show->element_kuk_6_10 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @switch($show)
                            @case($show->element_kuk_6_11 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_6_11 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch


                            @switch($show)
                            @case($show->element_kuk_6_12 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_6_12 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_6_13 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_6_13 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_6_14 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_6_14 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_6_15 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_6_15 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_6_16 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_6_16 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_6_17 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_6_17 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_6_18 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_6_18 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_6_19 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_6_19 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_6_20 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_6_20 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_6_21 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_6_11 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_6_22 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_6_22 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_6_23 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_6_23 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_6_24 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_6_24 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_6_25 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_6_25 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_6_26 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_6_26 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_6_27 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_6_27 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_6_28 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_6_28 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_6_29 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_6_29 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_6_30 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_6_30 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_6_31 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_6_31 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_6_32 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_6_32 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_6_33 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_6_33 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_6_34 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_6_34 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_6_35 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_6_35 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_6_36 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_6_36 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_6_37 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_6_37 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_6_38 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_6_38 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_6_39 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_6_39 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_6_40 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_6_40 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_6_41 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_6_41 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_6_42 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_6_42 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_6_43 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_6_43 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_6_44 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_6_44 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_6_45 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_6_45 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                        </tbody>
                    </table>
                </div>
            </div>
            @endunless

            @unless(!$show->kode7)
            <div class="mt-3">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover"
                        style="background-color: skyblue;border-collapse: collapse;">
                        <thead>
                            <tr>
                                <td width="300px" style="vertical-align: top;padding: 20px;"> <b>Unit Kompetensi No.
                                        7</b> </td>
                                <td>{{ $show->kode7 }} <br>
                                    {{ $show->unit7 }}
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-hovermb-3">
                        <tbody>
                            <tr>
                                <td width="500px"> <b>Dapatkah saya?</b> </td>
                                <td width="50px" style="text-align: center">K</td>
                                <td width="50px" style="text-align: center">BK</td>
                                <td width="80px" style="text-align: center">Bukti</td>
                            </tr>
                            <tr>
                                <td>{!! $show->element_kuk_7_01 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            @unless(!$show->element_kuk_7_02)
                            <tr>
                                <td>{!! $show->element_kuk_7_02 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_7_03)
                            <tr>
                                <td>{!! $show->element_kuk_7_03 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_7_04)
                            <tr>
                                <td>{!! $show->element_kuk_7_04 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_7_05)
                            <tr>
                                <td>{!! $show->element_kuk_7_05 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_7_06)
                            <tr>
                                <td>{!! $show->element_kuk_7_06 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_7_07)
                            <tr>
                                <td>{!! $show->element_kuk_7_07 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_7_08)
                            <tr>
                                <td>{!! $show->element_kuk_7_08 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless


                            @unless(!$show->element_kuk_7_09)
                            <tr>
                                <td>{!! $show->element_kuk_7_09 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_7_10)
                            <!-- Tampilkan data -->
                            <tr>
                                <td>{!! $show->element_kuk_7_10 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @switch($show)
                            @case($show->element_kuk_7_11 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_7_11 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_7_12 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_7_12 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_7_13 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_7_13 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_7_14 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_7_14 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_7_15 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_7_15 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_7_16 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_7_16 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_7_17 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_7_17 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_7_18 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_7_18 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_7_19 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_7_19 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_7_20 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_7_20 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_7_21 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_7_11 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_7_22 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_7_22 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_7_23 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_7_23 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_7_24 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_7_24 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_7_25 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_7_25 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_7_26 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_7_26 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_7_27 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_7_27 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_7_28 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_7_28 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_7_29 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_7_29 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_7_30 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_7_30 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_7_31 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_7_31 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_7_32 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_7_32 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_7_33 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_7_33 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_7_34 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_7_34 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_7_35 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_7_35 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_7_36 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_7_36 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_7_37 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_7_37 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_7_38 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_7_38 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_7_39 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_7_39 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_7_40 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_7_40 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_7_41 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_7_41 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_7_42 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_7_42 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_7_43 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_7_43 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_7_44 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_7_44 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_7_45 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_7_45 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                        </tbody>
                    </table>
                </div>
            </div>
            @endunless

            @unless(!$show->kode8)
            <div class="mt-3">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover"
                        style="background-color: skyblue;border-collapse: collapse;">
                        <thead>
                            <tr>
                                <td width="300px" style="vertical-align: top;padding: 20px;"> <b>Unit Kompetensi No.
                                        8</b> </td>
                                <td>{{ $show->kode8 }} <br>
                                    {{ $show->unit8 }}
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-hovermb-3">
                        <tbody>
                            <tr>
                                <td width="500px"> <b>Dapatkah saya?</b> </td>
                                <td width="50px" style="text-align: center">K</td>
                                <td width="50px" style="text-align: center">BK</td>
                                <td width="80px" style="text-align: center">Bukti</td>
                            </tr>
                            <tr>
                                <td>{!! $show->element_kuk_8_01 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            @unless(!$show->element_kuk_8_02)
                            <tr>
                                <td>{!! $show->element_kuk_8_02 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_8_03)
                            <tr>
                                <td>{!! $show->element_kuk_8_03 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_8_04)
                            <tr>
                                <td>{!! $show->element_kuk_8_04 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_8_05)
                            <tr>
                                <td>{!! $show->element_kuk_8_05 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_8_06)
                            <tr>
                                <td>{!! $show->element_kuk_8_06 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_8_07)
                            <tr>
                                <td>{!! $show->element_kuk_8_07 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_8_08)
                            <tr>
                                <td>{!! $show->element_kuk_8_08 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless


                            @unless(!$show->element_kuk_8_09)
                            <tr>
                                <td>{!! $show->element_kuk_8_09 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_8_10)
                            <!-- Tampilkan data -->
                            <tr>
                                <td>{!! $show->element_kuk_8_10 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @switch($show)
                            @case($show->element_kuk_8_11 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_8_11 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_8_12 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_8_12 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_8_13 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_8_13 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_8_14 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_8_14 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_8_15 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_8_15 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_8_16 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_8_16 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_8_17 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_8_17 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_8_18 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_8_18 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_8_19 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_8_19 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_8_20 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_8_20 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_8_21 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_8_11 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_8_22 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_8_22 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_8_23 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_8_23 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_8_24 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_8_24 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_8_25 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_8_25 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_8_26 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_8_26 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_8_27 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_8_27 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_8_28 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_8_28 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_8_29 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_8_29 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_8_30 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_8_30 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_8_31 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_8_31 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_8_32 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_8_32 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_8_33 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_8_33 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_8_34 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_8_34 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_8_35 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_8_35 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_8_36 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_8_36 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_8_37 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_8_37 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_8_38 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_8_38 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_8_39 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_8_39 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_8_40 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_8_40 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_8_41 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_8_41 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_8_42 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_8_42 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_8_43 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_8_43 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_8_44 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_8_44 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_8_45 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_8_45 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                        </tbody>
                    </table>
                </div>
            </div>
            @endunless

            @unless(!$show->kode9)
            <div class="mt-3">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover"
                        style="background-color: skyblue;border-collapse: collapse;">
                        <thead>
                            <tr>
                                <td width="300px" style="vertical-align: top;padding: 20px;"> <b>Unit Kompetensi No.
                                        9</b> </td>
                                <td>{{ $show->kode9 }} <br>
                                    {{ $show->unit9 }}
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-hovermb-3">
                        <tbody>
                            <tr>
                                <td width="500px"> <b>Dapatkah saya?</b> </td>
                                <td width="50px" style="text-align: center">K</td>
                                <td width="50px" style="text-align: center">BK</td>
                                <td width="80px" style="text-align: center">Bukti</td>
                            </tr>
                            <tr>
                                <td>{!! $show->element_kuk_9_01 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            @unless(!$show->element_kuk_9_02)
                            <tr>
                                <td>{!! $show->element_kuk_9_02 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_9_03)
                            <tr>
                                <td>{!! $show->element_kuk_9_03 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_9_04)
                            <tr>
                                <td>{!! $show->element_kuk_9_04 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_9_05)
                            <tr>
                                <td>{!! $show->element_kuk_9_05 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_9_06)
                            <tr>
                                <td>{!! $show->element_kuk_9_06 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_9_07)
                            <tr>
                                <td>{!! $show->element_kuk_9_07 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_9_08)
                            <tr>
                                <td>{!! $show->element_kuk_9_08 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless


                            @unless(!$show->element_kuk_9_09)
                            <tr>
                                <td>{!! $show->element_kuk_9_09 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_9_10)
                            <!-- Tampilkan data -->
                            <tr>
                                <td>{!! $show->element_kuk_9_10 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @switch($show)
                            @case($show->element_kuk_9_11 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_9_11 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_9_12 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_9_12 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_9_13 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_9_13 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_9_14 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_9_14 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_9_15 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_9_15 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_9_16 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_9_16 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_9_17 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_9_17 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_9_18 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_9_18 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_9_19 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_9_19 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_9_20 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_9_20 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_9_21 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_9_11 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_9_22 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_9_22 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_9_23 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_9_23 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_9_24 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_9_24 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_9_25 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_9_25 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_9_26 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_9_26 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_9_27 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_9_27 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_9_28 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_9_28 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_9_29 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_9_29 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_9_30 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_9_30 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_9_31 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_9_31 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_9_32 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_9_32 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_9_33 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_9_33 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_9_34 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_9_34 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_9_35 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_9_35 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_9_36 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_9_36 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_9_37 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_9_37 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_9_38 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_9_38 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_9_39 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_9_39 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_9_40 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_9_40 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_9_41 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_9_41 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_9_42 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_9_42 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_9_43 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_9_43 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_9_44 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_9_44 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_9_45 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_9_45 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                        </tbody>
                    </table>
                </div>
            </div>
            @endunless

            @unless(!$show->kode10)
            <div class="mt-3">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover"
                        style="background-color: skyblue;border-collapse: collapse;">
                        <thead>
                            <tr>
                                <td width="300px" style="vertical-align: top;padding: 20px;"> <b>Unit Kompetensi No.
                                        10</b> </td>
                                <td>{{ $show->kode10 }} <br>
                                    {{ $show->unit10 }}
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-hovermb-3">
                        <tbody>
                            <tr>
                                <td width="500px"> <b>Dapatkah saya?</b> </td>
                                <td width="50px" style="text-align: center">K</td>
                                <td width="50px" style="text-align: center">BK</td>
                                <td width="80px" style="text-align: center">Bukti</td>
                            </tr>
                            <tr>
                                <td>{!! $show->element_kuk_10_01 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            @unless(!$show->element_kuk_10_02)
                            <tr>
                                <td>{!! $show->element_kuk_10_02 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_10_03)
                            <tr>
                                <td>{!! $show->element_kuk_10_03 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_10_04)
                            <tr>
                                <td>{!! $show->element_kuk_10_04 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_10_05)
                            <tr>
                                <td>{!! $show->element_kuk_10_05 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_10_06)
                            <tr>
                                <td>{!! $show->element_kuk_10_06 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_10_07)
                            <tr>
                                <td>{!! $show->element_kuk_10_07 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_10_08)
                            <tr>
                                <td>{!! $show->element_kuk_10_08 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless


                            @unless(!$show->element_kuk_10_09)
                            <tr>
                                <td>{!! $show->element_kuk_10_09 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_10_10)
                            <!-- Tampilkan data -->
                            <tr>
                                <td>{!! $show->element_kuk_10_10 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @switch($show)
                            @case($show->element_kuk_10_11 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_10_11 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_10_12 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_10_12 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_10_13 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_10_13 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_10_14 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_10_14 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_10_15 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_10_15 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_10_16 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_10_16 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_10_17 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_10_17 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_10_18 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_10_18 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_10_19 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_10_19 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_10_20 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_10_20 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_10_21 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_10_11 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_10_22 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_10_22 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_10_23 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_10_23 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_10_24 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_10_24 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_10_25 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_10_25 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_10_26 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_10_26 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_10_27 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_10_27 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_10_28 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_10_28 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_10_29 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_10_29 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_10_30 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_10_30 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_10_31 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_10_31 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_10_32 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_10_32 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_10_33 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_10_33 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_10_34 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_10_34 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_10_35 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_10_35 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_10_36 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_10_36 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_10_37 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_10_37 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_10_38 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_10_38 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_10_39 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_10_39 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_10_40 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_10_40 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_10_41 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_10_41 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_10_42 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_10_42 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_10_43 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_10_43 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_10_44 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_10_44 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_10_45 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_10_45 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                        </tbody>
                    </table>
                </div>
            </div>
            @endunless

            @unless(!$show->kode11)
            <div class="mt-3">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover"
                        style="background-color: skyblue;border-collapse: collapse;">
                        <thead>
                            <tr>
                                <td width="300px" style="vertical-align: top;padding: 20px;"> <b>Unit Kompetensi No.
                                        11</b> </td>
                                <td>{{ $show->kode11 }} <br>
                                    {{ $show->unit11 }}
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-hovermb-3">
                        <tbody>
                            <tr>
                                <td width="500px"> <b>Dapatkah saya?</b> </td>
                                <td width="50px" style="text-align: center">K</td>
                                <td width="50px" style="text-align: center">BK</td>
                                <td width="80px" style="text-align: center">Bukti</td>
                            </tr>
                            <tr>
                                <td>{!! $show->element_kuk_11_01 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            @unless(!$show->element_kuk_11_02)
                            <tr>
                                <td>{!! $show->element_kuk_11_02 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_11_03)
                            <tr>
                                <td>{!! $show->element_kuk_11_03 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_11_04)
                            <tr>
                                <td>{!! $show->element_kuk_11_04 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_11_05)
                            <tr>
                                <td>{!! $show->element_kuk_11_05 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_11_06)
                            <tr>
                                <td>{!! $show->element_kuk_11_06 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_11_07)
                            <tr>
                                <td>{!! $show->element_kuk_11_07 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_11_08)
                            <tr>
                                <td>{!! $show->element_kuk_11_08 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless


                            @unless(!$show->element_kuk_11_09)
                            <tr>
                                <td>{!! $show->element_kuk_11_09 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->element_kuk_11_10)
                            <!-- Tampilkan data -->
                            <tr>
                                <td>{!! $show->element_kuk_11_10 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endunless

                            @switch($show)
                            @case($show->element_kuk_11_11 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_11_11 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_11_12 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_11_12 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_11_13 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_11_13 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_11_14 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_11_14 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_11_15 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_11_15 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_11_16 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_11_16 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_11_17 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_11_17 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_11_18 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_11_18 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_11_19 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_11_19 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_11_20 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_11_20 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_11_21 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_11_11 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_11_22 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_11_22 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_11_23 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_11_23 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_11_24 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_11_24 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_11_25 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_11_25 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_11_26 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_11_26 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_11_27 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_11_27 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_11_28 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_11_28 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_11_29 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_11_29 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_11_30 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_11_30 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_11_31 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_11_31 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_11_32 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_11_32 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_11_33 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_11_33 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_11_34 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_11_34 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_11_35 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_11_35 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_11_36 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_11_36 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_11_37 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_11_37 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_11_38 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_11_38 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_11_39 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_11_39 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_11_40 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_11_40 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_11_41 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_11_41 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_11_42 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_11_42 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_11_43 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_11_43 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_11_44 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_11_44 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                            @switch($show)
                            @case($show->element_kuk_11_45 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->element_kuk_11_45 !!}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endswitch

                        </tbody>
                    </table>
                </div>
            </div>
            @endunless

        </div>
    </div>
</div>
@endsection