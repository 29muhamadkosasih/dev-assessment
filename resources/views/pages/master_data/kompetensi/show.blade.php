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
                            <td style="vertical-align: top">{{$show->kode}} <br> {{$show->unit_kompetensi}}</td>
                            <td style="vertical-align: top">{!! $show->element_kompetensi !!}</td>
                            <td style="vertical-align: top">{!! $show->kuk !!}</td>
                        </tr>
                        @switch($show)
                        @case($show->kode2 == NULL)
                        @break
                        @default
                        <tr>
                            <td style="vertical-align: top">{{$show->kode2}}<br> {{$show->unit_kompetensi2}}</td>
                            <td style="vertical-align: top">{!! $show->element_kompetensi2 !!}</td>
                            <td style="vertical-align: top">{!! $show->kuk2 !!}</td>
                        </tr>
                        @endswitch

                        @switch($show)
                        @case($show->kode3 == NULL)
                        @break
                        @default
                        <tr>
                            <td style="vertical-align: top">{{$show->kode3}} <br> {{$show->unit_kompetensi3}}</td>
                            <td style="vertical-align: top">{!! $show->element_kompetensi3 !!}</td>
                            <td style="vertical-align: top">{!! $show->kuk3 !!}</td>
                        </tr>
                        @endswitch

                        @switch($show)
                        @case($show->kode4 == NULL)
                        @break
                        @default
                        <tr>
                            <td style="vertical-align: top">{{$show->kode4}} <br> {{$show->unit_kompetensi4}}</td>
                            <td style="vertical-align: top">{!! $show->element_kompetensi4 !!}</td>
                            <td style="vertical-align: top">{!! $show->kuk4 !!}</td>
                        </tr>
                        @endswitch

                        @switch($show)
                        @case($show->kode5 == NULL)
                        @break
                        @default
                        <tr>
                            <td style="vertical-align: top">{{$show->kode5}} <br> {{$show->unit_kompetensi5}}</td>
                            <td style="vertical-align: top">{!! $show->element_kompetensi5 !!}</td>
                            <td style="vertical-align: top">{!! $show->kuk5 !!}</td>
                        </tr>
                        @endswitch
                        @switch($show)
                        @case($show->kode6 == NULL)
                        @break
                        @default
                        <tr>
                            <td style="vertical-align: top">{{$show->kode6}} <br>{{$show->unit_kompetensi6}}</td>
                            <td style="vertical-align: top">{!! $show->element_kompetensi6 !!}</td>
                            <td style="vertical-align: top">{!! $show->kuk6 !!}</td>
                        </tr>
                        @endswitch

                        @switch($show)
                        @case($show->kode7 == NULL)
                        @break
                        @default
                        <tr>
                            <td style="vertical-align: top">{{$show->kode7}} <br> {{$show->unit_kompetensi7}}</td>
                            <td style="vertical-align: top">{!! $show->element_kompetensi7 !!}</td>
                            <td style="vertical-align: top">{!! $show->kuk7 !!}</td>
                        </tr>
                        @endswitch

                        @switch($show)
                        @case($show->kode8 == NULL)
                        @break
                        @default
                        <tr>
                            <td style="vertical-align: top">{{$show->kode8}} <br> {{$show->unit_kompetensi8}}</td>
                            <td style="vertical-align: top">{!! $show->element_kompetensi8 !!}</td>
                            <td style="vertical-align: top">{!! $show->kuk8 !!}</td>
                        </tr>
                        @endswitch

                        @switch($show)
                        @case($show->kode9 == NULL)
                        @break
                        @default
                        <tr>
                            <td style="vertical-align: top">{{$show->kode9}} <br> {{$show->unit_kompetensi9}}</td>
                            <td style="vertical-align: top">{!! $show->element_kompetensi9 !!}</td>
                            <td style="vertical-align: top">{!! $show->kuk9 !!}</td>
                        </tr>
                        @endswitch

                        @switch($show)
                        @case($show->kode10 == NULL)
                        @break
                        @default
                        <tr>
                            <td style="vertical-align: top">{{$show->kode10}} <br> {{$show->unit_kompetensi10}}</td>
                            <td style="vertical-align: top">{!! $show->element_kompetensi10 !!}</td>
                            <td style="vertical-align: top">{!! $show->kuk10 !!}</td>
                        </tr>
                        @endswitch

                        @switch($show)
                        @case($show->kode11 == NULL)
                        @break
                        @default
                        <tr>
                            <td style="vertical-align: top">{{$show->kode11}} <br> {{$show->unit_kompetensi11}}</td>
                            <td style="vertical-align: top">{!! $show->element_kompetensi11 !!}</td>
                            <td style="vertical-align: top">{!! $show->kuk11 !!}</td>
                        </tr>
                        @endswitch

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {

        $(".dataex-complex-headers").DataTable({
            scrollY: "500px",
            ordering: false,
            scrollX: !0,
            scrollCollapse: !0,
            paging: !1,

            searching: false,

            fixedColumns: !0
        });


        $(".dataex-individual-filtering tfoot th").each(function (i) {
            var title = $(".dataex-individual-filtering thead th").eq($(this).index()).text();
            $(this).html('<input type="text" placeholder="Search ' + title + '" data-index="' + i + '" />')
        });
        var tableIndividualFiltering = $(".dataex-individual-filtering").DataTable({
            scrollY: "300px",
            scrollX: 0,
            scrollCollapse: 0,
            fixedColumns: 0
        });
        $(tableIndividualFiltering.table().container()).on("keyup", "tfoot input", function () {
            tableIndividualFiltering.column($(this).data("index")).search(this.value).draw()
        }), $(".DTFC_RightBodyLiner").css("overflow-y", "hidden")
    });
</script>
@endsection