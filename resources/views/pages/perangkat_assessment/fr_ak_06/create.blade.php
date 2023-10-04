@extends('layouts/master')

@section('title', 'FK AK-06')

@section('content')
<!-- Invoice table -->
<div class="col-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">FK.AK-06. MENINJAU PROSES ASESMEN</h5>
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
                            <td colspan="4" style="text-align: center">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1"> Sewaktu </label> &nbsp; &nbsp;
                                &nbsp; &nbsp;

                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1"> Tempat Kerja </label> &nbsp; &nbsp;
                                &nbsp; &nbsp;

                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1"> &nbsp;
                                &nbsp; &nbsp; &nbsp;
                                <label class="form-check-label" for="defaultCheck1"> Mandiri </label>

                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">Unit Kompetensi</td>
                            <td>:</td>
                            <td colspan="4">

                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod reprehenderit
                                consequuntur amet eligendi necessitatibus, ea facilis nesciunt dolorum iste modi
                                quisquam hic illum, cupiditate corrupti nobis, voluptate magnam eaque aliquid neque?
                                Cupiditate, ducimus explicabo omnis a modi deserunt enim. Incidunt eveniet delectus
                                doloremque, possimus accusamus at culpa eligendi ipsam reprehenderit laboriosam libero?
                                Architecto itaque officia nesciunt alias a incidunt quaerat. Molestiae, nemo magnam
                                nihil repudiandae cupiditate exercitationem aperiam eveniet maxime rerum dolor
                                similique. Perferendis, vero? Animi magni assumenda, ullam aut id voluptatum saepe qui
                                quis impedit consequatur hic odio cumque incidunt consequuntur praesentium? Quis quos
                                quidem doloribus aspernatur praesentium. Repellat.

                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">Nama Asesor</td>
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
                            <th width="5px" class="text-center">No</th>
                            <th width="400px" class="text-center">Nama Asesi</th>
                            <th width="100px" class="text-center">K</th>
                            <th width="100px" class="text-center">bK</th>
                            <th width="300px" class="text-center">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </thead>
                </table>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-hover mt-4">
                    <thead>
                        <tr>
                            <th width="300px" class="text-center">Aspek Negatif dan Positif dalam asesmen</th>
                            <th width="300px" class="text-center">Pencatatan Penolakan Hasil Asesmen </th>
                            <th width="300px" class="text-center">Saran Perbaikan : <br> (Asesor/Personil Terkait)</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </thead>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection