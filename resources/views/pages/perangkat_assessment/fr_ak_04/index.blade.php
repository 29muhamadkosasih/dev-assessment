@extends('layouts/master')
@section('title', 'FK AK-04')
@section('content')
<div class="col-xl-12">
    <div class="card">
        <div class="card-body">
            <div class="row ">
                <div class="col-auto me-auto ">
                    <h5 class="mb-0">FK.AK-04. Banding ASESMEN</h5>
                </div>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered table-hover dataex-fixh-responsive">
                    <thead>
                        <tr style="background-color: skyblue">
                            <th width='10px' style="text-align: center">No</th>
                            <th>No Pendaftaran </th>
                            <th>Tanggal Daftar</th>
                            <th>Nama Assessi</th>
                            <th>Nama Skema</th>
                            <th>Validasi Asesor LSP</th>
                            <th>Tanggal Validasi</th>
                            <th width='150px' class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($apl_02 as $data)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}</td>
                            <td>{{$data->apl02->personal_detail->no_pendaftaran}}</td>
                            <td> {{ \Carbon\Carbon::parse($data->created_at)->format('d-m-Y') }}</td>
                            <td>{{$data->apl02->personal_detail->nama_lengkap->name}}</td>
                            <td>{{$data->apl02->kompetensi02->kompetensi->skema->nama_skema}}</td>
                            <td>
                                {{ $data->nama_asesor_lsp }}

                            </td>
                            <td>
                                {{
                                \Carbon\Carbon::parse($data->tanggal_validasi)->format('d-m-Y')
                                }}
                            </td>

                            <td class="text-center">
                                <a href="{{ route('fr_ak_04.show',$data->id) }}" class="btn btn-icon btn-primary btn-sm"
                                    target="_blank" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-original-title="Banding" aria-describedby="tooltip358783">
                                    <span class="ti ti-pencil-plus"></span>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
