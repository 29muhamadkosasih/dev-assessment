@extends('layouts.master')
@section('title', 'FK AK-05')
@section('content')
<div class="col-12">
    <div class="card">
        @foreach ($datas as $show)
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="250px" rowspan="2" style="vertical-align: top;padding-top:28px">Skema
                                Sertifikasi
                                Okupasi Nasional</th>
                            <th width="200px">Judul</th>
                            <th width="10px">:</th>
                            <th colspan="4"><b>{{ $show->kompetensiLaporan->skema->nama_skema
                                    }}</b>
                            </th>
                        </tr>
                        <tr>
                            <th>Nomor</th>
                            <th>:</th>
                            <th colspan="4"> <b>{{ $show->kompetensiLaporan->skema->no }}</b>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="2">TUK</td>
                            <td>:</td>
                            <td colspan="4" style="text-align: left">
                                <label class="form-check-label" for="defaultCheck1"> {{ $show->tuk }} </label>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-12 d-flex justify-content-end mt-3">
                <a href="{{ route('fr_ak_05.show', $show->id) }}" class="btn btn-primary btn-submit">Laporan Asesmen</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection