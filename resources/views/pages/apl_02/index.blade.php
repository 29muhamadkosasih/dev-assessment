@extends('layouts/master')
@section('title', 'APL 02')
@section('content')
<div class="col">
    <div class="card mb">
        <form action="{{ route('apl_02.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="tab-content">
                <div class="tab-pane fade active show" id="form-tabs-account" role="tabpanel">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label class="form-label" for="plFirstName">APL 01</label>
                            <select class="form-select @error('apl01_id') is-invalid @enderror" id="selectDefault"
                                name="apl01_id" value="{{ old('apl01_id') }}">
                                <option selected>Open this select</option>
                                @foreach ($apl01 as $key => $value)
                                <option value="{{ $value->id }}">
                                    {{ $value->no_pendaftaran }} - {{ $value->nama_lengkap->name }} - {{
                                    $value->kompetensi->skema->nama_skema }}
                                </option>
                                @endforeach
                            </select>
                            @error('apl01_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="plFirstName">Kompetensi APL 02</label>
                            <select class="form-select @error('kompetensi02_id') is-invalid @enderror"
                                id="selectDefault" name="kompetensi02_id" value="{{ old('kompetensi02_id') }}">
                                <option selected>Open this select</option>
                                @foreach ($kompetensi as $key => $value)
                                <option value="{{ $value->id }}">
                                    {{ $value->kompetensi->skema->nama_skema }}
                                </option>
                                @endforeach
                            </select>
                            @error('kompetensi02_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                {{-- @if ($formattedDateTime < '14:25' ) --}} <div class="col-12 d-flex justify-content-end mt-4">
                    <button class="btn btn-primary btn-submit">Submit</button>
            </div>
            {{-- @endif --}}
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 mt-3">
    <div class="card">
        <div class="card-body">
            <div class="row ">
                <div class="col-auto me-auto ">
                    <h5 class="mb-0">List Data </h5>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-hover zero-configuration">
                    <thead>
                        <tr style="background-color: skyblue">
                            <th width='10px'>No</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Kompetensi</th>
                            <th width='150px' class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($answer as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->apl02->personal_detail->nama_lengkap->name }}</td>
                            <td>{{ $data->apl02->kompetensi02->kompetensi->skema->nama_skema }}</td>
                            <td style="text-align: center">
                                <a href="{{ url('apl_02/cetak_pdf', $data->id) }}" target="_blank"
                                    class="btn btn-icon btn-primary btn-sm" data-bs-toggle="tooltip"
                                    data-bs-placement="top" data-bs-original-title="Download"
                                    aria-describedby="tooltip358783">
                                    <span class="ti ti-download"></span>
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" style="text-align: center">
                                tidak ada data
                            </td>
                        </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
