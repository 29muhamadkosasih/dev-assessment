@extends('layouts/master')
@section('title', 'APL 01')
@section('content')

<div class="col-xl-12">
    <div class="row">
        @foreach ($apl_01 as $data)
        <div class="col-md-6">
            <div class="card mb-4">
                <h5 class="card-header">Current Plan</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-6 order-1 order-xl-0">
                            <div class="mb-2">
                                <h6 class="mb-1">Your Current Plan is Basic</h6>
                                <p>A simple start for everyone</p>
                            </div>
                            <div class="mb-2 pt-1">
                                <h6 class="mb-1">Active until Dec 09, 2021</h6>
                                <p>We will send you a notification upon Subscription expiration</p>
                            </div>
                            <div class="mb-3 pt-1">
                                <h6 class="mb-1">
                                    <span class="me-2">$199 Per Month</span>
                                    <span class="badge bg-label-primary">Popular</span>
                                </h6>
                                <p>Standard plan for small to medium businesses</p>
                            </div>
                        </div>
                        <div class="col-xl-6 order-0 order-xl-0">
                            <div class="alert alert-warning" role="alert">
                                <h5 class="alert-heading mb-2">We need your attention!</h5>
                                <span>Your plan requires update</span>
                            </div>
                            <div class="plan-statistics">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-1">Days</h6>
                                    <h6 class="mb-1">24 of 30 Days</h6>
                                </div>
                                <div class="progress mb-1">
                                    <div class="progress-bar w-75" role="progressbar" aria-valuenow="75"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p>6 days remaining until your plan requires update</p>
                            </div>
                        </div>
                        <div class="col-12 order-2 order-xl-0">
                            <button class="btn btn-primary me-2" data-bs-toggle="modal"
                                data-bs-target="#upgradePlanModal">
                                Upgrade Plan
                            </button>
                            <button class="btn btn-label-danger cancel-subscription">Cancel Subscription</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
{{ $apl_01->links() }}
{{-- <div class="col-xl-12">
    <div class="card">
        <div class="card-body">
            <div class="row ">
                <div class="col-auto me-auto ">
                    <h5 class="mb-0">List Data APL 01</h5>
                </div>
                <div class="col-auto">
                    <a href="{{ route('apl_01.create') }}" class="btn btn-primary">Create</a>
                </div>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered table-hover zero-configuration">
                    <thead>
                        <tr style="background-color: skyblue">
                            <th width='10px' style="text-align: center">No</th>
                            <th>No Pendaftaran </th>
                            <th>Tanggal Daftar</th>
                            <th>Nama Assessi</th>
                            <th>Nama Skema</th>
                            <th>Data Personal</th>
                            <th>Portfolio</th>
                            <th>Validasi Admin LSP</th>
                            <th>Tanggal Validasi</th>
                            <th width='150px' class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($apl_01 as $data)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}</td>
                            <td>{{$data->no_pendaftaran}}</td>
                            <td>{{$data->created_at}}</td>
                            <td>{{$data->nama_lengkap->name}}</td>
                            <td>{{$data->kompetensi->skema->nama_skema}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="text-center">
                                <a href="{{ route('apl_01.show', $data->id) }}" class="btn btn-icon btn-info btn-sm">
                                    <span class="ti ti-download"></span>
                                </a>
                                <a href="{{ route('apl_01.show', $data->id) }}" class="btn btn-icon btn-success btn-sm">
                                    <span class="ti ti-eye"></span>
                                </a>
                                <a href="{{ route('apl_01.edit', $data->id) }}" class="btn btn-icon btn-warning btn-sm">
                                    <span class="ti ti-edit"></span>
                                </a>
                                <form action="{{ route('apl_01.destroy', $data->id) }}" class="d-inline-block"
                                    method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure?')"
                                        class="btn btn-icon btn-danger btn-sm">
                                        <span class="ti ti-trash"></span>
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
</div> --}}
@endsection