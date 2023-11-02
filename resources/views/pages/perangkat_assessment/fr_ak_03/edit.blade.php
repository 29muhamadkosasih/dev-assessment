@extends('layouts/master')

@section('title', 'FK AK-03')

@section('content')
<form action="{{ route('fr_ak_03.update_data', $edit->id) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
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
                                <th colspan="2"><b>{{
                                        $edit->feedback->apl02->kompetensi02->kompetensi->skema->nama_skema
                                        }}</b>
                                </th>
                            </tr>
                            <tr>
                                <th>No</th>
                                <th>:</th>
                                <th colspan="2"><b>{{ $edit->feedback->apl02->kompetensi02->kompetensi->skema->no }}</b>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="2">TUK</td>
                                <td>:</td>
                                <td colspan="2">{{ $edit->feedback->tuk }}</td>
                            </tr>
                            <tr>
                                <td colspan="2">Nama Asesi</td>
                                <td>:</td>
                                <td colspan="2">{{$edit->feedback->apl02->personal_detail->nama_lengkap->name}}</td>
                            </tr>
                            <tr>
                                <td colspan="2">Nama Asesor</td>
                                <td>:</td>
                                <td colspan="2">{{ $edit->feedback->nama_asesor_lsp }}</td>
                            </tr>
                            <tr>
                                <td colspan="2">Tanggal </td>
                                <td>:</td>
                                <td> <input type="date" name="tanggal" class="form-control" value="{{ $edit->tanggal }}"
                                        id=""></td>
                                <td>Waktu <input type="time" name="waktu" value="{{ $edit->waktu }}"
                                        class="form-control"> </td>
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
                                @switch($edit)
                                @case($edit->kom == 1)
                                <td style="text-align: center">
                                    <input name="kom" class="form-check-input" type="radio" value="1" id="defaultRadio2"
                                        checked>
                                    <label class="form-check-labe2" for="defaultRadio2"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="kom" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio2">
                                    <label class="form-check-labe2" for="defaultRadio2"></label>
                                </td>
                                @break
                                @default
                                <td style="text-align: center">
                                    <input name="kom" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio2">
                                    <label class="form-check-labe2" for="defaultRadio2"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="kom" class="form-check-input" type="radio" value="2" id="defaultRadio2"
                                        checked>
                                    <label class="form-check-labe2" for="defaultRadio2"></label>
                                </td>

                                @endswitch

                                <td> <textarea name="note" class="form-control" id="" cols="0"
                                        rows="2">{{ $edit->note }}</textarea></td>
                            </tr>
                            <tr>
                                <td>
                                    <li>Saya diberikan kesempatan untuk mempelajari standar kompetensi yang akan
                                        diujikan
                                        dan menilai diri sendiri terhadap pencapaiannya
                                </td>
                                @switch($edit)
                                @case($edit->kom2 == 1)
                                <td style="text-align: center">
                                    <input name="kom2" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio2" checked>
                                    <label class="form-check-labe2" for="defaultRadio2"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="kom2" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio2">
                                    <label class="form-check-labe2" for="defaultRadio2"></label>
                                </td>
                                @break
                                @default
                                <td style="text-align: center">
                                    <input name="kom2" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio2">
                                    <label class="form-check-labe2" for="defaultRadio2"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="kom2" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio2" checked>
                                    <label class="form-check-labe2" for="defaultRadio2"></label>
                                </td>

                                @endswitch
                                <td> <textarea name="note2" class="form-control" id="" cols="0"
                                        rows="2">{{ $edit->note2 }}</textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <li>Asesor memberikan kesempatan untuk mendiskusikan/menegosiasikan metoda,
                                        instrumen
                                        dan sumber daya asesmen serta jadwal asesmen</li>
                                </td>
                                @switch($edit)
                                @case($edit->kom3 == 1)
                                <td style="text-align: center">
                                    <input name="kom3" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio2" checked>
                                    <label class="form-check-labe2" for="defaultRadio2"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="kom3" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio2">
                                    <label class="form-check-labe2" for="defaultRadio2"></label>
                                </td>
                                @break
                                @default
                                <td style="text-align: center">
                                    <input name="kom3" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio2">
                                    <label class="form-check-labe2" for="defaultRadio2"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="kom3" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio2" checked>
                                    <label class="form-check-labe2" for="defaultRadio2"></label>
                                </td>

                                @endswitch
                                <td> <textarea name="note3" class="form-control" id="" cols="0"
                                        rows="2">{{ $edit->note3 }}</textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <li>Asesor berusaha menggali seluruh bukti pendukung yang yang sesuai dengan latar
                                        belakang pelatihan dan pengalaman yang saya miliki</li>
                                </td>
                                @switch($edit)
                                @case($edit->kom4 == 1)
                                <td style="text-align: center">
                                    <input name="kom4" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio2" checked>
                                    <label class="form-check-labe2" for="defaultRadio2"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="kom4" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio2">
                                    <label class="form-check-labe2" for="defaultRadio2"></label>
                                </td>
                                @break
                                @default
                                <td style="text-align: center">
                                    <input name="kom4" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio2">
                                    <label class="form-check-labe2" for="defaultRadio2"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="kom4" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio2" checked>
                                    <label class="form-check-labe2" for="defaultRadio2"></label>
                                </td>

                                @endswitch
                                <td> <textarea name="note4" class="form-control" id="" cols="0"
                                        rows="2">{{ $edit->note4 }}</textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <li>Saya mendapat jaminan kerahasiaan hasil asesmen serta penjelasan penanganan
                                        dokumen
                                        asesmen</li>
                                </td>
                                @switch($edit)
                                @case($edit->kom5 == 1)
                                <td style="text-align: center">
                                    <input name="kom5" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio2" checked>
                                    <label class="form-check-labe2" for="defaultRadio2"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="kom5" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio2">
                                    <label class="form-check-labe2" for="defaultRadio2"></label>
                                </td>
                                @break
                                @default
                                <td style="text-align: center">
                                    <input name="kom5" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio2">
                                    <label class="form-check-labe2" for="defaultRadio2"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="kom5" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio2" checked>
                                    <label class="form-check-labe2" for="defaultRadio2"></label>
                                </td>

                                @endswitch
                                <td> <textarea name="note5" class="form-control" id="" cols="0"
                                        rows="2">{{ $edit->note5 }}</textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <li>Saya sepenuhnya diberikan kesempatan untuk mendemontrasikan kompetensi yang saya
                                        miliki selama asesmen</li>
                                </td>
                                @switch($edit)
                                @case($edit->kom6 == 1)
                                <td style="text-align: center">
                                    <input name="kom6" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio2" checked>
                                    <label class="form-check-labe2" for="defaultRadio2"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="kom6" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio2">
                                    <label class="form-check-labe2" for="defaultRadio2"></label>
                                </td>
                                @break
                                @default
                                <td style="text-align: center">
                                    <input name="kom6" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio2">
                                    <label class="form-check-labe2" for="defaultRadio2"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="kom6" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio2" checked>
                                    <label class="form-check-labe2" for="defaultRadio2"></label>
                                </td>

                                @endswitch
                                <td> <textarea name="note6" class="form-control" id="" cols="0"
                                        rows="2">{{ $edit->note6 }}</textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <li>Saya mendapatkan penjelasan yang memadai mengenai keputusan asesmen</li>
                                </td>
                                @switch($edit)
                                @case($edit->kom7 == 1)
                                <td style="text-align: center">
                                    <input name="kom7" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio2" checked>
                                    <label class="form-check-labe2" for="defaultRadio2"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="kom7" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio2">
                                    <label class="form-check-labe2" for="defaultRadio2"></label>
                                </td>
                                @break
                                @default
                                <td style="text-align: center">
                                    <input name="kom7" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio2">
                                    <label class="form-check-labe2" for="defaultRadio2"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="kom7" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio2" checked>
                                    <label class="form-check-labe2" for="defaultRadio2"></label>
                                </td>

                                @endswitch
                                <td> <textarea name="note7" class="form-control" id="" cols="0"
                                        rows="2">{{ $edit->note7 }}</textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <li>Asesor memberikan umpan balik yang mendukung setelah asesmen serta tindak
                                        lanjutnya
                                    </li>
                                </td>
                                @switch($edit)
                                @case($edit->kom8 == 1)
                                <td style="text-align: center">
                                    <input name="kom8" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio2" checked>
                                    <label class="form-check-labe2" for="defaultRadio2"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="kom8" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio2">
                                    <label class="form-check-labe2" for="defaultRadio2"></label>
                                </td>
                                @break
                                @default
                                <td style="text-align: center">
                                    <input name="kom8" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio2">
                                    <label class="form-check-labe2" for="defaultRadio2"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="kom8" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio2" checked>
                                    <label class="form-check-labe2" for="defaultRadio2"></label>
                                </td>

                                @endswitch
                                <td> <textarea name="note8" class="form-control" id="" cols="0"
                                        rows="2">{{ $edit->note8 }}</textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <li>Asesor menggunakan keterampilan komunikasi yang efektif selama asesmen</li>
                                </td>
                                @switch($edit)
                                @case($edit->kom9 == 1)
                                <td style="text-align: center">
                                    <input name="kom9" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio2" checked>
                                    <label class="form-check-labe2" for="defaultRadio2"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="kom9" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio2">
                                    <label class="form-check-labe2" for="defaultRadio2"></label>
                                </td>
                                @break
                                @default
                                <td style="text-align: center">
                                    <input name="kom9" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio2">
                                    <label class="form-check-labe2" for="defaultRadio2"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="kom9" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio2" checked>
                                    <label class="form-check-labe2" for="defaultRadio2"></label>
                                </td>

                                @endswitch
                                <td> <textarea name="note9" class="form-control" id="" cols="0"
                                        rows="2">{{ $edit->note9 }}</textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>

                                    <li>Asesor bersama saya mendatangani semua dokumen hasil asesmen</li>
                                </td>
                                @switch($edit)
                                @case($edit->kom10 == 1)
                                <td style="text-align: center">
                                    <input name="kom10" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio2" checked>
                                    <label class="form-check-labe2" for="defaultRadio2"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="kom10" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio2">
                                    <label class="form-check-labe2" for="defaultRadio2"></label>
                                </td>
                                @break
                                @default
                                <td style="text-align: center">
                                    <input name="kom10" class="form-check-input" type="radio" value="1"
                                        id="defaultRadio2">
                                    <label class="form-check-labe2" for="defaultRadio2"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="kom10" class="form-check-input" type="radio" value="2"
                                        id="defaultRadio2" checked>
                                    <label class="form-check-labe2" for="defaultRadio2"></label>
                                </td>

                                @endswitch
                                <td> <textarea name="note10" class="form-control" id="" cols="0"
                                        rows="2">{{ $edit->note10 }}</textarea>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    Catatan/komentar lainnya(Apabila ada):
                                    <textarea name="catatan" class="form-control" id="" cols="30"
                                        rows="2">{{ $edit->catatan }}</textarea>
                                </td>

                            </tr>
                        </tbody>
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
