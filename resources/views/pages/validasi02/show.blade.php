@extends('layouts/master')

@section('title', 'Validasi APL-02')

@section('content')

<style>
    .kbw-signature {
        width: 100%;
        height: 200px;
    }

    #sig canvas {
        width: 100% !important;
        height: auto;
    }
</style>
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-auto me-auto ">
                </div>
                <div class="col-auto">
                    <a href="{{ route('validasi02.index') }}" class="btn btn-secondary">Back</a>
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
                            <th width="750px">{{ $show->apl02->kompetensi02->kompetensi->skema->nama_skema }}</th>
                        </tr>
                        <tr>
                            <th>Nomor</th>
                            <th>:</th>
                            <th>{{ $show->apl02->kompetensi02->kompetensi->skema->no }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="2">TUK</td>
                            <td>:</td>
                            <td>
                                @switch($show)
                                @case($show->tuk == 'Sewaktu')
                                Sewaktu
                                @break
                                @default
                                <del>Sewaktu</del>
                                @endswitch

                                @switch($show)
                                @case($show->tuk == 'Tempat Kerja')
                                /Tempat Kerja
                                @break
                                @default
                                /<del>Tempat Kerja</del>
                                @endswitch

                                @switch($show)
                                @case($show->tuk == 'Mandiri')
                                /Mandiri
                                @break
                                @default
                                /<del>Mandiri</del>
                                @endswitch
                            </td>
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

                                <li>Baca setiap pertanyaan di kolom sebelah kiri.</li>
                                <li>Isi dengan <b>"K"</b> pada kotak jika anda yakin dapat melakukan tugas yang
                                    dijelaskan.</li>
                                <li>Isi kolom disebelah kanan dengan mendaftar bukti yang anda miliki untuk menunjukkan
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
                                <td>{{ $show->apl02->kompetensi02->kode }}
                                    <br>
                                    {{
                                    $show->apl02->kompetensi02->unit }}
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-hovermb-3">
                        <tbody>
                            <tr>
                                <td width="503px"> <b>Dapatkah saya?</b> </td>
                                <td width="62px" style="text-align: center">K</td>
                                <td width="62px" style="text-align: center">BK</td>
                                <td width="80px" style="text-align: center">Bukti</td>
                            </tr>
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_1_01 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_1_01 == 'K')
                                    {{ $show->element_kuk_1_01 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_1_01 == 'BK')
                                    {{ $show->element_kuk_1_01 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @unless(!$show->apl02->kompetensi02->element_kuk_1_02)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_1_02 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_1_02 == 'K')
                                    {{ $show->element_kuk_1_02 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_1_02 == 'BK')
                                    {{ $show->element_kuk_1_02 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_1_03)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_1_03 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_1_03 == 'K')
                                    {{ $show->element_kuk_1_03 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_1_03 == 'BK')
                                    {{ $show->element_kuk_1_03 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_1_04)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_1_04 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_1_04 == 'K')
                                    {{ $show->element_kuk_1_04 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_1_04 == 'BK')
                                    {{ $show->element_kuk_1_04 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_1_05)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_1_05 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_1_05 == 'K')
                                    {{ $show->element_kuk_1_05 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_1_05 == 'BK')
                                    {{ $show->element_kuk_1_05 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_1_06)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_1_06 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_1_06 == 'K')
                                    {{ $show->element_kuk_1_06 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_1_06 == 'BK')
                                    {{ $show->element_kuk_1_06 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_1_07)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_1_07 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_1_07 == 'K')
                                    {{ $show->element_kuk_1_07 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_1_07 == 'BK')
                                    {{ $show->element_kuk_1_07 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_1_08)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_1_08 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_1_08 == 'K')
                                    {{ $show->element_kuk_1_08 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_1_08 == 'BK')
                                    {{ $show->element_kuk_1_08 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless


                            @unless(!$show->apl02->kompetensi02->element_kuk_1_09)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_1_09 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_1_09 == 'K')
                                    {{ $show->element_kuk_1_09 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_1_09 == 'BK')
                                    {{ $show->element_kuk_1_09 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_1_10)
                            <!-- Tampilkan data -->
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_1_10 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_1_10 == 'K')
                                    {{ $show->element_kuk_1_10 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_1_10 == 'BK')
                                    {{ $show->element_kuk_1_10 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @switch($show)
                            @case($show->apl02->kompetensi02->element_kuk_1_11 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_1_11 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_1_11 == 'K')
                                    {{ $show->element_kuk_1_11 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_1_11 == 'BK')
                                    {{ $show->element_kuk_1_11 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endswitch

                        </tbody>
                    </table>
                </div>
            </div>

            @unless(!$show->apl02->kompetensi02->kode2)
            <div class="mt-3">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover"
                        style="background-color: skyblue;border-collapse: collapse;">
                        <thead>
                            <tr>
                                <td width="300px" style="vertical-align: top;padding: 20px;"> <b>Unit Kompetensi No.
                                        2</b> </td>
                                <td>{{ $show->apl02->kompetensi02->kode2 }} <br>
                                    {{ $show->apl02->kompetensi02->unit2 }}
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-hovermb-3">
                        <tbody>
                            <tr>
                                <td width="503px"> <b>Dapatkah saya?</b> </td>
                                <td width="62px" style="text-align: center">K</td>
                                <td width="62px" style="text-align: center">BK</td>
                                <td width="80px" style="text-align: center">Bukti</td>
                            </tr>
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_2_01 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_2_01 == 'K')
                                    {{ $show->element_kuk_2_01 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_2_01 == 'BK')
                                    {{ $show->element_kuk_2_01 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @unless(!$show->apl02->kompetensi02->element_kuk_2_02)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_2_02 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_2_02 == 'K')
                                    {{ $show->element_kuk_2_02 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_2_02 == 'BK')
                                    {{ $show->element_kuk_2_02 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_2_03)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_2_03 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_2_03 == 'K')
                                    {{ $show->element_kuk_2_03 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_2_03 == 'BK')
                                    {{ $show->element_kuk_2_03 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_2_04)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_2_04 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_2_04 == 'K')
                                    {{ $show->element_kuk_2_04 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_2_04 == 'BK')
                                    {{ $show->element_kuk_2_04 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_2_05)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_2_05 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_2_05 == 'K')
                                    {{ $show->element_kuk_2_05 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_2_05 == 'BK')
                                    {{ $show->element_kuk_2_05 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_2_06)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_2_06 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_2_06 == 'K')
                                    {{ $show->element_kuk_2_06 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_2_06 == 'BK')
                                    {{ $show->element_kuk_2_06 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_2_07)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_2_07 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_2_07 == 'K')
                                    {{ $show->element_kuk_2_07 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_2_07 == 'BK')
                                    {{ $show->element_kuk_2_07 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_2_08)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_2_08 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_2_08 == 'K')
                                    {{ $show->element_kuk_2_08 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_2_08 == 'BK')
                                    {{ $show->element_kuk_2_08 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless


                            @unless(!$show->apl02->kompetensi02->element_kuk_2_09)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_2_09 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_2_09 == 'K')
                                    {{ $show->element_kuk_2_09 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_2_09 == 'BK')
                                    {{ $show->element_kuk_2_09 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_2_10)
                            <!-- Tampilkan data -->
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_2_10 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_2_10 == 'K')
                                    {{ $show->element_kuk_2_10 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_2_10 == 'BK')
                                    {{ $show->element_kuk_2_10 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @switch($show)
                            @case($show->apl02->kompetensi02->element_kuk_2_11 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_2_11 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_2_11 == 'K')
                                    {{ $show->element_kuk_2_11 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_2_11 == 'BK')
                                    {{ $show->element_kuk_2_11 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endswitch

                        </tbody>
                    </table>
                </div>
            </div>
            @endunless

            @unless(!$show->apl02->kompetensi02->kode3)
            <div class="mt-3">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover"
                        style="background-color: skyblue;border-collapse: collapse;">
                        <thead>
                            <tr>
                                <td width="300px" style="vertical-align: top;padding: 20px;"> <b>Unit Kompetensi No.
                                        3</b> </td>
                                <td>{{ $show->apl02->kompetensi02->kode3 }} <br>
                                    {{ $show->apl02->kompetensi02->unit3 }}
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-hovermb-3">
                        <tbody>
                            <tr>
                                <td width="503px"> <b>Dapatkah saya?</b> </td>
                                <td width="62px" style="text-align: center">K</td>
                                <td width="62px" style="text-align: center">BK</td>
                                <td width="80px" style="text-align: center">Bukti</td>
                            </tr>
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_3_01 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_3_01 == 'K')
                                    {{ $show->element_kuk_3_01 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_3_01 == 'BK')
                                    {{ $show->element_kuk_3_01 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @unless(!$show->apl02->kompetensi02->element_kuk_3_02)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_3_02 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_3_02 == 'K')
                                    {{ $show->element_kuk_3_02 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_3_02 == 'BK')
                                    {{ $show->element_kuk_3_02 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_3_03)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_3_03 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_3_03 == 'K')
                                    {{ $show->element_kuk_3_03 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_3_03 == 'BK')
                                    {{ $show->element_kuk_3_03 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_3_04)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_3_04 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_3_04 == 'K')
                                    {{ $show->element_kuk_3_04 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_3_04 == 'BK')
                                    {{ $show->element_kuk_3_04 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_3_05)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_3_05 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_3_05 == 'K')
                                    {{ $show->element_kuk_3_05 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_3_05 == 'BK')
                                    {{ $show->element_kuk_3_05 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_3_06)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_3_06 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_3_06 == 'K')
                                    {{ $show->element_kuk_3_06 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_3_06 == 'BK')
                                    {{ $show->element_kuk_3_06 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_3_07)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_3_07 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_3_07 == 'K')
                                    {{ $show->element_kuk_3_07 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_3_07 == 'BK')
                                    {{ $show->element_kuk_3_07 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_3_08)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_3_08 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_3_08 == 'K')
                                    {{ $show->element_kuk_3_08 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_3_08 == 'BK')
                                    {{ $show->element_kuk_3_08 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless


                            @unless(!$show->apl02->kompetensi02->element_kuk_3_09)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_3_09 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_3_09 == 'K')
                                    {{ $show->element_kuk_3_09 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_3_09 == 'BK')
                                    {{ $show->element_kuk_3_09 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_3_10)
                            <!-- Tampilkan data -->
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_3_10 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_3_10 == 'K')
                                    {{ $show->element_kuk_3_10 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_3_10 == 'BK')
                                    {{ $show->element_kuk_3_10 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @switch($show)
                            @case($show->apl02->kompetensi02->element_kuk_3_11 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_3_11 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_3_11 == 'K')
                                    {{ $show->element_kuk_3_11 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_3_11 == 'BK')
                                    {{ $show->element_kuk_3_11 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endswitch

                        </tbody>
                    </table>
                </div>
            </div>
            @endunless

            @unless(!$show->apl02->kompetensi02->kode4)
            <div class="mt-3">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover"
                        style="background-color: skyblue;border-collapse: collapse;">
                        <thead>
                            <tr>
                                <td width="300px" style="vertical-align: top;padding: 20px;"> <b>Unit Kompetensi No.
                                        4</b> </td>
                                <td>{{ $show->apl02->kompetensi02->kode4 }} <br>
                                    {{ $show->apl02->kompetensi02->unit4 }}
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-hovermb-3">
                        <tbody>
                            <tr>
                                <td width="503px"> <b>Dapatkah saya?</b> </td>
                                <td width="62px" style="text-align: center">K</td>
                                <td width="62px" style="text-align: center">BK</td>
                                <td width="80px" style="text-align: center">Bukti</td>
                            </tr>
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_4_01 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_4_01 == 'K')
                                    {{ $show->element_kuk_4_01 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_4_01 == 'BK')
                                    {{ $show->element_kuk_4_01 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @unless(!$show->apl02->kompetensi02->element_kuk_4_02)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_4_02 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_4_02 == 'K')
                                    {{ $show->element_kuk_4_02 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_4_02 == 'BK')
                                    {{ $show->element_kuk_4_02 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_4_03)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_4_03 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_4_03 == 'K')
                                    {{ $show->element_kuk_4_03 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_4_03 == 'BK')
                                    {{ $show->element_kuk_4_03 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_4_04)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_4_04 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_4_04 == 'K')
                                    {{ $show->element_kuk_4_04 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_4_04 == 'BK')
                                    {{ $show->element_kuk_4_04 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_4_05)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_4_05 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_4_05 == 'K')
                                    {{ $show->element_kuk_4_05 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_4_05 == 'BK')
                                    {{ $show->element_kuk_4_05 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_4_06)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_4_06 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_4_06 == 'K')
                                    {{ $show->element_kuk_4_06 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_4_06 == 'BK')
                                    {{ $show->element_kuk_4_06 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_4_07)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_4_07 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_4_07 == 'K')
                                    {{ $show->element_kuk_4_07 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_4_07 == 'BK')
                                    {{ $show->element_kuk_4_07 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_4_08)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_4_08 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_4_08 == 'K')
                                    {{ $show->element_kuk_4_08 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_4_08 == 'BK')
                                    {{ $show->element_kuk_4_08 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless


                            @unless(!$show->apl02->kompetensi02->element_kuk_4_09)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_4_09 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_4_09 == 'K')
                                    {{ $show->element_kuk_4_09 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_4_09 == 'BK')
                                    {{ $show->element_kuk_4_09 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_4_10)
                            <!-- Tampilkan data -->
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_4_10 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_4_10 == 'K')
                                    {{ $show->element_kuk_4_10 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_4_10 == 'BK')
                                    {{ $show->element_kuk_4_10 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @switch($show)
                            @case($show->apl02->kompetensi02->element_kuk_4_11 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_4_11 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_4_11 == 'K')
                                    {{ $show->element_kuk_4_11 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_4_11 == 'BK')
                                    {{ $show->element_kuk_4_11 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endswitch

                        </tbody>
                    </table>
                </div>
            </div>
            @endunless

            @unless(!$show->apl02->kompetensi02->kode5)
            <div class="mt-3">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover"
                        style="background-color: skyblue;border-collapse: collapse;">
                        <thead>
                            <tr>
                                <td width="300px" style="vertical-align: top;padding: 20px;"> <b>Unit Kompetensi No.
                                        5</b> </td>
                                <td>{{ $show->apl02->kompetensi02->kode5 }} <br>
                                    {{ $show->apl02->kompetensi02->unit5 }}
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-hovermb-3">
                        <tbody>
                            <tr>
                                <td width="503px"> <b>Dapatkah saya?</b> </td>
                                <td width="62px" style="text-align: center">K</td>
                                <td width="62px" style="text-align: center">BK</td>
                                <td width="80px" style="text-align: center">Bukti</td>
                            </tr>
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_5_01 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_5_01 == 'K')
                                    {{ $show->element_kuk_5_01 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_5_01 == 'BK')
                                    {{ $show->element_kuk_5_01 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @unless(!$show->apl02->kompetensi02->element_kuk_5_02)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_5_02 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_5_02 == 'K')
                                    {{ $show->element_kuk_5_02 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_5_02 == 'BK')
                                    {{ $show->element_kuk_5_02 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_5_03)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_5_03 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_5_03 == 'K')
                                    {{ $show->element_kuk_5_03 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_5_03 == 'BK')
                                    {{ $show->element_kuk_5_03 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_5_04)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_5_04 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_5_04 == 'K')
                                    {{ $show->element_kuk_5_04 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_5_04 == 'BK')
                                    {{ $show->element_kuk_5_04 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_5_05)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_5_05 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_5_05 == 'K')
                                    {{ $show->element_kuk_5_05 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_5_05 == 'BK')
                                    {{ $show->element_kuk_5_05 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_5_06)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_5_06 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_5_06 == 'K')
                                    {{ $show->element_kuk_5_06 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_5_06 == 'BK')
                                    {{ $show->element_kuk_5_06 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_5_07)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_5_07 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_5_07 == 'K')
                                    {{ $show->element_kuk_5_07 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_5_07 == 'BK')
                                    {{ $show->element_kuk_5_07 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_5_08)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_5_08 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_5_08 == 'K')
                                    {{ $show->element_kuk_5_08 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_5_08 == 'BK')
                                    {{ $show->element_kuk_5_08 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless


                            @unless(!$show->apl02->kompetensi02->element_kuk_5_09)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_5_09 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_5_09 == 'K')
                                    {{ $show->element_kuk_5_09 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_5_09 == 'BK')
                                    {{ $show->element_kuk_5_09 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_5_10)
                            <!-- Tampilkan data -->
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_5_10 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_5_10 == 'K')
                                    {{ $show->element_kuk_5_10 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_5_10 == 'BK')
                                    {{ $show->element_kuk_5_10 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @switch($show)
                            @case($show->apl02->kompetensi02->element_kuk_5_11 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_5_11 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_5_11 == 'K')
                                    {{ $show->element_kuk_5_11 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_5_11 == 'BK')
                                    {{ $show->element_kuk_5_11 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endswitch

                        </tbody>
                    </table>
                </div>
            </div>
            @endunless

            @unless(!$show->apl02->kompetensi02->kode6)
            <div class="mt-3">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover"
                        style="background-color: skyblue;border-collapse: collapse;">
                        <thead>
                            <tr>
                                <td width="300px" style="vertical-align: top;padding: 20px;"> <b>Unit Kompetensi No.
                                        6</b> </td>
                                <td>{{ $show->apl02->kompetensi02->kode6 }} <br>
                                    {{ $show->apl02->kompetensi02->unit6 }}
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-hovermb-3">
                        <tbody>
                            <tr>
                                <td width="503px"> <b>Dapatkah saya?</b> </td>
                                <td width="62px" style="text-align: center">K</td>
                                <td width="62px" style="text-align: center">BK</td>
                                <td width="80px" style="text-align: center">Bukti</td>
                            </tr>
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_6_01 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_6_01 == 'K')
                                    {{ $show->element_kuk_6_01 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_6_01 == 'BK')
                                    {{ $show->element_kuk_6_01 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @unless(!$show->apl02->kompetensi02->element_kuk_6_02)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_6_02 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_6_02 == 'K')
                                    {{ $show->element_kuk_6_02 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_6_02 == 'BK')
                                    {{ $show->element_kuk_6_02 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_6_03)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_6_03 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_6_03 == 'K')
                                    {{ $show->element_kuk_6_03 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_6_03 == 'BK')
                                    {{ $show->element_kuk_6_03 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_6_04)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_6_04 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_6_04 == 'K')
                                    {{ $show->element_kuk_6_04 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_6_04 == 'BK')
                                    {{ $show->element_kuk_6_04 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_6_05)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_6_05 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_6_05 == 'K')
                                    {{ $show->element_kuk_6_05 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_6_05 == 'BK')
                                    {{ $show->element_kuk_6_05 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_6_06)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_6_06 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_6_06 == 'K')
                                    {{ $show->element_kuk_6_06 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_6_06 == 'BK')
                                    {{ $show->element_kuk_6_06 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_6_07)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_6_07 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_6_07 == 'K')
                                    {{ $show->element_kuk_6_07 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_6_07 == 'BK')
                                    {{ $show->element_kuk_6_07 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_6_08)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_6_08 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_6_08 == 'K')
                                    {{ $show->element_kuk_6_08 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_6_08 == 'BK')
                                    {{ $show->element_kuk_6_08 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless


                            @unless(!$show->apl02->kompetensi02->element_kuk_6_09)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_6_09 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_6_09 == 'K')
                                    {{ $show->element_kuk_6_09 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_6_09 == 'BK')
                                    {{ $show->element_kuk_6_09 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_6_10)
                            <!-- Tampilkan data -->
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_6_10 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_6_10 == 'K')
                                    {{ $show->element_kuk_6_10 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_6_10 == 'BK')
                                    {{ $show->element_kuk_6_10 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @switch($show)
                            @case($show->apl02->kompetensi02->element_kuk_6_11 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_6_11 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_6_11 == 'K')
                                    {{ $show->element_kuk_6_11 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_6_11 == 'BK')
                                    {{ $show->element_kuk_6_11 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endswitch

                        </tbody>
                    </table>
                </div>
            </div>
            @endunless

            @unless(!$show->apl02->kompetensi02->kode7)
            <div class="mt-3">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover"
                        style="background-color: skyblue;border-collapse: collapse;">
                        <thead>
                            <tr>
                                <td width="300px" style="vertical-align: top;padding: 20px;"> <b>Unit Kompetensi No.
                                        7</b> </td>
                                <td>{{ $show->apl02->kompetensi02->kode7 }} <br>
                                    {{ $show->apl02->kompetensi02->unit7 }}
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-hovermb-3">
                        <tbody>
                            <tr>
                                <td width="503px"> <b>Dapatkah saya?</b> </td>
                                <td width="62px" style="text-align: center">K</td>
                                <td width="62px" style="text-align: center">BK</td>
                                <td width="80px" style="text-align: center">Bukti</td>
                            </tr>
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_7_01 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_7_01 == 'K')
                                    {{ $show->element_kuk_7_01 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_7_01 == 'BK')
                                    {{ $show->element_kuk_7_01 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @unless(!$show->apl02->kompetensi02->element_kuk_7_02)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_7_02 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_7_02 == 'K')
                                    {{ $show->element_kuk_7_02 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_7_02 == 'BK')
                                    {{ $show->element_kuk_7_02 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_7_03)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_7_03 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_7_03 == 'K')
                                    {{ $show->element_kuk_7_03 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_7_03 == 'BK')
                                    {{ $show->element_kuk_7_03 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_7_04)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_7_04 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_7_04 == 'K')
                                    {{ $show->element_kuk_7_04 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_7_04 == 'BK')
                                    {{ $show->element_kuk_7_04 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_7_05)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_7_05 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_7_05 == 'K')
                                    {{ $show->element_kuk_7_05 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_7_05 == 'BK')
                                    {{ $show->element_kuk_7_05 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_7_06)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_7_06 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_7_06 == 'K')
                                    {{ $show->element_kuk_7_06 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_7_06 == 'BK')
                                    {{ $show->element_kuk_7_06 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_7_07)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_7_07 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_7_07 == 'K')
                                    {{ $show->element_kuk_7_07 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_7_07 == 'BK')
                                    {{ $show->element_kuk_7_07 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_7_08)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_7_08 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_7_08 == 'K')
                                    {{ $show->element_kuk_7_08 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_7_08 == 'BK')
                                    {{ $show->element_kuk_7_08 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless


                            @unless(!$show->apl02->kompetensi02->element_kuk_7_09)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_7_09 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_7_09 == 'K')
                                    {{ $show->element_kuk_7_09 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_7_09 == 'BK')
                                    {{ $show->element_kuk_7_09 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_7_10)
                            <!-- Tampilkan data -->
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_7_10 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_7_10 == 'K')
                                    {{ $show->element_kuk_7_10 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_7_10 == 'BK')
                                    {{ $show->element_kuk_7_10 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @switch($show)
                            @case($show->apl02->kompetensi02->element_kuk_7_11 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_7_11 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_7_11 == 'K')
                                    {{ $show->element_kuk_7_11 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_7_11 == 'BK')
                                    {{ $show->element_kuk_7_11 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endswitch

                        </tbody>
                    </table>
                </div>
            </div>
            @endunless

            @unless(!$show->apl02->kompetensi02->kode8)
            <div class="mt-3">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover"
                        style="background-color: skyblue;border-collapse: collapse;">
                        <thead>
                            <tr>
                                <td width="300px" style="vertical-align: top;padding: 20px;"> <b>Unit Kompetensi No.
                                        8</b> </td>
                                <td>{{ $show->apl02->kompetensi02->kode8 }} <br>
                                    {{ $show->apl02->kompetensi02->unit8 }}
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-hovermb-3">
                        <tbody>
                            <tr>
                                <td width="503px"> <b>Dapatkah saya?</b> </td>
                                <td width="62px" style="text-align: center">K</td>
                                <td width="62px" style="text-align: center">BK</td>
                                <td width="80px" style="text-align: center">Bukti</td>
                            </tr>
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_8_01 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_8_01 == 'K')
                                    {{ $show->element_kuk_8_01 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_8_01 == 'BK')
                                    {{ $show->element_kuk_8_01 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @unless(!$show->apl02->kompetensi02->element_kuk_8_02)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_8_02 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_8_02 == 'K')
                                    {{ $show->element_kuk_8_02 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_8_02 == 'BK')
                                    {{ $show->element_kuk_8_02 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_8_03)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_8_03 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_8_03 == 'K')
                                    {{ $show->element_kuk_8_03 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_8_03 == 'BK')
                                    {{ $show->element_kuk_8_03 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_8_04)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_8_04 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_8_04 == 'K')
                                    {{ $show->element_kuk_8_04 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_8_04 == 'BK')
                                    {{ $show->element_kuk_8_04 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_8_05)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_8_05 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_8_05 == 'K')
                                    {{ $show->element_kuk_8_05 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_8_05 == 'BK')
                                    {{ $show->element_kuk_8_05 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_8_06)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_8_06 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_8_06 == 'K')
                                    {{ $show->element_kuk_8_06 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_8_06 == 'BK')
                                    {{ $show->element_kuk_8_06 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_8_07)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_8_07 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_8_07 == 'K')
                                    {{ $show->element_kuk_8_07 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_8_07 == 'BK')
                                    {{ $show->element_kuk_8_07 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_8_08)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_8_08 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_8_08 == 'K')
                                    {{ $show->element_kuk_8_08 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_8_08 == 'BK')
                                    {{ $show->element_kuk_8_08 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless


                            @unless(!$show->apl02->kompetensi02->element_kuk_8_09)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_8_09 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_8_09 == 'K')
                                    {{ $show->element_kuk_8_09 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_8_09 == 'BK')
                                    {{ $show->element_kuk_8_09 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_8_10)
                            <!-- Tampilkan data -->
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_8_10 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_8_10 == 'K')
                                    {{ $show->element_kuk_8_10 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_8_10 == 'BK')
                                    {{ $show->element_kuk_8_10 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @switch($show)
                            @case($show->apl02->kompetensi02->element_kuk_8_11 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_8_11 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_8_11 == 'K')
                                    {{ $show->element_kuk_8_11 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_8_11 == 'BK')
                                    {{ $show->element_kuk_8_11 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endswitch

                        </tbody>
                    </table>
                </div>
            </div>
            @endunless

            @unless(!$show->apl02->kompetensi02->kode9)
            <div class="mt-3">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover"
                        style="background-color: skyblue;border-collapse: collapse;">
                        <thead>
                            <tr>
                                <td width="300px" style="vertical-align: top;padding: 20px;"> <b>Unit Kompetensi No.
                                        9</b> </td>
                                <td>{{ $show->apl02->kompetensi02->kode9 }} <br>
                                    {{ $show->apl02->kompetensi02->unit9 }}
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-hovermb-3">
                        <tbody>
                            <tr>
                                <td width="503px"> <b>Dapatkah saya?</b> </td>
                                <td width="62px" style="text-align: center">K</td>
                                <td width="62px" style="text-align: center">BK</td>
                                <td width="80px" style="text-align: center">Bukti</td>
                            </tr>
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_9_01 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_9_01 == 'K')
                                    {{ $show->element_kuk_9_01 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_9_01 == 'BK')
                                    {{ $show->element_kuk_9_01 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @unless(!$show->apl02->kompetensi02->element_kuk_9_02)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_9_02 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_9_02 == 'K')
                                    {{ $show->element_kuk_9_02 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_9_02 == 'BK')
                                    {{ $show->element_kuk_9_02 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_9_03)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_9_03 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_9_03 == 'K')
                                    {{ $show->element_kuk_9_03 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_9_03 == 'BK')
                                    {{ $show->element_kuk_9_03 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_9_04)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_9_04 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_9_04 == 'K')
                                    {{ $show->element_kuk_9_04 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_9_04 == 'BK')
                                    {{ $show->element_kuk_9_04 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_9_05)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_9_05 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_9_05 == 'K')
                                    {{ $show->element_kuk_9_05 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_9_05 == 'BK')
                                    {{ $show->element_kuk_9_05 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_9_06)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_9_06 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_9_06 == 'K')
                                    {{ $show->element_kuk_9_06 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_9_06 == 'BK')
                                    {{ $show->element_kuk_9_06 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_9_07)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_9_07 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_9_07 == 'K')
                                    {{ $show->element_kuk_9_07 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_9_07 == 'BK')
                                    {{ $show->element_kuk_9_07 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_9_08)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_9_08 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_9_08 == 'K')
                                    {{ $show->element_kuk_9_08 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_9_08 == 'BK')
                                    {{ $show->element_kuk_9_08 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless


                            @unless(!$show->apl02->kompetensi02->element_kuk_9_09)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_9_09 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_9_09 == 'K')
                                    {{ $show->element_kuk_9_09 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_9_09 == 'BK')
                                    {{ $show->element_kuk_9_09 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_9_10)
                            <!-- Tampilkan data -->
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_9_10 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_9_10 == 'K')
                                    {{ $show->element_kuk_9_10 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_9_10 == 'BK')
                                    {{ $show->element_kuk_9_10 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @switch($show)
                            @case($show->apl02->kompetensi02->element_kuk_9_11 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_9_11 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_9_11 == 'K')
                                    {{ $show->element_kuk_9_11 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_9_11 == 'BK')
                                    {{ $show->element_kuk_9_11 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endswitch

                        </tbody>
                    </table>
                </div>
            </div>
            @endunless

            @unless(!$show->apl02->kompetensi02->kode10)
            <div class="mt-3">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover"
                        style="background-color: skyblue;border-collapse: collapse;">
                        <thead>
                            <tr>
                                <td width="300px" style="vertical-align: top;padding: 20px;"> <b>Unit Kompetensi No.
                                        10</b> </td>
                                <td>{{ $show->apl02->kompetensi02->kode10 }} <br>
                                    {{ $show->apl02->kompetensi02->unit10 }}
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-hovermb-3">
                        <tbody>
                            <tr>
                                <td width="503px"> <b>Dapatkah saya?</b> </td>
                                <td width="62px" style="text-align: center">K</td>
                                <td width="62px" style="text-align: center">BK</td>
                                <td width="80px" style="text-align: center">Bukti</td>
                            </tr>
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_10_01 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_10_01 == 'K')
                                    {{ $show->element_kuk_10_01 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_10_01 == 'BK')
                                    {{ $show->element_kuk_10_01 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @unless(!$show->apl02->kompetensi02->element_kuk_10_02)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_10_02 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_10_02 == 'K')
                                    {{ $show->element_kuk_10_02 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_10_02 == 'BK')
                                    {{ $show->element_kuk_10_02 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_10_03)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_10_03 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_10_03 == 'K')
                                    {{ $show->element_kuk_10_03 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_10_03 == 'BK')
                                    {{ $show->element_kuk_10_03 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_10_04)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_10_04 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_10_04 == 'K')
                                    {{ $show->element_kuk_10_04 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_10_04 == 'BK')
                                    {{ $show->element_kuk_10_04 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_10_05)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_10_05 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_10_05 == 'K')
                                    {{ $show->element_kuk_10_05 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_10_05 == 'BK')
                                    {{ $show->element_kuk_10_05 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_10_06)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_10_06 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_10_06 == 'K')
                                    {{ $show->element_kuk_10_06 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_10_06 == 'BK')
                                    {{ $show->element_kuk_10_06 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_10_07)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_10_07 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_10_07 == 'K')
                                    {{ $show->element_kuk_10_07 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_10_07 == 'BK')
                                    {{ $show->element_kuk_10_07 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_10_08)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_10_08 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_10_08 == 'K')
                                    {{ $show->element_kuk_10_08 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_10_08 == 'BK')
                                    {{ $show->element_kuk_10_08 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless


                            @unless(!$show->apl02->kompetensi02->element_kuk_10_09)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_10_09 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_10_09 == 'K')
                                    {{ $show->element_kuk_10_09 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_10_09 == 'BK')
                                    {{ $show->element_kuk_10_09 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_10_10)
                            <!-- Tampilkan data -->
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_10_10 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_10_10 == 'K')
                                    {{ $show->element_kuk_10_10 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_10_10 == 'BK')
                                    {{ $show->element_kuk_10_10 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @switch($show)
                            @case($show->apl02->kompetensi02->element_kuk_10_11 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_10_11 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_10_11 == 'K')
                                    {{ $show->element_kuk_10_11 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_10_11 == 'BK')
                                    {{ $show->element_kuk_10_11 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endswitch

                        </tbody>
                    </table>
                </div>
            </div>
            @endunless

            @unless(!$show->apl02->kompetensi02->kode11)
            <div class="mt-3">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover"
                        style="background-color: skyblue;border-collapse: collapse;">
                        <thead>
                            <tr>
                                <td width="300px" style="vertical-align: top;padding: 20px;"> <b>Unit Kompetensi No.
                                        11</b> </td>
                                <td>{{ $show->apl02->kompetensi02->kode11 }} <br>
                                    {{ $show->apl02->kompetensi02->unit11 }}
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-hovermb-3">
                        <tbody>
                            <tr>
                                <td width="503px"> <b>Dapatkah saya?</b> </td>
                                <td width="62px" style="text-align: center">K</td>
                                <td width="62px" style="text-align: center">BK</td>
                                <td width="80px" style="text-align: center">Bukti</td>
                            </tr>
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_11_01 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_11_01 == 'K')
                                    {{ $show->element_kuk_11_01 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_11_01 == 'BK')
                                    {{ $show->element_kuk_11_01 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @unless(!$show->apl02->kompetensi02->element_kuk_11_02)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_11_02 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_11_02 == 'K')
                                    {{ $show->element_kuk_11_02 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_11_02 == 'BK')
                                    {{ $show->element_kuk_11_02 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_11_03)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_11_03 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_11_03 == 'K')
                                    {{ $show->element_kuk_11_03 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_11_03 == 'BK')
                                    {{ $show->element_kuk_11_03 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_11_04)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_11_04 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_11_04 == 'K')
                                    {{ $show->element_kuk_11_04 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_11_04 == 'BK')
                                    {{ $show->element_kuk_11_04 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_11_05)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_11_05 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_11_05 == 'K')
                                    {{ $show->element_kuk_11_05 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_11_05 == 'BK')
                                    {{ $show->element_kuk_11_05 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_11_06)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_11_06 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_11_06 == 'K')
                                    {{ $show->element_kuk_11_06 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_11_06 == 'BK')
                                    {{ $show->element_kuk_11_06 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_11_07)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_11_07 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_11_07 == 'K')
                                    {{ $show->element_kuk_11_07 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_11_07 == 'BK')
                                    {{ $show->element_kuk_11_07 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_11_08)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_11_08 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_11_08 == 'K')
                                    {{ $show->element_kuk_11_08 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_11_08 == 'BK')
                                    {{ $show->element_kuk_11_08 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless


                            @unless(!$show->apl02->kompetensi02->element_kuk_11_09)
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_11_09 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_11_09 == 'K')
                                    {{ $show->element_kuk_11_09 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_11_09 == 'BK')
                                    {{ $show->element_kuk_11_09 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @unless(!$show->apl02->kompetensi02->element_kuk_11_10)
                            <!-- Tampilkan data -->
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_11_10 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_11_10 == 'K')
                                    {{ $show->element_kuk_11_10 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_11_10 == 'BK')
                                    {{ $show->element_kuk_11_10 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                            @endunless

                            @switch($show)
                            @case($show->apl02->kompetensi02->element_kuk_11_11 == NULL)
                            @break
                            @default
                            <tr>
                                <td>{!! $show->apl02->kompetensi02->element_kuk_11_11 !!}</td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_11_11 == 'K')
                                    {{ $show->element_kuk_11_11 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($show)
                                    @case($show->element_kuk_11_11 == 'BK')
                                    {{ $show->element_kuk_11_11 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
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
<div class="col-xl-12 col-md-12 col-12 mt-3">
    <div class="card">
        <form action="{{ route('validasi02.update', $show->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label class="form-label">Nama Asesor </label>
                        <input type="text" class="form-control @error('nama_asesor_lsp') is-invalid @enderror"
                            placeholder="Masukan Nama Asesor LSP" name="nama_asesor_lsp"
                            value="{{ old('nama_asesor_lsp') }}" required autofocus />
                        @error('nama_asesor_lsp')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label">No. Reg</label>
                        <input type="text" class="form-control @error('no_reg') is-invalid @enderror"
                            placeholder="Masukan No Reg" name="no_reg" value="{{ old('no_reg') }}" required />
                        @error('no_reg')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label">Status</label>
                        <select id="plMaintenencePer" name="status"
                            class="form-select @error('status') is-invalid @enderror">
                            <option selected>Open this select</option>
                            <option value="Dapat">Dapat</option>
                            <option value="Tidak dapat">Tidak dapat</option>
                        </select>
                        @error('status')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label">Proses Assessment</label>
                        <div class="col-md p-2">
                            <input class="form-check-input" type="radio" name="proses_assessment" id="inlineRadio1"
                                value="Assessment Portfolio">
                            <label class="form-check-label" for="inlineRadio1">Assessment Portfolio</label>
                            <input class="form-check-input ms-5" type="radio" name="proses_assessment" id="inlineRadio2"
                                value="Uji Kompetensi">
                            <label class="form-check-label" for="inlineRadio2">Uji Kompetensi</label>
                        </div>
                        @error('proses_assessment')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label class="form-label d-block" for="plBathrooms">Tanda Tangan Asesor</label>
                        <div id="sig"></div>
                        <button id="clear" class="btn btn-danger btn-sm">Clear</button>
                        <textarea id="signature" name="signature_asesor" style="display: none"></textarea>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label">Catatan</label>
                        <textarea id="plAddress" name="catatan" class="form-control" rows="2"
                            placeholder="12, Business Park">{{ old('catatan') }}</textarea>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-end mt-4">
                    <button class="btn btn-primary btn-submit" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
<script type="text/javascript">
    var sig = $('#sig').signature({syncField: '#signature', syncFormat: 'PNG'});
            $('#clear').click(function (e) {
                e.preventDefault();
                sig.signature('clear');
                $("#signature64").val('');
            });
</script>
@endsection