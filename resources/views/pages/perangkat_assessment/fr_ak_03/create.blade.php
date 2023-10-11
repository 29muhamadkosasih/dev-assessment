@extends('layouts/master')

@section('title', 'FK AK-01')

@section('content')
<!-- Invoice table -->
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
                            <th colspan="2"></th>
                        </tr>
                        <tr>
                            <th>No</th>
                            <th>:</th>
                            <th colspan="2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="2">TUK</td>
                            <td>:</td>
                            <td colspan="2"></td>
                        </tr>
                        <tr>
                            <td colspan="2">Nama Asesi</td>
                            <td>:</td>
                            <td colspan="2"></td>
                        </tr>
                        <tr>
                            <td colspan="2">Nama Asesor</td>
                            <td>:</td>
                            <td colspan="2"></td>
                        </tr>
                        <tr>
                            <td colspan="2">Tanggal </td>
                            <td>:</td>
                            <td></td>
                            <td>Waktu</td>
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
                            <td style="text-align: center">
                                <input name="answer_2" class="form-check-input" type="radio" value="1"
                                    id="defaultRadio2">
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            <td style="text-align: center">
                                <input name="answer_2" class="form-check-input" type="radio" value="1"
                                    id="defaultRadio2">
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            <td> <textarea name="" class="form-control" id="" cols="0" rows="2"></textarea></td>
                        </tr>
                        <tr>
                            <td>
                                <li>Saya diberikan kesempatan untuk mempelajari standar kompetensi yang akan diujikan
                                    dan menilai diri sendiri terhadap pencapaiannya
                            </td>
                            <td style="text-align: center">
                                <input name="answer_2" class="form-check-input" type="radio" value="1"
                                    id="defaultRadio2">
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            <td style="text-align: center">
                                <input name="answer_2" class="form-check-input" type="radio" value="1"
                                    id="defaultRadio2">
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            <td> <textarea name="" class="form-control" id="" cols="0" rows="2"></textarea></td>
                        </tr>
                        <tr>
                            <td>
                                <li>Asesor memberikan kesempatan untuk mendiskusikan/menegosiasikan metoda, instrumen
                                    dan sumber daya asesmen serta jadwal asesmen</li>
                            </td>
                            <td style="text-align: center">
                                <input name="answer_2" class="form-check-input" type="radio" value="1"
                                    id="defaultRadio2">
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            <td style="text-align: center">
                                <input name="answer_2" class="form-check-input" type="radio" value="1"
                                    id="defaultRadio2">
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            <td> <textarea name="" class="form-control" id="" cols="0" rows="2"></textarea></td>
                        </tr>
                        <tr>
                            <td>
                                <li>Asesor berusaha menggali seluruh bukti pendukung yang yang sesuai dengan latar
                                    belakang pelatihan dan pengalaman yang saya miliki</li>
                            </td>
                            <td style="text-align: center">
                                <input name="answer_2" class="form-check-input" type="radio" value="1"
                                    id="defaultRadio2">
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            <td style="text-align: center">
                                <input name="answer_2" class="form-check-input" type="radio" value="1"
                                    id="defaultRadio2">
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            <td> <textarea name="" class="form-control" id="" cols="0" rows="2"></textarea></td>
                        </tr>
                        <tr>
                            <td>
                                <li>Saya mendapat jaminan kerahasiaan hasil asesmen serta penjelasan penanganan dokumen
                                    asesmen</li>
                            </td>
                            <td style="text-align: center">
                                <input name="answer_2" class="form-check-input" type="radio" value="1"
                                    id="defaultRadio2">
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            <td style="text-align: center">
                                <input name="answer_2" class="form-check-input" type="radio" value="1"
                                    id="defaultRadio2">
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            <td> <textarea name="" class="form-control" id="" cols="0" rows="2"></textarea></td>
                        </tr>
                        <tr>
                            <td>
                                <li>Saya sepenuhnya diberikan kesempatan untuk mendemontrasikan kompetensi yang saya
                                    miliki selama asesmen</li>
                            </td>
                            <td style="text-align: center">
                                <input name="answer_2" class="form-check-input" type="radio" value="1"
                                    id="defaultRadio2">
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            <td style="text-align: center">
                                <input name="answer_2" class="form-check-input" type="radio" value="1"
                                    id="defaultRadio2">
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            <td> <textarea name="" class="form-control" id="" cols="0" rows="2"></textarea></td>
                        </tr>
                        <tr>
                            <td>
                                <li>Saya mendapatkan penjelasan yang memadai mengenai keputusan asesmen</li>
                            </td>
                            <td style="text-align: center">
                                <input name="answer_2" class="form-check-input" type="radio" value="1"
                                    id="defaultRadio2">
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            <td style="text-align: center">
                                <input name="answer_2" class="form-check-input" type="radio" value="1"
                                    id="defaultRadio2">
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            <td> <textarea name="" class="form-control" id="" cols="0" rows="2"></textarea></td>
                        </tr>
                        <tr>
                            <td>
                                <li>Asesor memberikan umpan balik yang mendukung setelah asesmen serta tindak lanjutnya
                                </li>
                            </td>
                            <td style="text-align: center">
                                <input name="answer_2" class="form-check-input" type="radio" value="1"
                                    id="defaultRadio2">
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            <td style="text-align: center">
                                <input name="answer_2" class="form-check-input" type="radio" value="1"
                                    id="defaultRadio2">
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            <td> <textarea name="" class="form-control" id="" cols="0" rows="2"></textarea></td>
                        </tr>
                        <tr>
                            <td>
                                <li>Asesor menggunakan keterampilan komunikasi yang efektif selama asesmen</li>
                            </td>
                            <td style="text-align: center">
                                <input name="answer_2" class="form-check-input" type="radio" value="1"
                                    id="defaultRadio2">
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            <td style="text-align: center">
                                <input name="answer_2" class="form-check-input" type="radio" value="1"
                                    id="defaultRadio2">
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            <td> <textarea name="" class="form-control" id="" cols="0" rows="2"></textarea></td>
                        </tr>
                        <tr>
                            <td>

                                <li>Asesor bersama saya mendatangani semua dokumen hasil asesmen</li>
                            </td>
                            <td style="text-align: center">
                                <input name="answer_2" class="form-check-input" type="radio" value="1"
                                    id="defaultRadio2">
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            <td style="text-align: center">
                                <input name="answer_2" class="form-check-input" type="radio" value="1"
                                    id="defaultRadio2">
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            <td> <textarea name="" class="form-control" id="" cols="0" rows="2"></textarea></td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                Catatan/komentar lainnya(Apabila ada):
                                <textarea name="" class="form-control" id="" cols="30" rows="2"></textarea>
                            </td>

                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>


@endsection