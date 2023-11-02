@extends('layouts/master')

@section('title', 'FK AK-03')

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">FK.AK-03. UMPAN BALIK DAN CATATAN ASESMEN </h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="250px" rowspan="2">Skema
                                Sertifikasi Okupasi Nasional</th>
                            <th width="200px">Judul </th>
                            <th width="10px">:</th>
                            <th colspan="2"> <b>{{ $show->feedback->apl02->kompetensi02->kompetensi->skema->nama_skema
                                    }}</b>
                            </th>
                        </tr>
                        <tr>
                            <th>No</th>
                            <th>:</th>
                            <th colspan="2"><b>{{ $show->feedback->apl02->kompetensi02->kompetensi->skema->no }}</b>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="2">TUK</td>
                            <td>:</td>
                            <td colspan="2">{{ $show->feedback->tuk }}</td>
                        </tr>
                        <tr>
                            <td colspan="2">Nama Asesi</td>
                            <td>:</td>
                            <td colspan="2">{{$show->feedback->apl02->personal_detail->nama_lengkap->name}}</td>
                        </tr>
                        <tr>
                            <td colspan="2">Nama Asesor</td>
                            <td>:</td>
                            <td colspan="2">{{ $show->feedback->nama_asesor_lsp }}</td>
                        </tr>
                        <tr>
                            <td colspan="2">Tanggal </td>
                            <td>:</td>
                            <td> {{
                                Carbon\Carbon::parse($show->tanggal)->formatLocalized('%A, %e %B %Y') }}</td>
                            <td>Waktu : &nbsp; &nbsp;{{ $show->waktu }} </td>
                        </tr>
                    </tbody>
                </table>

                <table class="table table-bordered table-hover mt-3">
                    <thead>
                        <tr>
                            <th class="text-center" rowspan="2">Komponen</th>
                            <th class="text-center" colspan="2">Hasil</th>
                            <th class="text-center" rowspan="2">Catatan/Komentar Asesi</th>
                        </tr>
                        <tr>
                            <th>Ya</th>
                            <th>Tidak</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <li>Saya Mendapatkan penjelasan yang cukup memadai mengenai proses asesmen/uji
                                    kompetensi</li>
                            </td>
                            @switch($show)
                            @case($show->kom == 1)
                            <td style="text-align: center">
                                <input name="kom" class="form-check-input" type="radio" value="1" id="defaultRadio2"
                                    checked>
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            <td style="text-align: center">
                                <input name="kom" class="form-check-input" type="radio" value="2" id="defaultRadio2">
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            @break
                            @default
                            <td style="text-align: center">
                                <input name="kom" class="form-check-input" type="radio" value="1" id="defaultRadio2">
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            <td style="text-align: center">
                                <input name="kom" class="form-check-input" type="radio" value="2" id="defaultRadio2"
                                    checked>
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>

                            @endswitch
                            <td> {{ $show->note }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <li>Saya diberikan kesempatan untuk mempelajari standar kompetensi yang akan
                                    diujikan
                                    dan menilai diri sendiri terhadap pencapaiannya
                            </td>
                            @switch($show)
                            @case($show->kom2 == 1)
                            <td style="text-align: center">
                                <input name="kom2" class="form-check-input" type="radio" value="1" id="defaultRadio2"
                                    checked>
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            <td style="text-align: center">
                                <input name="kom2" class="form-check-input" type="radio" value="2" id="defaultRadio2">
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            @break
                            @default
                            <td style="text-align: center">
                                <input name="kom2" class="form-check-input" type="radio" value="1" id="defaultRadio2">
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            <td style="text-align: center">
                                <input name="kom2" class="form-check-input" type="radio" value="2" id="defaultRadio2"
                                    checked>
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>

                            @endswitch
                            <td> {{ $show->note2 }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <li>Asesor memberikan kesempatan untuk mendiskusikan/menegosiasikan metoda,
                                    instrumen
                                    dan sumber daya asesmen serta jadwal asesmen</li>
                            </td>
                            @switch($show)
                            @case($show->kom3 == 1)
                            <td style="text-align: center">
                                <input name="kom3" class="form-check-input" type="radio" value="1" id="defaultRadio2"
                                    checked>
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            <td style="text-align: center">
                                <input name="kom3" class="form-check-input" type="radio" value="2" id="defaultRadio2">
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            @break
                            @default
                            <td style="text-align: center">
                                <input name="kom3" class="form-check-input" type="radio" value="1" id="defaultRadio2">
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            <td style="text-align: center">
                                <input name="kom3" class="form-check-input" type="radio" value="2" id="defaultRadio2"
                                    checked>
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>

                            @endswitch
                            <td> {{ $show->note3 }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <li>Asesor berusaha menggali seluruh bukti pendukung yang yang sesuai dengan latar
                                    belakang pelatihan dan pengalaman yang saya miliki</li>
                            </td>
                            @switch($show)
                            @case($show->kom4 == 1)
                            <td style="text-align: center">
                                <input name="kom4" class="form-check-input" type="radio" value="1" id="defaultRadio2"
                                    checked>
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            <td style="text-align: center">
                                <input name="kom4" class="form-check-input" type="radio" value="2" id="defaultRadio2">
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            @break
                            @default
                            <td style="text-align: center">
                                <input name="kom4" class="form-check-input" type="radio" value="1" id="defaultRadio2">
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            <td style="text-align: center">
                                <input name="kom4" class="form-check-input" type="radio" value="2" id="defaultRadio2"
                                    checked>
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>

                            @endswitch
                            <td> {{ $show->note4 }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <li>Saya mendapat jaminan kerahasiaan hasil asesmen serta penjelasan penanganan
                                    dokumen
                                    asesmen</li>
                            </td>
                            @switch($show)
                            @case($show->kom5 == 1)
                            <td style="text-align: center">
                                <input name="kom5" class="form-check-input" type="radio" value="1" id="defaultRadio2"
                                    checked>
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            <td style="text-align: center">
                                <input name="kom5" class="form-check-input" type="radio" value="2" id="defaultRadio2">
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            @break
                            @default
                            <td style="text-align: center">
                                <input name="kom5" class="form-check-input" type="radio" value="1" id="defaultRadio2">
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            <td style="text-align: center">
                                <input name="kom5" class="form-check-input" type="radio" value="2" id="defaultRadio2"
                                    checked>
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>

                            @endswitch
                            <td> {{ $show->note5 }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <li>Saya sepenuhnya diberikan kesempatan untuk mendemontrasikan kompetensi yang saya
                                    miliki selama asesmen</li>
                            </td>
                            @switch($show)
                            @case($show->kom6 == 1)
                            <td style="text-align: center">
                                <input name="kom6" class="form-check-input" type="radio" value="1" id="defaultRadio2"
                                    checked>
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            <td style="text-align: center">
                                <input name="kom6" class="form-check-input" type="radio" value="2" id="defaultRadio2">
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            @break
                            @default
                            <td style="text-align: center">
                                <input name="kom6" class="form-check-input" type="radio" value="1" id="defaultRadio2">
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            <td style="text-align: center">
                                <input name="kom6" class="form-check-input" type="radio" value="2" id="defaultRadio2"
                                    checked>
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>

                            @endswitch
                            <td> {{ $show->note6 }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <li>Saya mendapatkan penjelasan yang memadai mengenai keputusan asesmen</li>
                            </td>
                            @switch($show)
                            @case($show->kom7 == 1)
                            <td style="text-align: center">
                                <input name="kom7" class="form-check-input" type="radio" value="1" id="defaultRadio2"
                                    checked>
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            <td style="text-align: center">
                                <input name="kom7" class="form-check-input" type="radio" value="2" id="defaultRadio2">
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            @break
                            @default
                            <td style="text-align: center">
                                <input name="kom7" class="form-check-input" type="radio" value="1" id="defaultRadio2">
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            <td style="text-align: center">
                                <input name="kom7" class="form-check-input" type="radio" value="2" id="defaultRadio2"
                                    checked>
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>

                            @endswitch
                            <td> {{ $show->note7 }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <li>Asesor memberikan umpan balik yang mendukung setelah asesmen serta tindak
                                    lanjutnya
                                </li>
                            </td>
                            @switch($show)
                            @case($show->kom8 == 1)
                            <td style="text-align: center">
                                <input name="kom8" class="form-check-input" type="radio" value="1" id="defaultRadio2"
                                    checked>
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            <td style="text-align: center">
                                <input name="kom8" class="form-check-input" type="radio" value="2" id="defaultRadio2">
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            @break
                            @default
                            <td style="text-align: center">
                                <input name="kom8" class="form-check-input" type="radio" value="1" id="defaultRadio2">
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            <td style="text-align: center">
                                <input name="kom8" class="form-check-input" type="radio" value="2" id="defaultRadio2"
                                    checked>
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>

                            @endswitch
                            <td> {{ $show->note8 }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <li>Asesor menggunakan keterampilan komunikasi yang efektif selama asesmen</li>
                            </td>
                            @switch($show)
                            @case($show->kom9 == 1)
                            <td style="text-align: center">
                                <input name="kom9" class="form-check-input" type="radio" value="1" id="defaultRadio2"
                                    checked>
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            <td style="text-align: center">
                                <input name="kom9" class="form-check-input" type="radio" value="2" id="defaultRadio2">
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            @break
                            @default
                            <td style="text-align: center">
                                <input name="kom9" class="form-check-input" type="radio" value="1" id="defaultRadio2">
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            <td style="text-align: center">
                                <input name="kom9" class="form-check-input" type="radio" value="2" id="defaultRadio2"
                                    checked>
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>

                            @endswitch
                            <td> {{ $show->note9 }}
                            </td>
                        </tr>
                        <tr>
                            <td>

                                <li>Asesor bersama saya mendatangani semua dokumen hasil asesmen</li>
                            </td>
                            @switch($show)
                            @case($show->kom10 == 1)
                            <td style="text-align: center">
                                <input name="kom10" class="form-check-input" type="radio" value="1" id="defaultRadio2"
                                    checked>
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            <td style="text-align: center">
                                <input name="kom10" class="form-check-input" type="radio" value="2" id="defaultRadio2">
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            @break
                            @default
                            <td style="text-align: center">
                                <input name="kom10" class="form-check-input" type="radio" value="1" id="defaultRadio2">
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            <td style="text-align: center">
                                <input name="kom10" class="form-check-input" type="radio" value="2" id="defaultRadio2"
                                    checked>
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>

                            @endswitch
                            <td> {{ $show->note10 }}
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                Catatan/komentar lainnya(Apabila ada):
                                <p> {{ $show->catatan }}
                                </p>
                            </td>

                        </tr>
                    </tbody>
                </table>

            </div>
            <input type="hidden" name="status" value="1">
            <div class="col-12 d-flex justify-content-end mt-3">
                <a href="{{ route('fr_ak_03.index') }}" class="btn btn-primary btn-submit" type="submit">Back</a>
            </div>
        </div>
    </div>
</div>

@endsection