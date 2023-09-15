@extends('layouts/master')
@section('title', 'APL 02')
@section('content')
@foreach ($apl02 as $item)
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('getAnswer', $item->id) }}" method="POST" enctype="multipart/form-data">
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
                                <th width="250px">Judul </th>
                                <th width="1px">:</th>
                                <th width="750px">{{ $item->kompetensi02->kompetensi->skema->nama_skema }}</th>
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
                                    <td width="500px"> <b>Dapatkah saya?</b> </td>
                                    <td width="50px" style="text-align: center">K</td>
                                    <td width="50px" style="text-align: center">BK</td>
                                    <td width="80px" style="text-align: center">Bukti</td>
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
                                    <td></td>
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
                                    <td></td>
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
                                    <td></td>
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
                                    <td></td>
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
                                    <td></td>
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
                                    <td></td>
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
                                    <td></td>
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
                                    <td></td>
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
                                    <td></td>
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
                                    <td></td>
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
                                    <td></td>
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
                                    <td width="500px"> <b>Dapatkah saya?</b> </td>
                                    <td width="50px" style="text-align: center">K</td>
                                    <td width="50px" style="text-align: center">BK</td>
                                    <td width="80px" style="text-align: center">Bukti</td>
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
                                    <td></td>
                                </tr>

                                @unless(!$item->kompetensi02->element_kuk_2_02)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_02 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_02"
                                                    id="inlineRadio25" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_02"
                                                    id="inlineRadio26" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_2_03)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_03 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_03"
                                                    id="inlineRadio27" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_03"
                                                    id="inlineRadio28" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_2_04)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_04 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_04"
                                                    id="inlineRadio29" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_04"
                                                    id="inlineRadio30" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_2_05)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_05 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_05"
                                                    id="inlineRadio31" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_05"
                                                    id="inlineRadio32" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_2_06)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_06 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_06"
                                                    id="inlineRadio33" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_06"
                                                    id="inlineRadio34" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_2_07)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_07 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_07"
                                                    id="inlineRadio35" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_07"
                                                    id="inlineRadio36" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_2_08)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_08 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_08"
                                                    id="inlineRadio37" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_08"
                                                    id="inlineRadio38" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless


                                @unless(!$item->kompetensi02->element_kuk_2_09)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_2_09 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_09"
                                                    id="inlineRadio39" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_09"
                                                    id="inlineRadio40" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
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
                                                    id="inlineRadio41" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_10"
                                                    id="inlineRadio42" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
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
                                                    id="inlineRadio43" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_2_11"
                                                    id="inlineRadio44" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
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
                                    <td width="500px"> <b>Dapatkah saya?</b> </td>
                                    <td width="50px" style="text-align: center">K</td>
                                    <td width="50px" style="text-align: center">BK</td>
                                    <td width="80px" style="text-align: center">Bukti</td>
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
                                    <td></td>
                                </tr>

                                @unless(!$item->kompetensi02->element_kuk_3_02)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_02 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_02"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_02"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_3_03)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_03 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_03"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_03"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_3_04)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_04 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_04"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_04"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_3_05)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_05 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_05"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_05"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_3_06)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_06 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_06"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_06"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_3_07)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_07 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_07"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_07"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_3_08)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_08 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_08"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_08"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless


                                @unless(!$item->kompetensi02->element_kuk_3_09)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_3_09 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_09"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_09"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
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
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_10"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
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
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_3_11"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
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
                                    <td width="500px"> <b>Dapatkah saya?</b> </td>
                                    <td width="50px" style="text-align: center">K</td>
                                    <td width="50px" style="text-align: center">BK</td>
                                    <td width="80px" style="text-align: center">Bukti</td>
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
                                    <td></td>
                                </tr>

                                @unless(!$item->kompetensi02->element_kuk_4_02)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_02 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_02"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_02"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_4_03)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_03 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_03"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_03"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_4_04)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_04 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_04"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_04"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_4_05)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_05 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_05"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_05"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_4_06)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_06 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_06"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_06"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_4_07)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_07 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_07"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_07"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_4_08)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_08 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_08"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_08"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless


                                @unless(!$item->kompetensi02->element_kuk_4_09)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_4_09 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_09"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_09"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
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
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_10"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
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
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_4_11"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
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
                                    <td width="500px"> <b>Dapatkah saya?</b> </td>
                                    <td width="50px" style="text-align: center">K</td>
                                    <td width="50px" style="text-align: center">BK</td>
                                    <td width="80px" style="text-align: center">Bukti</td>
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
                                    <td></td>
                                </tr>

                                @unless(!$item->kompetensi02->element_kuk_5_02)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_02 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_02"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_02"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_5_03)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_03 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_03"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_03"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_5_04)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_04 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_04"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_04"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_5_05)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_05 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_05"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_05"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_5_06)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_06 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_06"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_06"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_5_07)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_07 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_07"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_07"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_5_08)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_08 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_08"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_08"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless


                                @unless(!$item->kompetensi02->element_kuk_5_09)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_5_09 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_09"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_09"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
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
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_10"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
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
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_5_11"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
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
                                    <td width="500px"> <b>Dapatkah saya?</b> </td>
                                    <td width="50px" style="text-align: center">K</td>
                                    <td width="50px" style="text-align: center">BK</td>
                                    <td width="80px" style="text-align: center">Bukti</td>
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
                                    <td></td>
                                </tr>

                                @unless(!$item->kompetensi02->element_kuk_6_02)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_02 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_02"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_02"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_6_03)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_03 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_03"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_03"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_6_04)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_04 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_04"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_04"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_6_05)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_05 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_05"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_05"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_6_06)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_06 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_06"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_06"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_6_07)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_07 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_07"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_07"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_6_08)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_08 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_08"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_08"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless


                                @unless(!$item->kompetensi02->element_kuk_6_09)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_6_09 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_09"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_09"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
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
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_10"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
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
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_6_11"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
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
                                    <td width="500px"> <b>Dapatkah saya?</b> </td>
                                    <td width="50px" style="text-align: center">K</td>
                                    <td width="50px" style="text-align: center">BK</td>
                                    <td width="80px" style="text-align: center">Bukti</td>
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
                                    <td></td>
                                </tr>

                                @unless(!$item->kompetensi02->element_kuk_7_02)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_02 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_02"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_02"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_7_03)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_03 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_03"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_03"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_7_04)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_04 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_04"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_04"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_7_05)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_05 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_05"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_05"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_7_06)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_06 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_06"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_06"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_7_07)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_07 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_07"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_07"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_7_08)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_08 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_08"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_08"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless


                                @unless(!$item->kompetensi02->element_kuk_7_09)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_7_09 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_09"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_09"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
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
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_10"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
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
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_7_11"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
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
                                    <td width="500px"> <b>Dapatkah saya?</b> </td>
                                    <td width="50px" style="text-align: center">K</td>
                                    <td width="50px" style="text-align: center">BK</td>
                                    <td width="80px" style="text-align: center">Bukti</td>
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
                                    <td></td>
                                </tr>

                                @unless(!$item->kompetensi02->element_kuk_8_02)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_02 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_02"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_02"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_8_03)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_03 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_03"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_03"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_8_04)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_04 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_04"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_04"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_8_05)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_05 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_05"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_05"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_8_06)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_06 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_06"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_06"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_8_07)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_07 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_07"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_07"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_8_08)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_08 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_08"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_08"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless


                                @unless(!$item->kompetensi02->element_kuk_8_09)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_8_09 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_09"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_09"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
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
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_10"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
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
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_8_11"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
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
                                    <td width="500px"> <b>Dapatkah saya?</b> </td>
                                    <td width="50px" style="text-align: center">K</td>
                                    <td width="50px" style="text-align: center">BK</td>
                                    <td width="80px" style="text-align: center">Bukti</td>
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
                                    <td></td>
                                </tr>

                                @unless(!$item->kompetensi02->element_kuk_9_02)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_02 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_02"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_02"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_9_03)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_03 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_03"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_03"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_9_04)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_04 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_04"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_04"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_9_05)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_05 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_05"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_05"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_9_06)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_06 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_06"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_06"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_9_07)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_07 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_07"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_07"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_9_08)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_08 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_08"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_08"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless


                                @unless(!$item->kompetensi02->element_kuk_9_09)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_9_09 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_09"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_09"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
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
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_10"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
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
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_9_11"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
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
                                    <td width="500px"> <b>Dapatkah saya?</b> </td>
                                    <td width="50px" style="text-align: center">K</td>
                                    <td width="50px" style="text-align: center">BK</td>
                                    <td width="80px" style="text-align: center">Bukti</td>
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
                                    <td></td>
                                </tr>

                                @unless(!$item->kompetensi02->element_kuk_10_02)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_02 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_02"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_02"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_10_03)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_03 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_03"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_03"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_10_04)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_04 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_04"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_04"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_10_05)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_05 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_05"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_05"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_10_06)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_06 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_06"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_06"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_10_07)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_07 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_07"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_07"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_10_08)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_08 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_08"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_08"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless


                                @unless(!$item->kompetensi02->element_kuk_10_09)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_10_09 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_09"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_09"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
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
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_10"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
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
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_10_11"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
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
                                    <td width="500px"> <b>Dapatkah saya?</b> </td>
                                    <td width="50px" style="text-align: center">K</td>
                                    <td width="50px" style="text-align: center">BK</td>
                                    <td width="80px" style="text-align: center">Bukti</td>
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
                                    <td></td>
                                </tr>

                                @unless(!$item->kompetensi02->element_kuk_11_02)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_02 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_02"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_02"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_11_03)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_03 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_03"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_03"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_11_04)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_04 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_04"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_04"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_11_05)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_05 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_05"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_05"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_11_06)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_06 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_06"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_06"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_11_07)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_07 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_07"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_07"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless

                                @unless(!$item->kompetensi02->element_kuk_11_08)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_08 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_08"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_08"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endunless


                                @unless(!$item->kompetensi02->element_kuk_11_09)
                                <tr>
                                    <td>{!! $item->kompetensi02->element_kuk_11_09 !!}</td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_09"
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_09"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
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
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_10"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
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
                                                    id="inlineRadio1" value="K">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="col-md p-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="element_kuk_11_11"
                                                    id="inlineRadio2" value="BK">
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                @endswitch

                            </tbody>
                        </table>
                    </div>
                </div>
                @endunless
                <div class="col-12 d-flex justify-content-end mt-4">
                    <button class="btn btn-primary btn-submit">Submit</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endforeach
@endsection
