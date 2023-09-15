@extends('layouts/master')
@section('title', 'APL 02')
@section('content')
@foreach ($datas as $item)
<div class="col-12">
    <div class="card">
        <div class="card-body">
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
            <div class="col-12 d-flex justify-content-end mt-4">
                <a href="{{ route('apl_02.show', $item->id) }}" class="btn  btn-primary ">
                    Mulai
                </a>
            </div>

        </div>
    </div>
</div>
@endforeach
@endsection
