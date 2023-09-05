@extends('layouts/master')

@section('title', 'Kompetensi')

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-auto me-auto ">
                </div>
                <div class="col-auto">
                    <a href="{{ route('kompetensi.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </div>
            <table class="mb-2">
                <tbody>
                    <tr>
                        <td class="pe-5">Nama Skema</td>
                        <td>: &nbsp; <b>{{$show->skema->nama_skema}}</b> </td>
                    </tr>
                    <tr>
                        <td class="pe-10">No. Skema</td>
                        <td>: &nbsp; {{ $show->skema->no }}</td>
                    </tr>
                    <tr>
                        <td class="pe-10 ">No. SKKNI</td>
                        <td class="mt-2">: &nbsp;{{ $show->no_skkni }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="table-responsive">
                <table class="table dataex-complex-headers table-bordered table-hover">
                    {{-- dt-scrollableTable --}}
                    <thead>
                        <tr style="background-color: skyblue">
                            <th class="text-center" style="background-color: skyblue">Kode & Kompetensi </th>
                            <th class="text-center">Element Kompetensi</th>
                            <th class="text-center">Kriteria Unjuk Kerja</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0" height="100px">
                        <tr>
                            <td style="vertical-align: top">{{$show->kode}} - {{$show->unit_kompetensi}}</td>
                            <td style="vertical-align: top">{!! $show->element_kompetensi !!}</td>
                            <td style="vertical-align: top">{!! $show->kuk !!}</td>
                        </tr>
                        @switch($show)
                        @case($show->kode2 == NULL)
                        @break
                        @default
                        <tr>
                            <td style="vertical-align: top">{{$show->kode2}}- {{$show->unit_kompetensi2}}</td>
                            <td style="vertical-align: top">{!! $show->element_kompetensi2 !!}</td>
                            <td style="vertical-align: top">{!! $show->kuk2 !!}</td>
                        </tr>
                        @endswitch

                        @switch($show)
                        @case($show->kode3 == NULL)
                        @break
                        @default
                        <tr>
                            <td style="vertical-align: top">{{$show->kode3}}- {{$show->unit_kompetensi3}}</td>
                            <td style="vertical-align: top">{!! $show->element_kompetensi3 !!}</td>
                            <td style="vertical-align: top">{!! $show->kuk3 !!}</td>
                        </tr>
                        @endswitch

                        @switch($show)
                        @case($show->kode4 == NULL)
                        @break
                        @default
                        <tr>
                            <td style="vertical-align: top">{{$show->kode4}}- {{$show->unit_kompetensi4}}</td>
                            <td style="vertical-align: top">{!! $show->element_kompetensi4 !!}</td>
                            <td style="vertical-align: top">{!! $show->kuk4 !!}</td>
                        </tr>
                        @endswitch

                        @switch($show)
                        @case($show->kode5 == NULL)
                        @break
                        @default
                        <tr>
                            <td style="vertical-align: top">{{$show->kode5}}- {{$show->unit_kompetensi5}}</td>
                            <td style="vertical-align: top">{!! $show->element_kompetensi5 !!}</td>
                            <td style="vertical-align: top">{!! $show->kuk5 !!}</td>
                        </tr>
                        @endswitch

                        @switch($show)
                        @case($show->kode6 == NULL)
                        @break
                        @default
                        <tr>
                            <td style="vertical-align: top">{{$show->kode6}}- {{$show->unit_kompetensi6}}</td>
                            <td style="vertical-align: top">{!! $show->element_kompetensi6 !!}</td>
                            <td style="vertical-align: top">{!! $show->kuk6 !!}</td>
                        </tr>
                        @endswitch

                        @switch($show)
                        @case($show->kode7 == NULL)
                        @break
                        @default
                        <tr>
                            <td style="vertical-align: top">{{$show->kode7}}- {{$show->unit_kompetensi7}}</td>
                            <td style="vertical-align: top">{!! $show->element_kompetensi7 !!}</td>
                            <td style="vertical-align: top">{!! $show->kuk7 !!}</td>
                        </tr>
                        @endswitch

                        @switch($show)
                        @case($show->kode8 == NULL)
                        @break
                        @default
                        <tr>
                            <td style="vertical-align: top">{{$show->kode8}}- {{$show->unit_kompetensi8}}</td>
                            <td style="vertical-align: top">{!! $show->element_kompetensi8 !!}</td>
                            <td style="vertical-align: top">{!! $show->kuk8 !!}</td>
                        </tr>
                        @endswitch

                        @switch($show)
                        @case($show->kode9 == NULL)
                        @break
                        @default
                        <tr>
                            <td style="vertical-align: top">{{$show->kode9}}- {{$show->unit_kompetensi9}}</td>
                            <td style="vertical-align: top">{!! $show->element_kompetensi9 !!}</td>
                            <td style="vertical-align: top">{!! $show->kuk9 !!}</td>
                        </tr>
                        @endswitch

                        @switch($show)
                        @case($show->kode10 == NULL)
                        @break
                        @default
                        <tr>
                            <td style="vertical-align: top">{{$show->kode10}}- {{$show->unit_kompetensi10}}</td>
                            <td style="vertical-align: top">{!! $show->element_kompetensi10 !!}</td>
                            <td style="vertical-align: top">{!! $show->kuk10 !!}</td>
                        </tr>
                        @endswitch

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection