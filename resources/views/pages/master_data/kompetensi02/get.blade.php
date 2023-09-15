@extends('layouts/master')

@section('title', 'apl_01')

@section('content')
@foreach ($datas as $item)
<div class="col-xl-12 col-md-12 col-12">
    <div class="card">
        <div class="card-body">
            <table class="mb-2">
                <tbody>
                    <tr>
                        <td class="pe-5">Nama Skema</td>
                        <td>: &nbsp; <b>{{$item->kompetensi->skema->nama_skema}}</b> </td>
                    </tr>
                    <tr>
                        <td class="pe-10">No. Skema</td>
                        <td>: &nbsp; {{ $item->kompetensi->skema->no }}</td>
                    </tr>
                    <tr>
                        <td class="pe-10 ">No. SKKNI</td>
                        <td class="mt-2">: &nbsp;{{ $item->kompetensi->no_skkni }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="col-12 d-flex justify-content-end mt-4">
                <a href="{{ route('kompetensi02.edit_sub', $item->id) }}" class="btn  btn-primary ">
                    Edit
                </a>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
