@extends('layouts/master')
@section('content')

@section('title', 'Asesor')
<!-- Invoice table -->
<div class="col-xs-4 col-sm-4 col-md-4 mb-4">
    <div class="card">
        <div class="card-body">
            <div class="row ">
                <div class="col-auto me-auto ">
                    @if (isset($edit))
                    <h5 class="mb-0">Edit Data Asesor</h5>
                    @else
                    <h5 class="mb-0">Tambah Data Asesor</h5>
                    @endif
                </div>
                <div class="card-body">
                    @if (isset($edit))
                    @include('pages.master_data.asesor.edit')
                    @else
                    @include('pages.master_data.asesor.create')
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xs-8 col-sm-8 col-md-8">
    <div class="card">
        <div class="card-body">
            <div class="row ">
                <div class="col-auto me-auto ">
                    <h5 class="mb-0">List Data Asesor</h5>
                </div>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered table-hover zero-configuration">
                    <thead>
                        <tr style="background-color: skyblue">
                            <th width='10px'>No</th>
                            <th>No MET</th>
                            <th>Nama</th>
                            <th>Validiti MET</th>
                            <th width='150px' class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($asesor as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->no_met }}</td>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->validiti_met }}</td>
                            <td style="text-align: center">
                                <a href="{{ route('asesor.edit', $data->id) }}" class="btn btn-icon btn-warning btn-sm">
                                    <span class="ti ti-edit"></span>
                                </a>
                                <form action="{{ route('asesor.destroy', $data->id) }}" class="d-inline-block"
                                    method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure?')"
                                        class="btn btn-icon btn-danger btn-sm">
                                        <span class="ti ti-trash "></span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /Invoice table -->
@endsection