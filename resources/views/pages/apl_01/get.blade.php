@extends('layouts/master')
@section('title', 'APL 01')
@section('content')
@foreach ($datas as $item)
<div class="col-xl-12 col-md-12 col-12">
    <div class="card invoice-preview-card">
        <div class="card-body">
            <div class="d-flex justify-content-between flex-xl-row flex-md-column flex-sm-row flex-column m-sm-3 m-0">
                <div class="mb-xl-0 mb-2">
                    <div class="d-flex svg-illustration mb-4 gap-2 align-items-center">
                        <img src="{{ asset('https://sisfo.bnsp.go.id/images/K8cRm4d6SGTrLQXefW3ON0JsIYM5ioPH.png') }}"
                            width="80" />
                    </div>
                </div>
                <div>
                    <h4 class="fw-semibold mb-2">Pendaftaran #{{ $item->no_pendaftaran }}</h4>
                    <div class="mb-2 pt-1">
                        <span>Tanggal Pendaftaran</span>
                        <span class="fw-semibold">: &nbsp; {{ \Carbon\Carbon::parse($item->created_at)->format('d M
                            Y')
                            }}</span>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-0">
        <div class="card-body">
            <div class="row p-sm-3 p-0">
                <div class="col-xl-6 col-md-12 col-sm-5 col-12 mb-xl-0 mb-md-4 mb-sm-0 mb-4">
                    <h6 class="mb-4">Data Pribadi</h6>
                    <table>
                        <tbody>
                            <tr>
                                <td class="pe-4">Nama Lengkap</td>
                                <td>{{ $item->nama_lengkap->name }}</td>
                            </tr>
                            <tr>
                                <td class="pe-4">Tempat/Tanggal Lahir</td>
                                <td>{{ $item->tempat_lahir }},
                                    {{\Carbon\Carbon::parse($item->tanggal_lahir)->format('d M Y')}} </td>
                            </tr>
                            <tr>
                                <td class="pe-4">Jenis Kelamin</td>
                                <td>{{ $item->jenis_kelamin }}</td>
                            </tr>
                            <tr>
                                <td class="pe-4">Kebangsaan</td>
                                <td>{{ $item->kebangsaan }}</td>
                            </tr>
                            <tr>
                                <td class="pe-4">Alamat</td>
                                <td>{{$item->alamat}}</td>
                            </tr>
                            <tr>
                                <td class="pe-4">No. Telefon</td>
                                <td>{{ $item->no_hp }}</td>
                            </tr>
                            <tr>
                                <td class="pe-4">Email</td>
                                <td>{{ $item->email->email }}</td>
                            </tr>
                            <tr>
                                <td class="pe-4">Pendidikan Terakhir</td>
                                <td>{{ $item->pendidikan_terakhir }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xl-6 col-md-12 col-sm-7 col-12">
                    <h6 class="mb-4">Data Pekerjaan Sekarang</h6>
                    <table>
                        <tbody>
                            <tr>
                                <td class="pe-4">Nama Perusahaan</td>
                                <td>{{ $item->nama_perusahaan }}</td>
                            </tr>
                            <tr>
                                <td class="pe-4">Jabatan</td>
                                <td>{{ $item->jabatan }}</td>
                            </tr>
                            <tr>
                                <td class="pe-4">Alamat</td>
                                <td>{{ $item->alamat_perusahaan }}</td>
                            </tr>
                            <tr>
                                <td class="pe-4">No. Telefon</td>
                                <td>{{ $item->no_hp_perusahaan }}</td>
                            </tr>
                            <tr>
                                <td class="pe-4">Email</td>
                                <td>{{ $item->email_perusahaan }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
