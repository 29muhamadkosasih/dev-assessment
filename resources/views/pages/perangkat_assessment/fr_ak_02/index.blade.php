@extends('layouts/master')
@section('title', 'FK AK-02')
@section('content')
<div class="col-xl-6 offset-2 mb-3">
    <div class="card mb">
        <form action="{{ route('fr_ak_02.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="tab-content">
                <div class="tab-pane fade active show" id="form-tabs-account" role="tabpanel">

                    <label class="form-label" for="plFirstName">APL 02</label>
                    <select class="form-select @error('answer_apl02_id') is-invalid @enderror" id="selectDefault"
                        name="answer_apl02_id" value="{{ old('answer_apl02_id') }}">
                        @foreach ($apl_02 as $key => $value)
                        <option value="{{ $value->id }}">
                            {{ $value->apl02->personal_detail->no_pendaftaran}} -
                            {{ $value->apl02->personal_detail->nama_lengkap->name}} -
                            {{ $value->apl02->kompetensi02->kompetensi->skema->nama_skema}}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12 d-flex justify-content-end mt-4">
                    <button class="btn btn-primary btn-submit">Submit</button>
                </div>
            </div>
    </div>
</div>
<div class="col-xl-12">
    <div class="card">
        <div class="card-body">
            <div class="row ">
                <div class="col-auto me-auto ">
                    <h5 class="mb-0">FK.AK-02. Formulir Rekaman Asesmen Kompetensi</h5>
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
                        @foreach ($Asm as $data)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}</td>
                            <td>{{$data->rekAsm->apl02->personal_detail->no_pendaftaran}}</td>
                            <td> {{ \Carbon\Carbon::parse($data->created_at)->format('d-m-Y') }}</td>
                            <td>{{$data->rekAsm->apl02->personal_detail->nama_lengkap->name}}</td>
                            <td>{{$data->rekAsm->apl02->kompetensi02->kompetensi->skema->nama_skema}}</td>
                            <td>
                                {{ $data->rekAsm->nama_asesor_lsp }}
                            </td>
                            <td>
                                {{
                                \Carbon\Carbon::parse($data->rekAsm->tanggal_validasi)->format('d-m-Y')
                                }}
                            </td>
                            <td class="text-center">
                                <a href="{{ url('fr_ak_02/cetak_pdf',$data->id) }}"
                                    class="btn btn-icon btn-primary btn-sm" target="_blank" data-bs-toggle="tooltip"
                                    data-bs-placement="top" data-bs-original-title="rekAsm"
                                    aria-describedby="tooltip358783">
                                    <span class="ti ti-download"></span>
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
