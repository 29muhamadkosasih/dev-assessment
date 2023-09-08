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
                            <th width="750px">Juru ikat</th>
                        </tr>
                        <tr>
                            <th>Nomor</th>
                            <th>:</th>
                            <th>df9857489575</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="2">TUK</td>
                            <td></td>
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

                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non deserunt aperiam sequi
                                    nostrum natus vero veritatis similique perspiciatis, eum exercitationem nisi nam
                                    quidem,
                                    nihil rerum aut incidunt modi illo aliquam.</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non deserunt aperiam sequi
                                    nostrum natus vero veritatis similique perspiciatis, eum exercitationem nisi nam
                                    quidem,
                                    nihil rerum aut incidunt modi illo aliquam.</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non deserunt aperiam sequi
                                    nostrum natus vero veritatis similique perspiciatis, eum exercitationem nisi nam
                                    quidem,
                                    nihil rerum aut incidunt modi illo aliquam.</li>

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

                        </tbody>
                    </table>
                </div>
            </div>
            @endunless

        </div>
    </div>
</div>
@endsection