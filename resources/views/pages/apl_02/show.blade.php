@extends('layouts/master')
@section('title', 'APL 02')
@section('content')
@foreach ($apl02 as $item)
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('getAnswer')}}" method="POST" enctype="multipart/form-data">
                @csrf
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
                                <th width="20px">Judul </th>
                                <th width="1px">:</th>
                                <th width="700px">{{ $item->kompetensi02->kompetensi->skema->nama_skema }}</th>
                            </tr>
                            <tr>
                                <th>Nomor</th>
                                <th>:</th>
                                <th>{{ $item->kompetensi02->kompetensi->skema->no }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="2">TUK</td>
                                <td>:</td>
                                <td>
                                    <select class="form-select @error('tuk') is-invalid @enderror" id="selectDefault"
                                        name="tuk" value="{{ old('tuk') }}" required>
                                        <option selected>Open this select</option>
                                        <option value="Sewaktu">Sewaktu</option>
                                        <option value="Tempat Kerja">Tempat Kerja</option>
                                        <option value="Mandiri">Mandiri</option>
                                    </select>
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
                                    <li>Isi kolom disebelah kanan dengan mendaftar bukti yang anda miliki untuk
                                        menunjukkan
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
                                    <td>{{ $item->kompetensi02->kode }} <br>
                                        {{ $item->kompetensi02->unit }}
                                    </td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hovermb-3">
                            <tbody>
                                <tr>
                                    <td width="800px"> <b>Dapatkah saya?</b> </td>
                                    <td width="0px" style="text-align: center">K</td>
                                    <td width="0px" style="text-align: center">BK</td>
                                    <td width="120px" style="text-align: center">Bukti</td>
                                </tr>
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_1_01 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_01"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_01"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @unless(!$item->kompetensi02->element_kuk_1_02)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_1_02 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_02"
                                                    id="inlineRadio3" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_02"
                                                    id="inlineRadio4" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_1_03)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_1_03 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_03"
                                                    id="inlineRadio5" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_03"
                                                    id="inlineRadio6" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_1_04)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_1_04 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_04"
                                                    id="inlineRadio7" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_04"
                                                    id="inlineRadio8" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_1_05)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_1_05 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_05"
                                                    id="inlineRadio9" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_05"
                                                    id="inlineRadio10" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_1_06)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_1_06 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_06"
                                                    id="inlineRadio11" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_06"
                                                    id="inlineRadio12" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_1_07)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_1_07 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_07"
                                                    id="inlineRadio13" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_07"
                                                    id="inlineRadio14" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_1_08)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_1_08 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_08"
                                                    id="inlineRadio15" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_08"
                                                    id="inlineRadio16" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless


                                @unless(!$item->kompetensi02->element_kuk_1_09)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_1_09 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_09"
                                                    id="inlineRadio17" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_09"
                                                    id="inlineRadio18" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_1_10)
                                <!-- Tampilkan data -->
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_1_10 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_10"
                                                    id="inlineRadio19" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_10"
                                                    id="inlineRadio20" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_1_11 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_1_11 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_11"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_11"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_1_12 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_1_12 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_12"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_12"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_1_13 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_1_13 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_13"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_13"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_1_14 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_1_14 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_14"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_14"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_1_15 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_1_15 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_15"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_15"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_1_16 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_1_16 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_16"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_16"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_1_17 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_1_17 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_17"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_17"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_1_18 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_1_18 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_18"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_18"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_1_19 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_1_19 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_19"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_19"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch
                                @switch($item)
                                @case($item->kompetensi02->element_kuk_1_20 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_1_20 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_20"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_20"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_1_21 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_1_21 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_21"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_21"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_1_22 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_1_22 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_22"
                                                    id="inlineRadio22" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_22"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_1_23 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_1_23 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_23"
                                                    id="inlineRadio23" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_23"
                                                    id="inlineRadio23" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_1_24 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_1_24 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_24"
                                                    id="inlineRadio24" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_24"
                                                    id="inlineRadio24" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_1_25 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_1_25 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_25"
                                                    id="inlineRadio25" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_25"
                                                    id="inlineRadio25" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_1_26 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_1_26 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_26"
                                                    id="inlineRadio26" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_26"
                                                    id="inlineRadio26" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_1_27 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_1_27 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_27"
                                                    id="inlineRadio27" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_27"
                                                    id="inlineRadio27" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch


                                @switch($item)
                                @case($item->kompetensi02->element_kuk_1_28 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_1_28 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_28"
                                                    id="inlineRadio28" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_28"
                                                    id="inlineRadio28" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_1_29 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_1_29 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_29"
                                                    id="inlineRadio29" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_29"
                                                    id="inlineRadio29" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_1_30 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_1_30 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_30"
                                                    id="inlineRadio30" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_30"
                                                    id="inlineRadio30" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch


                                @switch($item)
                                @case($item->kompetensi02->element_kuk_1_31 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_1_31 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_31"
                                                    id="inlineRadio31" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_31"
                                                    id="inlineRadio31" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_1_32 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_1_32 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_32"
                                                    id="inlineRadio32" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_32"
                                                    id="inlineRadio32" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_1_33 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_1_33 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_33"
                                                    id="inlineRadio33" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_33"
                                                    id="inlineRadio33" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_1_34 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_1_34 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_34"
                                                    id="inlineRadio34" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_34"
                                                    id="inlineRadio34" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_1_35 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_1_35 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_35"
                                                    id="inlineRadio35" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_35"
                                                    id="inlineRadio35" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_1_36 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_1_36 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_36"
                                                    id="inlineRadio36" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_36"
                                                    id="inlineRadio36" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_1_37 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_1_37 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_37"
                                                    id="inlineRadio37" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_37"
                                                    id="inlineRadio37" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_1_38 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_1_38 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_38"
                                                    id="inlineRadio38" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_38"
                                                    id="inlineRadio38" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_1_39 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_1_39 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_39"
                                                    id="inlineRadio39" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_39"
                                                    id="inlineRadio39" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_1_40 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_1_40 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_40"
                                                    id="inlineRadio40" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_40"
                                                    id="inlineRadio40" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_1_41 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_1_41 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_41"
                                                    id="inlineRadio41" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_41"
                                                    id="inlineRadio41" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_1_42 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_1_42 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_42"
                                                    id="inlineRadio42" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_42"
                                                    id="inlineRadio42" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_1_43 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_1_43 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_43"
                                                    id="inlineRadio43" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_43"
                                                    id="inlineRadio43" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_1_44 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_1_44 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_44"
                                                    id="inlineRadio44" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_44"
                                                    id="inlineRadio44" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_1_45 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_1_45 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_45"
                                                    id="inlineRadio45" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_1_45"
                                                    id="inlineRadio45" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                            </tbody>
                        </table>
                    </div>
                </div>

                @unless(!$item->kompetensi02->kode2)
                <div class="mt-3">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover"
                            style="background-color: skyblue;border-collapse: collapse;">
                            <thead>
                                <tr>
                                    <td width="300px" style="vertical-align: top;padding: 20px;"> <b>Unit Kompetensi No.
                                            2</b> </td>
                                    <td>{{ $item->kompetensi02->kode2 }} <br>
                                        {{ $item->kompetensi02->unit2 }}
                                    </td>
                                </tr>
                            </thead>
                        </table>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered table-hovermb-3">
                            <tbody>
                                <tr>
                                    <td width="800px"> <b>Dapatkah saya?</b> </td>
                                    <td width="0px" style="text-align: center">K</td>
                                    <td width="0px" style="text-align: center">BK</td>
                                    <td width="120px" style="text-align: center">Bukti</td>
                                </tr>
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_01 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_01"
                                                    id="inlineRadio23" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_01"
                                                    id="inlineRadio24" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>

                                @unless(!$item->kompetensi02->element_kuk_2_02)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_02 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_02"
                                                    id="inlineRadio3" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_02"
                                                    id="inlineRadio4" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_2_03)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_03 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_03"
                                                    id="inlineRadio5" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_03"
                                                    id="inlineRadio6" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_2_04)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_04 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_04"
                                                    id="inlineRadio7" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_04"
                                                    id="inlineRadio8" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_2_05)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_05 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_05"
                                                    id="inlineRadio9" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_05"
                                                    id="inlineRadio10" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_2_06)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_06 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_06"
                                                    id="inlineRadio11" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_06"
                                                    id="inlineRadio12" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_2_07)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_07 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_07"
                                                    id="inlineRadio13" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_07"
                                                    id="inlineRadio14" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_2_08)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_08 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_08"
                                                    id="inlineRadio15" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_08"
                                                    id="inlineRadio16" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless


                                @unless(!$item->kompetensi02->element_kuk_2_09)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_09 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_09"
                                                    id="inlineRadio17" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_09"
                                                    id="inlineRadio18" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_2_10)
                                <!-- Tampilkan data -->
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_10 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_10"
                                                    id="inlineRadio19" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_10"
                                                    id="inlineRadio20" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_2_11 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_11 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_11"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_11"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_2_12 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_12 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_12"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_12"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_2_13 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_13 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_13"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_13"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_2_14 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_14 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_14"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_14"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_2_15 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_15 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_15"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_15"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_2_16 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_16 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_16"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_16"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_2_17 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_17 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_17"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_17"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_2_18 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_18 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_18"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_18"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_2_19 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_19 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_19"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_19"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch
                                @switch($item)
                                @case($item->kompetensi02->element_kuk_2_20 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_20 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_20"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_20"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_2_21 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_21 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_21"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_21"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_2_22 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_22 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_22"
                                                    id="inlineRadio22" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_22"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_2_23 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_23 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_23"
                                                    id="inlineRadio23" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_23"
                                                    id="inlineRadio23" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_2_24 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_24 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_24"
                                                    id="inlineRadio24" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_24"
                                                    id="inlineRadio24" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_2_25 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_25 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_25"
                                                    id="inlineRadio25" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_25"
                                                    id="inlineRadio25" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_2_26 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_26 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_26"
                                                    id="inlineRadio26" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_26"
                                                    id="inlineRadio26" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_2_27 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_27 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_27"
                                                    id="inlineRadio27" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_27"
                                                    id="inlineRadio27" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch


                                @switch($item)
                                @case($item->kompetensi02->element_kuk_2_28 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_28 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_28"
                                                    id="inlineRadio28" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_28"
                                                    id="inlineRadio28" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_2_29 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_29 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_29"
                                                    id="inlineRadio29" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_29"
                                                    id="inlineRadio29" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_2_30 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_30 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_30"
                                                    id="inlineRadio30" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_30"
                                                    id="inlineRadio30" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch


                                @switch($item)
                                @case($item->kompetensi02->element_kuk_2_31 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_31 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_31"
                                                    id="inlineRadio31" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_31"
                                                    id="inlineRadio31" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_2_32 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_32 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_32"
                                                    id="inlineRadio32" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_32"
                                                    id="inlineRadio32" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_2_33 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_33 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_33"
                                                    id="inlineRadio33" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_33"
                                                    id="inlineRadio33" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_2_34 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_34 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_34"
                                                    id="inlineRadio34" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_34"
                                                    id="inlineRadio34" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_2_35 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_35 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_35"
                                                    id="inlineRadio35" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_35"
                                                    id="inlineRadio35" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_2_36 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_36 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_36"
                                                    id="inlineRadio36" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_36"
                                                    id="inlineRadio36" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_2_37 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_37 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_37"
                                                    id="inlineRadio37" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_37"
                                                    id="inlineRadio37" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_2_38 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_38 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_38"
                                                    id="inlineRadio38" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_38"
                                                    id="inlineRadio38" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_2_39 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_39 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_39"
                                                    id="inlineRadio39" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_39"
                                                    id="inlineRadio39" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_2_40 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_40 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_40"
                                                    id="inlineRadio40" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_40"
                                                    id="inlineRadio40" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_2_41 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_41 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_41"
                                                    id="inlineRadio41" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_41"
                                                    id="inlineRadio41" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_2_42 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_42 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_42"
                                                    id="inlineRadio42" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_42"
                                                    id="inlineRadio42" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_2_43 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_43 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_43"
                                                    id="inlineRadio43" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_43"
                                                    id="inlineRadio43" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_2_44 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_44 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_44"
                                                    id="inlineRadio44" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_44"
                                                    id="inlineRadio44" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_2_45 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_45 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_45"
                                                    id="inlineRadio45" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_45"
                                                    id="inlineRadio45" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                            </tbody>
                        </table>
                    </div>
                </div>
                @endunless

                @unless(!$item->kompetensi02->kode3)
                <div class="mt-3">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover"
                            style="background-color: skyblue;border-collapse: collapse;">
                            <thead>
                                <tr>
                                    <td width="300px" style="vertical-align: top;padding: 20px;"> <b>Unit Kompetensi No.
                                            3</b> </td>
                                    <td>{{ $item->kompetensi02->kode3 }} <br>
                                        {{ $item->kompetensi02->unit3 }}
                                    </td>
                                </tr>
                            </thead>
                        </table>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered table-hovermb-3">
                            <tbody>
                                <tr>
                                    <td width="800px"> <b>Dapatkah saya?</b> </td>
                                    <td width="0px" style="text-align: center">K</td>
                                    <td width="0px" style="text-align: center">BK</td>
                                    <td width="120px" style="text-align: center">Bukti</td>
                                </tr>
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_01 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_01"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_01"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>

                                @unless(!$item->kompetensi02->element_kuk_3_02)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_02 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_02"
                                                    id="inlineRadio3" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_02"
                                                    id="inlineRadio4" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_3_03)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_03 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_03"
                                                    id="inlineRadio5" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_03"
                                                    id="inlineRadio6" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_3_04)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_04 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_04"
                                                    id="inlineRadio7" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_04"
                                                    id="inlineRadio8" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_3_05)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_05 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_05"
                                                    id="inlineRadio9" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_05"
                                                    id="inlineRadio10" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_3_06)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_06 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_06"
                                                    id="inlineRadio11" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_06"
                                                    id="inlineRadio12" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_3_07)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_07 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_07"
                                                    id="inlineRadio13" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_07"
                                                    id="inlineRadio14" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_3_08)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_08 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_08"
                                                    id="inlineRadio15" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_08"
                                                    id="inlineRadio16" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless


                                @unless(!$item->kompetensi02->element_kuk_3_09)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_09 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_09"
                                                    id="inlineRadio17" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_09"
                                                    id="inlineRadio18" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_3_10)
                                <!-- Tampilkan data -->
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_10 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_10"
                                                    id="inlineRadio19" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_10"
                                                    id="inlineRadio20" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_3_11 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_11 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_11"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_11"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_3_12 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_12 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_12"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_12"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_3_13 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_13 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_13"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_13"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_3_14 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_14 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_14"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_14"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_3_15 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_15 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_15"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_15"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_3_16 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_16 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_16"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_16"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_3_17 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_17 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_17"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_17"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_3_18 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_18 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_18"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_18"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_3_19 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_19 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_19"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_19"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch
                                @switch($item)
                                @case($item->kompetensi02->element_kuk_3_20 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_20 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_20"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_20"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_3_21 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_21 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_21"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_21"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_3_22 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_22 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_22"
                                                    id="inlineRadio22" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_22"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_3_23 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_23 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_23"
                                                    id="inlineRadio23" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_23"
                                                    id="inlineRadio23" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_3_24 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_24 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_24"
                                                    id="inlineRadio24" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_24"
                                                    id="inlineRadio24" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_3_25 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_25 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_25"
                                                    id="inlineRadio25" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_25"
                                                    id="inlineRadio25" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_3_26 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_26 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_26"
                                                    id="inlineRadio26" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_26"
                                                    id="inlineRadio26" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_3_27 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_27 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_27"
                                                    id="inlineRadio27" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_27"
                                                    id="inlineRadio27" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch


                                @switch($item)
                                @case($item->kompetensi02->element_kuk_3_28 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_28 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_28"
                                                    id="inlineRadio28" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_28"
                                                    id="inlineRadio28" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_3_29 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_29 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_29"
                                                    id="inlineRadio29" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_29"
                                                    id="inlineRadio29" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_3_30 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_30 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_30"
                                                    id="inlineRadio30" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_30"
                                                    id="inlineRadio30" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch


                                @switch($item)
                                @case($item->kompetensi02->element_kuk_3_31 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_31 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_31"
                                                    id="inlineRadio31" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_31"
                                                    id="inlineRadio31" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_3_32 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_32 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_32"
                                                    id="inlineRadio32" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_32"
                                                    id="inlineRadio32" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_3_33 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_33 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_33"
                                                    id="inlineRadio33" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_33"
                                                    id="inlineRadio33" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_3_34 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_34 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_34"
                                                    id="inlineRadio34" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_34"
                                                    id="inlineRadio34" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_3_35 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_35 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_35"
                                                    id="inlineRadio35" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_35"
                                                    id="inlineRadio35" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_3_36 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_36 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_36"
                                                    id="inlineRadio36" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_36"
                                                    id="inlineRadio36" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_3_37 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_37 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_37"
                                                    id="inlineRadio37" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_37"
                                                    id="inlineRadio37" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_3_38 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_38 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_38"
                                                    id="inlineRadio38" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_38"
                                                    id="inlineRadio38" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_3_39 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_39 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_39"
                                                    id="inlineRadio39" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_39"
                                                    id="inlineRadio39" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_3_40 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_40 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_40"
                                                    id="inlineRadio40" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_40"
                                                    id="inlineRadio40" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_3_41 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_41 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_41"
                                                    id="inlineRadio41" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_41"
                                                    id="inlineRadio41" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_3_42 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_42 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_42"
                                                    id="inlineRadio42" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_42"
                                                    id="inlineRadio42" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_3_43 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_43 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_43"
                                                    id="inlineRadio43" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_43"
                                                    id="inlineRadio43" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_3_44 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_44 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_44"
                                                    id="inlineRadio44" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_44"
                                                    id="inlineRadio44" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_3_45 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_45 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_45"
                                                    id="inlineRadio45" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_45"
                                                    id="inlineRadio45" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch
                            </tbody>
                        </table>
                    </div>
                </div>
                @endunless

                @unless(!$item->kompetensi02->kode4)
                <div class="mt-3">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover"
                            style="background-color: skyblue;border-collapse: collapse;">
                            <thead>
                                <tr>
                                    <td width="300px" style="vertical-align: top;padding: 20px;"> <b>Unit Kompetensi No.
                                            4</b> </td>
                                    <td>{{ $item->kompetensi02->kode4 }} <br>
                                        {{ $item->kompetensi02->unit4 }}
                                    </td>
                                </tr>
                            </thead>
                        </table>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered table-hovermb-3">
                            <tbody>
                                <tr>
                                    <td width="800px"> <b>Dapatkah saya?</b> </td>
                                    <td width="0px" style="text-align: center">K</td>
                                    <td width="0px" style="text-align: center">BK</td>
                                    <td width="120px" style="text-align: center">Bukti</td>
                                </tr>
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_01 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_01"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_01"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>

                                @unless(!$item->kompetensi02->element_kuk_4_02)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_02 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_02"
                                                    id="inlineRadio3" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_02"
                                                    id="inlineRadio4" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_4_03)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_03 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_03"
                                                    id="inlineRadio5" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_03"
                                                    id="inlineRadio6" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_4_04)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_04 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_04"
                                                    id="inlineRadio7" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_04"
                                                    id="inlineRadio8" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_4_05)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_05 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_05"
                                                    id="inlineRadio9" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_05"
                                                    id="inlineRadio10" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_4_06)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_06 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_06"
                                                    id="inlineRadio11" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_06"
                                                    id="inlineRadio12" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_4_07)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_07 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_07"
                                                    id="inlineRadio13" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_07"
                                                    id="inlineRadio14" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_4_08)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_08 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_08"
                                                    id="inlineRadio15" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_08"
                                                    id="inlineRadio16" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless


                                @unless(!$item->kompetensi02->element_kuk_4_09)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_09 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_09"
                                                    id="inlineRadio17" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_09"
                                                    id="inlineRadio18" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_4_10)
                                <!-- Tampilkan data -->
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_10 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_10"
                                                    id="inlineRadio19" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_10"
                                                    id="inlineRadio20" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_4_11 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_11 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_11"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_11"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_4_12 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_12 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_12"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_12"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_4_13 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_13 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_13"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_13"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_4_14 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_14 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_14"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_14"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_4_15 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_15 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_15"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_15"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_4_16 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_16 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_16"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_16"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_4_17 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_17 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_17"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_17"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_4_18 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_18 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_18"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_18"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_4_19 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_19 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_19"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_19"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch
                                @switch($item)
                                @case($item->kompetensi02->element_kuk_4_20 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_20 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_20"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_20"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_4_21 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_21 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_21"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_21"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_4_22 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_22 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_22"
                                                    id="inlineRadio22" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_22"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_4_23 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_23 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_23"
                                                    id="inlineRadio23" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_23"
                                                    id="inlineRadio23" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_4_24 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_24 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_24"
                                                    id="inlineRadio24" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_24"
                                                    id="inlineRadio24" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_4_25 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_25 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_25"
                                                    id="inlineRadio25" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_25"
                                                    id="inlineRadio25" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_4_26 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_26 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_26"
                                                    id="inlineRadio26" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_26"
                                                    id="inlineRadio26" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_4_27 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_27 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_27"
                                                    id="inlineRadio27" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_27"
                                                    id="inlineRadio27" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch


                                @switch($item)
                                @case($item->kompetensi02->element_kuk_4_28 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_28 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_28"
                                                    id="inlineRadio28" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_28"
                                                    id="inlineRadio28" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_4_29 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_29 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_29"
                                                    id="inlineRadio29" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_29"
                                                    id="inlineRadio29" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_4_30 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_30 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_30"
                                                    id="inlineRadio30" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_30"
                                                    id="inlineRadio30" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch


                                @switch($item)
                                @case($item->kompetensi02->element_kuk_4_31 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_31 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_31"
                                                    id="inlineRadio31" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_31"
                                                    id="inlineRadio31" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_4_32 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_32 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_32"
                                                    id="inlineRadio32" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_32"
                                                    id="inlineRadio32" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_4_33 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_33 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_33"
                                                    id="inlineRadio33" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_33"
                                                    id="inlineRadio33" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_4_34 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_34 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_34"
                                                    id="inlineRadio34" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_34"
                                                    id="inlineRadio34" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_4_35 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_35 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_35"
                                                    id="inlineRadio35" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_35"
                                                    id="inlineRadio35" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_4_36 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_36 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_36"
                                                    id="inlineRadio36" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_36"
                                                    id="inlineRadio36" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_4_37 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_37 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_37"
                                                    id="inlineRadio37" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_37"
                                                    id="inlineRadio37" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_4_38 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_38 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_38"
                                                    id="inlineRadio38" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_38"
                                                    id="inlineRadio38" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_4_39 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_39 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_39"
                                                    id="inlineRadio39" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_39"
                                                    id="inlineRadio39" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_4_40 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_40 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_40"
                                                    id="inlineRadio40" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_40"
                                                    id="inlineRadio40" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_4_41 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_41 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_41"
                                                    id="inlineRadio41" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_41"
                                                    id="inlineRadio41" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_4_42 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_42 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_42"
                                                    id="inlineRadio42" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_42"
                                                    id="inlineRadio42" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_4_43 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_43 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_43"
                                                    id="inlineRadio43" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_43"
                                                    id="inlineRadio43" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_4_44 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_44 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_44"
                                                    id="inlineRadio44" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_44"
                                                    id="inlineRadio44" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_4_45 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_45 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_45"
                                                    id="inlineRadio45" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_45"
                                                    id="inlineRadio45" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                            </tbody>
                        </table>
                    </div>
                </div>
                @endunless

                @unless(!$item->kompetensi02->kode5)
                <div class="mt-3">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover"
                            style="background-color: skyblue;border-collapse: collapse;">
                            <thead>
                                <tr>
                                    <td width="300px" style="vertical-align: top;padding: 20px;"> <b>Unit Kompetensi No.
                                            5</b> </td>
                                    <td>{{ $item->kompetensi02->kode5 }} <br>
                                        {{ $item->kompetensi02->unit5 }}
                                    </td>
                                </tr>
                            </thead>
                        </table>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered table-hovermb-3">
                            <tbody>
                                <tr>
                                    <td width="800px"> <b>Dapatkah saya?</b> </td>
                                    <td width="0px" style="text-align: center">K</td>
                                    <td width="0px" style="text-align: center">BK</td>
                                    <td width="120px" style="text-align: center">Bukti</td>
                                </tr>
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_01 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_01"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_01"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>

                                @unless(!$item->kompetensi02->element_kuk_5_02)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_02 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_02"
                                                    id="inlineRadio3" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_02"
                                                    id="inlineRadio4" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_5_03)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_03 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_03"
                                                    id="inlineRadio5" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_03"
                                                    id="inlineRadio6" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_5_04)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_04 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_04"
                                                    id="inlineRadio7" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_04"
                                                    id="inlineRadio8" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_5_05)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_05 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_05"
                                                    id="inlineRadio9" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_05"
                                                    id="inlineRadio10" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_5_06)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_06 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_06"
                                                    id="inlineRadio11" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_06"
                                                    id="inlineRadio12" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_5_07)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_07 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_07"
                                                    id="inlineRadio13" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_07"
                                                    id="inlineRadio14" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_5_08)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_08 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_08"
                                                    id="inlineRadio15" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_08"
                                                    id="inlineRadio16" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless


                                @unless(!$item->kompetensi02->element_kuk_5_09)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_09 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_09"
                                                    id="inlineRadio17" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_09"
                                                    id="inlineRadio18" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_5_10)
                                <!-- Tampilkan data -->
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_10 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_10"
                                                    id="inlineRadio19" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_10"
                                                    id="inlineRadio20" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_5_11 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_11 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_11"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_11"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_5_12 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_12 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_12"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_12"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_5_13 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_13 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_13"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_13"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_5_14 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_14 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_14"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_14"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_5_15 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_15 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_15"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_15"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_5_16 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_16 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_16"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_16"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_5_17 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_17 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_17"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_17"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_5_18 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_18 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_18"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_18"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_5_19 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_19 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_19"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_19"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch
                                @switch($item)
                                @case($item->kompetensi02->element_kuk_5_20 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_20 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_20"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_20"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_5_21 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_21 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_21"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_21"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_5_22 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_22 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_22"
                                                    id="inlineRadio22" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_22"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_5_23 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_23 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_23"
                                                    id="inlineRadio23" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_23"
                                                    id="inlineRadio23" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_5_24 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_24 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_24"
                                                    id="inlineRadio24" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_24"
                                                    id="inlineRadio24" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_5_25 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_25 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_25"
                                                    id="inlineRadio25" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_25"
                                                    id="inlineRadio25" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_5_26 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_26 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_26"
                                                    id="inlineRadio26" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_26"
                                                    id="inlineRadio26" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_5_27 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_27 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_27"
                                                    id="inlineRadio27" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_27"
                                                    id="inlineRadio27" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch


                                @switch($item)
                                @case($item->kompetensi02->element_kuk_5_28 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_28 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_28"
                                                    id="inlineRadio28" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_28"
                                                    id="inlineRadio28" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_5_29 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_29 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_29"
                                                    id="inlineRadio29" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_29"
                                                    id="inlineRadio29" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_5_30 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_30 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_30"
                                                    id="inlineRadio30" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_30"
                                                    id="inlineRadio30" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch


                                @switch($item)
                                @case($item->kompetensi02->element_kuk_5_31 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_31 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_31"
                                                    id="inlineRadio31" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_31"
                                                    id="inlineRadio31" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_5_32 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_32 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_32"
                                                    id="inlineRadio32" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_32"
                                                    id="inlineRadio32" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_5_33 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_33 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_33"
                                                    id="inlineRadio33" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_33"
                                                    id="inlineRadio33" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_5_34 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_34 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_34"
                                                    id="inlineRadio34" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_34"
                                                    id="inlineRadio34" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_5_35 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_35 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_35"
                                                    id="inlineRadio35" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_35"
                                                    id="inlineRadio35" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_5_36 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_36 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_36"
                                                    id="inlineRadio36" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_36"
                                                    id="inlineRadio36" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_5_37 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_37 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_37"
                                                    id="inlineRadio37" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_37"
                                                    id="inlineRadio37" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_5_38 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_38 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_38"
                                                    id="inlineRadio38" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_38"
                                                    id="inlineRadio38" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_5_39 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_39 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_39"
                                                    id="inlineRadio39" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_39"
                                                    id="inlineRadio39" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_5_40 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_40 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_40"
                                                    id="inlineRadio40" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_40"
                                                    id="inlineRadio40" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_5_41 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_41 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_41"
                                                    id="inlineRadio41" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_41"
                                                    id="inlineRadio41" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_5_42 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_42 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_42"
                                                    id="inlineRadio42" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_42"
                                                    id="inlineRadio42" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_5_43 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_43 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_43"
                                                    id="inlineRadio43" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_43"
                                                    id="inlineRadio43" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_5_44 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_44 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_44"
                                                    id="inlineRadio44" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_44"
                                                    id="inlineRadio44" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_5_45 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_45 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_45"
                                                    id="inlineRadio45" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_45"
                                                    id="inlineRadio45" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch
                            </tbody>
                        </table>
                    </div>
                </div>
                @endunless

                @unless(!$item->kompetensi02->kode6)
                <div class="mt-3">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover"
                            style="background-color: skyblue;border-collapse: collapse;">
                            <thead>
                                <tr>
                                    <td width="300px" style="vertical-align: top;padding: 20px;"> <b>Unit Kompetensi No.
                                            6</b> </td>
                                    <td>{{ $item->kompetensi02->kode6 }} <br>
                                        {{ $item->kompetensi02->unit6 }}
                                    </td>
                                </tr>
                            </thead>
                        </table>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered table-hovermb-3">
                            <tbody>
                                <tr>
                                    <td width="800px"> <b>Dapatkah saya?</b> </td>
                                    <td width="0px" style="text-align: center">K</td>
                                    <td width="0px" style="text-align: center">BK</td>
                                    <td width="120px" style="text-align: center">Bukti</td>
                                </tr>
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_01 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_01"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_01"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>

                                @unless(!$item->kompetensi02->element_kuk_6_02)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_02 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_02"
                                                    id="inlineRadio3" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_02"
                                                    id="inlineRadio4" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_6_03)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_03 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_03"
                                                    id="inlineRadio5" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_03"
                                                    id="inlineRadio6" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_6_04)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_04 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_04"
                                                    id="inlineRadio7" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_04"
                                                    id="inlineRadio8" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_6_05)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_05 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_05"
                                                    id="inlineRadio9" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_05"
                                                    id="inlineRadio10" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_6_06)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_06 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_06"
                                                    id="inlineRadio11" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_06"
                                                    id="inlineRadio12" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_6_07)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_07 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_07"
                                                    id="inlineRadio13" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_07"
                                                    id="inlineRadio14" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_6_08)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_08 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_08"
                                                    id="inlineRadio15" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_08"
                                                    id="inlineRadio16" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless


                                @unless(!$item->kompetensi02->element_kuk_6_09)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_09 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_09"
                                                    id="inlineRadio17" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_09"
                                                    id="inlineRadio18" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_6_10)
                                <!-- Tampilkan data -->
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_10 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_10"
                                                    id="inlineRadio19" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_10"
                                                    id="inlineRadio20" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_6_11 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_11 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_11"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_11"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_6_12 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_12 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_12"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_12"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_6_13 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_13 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_13"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_13"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_6_14 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_14 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_14"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_14"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_6_15 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_15 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_15"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_15"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_6_16 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_16 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_16"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_16"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_6_17 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_17 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_17"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_17"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_6_18 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_18 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_18"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_18"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_6_19 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_19 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_19"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_19"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch
                                @switch($item)
                                @case($item->kompetensi02->element_kuk_6_20 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_20 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_20"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_20"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_6_21 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_21 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_21"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_21"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_6_22 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_22 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_22"
                                                    id="inlineRadio22" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_22"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_6_23 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_23 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_23"
                                                    id="inlineRadio23" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_23"
                                                    id="inlineRadio23" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_6_24 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_24 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_24"
                                                    id="inlineRadio24" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_24"
                                                    id="inlineRadio24" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_6_25 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_25 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_25"
                                                    id="inlineRadio25" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_25"
                                                    id="inlineRadio25" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_6_26 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_26 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_26"
                                                    id="inlineRadio26" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_26"
                                                    id="inlineRadio26" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_6_27 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_27 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_27"
                                                    id="inlineRadio27" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_27"
                                                    id="inlineRadio27" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch


                                @switch($item)
                                @case($item->kompetensi02->element_kuk_6_28 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_28 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_28"
                                                    id="inlineRadio28" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_28"
                                                    id="inlineRadio28" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_6_29 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_29 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_29"
                                                    id="inlineRadio29" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_29"
                                                    id="inlineRadio29" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_6_30 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_30 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_30"
                                                    id="inlineRadio30" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_30"
                                                    id="inlineRadio30" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch


                                @switch($item)
                                @case($item->kompetensi02->element_kuk_6_31 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_31 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_31"
                                                    id="inlineRadio31" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_31"
                                                    id="inlineRadio31" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_6_32 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_32 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_32"
                                                    id="inlineRadio32" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_32"
                                                    id="inlineRadio32" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_6_33 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_33 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_33"
                                                    id="inlineRadio33" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_33"
                                                    id="inlineRadio33" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_6_34 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_34 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_34"
                                                    id="inlineRadio34" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_34"
                                                    id="inlineRadio34" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_6_35 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_35 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_35"
                                                    id="inlineRadio35" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_35"
                                                    id="inlineRadio35" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_6_36 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_36 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_36"
                                                    id="inlineRadio36" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_36"
                                                    id="inlineRadio36" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_6_37 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_37 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_37"
                                                    id="inlineRadio37" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_37"
                                                    id="inlineRadio37" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_6_38 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_38 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_38"
                                                    id="inlineRadio38" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_38"
                                                    id="inlineRadio38" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_6_39 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_39 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_39"
                                                    id="inlineRadio39" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_39"
                                                    id="inlineRadio39" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_6_40 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_40 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_40"
                                                    id="inlineRadio40" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_40"
                                                    id="inlineRadio40" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_6_41 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_41 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_41"
                                                    id="inlineRadio41" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_41"
                                                    id="inlineRadio41" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_6_42 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_42 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_42"
                                                    id="inlineRadio42" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_42"
                                                    id="inlineRadio42" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_6_43 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_43 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_43"
                                                    id="inlineRadio43" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_43"
                                                    id="inlineRadio43" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_6_44 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_44 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_44"
                                                    id="inlineRadio44" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_44"
                                                    id="inlineRadio44" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_6_45 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_45 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_45"
                                                    id="inlineRadio45" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_45"
                                                    id="inlineRadio45" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                            </tbody>
                        </table>
                    </div>
                </div>
                @endunless

                @unless(!$item->kompetensi02->kode7)
                <div class="mt-3">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover"
                            style="background-color: skyblue;border-collapse: collapse;">
                            <thead>
                                <tr>
                                    <td width="300px" style="vertical-align: top;padding: 20px;"> <b>Unit Kompetensi No.
                                            7</b> </td>
                                    <td>{{ $item->kompetensi02->kode7 }} <br>
                                        {{ $item->kompetensi02->unit7 }}
                                    </td>
                                </tr>
                            </thead>
                        </table>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered table-hovermb-3">
                            <tbody>
                                <tr>
                                    <td width="800px"> <b>Dapatkah saya?</b> </td>
                                    <td width="0px" style="text-align: center">K</td>
                                    <td width="0px" style="text-align: center">BK</td>
                                    <td width="120px" style="text-align: center">Bukti</td>
                                </tr>
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_01 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_01"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_01"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>

                                @unless(!$item->kompetensi02->element_kuk_7_02)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_02 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_02"
                                                    id="inlineRadio3" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_02"
                                                    id="inlineRadio4" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_7_03)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_03 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_03"
                                                    id="inlineRadio5" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_03"
                                                    id="inlineRadio6" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_7_04)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_04 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_04"
                                                    id="inlineRadio7" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_04"
                                                    id="inlineRadio8" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_7_05)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_05 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_05"
                                                    id="inlineRadio9" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_05"
                                                    id="inlineRadio10" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_7_06)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_06 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_06"
                                                    id="inlineRadio11" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_06"
                                                    id="inlineRadio12" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_7_07)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_07 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_07"
                                                    id="inlineRadio13" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_07"
                                                    id="inlineRadio14" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_7_08)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_08 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_08"
                                                    id="inlineRadio15" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_08"
                                                    id="inlineRadio16" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless


                                @unless(!$item->kompetensi02->element_kuk_7_09)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_09 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_09"
                                                    id="inlineRadio17" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_09"
                                                    id="inlineRadio18" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_7_10)
                                <!-- Tampilkan data -->
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_10 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_10"
                                                    id="inlineRadio19" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_10"
                                                    id="inlineRadio20" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_7_11 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_11 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_11"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_11"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_7_12 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_12 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_12"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_12"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_7_13 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_13 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_13"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_13"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_7_14 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_14 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_14"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_14"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_7_15 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_15 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_15"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_15"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_7_16 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_16 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_16"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_16"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_7_17 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_17 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_17"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_17"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_7_18 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_18 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_18"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_18"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_7_19 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_19 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_19"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_19"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch
                                @switch($item)
                                @case($item->kompetensi02->element_kuk_7_20 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_20 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_20"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_20"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_7_21 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_21 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_21"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_21"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_7_22 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_22 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_22"
                                                    id="inlineRadio22" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_22"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_7_23 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_23 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_23"
                                                    id="inlineRadio23" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_23"
                                                    id="inlineRadio23" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_7_24 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_24 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_24"
                                                    id="inlineRadio24" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_24"
                                                    id="inlineRadio24" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_7_25 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_25 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_25"
                                                    id="inlineRadio25" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_25"
                                                    id="inlineRadio25" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_7_26 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_26 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_26"
                                                    id="inlineRadio26" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_26"
                                                    id="inlineRadio26" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_7_27 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_27 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_27"
                                                    id="inlineRadio27" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_27"
                                                    id="inlineRadio27" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch


                                @switch($item)
                                @case($item->kompetensi02->element_kuk_7_28 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_28 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_28"
                                                    id="inlineRadio28" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_28"
                                                    id="inlineRadio28" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_7_29 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_29 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_29"
                                                    id="inlineRadio29" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_29"
                                                    id="inlineRadio29" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_7_30 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_30 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_30"
                                                    id="inlineRadio30" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_30"
                                                    id="inlineRadio30" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch


                                @switch($item)
                                @case($item->kompetensi02->element_kuk_7_31 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_31 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_31"
                                                    id="inlineRadio31" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_31"
                                                    id="inlineRadio31" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_7_32 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_32 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_32"
                                                    id="inlineRadio32" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_32"
                                                    id="inlineRadio32" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_7_33 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_33 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_33"
                                                    id="inlineRadio33" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_33"
                                                    id="inlineRadio33" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_7_34 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_34 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_34"
                                                    id="inlineRadio34" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_34"
                                                    id="inlineRadio34" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_7_35 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_35 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_35"
                                                    id="inlineRadio35" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_35"
                                                    id="inlineRadio35" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_7_36 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_36 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_36"
                                                    id="inlineRadio36" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_36"
                                                    id="inlineRadio36" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_7_37 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_37 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_37"
                                                    id="inlineRadio37" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_37"
                                                    id="inlineRadio37" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_7_38 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_38 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_38"
                                                    id="inlineRadio38" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_38"
                                                    id="inlineRadio38" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_7_39 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_39 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_39"
                                                    id="inlineRadio39" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_39"
                                                    id="inlineRadio39" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_7_40 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_40 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_40"
                                                    id="inlineRadio40" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_40"
                                                    id="inlineRadio40" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_7_41 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_41 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_41"
                                                    id="inlineRadio41" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_41"
                                                    id="inlineRadio41" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_7_42 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_42 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_42"
                                                    id="inlineRadio42" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_42"
                                                    id="inlineRadio42" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_7_43 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_43 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_43"
                                                    id="inlineRadio43" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_43"
                                                    id="inlineRadio43" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_7_44 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_44 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_44"
                                                    id="inlineRadio44" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_44"
                                                    id="inlineRadio44" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_7_45 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_45 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_45"
                                                    id="inlineRadio45" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_45"
                                                    id="inlineRadio45" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                            </tbody>
                        </table>
                    </div>
                </div>
                @endunless

                @unless(!$item->kompetensi02->kode8)
                <div class="mt-3">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover"
                            style="background-color: skyblue;border-collapse: collapse;">
                            <thead>
                                <tr>
                                    <td width="300px" style="vertical-align: top;padding: 20px;"> <b>Unit Kompetensi No.
                                            8</b> </td>
                                    <td>{{ $item->kompetensi02->kode8 }} <br>
                                        {{ $item->kompetensi02->unit8 }}
                                    </td>
                                </tr>
                            </thead>
                        </table>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered table-hovermb-3">
                            <tbody>
                                <tr>
                                    <td width="800px"> <b>Dapatkah saya?</b> </td>
                                    <td width="0px" style="text-align: center">K</td>
                                    <td width="0px" style="text-align: center">BK</td>
                                    <td width="120px" style="text-align: center">Bukti</td>
                                </tr>
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_01 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_01"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_01"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>

                                @unless(!$item->kompetensi02->element_kuk_8_02)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_02 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_02"
                                                    id="inlineRadio3" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_02"
                                                    id="inlineRadio4" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_8_03)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_03 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_03"
                                                    id="inlineRadio5" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_03"
                                                    id="inlineRadio6" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_8_04)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_04 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_04"
                                                    id="inlineRadio7" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_04"
                                                    id="inlineRadio8" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_8_05)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_05 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_05"
                                                    id="inlineRadio9" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_05"
                                                    id="inlineRadio10" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_8_06)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_06 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_06"
                                                    id="inlineRadio11" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_06"
                                                    id="inlineRadio12" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_8_07)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_07 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_07"
                                                    id="inlineRadio13" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_07"
                                                    id="inlineRadio14" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_8_08)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_08 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_08"
                                                    id="inlineRadio15" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_08"
                                                    id="inlineRadio16" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless


                                @unless(!$item->kompetensi02->element_kuk_8_09)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_09 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_09"
                                                    id="inlineRadio17" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_09"
                                                    id="inlineRadio18" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_8_10)
                                <!-- Tampilkan data -->
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_10 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_10"
                                                    id="inlineRadio19" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_10"
                                                    id="inlineRadio20" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_8_11 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_11 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_11"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_11"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_8_12 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_12 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_12"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_12"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_8_13 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_13 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_13"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_13"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_8_14 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_14 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_14"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_14"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_8_15 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_15 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_15"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_15"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_8_16 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_16 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_16"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_16"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_8_17 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_17 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_17"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_17"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_8_18 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_18 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_18"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_18"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_8_19 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_19 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_19"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_19"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch
                                @switch($item)
                                @case($item->kompetensi02->element_kuk_8_20 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_20 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_20"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_20"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_8_21 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_21 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_21"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_21"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_8_22 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_22 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_22"
                                                    id="inlineRadio22" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_22"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_8_23 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_23 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_23"
                                                    id="inlineRadio23" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_23"
                                                    id="inlineRadio23" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_8_24 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_24 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_24"
                                                    id="inlineRadio24" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_24"
                                                    id="inlineRadio24" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_8_25 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_25 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_25"
                                                    id="inlineRadio25" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_25"
                                                    id="inlineRadio25" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_8_26 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_26 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_26"
                                                    id="inlineRadio26" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_26"
                                                    id="inlineRadio26" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_8_27 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_27 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_27"
                                                    id="inlineRadio27" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_27"
                                                    id="inlineRadio27" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch


                                @switch($item)
                                @case($item->kompetensi02->element_kuk_8_28 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_28 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_28"
                                                    id="inlineRadio28" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_28"
                                                    id="inlineRadio28" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_8_29 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_29 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_29"
                                                    id="inlineRadio29" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_29"
                                                    id="inlineRadio29" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_8_30 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_30 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_30"
                                                    id="inlineRadio30" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_30"
                                                    id="inlineRadio30" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch


                                @switch($item)
                                @case($item->kompetensi02->element_kuk_8_31 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_31 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_31"
                                                    id="inlineRadio31" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_31"
                                                    id="inlineRadio31" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_8_32 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_32 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_32"
                                                    id="inlineRadio32" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_32"
                                                    id="inlineRadio32" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_8_33 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_33 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_33"
                                                    id="inlineRadio33" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_33"
                                                    id="inlineRadio33" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_8_34 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_34 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_34"
                                                    id="inlineRadio34" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_34"
                                                    id="inlineRadio34" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_8_35 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_35 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_35"
                                                    id="inlineRadio35" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_35"
                                                    id="inlineRadio35" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_8_36 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_36 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_36"
                                                    id="inlineRadio36" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_36"
                                                    id="inlineRadio36" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_8_37 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_37 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_37"
                                                    id="inlineRadio37" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_37"
                                                    id="inlineRadio37" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_8_38 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_38 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_38"
                                                    id="inlineRadio38" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_38"
                                                    id="inlineRadio38" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_8_39 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_39 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_39"
                                                    id="inlineRadio39" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_39"
                                                    id="inlineRadio39" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_8_40 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_40 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_40"
                                                    id="inlineRadio40" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_40"
                                                    id="inlineRadio40" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_8_41 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_41 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_41"
                                                    id="inlineRadio41" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_41"
                                                    id="inlineRadio41" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_8_42 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_42 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_42"
                                                    id="inlineRadio42" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_42"
                                                    id="inlineRadio42" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_8_43 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_43 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_43"
                                                    id="inlineRadio43" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_43"
                                                    id="inlineRadio43" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_8_44 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_44 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_44"
                                                    id="inlineRadio44" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_44"
                                                    id="inlineRadio44" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_8_45 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_45 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_45"
                                                    id="inlineRadio45" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_45"
                                                    id="inlineRadio45" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                            </tbody>
                        </table>
                    </div>
                </div>
                @endunless

                @unless(!$item->kompetensi02->kode9)
                <div class="mt-3">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover"
                            style="background-color: skyblue;border-collapse: collapse;">
                            <thead>
                                <tr>
                                    <td width="300px" style="vertical-align: top;padding: 20px;"> <b>Unit Kompetensi No.
                                            9</b> </td>
                                    <td>{{ $item->kompetensi02->kode9 }} <br>
                                        {{ $item->kompetensi02->unit9 }}
                                    </td>
                                </tr>
                            </thead>
                        </table>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered table-hovermb-3">
                            <tbody>
                                <tr>
                                    <td width="800px"> <b>Dapatkah saya?</b> </td>
                                    <td width="0px" style="text-align: center">K</td>
                                    <td width="0px" style="text-align: center">BK</td>
                                    <td width="120px" style="text-align: center">Bukti</td>
                                </tr>
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_01 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_01"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_01"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>

                                @unless(!$item->kompetensi02->element_kuk_9_02)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_02 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_02"
                                                    id="inlineRadio3" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_02"
                                                    id="inlineRadio4" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_9_03)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_03 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_03"
                                                    id="inlineRadio5" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_03"
                                                    id="inlineRadio6" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_9_04)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_04 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_04"
                                                    id="inlineRadio7" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_04"
                                                    id="inlineRadio8" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_9_05)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_05 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_05"
                                                    id="inlineRadio9" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_05"
                                                    id="inlineRadio10" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_9_06)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_06 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_06"
                                                    id="inlineRadio11" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_06"
                                                    id="inlineRadio12" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_9_07)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_07 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_07"
                                                    id="inlineRadio13" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_07"
                                                    id="inlineRadio14" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_9_08)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_08 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_08"
                                                    id="inlineRadio15" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_08"
                                                    id="inlineRadio16" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless


                                @unless(!$item->kompetensi02->element_kuk_9_09)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_09 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_09"
                                                    id="inlineRadio17" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_09"
                                                    id="inlineRadio18" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_9_10)
                                <!-- Tampilkan data -->
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_10 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_10"
                                                    id="inlineRadio19" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_10"
                                                    id="inlineRadio20" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_9_11 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_11 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_11"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_11"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_9_12 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_12 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_12"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_12"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_9_13 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_13 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_13"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_13"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_9_14 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_14 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_14"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_14"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_9_15 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_15 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_15"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_15"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_9_16 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_16 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_16"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_16"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_9_17 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_17 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_17"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_17"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_9_18 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_18 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_18"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_18"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_9_19 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_19 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_19"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_19"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch
                                @switch($item)
                                @case($item->kompetensi02->element_kuk_9_20 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_20 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_20"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_20"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_9_21 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_21 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_21"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_21"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_9_22 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_22 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_22"
                                                    id="inlineRadio22" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_22"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_9_23 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_23 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_23"
                                                    id="inlineRadio23" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_23"
                                                    id="inlineRadio23" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_9_24 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_24 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_24"
                                                    id="inlineRadio24" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_24"
                                                    id="inlineRadio24" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_9_25 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_25 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_25"
                                                    id="inlineRadio25" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_25"
                                                    id="inlineRadio25" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_9_26 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_26 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_26"
                                                    id="inlineRadio26" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_26"
                                                    id="inlineRadio26" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_9_27 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_27 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_27"
                                                    id="inlineRadio27" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_27"
                                                    id="inlineRadio27" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch


                                @switch($item)
                                @case($item->kompetensi02->element_kuk_9_28 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_28 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_28"
                                                    id="inlineRadio28" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_28"
                                                    id="inlineRadio28" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_9_29 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_29 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_29"
                                                    id="inlineRadio29" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_29"
                                                    id="inlineRadio29" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_9_30 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_30 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_30"
                                                    id="inlineRadio30" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_30"
                                                    id="inlineRadio30" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch


                                @switch($item)
                                @case($item->kompetensi02->element_kuk_9_31 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_31 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_31"
                                                    id="inlineRadio31" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_31"
                                                    id="inlineRadio31" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_9_32 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_32 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_32"
                                                    id="inlineRadio32" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_32"
                                                    id="inlineRadio32" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_9_33 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_33 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_33"
                                                    id="inlineRadio33" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_33"
                                                    id="inlineRadio33" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_9_34 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_34 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_34"
                                                    id="inlineRadio34" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_34"
                                                    id="inlineRadio34" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_9_35 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_35 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_35"
                                                    id="inlineRadio35" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_35"
                                                    id="inlineRadio35" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_9_36 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_36 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_36"
                                                    id="inlineRadio36" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_36"
                                                    id="inlineRadio36" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_9_37 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_37 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_37"
                                                    id="inlineRadio37" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_37"
                                                    id="inlineRadio37" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_9_38 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_38 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_38"
                                                    id="inlineRadio38" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_38"
                                                    id="inlineRadio38" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_9_39 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_39 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_39"
                                                    id="inlineRadio39" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_39"
                                                    id="inlineRadio39" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_9_40 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_40 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_40"
                                                    id="inlineRadio40" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_40"
                                                    id="inlineRadio40" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_9_41 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_41 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_41"
                                                    id="inlineRadio41" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_41"
                                                    id="inlineRadio41" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_9_42 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_42 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_42"
                                                    id="inlineRadio42" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_42"
                                                    id="inlineRadio42" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_9_43 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_43 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_43"
                                                    id="inlineRadio43" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_43"
                                                    id="inlineRadio43" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_9_44 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_44 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_44"
                                                    id="inlineRadio44" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_44"
                                                    id="inlineRadio44" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_9_45 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_45 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_45"
                                                    id="inlineRadio45" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_45"
                                                    id="inlineRadio45" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                            </tbody>
                        </table>
                    </div>
                </div>
                @endunless

                @unless(!$item->kompetensi02->kode10)
                <div class="mt-3">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover"
                            style="background-color: skyblue;border-collapse: collapse;">
                            <thead>
                                <tr>
                                    <td width="300px" style="vertical-align: top;padding: 20px;"> <b>Unit Kompetensi No.
                                            10</b> </td>
                                    <td>{{ $item->kompetensi02->kode10 }} <br>
                                        {{ $item->kompetensi02->unit10 }}
                                    </td>
                                </tr>
                            </thead>
                        </table>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered table-hovermb-3">
                            <tbody>
                                <tr>
                                    <td width="800px"> <b>Dapatkah saya?</b> </td>
                                    <td width="0px" style="text-align: center">K</td>
                                    <td width="0px" style="text-align: center">BK</td>
                                    <td width="120px" style="text-align: center">Bukti</td>
                                </tr>
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_01 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_01"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_01"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>

                                @unless(!$item->kompetensi02->element_kuk_10_02)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_02 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_02"
                                                    id="inlineRadio3" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_02"
                                                    id="inlineRadio4" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_10_03)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_03 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_03"
                                                    id="inlineRadio5" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_03"
                                                    id="inlineRadio6" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_10_04)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_04 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_04"
                                                    id="inlineRadio7" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_04"
                                                    id="inlineRadio8" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_10_05)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_05 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_05"
                                                    id="inlineRadio9" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_05"
                                                    id="inlineRadio10" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_10_06)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_06 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_06"
                                                    id="inlineRadio11" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_06"
                                                    id="inlineRadio12" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_10_07)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_07 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_07"
                                                    id="inlineRadio13" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_07"
                                                    id="inlineRadio14" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_10_08)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_08 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_08"
                                                    id="inlineRadio15" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_08"
                                                    id="inlineRadio16" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless


                                @unless(!$item->kompetensi02->element_kuk_10_09)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_09 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_09"
                                                    id="inlineRadio17" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_09"
                                                    id="inlineRadio18" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_10_10)
                                <!-- Tampilkan data -->
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_10 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_10"
                                                    id="inlineRadio19" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_10"
                                                    id="inlineRadio20" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_10_11 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_11 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_11"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_11"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_10_12 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_12 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_12"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_12"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_10_13 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_13 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_13"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_13"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_10_14 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_14 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_14"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_14"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_10_15 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_15 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_15"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_15"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_10_16 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_16 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_16"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_16"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_10_17 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_17 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_17"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_17"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_10_18 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_18 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_18"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_18"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_10_19 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_19 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_19"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_19"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch
                                @switch($item)
                                @case($item->kompetensi02->element_kuk_10_20 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_20 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_20"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_20"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_10_21 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_21 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_21"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_21"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_10_22 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_22 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_22"
                                                    id="inlineRadio22" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_22"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_10_23 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_23 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_23"
                                                    id="inlineRadio23" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_23"
                                                    id="inlineRadio23" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_10_24 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_24 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_24"
                                                    id="inlineRadio24" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_24"
                                                    id="inlineRadio24" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_10_25 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_25 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_25"
                                                    id="inlineRadio25" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_25"
                                                    id="inlineRadio25" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_10_26 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_26 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_26"
                                                    id="inlineRadio26" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_26"
                                                    id="inlineRadio26" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_10_27 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_27 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_27"
                                                    id="inlineRadio27" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_27"
                                                    id="inlineRadio27" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch


                                @switch($item)
                                @case($item->kompetensi02->element_kuk_10_28 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_28 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_28"
                                                    id="inlineRadio28" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_28"
                                                    id="inlineRadio28" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_10_29 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_29 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_29"
                                                    id="inlineRadio29" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_29"
                                                    id="inlineRadio29" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_10_30 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_30 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_30"
                                                    id="inlineRadio30" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_30"
                                                    id="inlineRadio30" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch


                                @switch($item)
                                @case($item->kompetensi02->element_kuk_10_31 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_31 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_31"
                                                    id="inlineRadio31" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_31"
                                                    id="inlineRadio31" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_10_32 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_32 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_32"
                                                    id="inlineRadio32" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_32"
                                                    id="inlineRadio32" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_10_33 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_33 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_33"
                                                    id="inlineRadio33" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_33"
                                                    id="inlineRadio33" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_10_34 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_34 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_34"
                                                    id="inlineRadio34" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_34"
                                                    id="inlineRadio34" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_10_35 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_35 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_35"
                                                    id="inlineRadio35" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_35"
                                                    id="inlineRadio35" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_10_36 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_36 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_36"
                                                    id="inlineRadio36" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_36"
                                                    id="inlineRadio36" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_10_37 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_37 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_37"
                                                    id="inlineRadio37" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_37"
                                                    id="inlineRadio37" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_10_38 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_38 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_38"
                                                    id="inlineRadio38" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_38"
                                                    id="inlineRadio38" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_10_39 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_39 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_39"
                                                    id="inlineRadio39" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_39"
                                                    id="inlineRadio39" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_10_40 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_40 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_40"
                                                    id="inlineRadio40" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_40"
                                                    id="inlineRadio40" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_10_41 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_41 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_41"
                                                    id="inlineRadio41" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_41"
                                                    id="inlineRadio41" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_10_42 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_42 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_42"
                                                    id="inlineRadio42" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_42"
                                                    id="inlineRadio42" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_10_43 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_43 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_43"
                                                    id="inlineRadio43" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_43"
                                                    id="inlineRadio43" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_10_44 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_44 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_44"
                                                    id="inlineRadio44" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_44"
                                                    id="inlineRadio44" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_10_45 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_45 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_45"
                                                    id="inlineRadio45" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_45"
                                                    id="inlineRadio45" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                            </tbody>
                        </table>
                    </div>
                </div>
                @endunless

                @unless(!$item->kompetensi02->kode11)
                <div class="mt-3">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover"
                            style="background-color: skyblue;border-collapse: collapse;">
                            <thead>
                                <tr>
                                    <td width="300px" style="vertical-align: top;padding: 20px;"> <b>Unit Kompetensi No.
                                            11</b> </td>
                                    <td>{{ $item->kompetensi02->kode11 }} <br>
                                        {{ $item->kompetensi02->unit11 }}
                                    </td>
                                </tr>
                            </thead>
                        </table>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered table-hovermb-3">
                            <tbody>
                                <tr>
                                    <td width="800px"> <b>Dapatkah saya?</b> </td>
                                    <td width="0px" style="text-align: center">K</td>
                                    <td width="0px" style="text-align: center">BK</td>
                                    <td width="120px" style="text-align: center">Bukti</td>
                                </tr>
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_01 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_01"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_01"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>

                                @unless(!$item->kompetensi02->element_kuk_11_02)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_02 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_02"
                                                    id="inlineRadio3" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_02"
                                                    id="inlineRadio4" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_11_03)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_03 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_03"
                                                    id="inlineRadio5" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_03"
                                                    id="inlineRadio6" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_11_04)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_04 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_04"
                                                    id="inlineRadio7" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_04"
                                                    id="inlineRadio8" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_11_05)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_05 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_05"
                                                    id="inlineRadio9" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_05"
                                                    id="inlineRadio10" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_11_06)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_06 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_06"
                                                    id="inlineRadio11" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_06"
                                                    id="inlineRadio12" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_11_07)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_07 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_07"
                                                    id="inlineRadio13" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_07"
                                                    id="inlineRadio14" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_11_08)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_08 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_08"
                                                    id="inlineRadio15" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_08"
                                                    id="inlineRadio16" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless


                                @unless(!$item->kompetensi02->element_kuk_11_09)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_09 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_09"
                                                    id="inlineRadio17" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_09"
                                                    id="inlineRadio18" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_11_10)
                                <!-- Tampilkan data -->
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_10 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_10"
                                                    id="inlineRadio19" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_10"
                                                    id="inlineRadio20" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endunless

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_11_11 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_11 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_11"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_11"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch
                                @switch($item)
                                @case($item->kompetensi02->element_kuk_11_12 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_12 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_12"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_12"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_11_13 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_13 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_13"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_13"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_11_14 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_14 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_14"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_14"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_11_15 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_15 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_15"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_15"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_11_16 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_16 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_16"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_16"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_11_17 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_17 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_17"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_17"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_11_18 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_18 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_18"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_18"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_11_19 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_19 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_19"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_19"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch
                                @switch($item)
                                @case($item->kompetensi02->element_kuk_11_20 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_20 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_20"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_20"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_11_21 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_21 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_21"
                                                    id="inlineRadio21" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_21"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_11_22 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_22 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_22"
                                                    id="inlineRadio22" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_22"
                                                    id="inlineRadio22" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_11_23 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_23 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_23"
                                                    id="inlineRadio23" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_23"
                                                    id="inlineRadio23" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_11_24 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_24 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_24"
                                                    id="inlineRadio24" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_24"
                                                    id="inlineRadio24" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_11_25 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_25 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_25"
                                                    id="inlineRadio25" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_25"
                                                    id="inlineRadio25" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_11_26 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_26 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_26"
                                                    id="inlineRadio26" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_26"
                                                    id="inlineRadio26" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_11_27 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_27 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_27"
                                                    id="inlineRadio27" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_27"
                                                    id="inlineRadio27" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch


                                @switch($item)
                                @case($item->kompetensi02->element_kuk_11_28 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_28 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_28"
                                                    id="inlineRadio28" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_28"
                                                    id="inlineRadio28" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_11_29 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_29 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_29"
                                                    id="inlineRadio29" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_29"
                                                    id="inlineRadio29" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_11_30 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_30 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_30"
                                                    id="inlineRadio30" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_30"
                                                    id="inlineRadio30" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch


                                @switch($item)
                                @case($item->kompetensi02->element_kuk_11_31 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_31 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_31"
                                                    id="inlineRadio31" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_31"
                                                    id="inlineRadio31" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_11_32 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_32 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_32"
                                                    id="inlineRadio32" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_32"
                                                    id="inlineRadio32" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_11_33 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_33 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_33"
                                                    id="inlineRadio33" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_33"
                                                    id="inlineRadio33" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_11_34 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_34 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_34"
                                                    id="inlineRadio34" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_34"
                                                    id="inlineRadio34" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_11_35 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_35 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_35"
                                                    id="inlineRadio35" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_35"
                                                    id="inlineRadio35" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_11_36 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_36 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_36"
                                                    id="inlineRadio36" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_36"
                                                    id="inlineRadio36" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_11_37 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_37 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_37"
                                                    id="inlineRadio37" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_37"
                                                    id="inlineRadio37" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_11_38 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_38 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_38"
                                                    id="inlineRadio38" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_38"
                                                    id="inlineRadio38" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_11_39 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_39 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_39"
                                                    id="inlineRadio39" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_39"
                                                    id="inlineRadio39" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_11_40 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_40 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_40"
                                                    id="inlineRadio40" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_40"
                                                    id="inlineRadio40" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_11_41 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_41 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_41"
                                                    id="inlineRadio41" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_41"
                                                    id="inlineRadio41" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_11_42 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_42 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_42"
                                                    id="inlineRadio42" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_42"
                                                    id="inlineRadio42" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_11_43 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_43 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_43"
                                                    id="inlineRadio43" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_43"
                                                    id="inlineRadio43" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_11_44 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_44 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_44"
                                                    id="inlineRadio44" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_44"
                                                    id="inlineRadio44" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.b</td>
                                </tr>
                                @endswitch

                                @switch($item)
                                @case($item->kompetensi02->element_kuk_11_45 == NULL)
                                @break
                                @default
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_45 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_45"
                                                    id="inlineRadio45" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_45"
                                                    id="inlineRadio45" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">Bukti 3.a</td>
                                </tr>
                                @endswitch
                            </tbody>
                        </table>
                    </div>
                </div>
                @endunless

                <input type="hidden" name="apl02_id" value="{{ $data2 }}">
                <div class="col-12 d-flex justify-content-end mt-4">
                    <button class="btn btn-primary btn-submit">Submit</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endforeach
@endsection