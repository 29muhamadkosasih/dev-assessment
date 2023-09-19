@extends('layouts/master')

@section('title', 'FK AK-04')

@section('content')
<!-- Invoice table -->
<div class="col-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">FK.AK-04. Banding Assessment</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="250px" rowspan="2" style="vertical-align: top;padding-top:28px">Skema Sertifikasi
                                Okupasi Nasional</th>
                            <th width="200px">Judul</th>
                            <th width="10px">:</th>
                            <th colspan="4"></th>
                        </tr>
                        <tr>
                            <th>Nomor</th>
                            <th>:</th>
                            <th colspan="4"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="2">TUK</td>
                            <td>:</td>
                            <td colspan="4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1"> Sewaktu </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1"> Tempat Kerja </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1"> Mandiri </label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">Nama Asesor</td>
                            <td>:</td>
                            <td colspan="4"></td>
                        </tr>
                        <tr>
                            <td colspan="2">nama Asesi</td>
                            <td>:</td>
                            <td colspan="4"></td>
                        </tr>
                        <tr>
                            <td colspan="2">Tanggal</td>
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
                            <td width="900px"> <b>Jawablah dengan ya atau tidak pertanyaan pertanyaan berikut ini</b>
                            </td>
                            <th width="100px" style="text-align: center">Ya</th>
                            <th width="100px" style="text-align: center">Tidak</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Apakah proses banding telah dijelaskan kepada anda?</td>
                            <td style="text-align: center">
                                <input name="default-radio-1" class="form-check-input" type="radio" value=""
                                    id="defaultRadio1">
                                <label class="form-check-label" for="defaultRadio1"></label>
                            </td>
                            <td style="text-align: center">
                                <input name="default-radio-1" class="form-check-input" type="radio" value=""
                                    id="defaultRadio1">
                                <label class="form-check-label" for="defaultRadio1"></label>
                            </td>
                        </tr>
                        <tr>
                            <td>Apakah anda telah mendiskusikan banding dengan asesor?</td>
                            <td style="text-align: center">
                                <input name="default-radio-2" class="form-check-input" type="radio" value=""
                                    id="defaultRadio2">
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                            <td style="text-align: center">
                                <input name="default-radio-2" class="form-check-input" type="radio" value=""
                                    id="defaultRadio2">
                                <label class="form-check-labe2" for="defaultRadio2"></label>
                            </td>
                        </tr>
                        <tr>
                            <td>Apakah anda mau melibatkan "orang lain " membantu anda dalam proses banding?</td>
                            <td style="text-align: center">
                                <input name="default-radio-3" class="form-check-input" type="radio" value=""
                                    id="defaultRadio3">
                                <label class="form-check-label" for="defaultRadio3"></label>
                            </td>
                            <td style="text-align: center">
                                <input name="default-radio-3" class="form-check-input" type="radio" value=""
                                    id="defaultRadio3">
                                <label class="form-check-label" for="defaultRadio3"></label>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <td>Banding ini diajukan atas keputusan assessment yang dibuat terhadap skema
                                sertifikasi
                                okupasi nasional berikut :
                                <br>Skema :<br>No. Skema ;
                            </td>
                        </tr>
                    </thead>
                </table>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <td>Banding ini diajukan atas alasan sebagai berikut :<br><br><br><br></td>
                        </tr>
                    </thead>
                </table>

                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <td>Anda mempunyai hak mengajukan banding jika anda menilai proses assessment tidak
                                sesuai
                                SOP dan tidak memenuhi prinsip assessment. <br><br><br><br></td>
                        </tr>
                    </thead>
                </table>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th height="100px" colspan="2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td width="10px">Tanda tangan&nbsp;&nbsp;asesi : <br>
                                <p>ini ttd asesor</p>
                            </td>
                            <td width="10px">Tanggal : <br>

                                <p>ini ttd asesor</p>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection