@extends('layouts.master')
@section('title', 'FK AK-04')
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
                            <th colspan="4">{{ $show->rahasia->apl02->kompetensi02->kompetensi->skema->nama_skema }}
                            </th>
                        </tr>
                        <tr>
                            <th>Nomor</th>
                            <th>:</th>
                            <th colspan="4"> {{ $show->rahasia->apl02->kompetensi02->kompetensi->skema->no }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="2">TUK</td>
                            <td>:</td>
                            <td colspan="4" style="text-align: left">
                                <label class="form-check-label" for="defaultCheck1"> {{ $show->rahasia->tuk }} </label>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-12 d-flex justify-content-end mt-3">
                <a href="{{ route('fr_ak_01.show', $show->id) }}" class="btn btn-primary btn-submit">Next</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection