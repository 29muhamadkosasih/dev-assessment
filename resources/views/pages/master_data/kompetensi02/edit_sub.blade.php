@extends('layouts/master')

@section('title', 'Kompetensi')

@section('content')
<!-- Invoice table -->
<div class="col-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Edit Kompetensi APL-02</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('kompetensi02.update_sub', $edit->id) }}">
                @method('PUT')
                @csrf
                <div class="row g-3">
                    <table class="m-3">
                        <tbody>
                            <tr>
                                <td class="pe-5">Nama Skema</td>
                                <td>: &nbsp; <b>{{$edit->kompetensi->skema->nama_skema}}</b> </td>
                            </tr>
                            <tr>
                                <td class="pe-10">No. Skema</td>
                                <td>: &nbsp; {{ $edit->kompetensi->skema->no }}</td>
                            </tr>
                            <tr>
                                <td class="pe-10 ">No. SKKNI</td>
                                <td class="mt-2">: &nbsp;{{ $edit->kompetensi->no_skkni }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md mb-4 mb-md-2">
                    <div class="accordion mt-3" id="accordionExample">

                        <div class="card accordion-item active">
                            <h2 class="accordion-header" id="headingOne">
                                <button type="button" class="accordion-button" data-bs-toggle="collapse"
                                    data-bs-target="#accordionOne" aria-expanded="true" aria-controls="accordionOne">
                                    Kode Unit & Kompetensi
                                </button>
                            </h2>

                            <div id="accordionOne" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Kode</label>
                                            <input type="text" id="plFirstName" name="kode"
                                                class="form-control @error('kode') is-invalid @enderror"
                                                placeholder="Masukan Kode" required
                                                value="{{ $edit->kompetensi->kode }}" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Unit Kompetensi</label>
                                            <input type="text" id="plFirstName" name="unit"
                                                class="form-control @error('unit') is-invalid @enderror"
                                                placeholder="Masukan Unit Kompetensi"
                                                value="{{ $edit->kompetensi->unit_kompetensi }}" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_01') is-invalid @enderror"
                                            id="editor" name="element_kuk_1_01"
                                            rows="5">{{ $edit->element_kuk_1_01 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_02') is-invalid @enderror"
                                            id="editor2" name="element_kuk_1_02"
                                            rows="5">{{ $edit->element_kuk_1_02 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_03') is-invalid @enderror"
                                            id="editor3" name="element_kuk_1_03"
                                            rows="5">{{ $edit->element_kuk_1_03 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_04') is-invalid @enderror"
                                            id="editor4" name="element_kuk_1_04"
                                            rows="5">{{ $edit->element_kuk_1_04 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_05') is-invalid @enderror"
                                            id="editor5" name="element_kuk_1_05"
                                            rows="5">{{ $edit->element_kuk_1_05 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_06') is-invalid @enderror"
                                            id="editor6" name="element_kuk_1_06"
                                            rows="5">{{ $edit->element_kuk_1_06 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_07') is-invalid @enderror"
                                            id="editor7" name="element_kuk_1_07"
                                            rows="5">{{ $edit->element_kuk_1_07 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_08') is-invalid @enderror"
                                            id="editor8" name="element_kuk_1_08"
                                            rows="5">{{ $edit->element_kuk_1_08 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_09') is-invalid @enderror"
                                            id="editor9" name="element_kuk_1_09"
                                            rows="5">{{ $edit->element_kuk_1_09 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_10') is-invalid @enderror"
                                            id="editor10" name="element_kuk_1_10"
                                            rows="5">{{ $edit->element_kuk_1_10 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_11') is-invalid @enderror"
                                            id="editor11" name="element_kuk_1_11"
                                            rows="5">{{ $edit->element_kuk_1_11 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_12') is-invalid @enderror"
                                            id="editor122" name="element_kuk_1_12"
                                            rows="5">{{ $edit->element_kuk_1_12 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_13') is-invalid @enderror"
                                            id="editor123" name="element_kuk_1_13"
                                            rows="5">{{ $edit->element_kuk_1_13 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_14') is-invalid @enderror"
                                            id="editor124" name="element_kuk_1_14"
                                            rows="5">{{ $edit->element_kuk_1_14 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_15') is-invalid @enderror"
                                            id="editor125" name="element_kuk_1_15"
                                            rows="5">{{ $edit->element_kuk_1_15 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_16') is-invalid @enderror"
                                            id="editor126" name="element_kuk_1_16"
                                            rows="5">{{ $edit->element_kuk_1_16 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_17') is-invalid @enderror"
                                            id="editor127" name="element_kuk_1_17"
                                            rows="5">{{ $edit->element_kuk_1_17 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_18') is-invalid @enderror"
                                            id="editor128" name="element_kuk_1_18"
                                            rows="5">{{ $edit->element_kuk_1_18 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_19') is-invalid @enderror"
                                            id="editor129" name="element_kuk_1_19"
                                            rows="5">{{ $edit->element_kuk_1_19 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_20') is-invalid @enderror"
                                            id="editor130" name="element_kuk_1_20"
                                            rows="5">{{ $edit->element_kuk_1_20 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_21') is-invalid @enderror"
                                            id="editor131" name="element_kuk_1_21"
                                            rows="5">{{ $edit->element_kuk_1_21 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_22') is-invalid @enderror"
                                            id="editor132" name="element_kuk_1_22"
                                            rows="5">{{ $edit->element_kuk_1_22 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_23') is-invalid @enderror"
                                            id="editor133" name="element_kuk_1_23"
                                            rows="5">{{ $edit->element_kuk_1_23 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_24') is-invalid @enderror"
                                            id="editor134" name="element_kuk_1_24"
                                            rows="5">{{ $edit->element_kuk_1_24 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_25') is-invalid @enderror"
                                            id="editor135" name="element_kuk_1_25"
                                            rows="5">{{ $edit->element_kuk_1_25 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_26') is-invalid @enderror"
                                            id="editor136" name="element_kuk_1_26"
                                            rows="5">{{ $edit->element_kuk_1_26 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_27') is-invalid @enderror"
                                            id="editor137" name="element_kuk_1_27"
                                            rows="5">{{ $edit->element_kuk_1_27 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_28') is-invalid @enderror"
                                            id="editor138" name="element_kuk_1_28"
                                            rows="5">{{ $edit->element_kuk_1_28 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_29') is-invalid @enderror"
                                            id="editor139" name="element_kuk_1_29"
                                            rows="5">{{ $edit->element_kuk_1_29 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_30') is-invalid @enderror"
                                            id="editor140" name="element_kuk_1_30"
                                            rows="5">{{ $edit->element_kuk_1_30 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_31') is-invalid @enderror"
                                            id="editor141" name="element_kuk_1_31"
                                            rows="5">{{ $edit->element_kuk_1_31 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_32') is-invalid @enderror"
                                            id="editor142" name="element_kuk_1_32"
                                            rows="5">{{ $edit->element_kuk_1_32 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_33') is-invalid @enderror"
                                            id="editor143" name="element_kuk_1_33"
                                            rows="5">{{ $edit->element_kuk_1_33 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_34') is-invalid @enderror"
                                            id="editor144" name="element_kuk_1_34"
                                            rows="5">{{ $edit->element_kuk_1_34 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_35') is-invalid @enderror"
                                            id="editor145" name="element_kuk_1_35"
                                            rows="5">{{ $edit->element_kuk_1_35 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_36') is-invalid @enderror"
                                            id="editor146" name="element_kuk_1_36"
                                            rows="5">{{ $edit->element_kuk_1_36 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_37') is-invalid @enderror"
                                            id="editor147" name="element_kuk_1_37"
                                            rows="5">{{ $edit->element_kuk_1_37 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_38') is-invalid @enderror"
                                            id="editor148" name="element_kuk_1_38"
                                            rows="5">{{ $edit->element_kuk_1_38 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_39') is-invalid @enderror"
                                            id="editor149" name="element_kuk_1_39"
                                            rows="5">{{ $edit->element_kuk_1_39 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_40') is-invalid @enderror"
                                            id="editor150" name="element_kuk_1_40"
                                            rows="5">{{ $edit->element_kuk_1_40 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_41') is-invalid @enderror"
                                            id="editor151" name="element_kuk_1_41"
                                            rows="5">{{ $edit->element_kuk_1_41 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_42') is-invalid @enderror"
                                            id="editor152" name="element_kuk_1_42"
                                            rows="5">{{ $edit->element_kuk_1_42 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_43') is-invalid @enderror"
                                            id="editor153" name="element_kuk_1_43"
                                            rows="5">{{ $edit->element_kuk_1_43 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_44') is-invalid @enderror"
                                            id="editor154" name="element_kuk_1_44"
                                            rows="5">{{ $edit->element_kuk_1_44 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_45') is-invalid @enderror"
                                            id="editor155" name="element_kuk_1_45"
                                            rows="5">{{ $edit->element_kuk_1_45 }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo">
                                    Kode Unit & Kompetensi </button>
                            </h2>
                            <div id="accordionTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Kode</label>
                                            <input type="text" id="plFirstName" name="kode2" class="form-control"
                                                placeholder="Masukan Kode" value="{{ $edit->kompetensi->kode2 }}" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Unit Kompetensi</label>
                                            <input type="text" id="plFirstName" name="unit2" class="form-control"
                                                placeholder="Masukan Unit Kompetensi"
                                                value="{{ $edit->kompetensi->unit_kompetensi2}}" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor12" name="element_kuk_2_01"
                                            rows="5">{{ $edit->element_kuk_2_01 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor13" name="element_kuk_2_02"
                                            rows="5">{{ $edit->element_kuk_2_02 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor14" name="element_kuk_2_03"
                                            rows="5">{{ $edit->element_kuk_2_03 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor15" name="element_kuk_2_04"
                                            rows="5">{{ $edit->element_kuk_2_04 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor16" name="element_kuk_2_05"
                                            rows="5">{{ $edit->element_kuk_2_05 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor17" name="element_kuk_2_06"
                                            rows="5">{{ $edit->element_kuk_2_06 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor18" name="element_kuk_2_07"
                                            rows="5">{{ $edit->element_kuk_2_07 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor19" name="element_kuk_2_08"
                                            rows="5">{{ $edit->element_kuk_2_08 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor20" name="element_kuk_2_09"
                                            rows="5">{{ $edit->element_kuk_2_09 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor21" name="element_kuk_2_10"
                                            rows="5">{{ $edit->element_kuk_2_10 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor22" name="element_kuk_2_11"
                                            rows="5">{{ $edit->element_kuk_2_11 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_2_12') is-invalid @enderror"
                                            id="editor156" name="element_kuk_2_12"
                                            rows="5">{{ $edit->element_kuk_2_12 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_2_13') is-invalid @enderror"
                                            id="editor157" name="element_kuk_2_13"
                                            rows="5">{{ $edit->element_kuk_2_13 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_2_14') is-invalid @enderror"
                                            id="editor158" name="element_kuk_2_14"
                                            rows="5">{{ $edit->element_kuk_2_14 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_2_15') is-invalid @enderror"
                                            id="editor159" name="element_kuk_2_15"
                                            rows="5">{{ $edit->element_kuk_2_15 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_2_16') is-invalid @enderror"
                                            id="editor160" name="element_kuk_2_16"
                                            rows="5">{{ $edit->element_kuk_2_16 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_2_17') is-invalid @enderror"
                                            id="editor161" name="element_kuk_2_17"
                                            rows="5">{{ $edit->element_kuk_2_17 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_2_18') is-invalid @enderror"
                                            id="editor162" name="element_kuk_2_18"
                                            rows="5">{{ $edit->element_kuk_2_18 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_2_19') is-invalid @enderror"
                                            id="editor163" name="element_kuk_2_19"
                                            rows="5">{{ $edit->element_kuk_2_19 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_2_20') is-invalid @enderror"
                                            id="editor164" name="element_kuk_2_20"
                                            rows="5">{{ $edit->element_kuk_2_20 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_2_21') is-invalid @enderror"
                                            id="editor165" name="element_kuk_2_21"
                                            rows="5">{{ $edit->element_kuk_2_21 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_2_22') is-invalid @enderror"
                                            id="editor166" name="element_kuk_2_22"
                                            rows="5">{{ $edit->element_kuk_2_22 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_2_23') is-invalid @enderror"
                                            id="editor167" name="element_kuk_2_23"
                                            rows="5">{{ $edit->element_kuk_2_23 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_2_24') is-invalid @enderror"
                                            id="editor168" name="element_kuk_2_24"
                                            rows="5">{{ $edit->element_kuk_2_24 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_2_25') is-invalid @enderror"
                                            id="editor169" name="element_kuk_2_25"
                                            rows="5">{{ $edit->element_kuk_2_25 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_2_26') is-invalid @enderror"
                                            id="editor170" name="element_kuk_2_26"
                                            rows="5">{{ $edit->element_kuk_2_26 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_2_27') is-invalid @enderror"
                                            id="editor171" name="element_kuk_2_27"
                                            rows="5">{{ $edit->element_kuk_2_27 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_2_28') is-invalid @enderror"
                                            id="editor172" name="element_kuk_2_28"
                                            rows="5">{{ $edit->element_kuk_2_28 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_2_29') is-invalid @enderror"
                                            id="editor173" name="element_kuk_2_29"
                                            rows="5">{{ $edit->element_kuk_2_29 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_2_30') is-invalid @enderror"
                                            id="editor174" name="element_kuk_2_30"
                                            rows="5">{{ $edit->element_kuk_2_30 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_2_31') is-invalid @enderror"
                                            id="editor175" name="element_kuk_2_31"
                                            rows="5">{{ $edit->element_kuk_2_31 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_2_32') is-invalid @enderror"
                                            id="editor176" name="element_kuk_2_32"
                                            rows="5">{{ $edit->element_kuk_2_32 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_2_33') is-invalid @enderror"
                                            id="editor177" name="element_kuk_2_33"
                                            rows="5">{{ $edit->element_kuk_2_33 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_2_34') is-invalid @enderror"
                                            id="editor178" name="element_kuk_2_34"
                                            rows="5">{{ $edit->element_kuk_2_34 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_2_35') is-invalid @enderror"
                                            id="editor179" name="element_kuk_2_35"
                                            rows="5">{{ $edit->element_kuk_2_35 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_2_36') is-invalid @enderror"
                                            id="editor180" name="element_kuk_2_36"
                                            rows="5">{{ $edit->element_kuk_2_36 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_2_37') is-invalid @enderror"
                                            id="editor181" name="element_kuk_2_37"
                                            rows="5">{{ $edit->element_kuk_2_37 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_2_38') is-invalid @enderror"
                                            id="editor182" name="element_kuk_2_38"
                                            rows="5">{{ $edit->element_kuk_2_38 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_2_39') is-invalid @enderror"
                                            id="editor183" name="element_kuk_2_39"
                                            rows="5">{{ $edit->element_kuk_2_39 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_2_40') is-invalid @enderror"
                                            id="editor184" name="element_kuk_2_40"
                                            rows="5">{{ $edit->element_kuk_2_40 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_2_41') is-invalid @enderror"
                                            id="editor185" name="element_kuk_2_41"
                                            rows="5">{{ $edit->element_kuk_2_41 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_2_42') is-invalid @enderror"
                                            id="editor186" name="element_kuk_2_42"
                                            rows="5">{{ $edit->element_kuk_2_42 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_2_43') is-invalid @enderror"
                                            id="editor187" name="element_kuk_2_43"
                                            rows="5">{{ $edit->element_kuk_2_43 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_2_44') is-invalid @enderror"
                                            id="editor188" name="element_kuk_2_44"
                                            rows="5">{{ $edit->element_kuk_2_44 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_2_45') is-invalid @enderror"
                                            id="editor189" name="element_kuk_2_45"
                                            rows="5">{{ $edit->element_kuk_2_45 }}</textarea>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="card accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#accordionThree" aria-expanded="false"
                                    aria-controls="accordionThree">
                                    Kode Unit & Kompetensi </button>
                            </h2>
                            <div id="accordionThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Kode</label>
                                            <input type="text" id="plFirstName" name="kode3" class="form-control"
                                                placeholder="Masukan Kode" value="{{ $edit->kompetensi->kode3 }}" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Unit Kompetensi</label>
                                            <input type="text" id="plFirstName" name="unit3" class="form-control"
                                                placeholder="Masukan Unit Kompetensi"
                                                value="{{ $edit->kompetensi->unit_kompetensi3}}" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor23" name="element_kuk_3_01"
                                            rows="5">{{ $edit->element_kuk_3_01 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor24" name="element_kuk_3_02"
                                            rows="5">{{ $edit->element_kuk_3_02 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor25" name="element_kuk_3_03"
                                            rows="5">{{ $edit->element_kuk_3_03 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor26" name="element_kuk_3_04"
                                            rows="5">{{ $edit->element_kuk_3_04 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor27" name="element_kuk_3_05"
                                            rows="5">{{ $edit->element_kuk_3_05 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor28" name="element_kuk_3_06"
                                            rows="5">{{ $edit->element_kuk_3_06 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor29" name="element_kuk_3_07"
                                            rows="5">{{ $edit->element_kuk_3_07 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor30" name="element_kuk_3_08"
                                            rows="5">{{ $edit->element_kuk_3_08 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor31" name="element_kuk_3_09"
                                            rows="5">{{ $edit->element_kuk_3_09 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor32" name="element_kuk_3_10"
                                            rows="5">{{ $edit->element_kuk_3_10 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor33" name="element_kuk_3_11"
                                            rows="5">{{ $edit->element_kuk_3_11 }}</textarea>
                                    </div>

                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_3_12') is-invalid @enderror"
                                            id="editor190" name="element_kuk_3_12"
                                            rows="5">{{ $edit->element_kuk_3_12 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_3_13') is-invalid @enderror"
                                            id="editor191" name="element_kuk_3_13"
                                            rows="5">{{ $edit->element_kuk_3_13 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_3_14') is-invalid @enderror"
                                            id="editor192" name="element_kuk_3_14"
                                            rows="5">{{ $edit->element_kuk_3_14 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_3_15') is-invalid @enderror"
                                            id="editor193" name="element_kuk_3_15"
                                            rows="5">{{ $edit->element_kuk_3_15 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_3_16') is-invalid @enderror"
                                            id="editor194" name="element_kuk_3_16"
                                            rows="5">{{ $edit->element_kuk_3_16 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_3_17') is-invalid @enderror"
                                            id="editor195" name="element_kuk_3_17"
                                            rows="5">{{ $edit->element_kuk_3_17 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_3_18') is-invalid @enderror"
                                            id="editor196" name="element_kuk_3_18"
                                            rows="5">{{ $edit->element_kuk_3_18 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_3_19') is-invalid @enderror"
                                            id="editor197" name="element_kuk_3_19"
                                            rows="5">{{ $edit->element_kuk_3_19 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_3_20') is-invalid @enderror"
                                            id="editor199" name="element_kuk_3_20"
                                            rows="5">{{ $edit->element_kuk_3_20 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_3_21') is-invalid @enderror"
                                            id="editor200" name="element_kuk_3_21"
                                            rows="5">{{ $edit->element_kuk_3_21 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_3_22') is-invalid @enderror"
                                            id="editor201" name="element_kuk_3_22"
                                            rows="5">{{ $edit->element_kuk_3_22 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_3_23') is-invalid @enderror"
                                            id="editor202" name="element_kuk_3_23"
                                            rows="5">{{ $edit->element_kuk_3_23 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_3_24') is-invalid @enderror"
                                            id="editor203" name="element_kuk_3_24"
                                            rows="5">{{ $edit->element_kuk_3_24 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_3_25') is-invalid @enderror"
                                            id="editor204" name="element_kuk_3_25"
                                            rows="5">{{ $edit->element_kuk_3_25 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_3_26') is-invalid @enderror"
                                            id="editor205" name="element_kuk_3_26"
                                            rows="5">{{ $edit->element_kuk_3_26 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_3_27') is-invalid @enderror"
                                            id="editor206" name="element_kuk_3_27"
                                            rows="5">{{ $edit->element_kuk_3_27 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_3_28') is-invalid @enderror"
                                            id="editor207" name="element_kuk_3_28"
                                            rows="5">{{ $edit->element_kuk_3_28 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_3_29') is-invalid @enderror"
                                            id="editor208" name="element_kuk_3_29"
                                            rows="5">{{ $edit->element_kuk_3_29 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_3_30') is-invalid @enderror"
                                            id="editor209" name="element_kuk_3_30"
                                            rows="5">{{ $edit->element_kuk_3_30 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_3_31') is-invalid @enderror"
                                            id="editor210" name="element_kuk_3_31"
                                            rows="5">{{ $edit->element_kuk_3_31 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_3_32') is-invalid @enderror"
                                            id="editor211" name="element_kuk_3_32"
                                            rows="5">{{ $edit->element_kuk_3_32 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_3_33') is-invalid @enderror"
                                            id="editor212" name="element_kuk_3_33"
                                            rows="5">{{ $edit->element_kuk_3_33 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_3_34') is-invalid @enderror"
                                            id="editor213" name="element_kuk_3_34"
                                            rows="5">{{ $edit->element_kuk_3_34 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_3_35') is-invalid @enderror"
                                            id="editor214" name="element_kuk_3_35"
                                            rows="5">{{ $edit->element_kuk_3_35 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_3_36') is-invalid @enderror"
                                            id="editor215" name="element_kuk_3_36"
                                            rows="5">{{ $edit->element_kuk_3_36 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_3_37') is-invalid @enderror"
                                            id="editor216" name="element_kuk_3_37"
                                            rows="5">{{ $edit->element_kuk_3_37 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_3_38') is-invalid @enderror"
                                            id="editor217" name="element_kuk_3_38"
                                            rows="5">{{ $edit->element_kuk_3_38 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_3_39') is-invalid @enderror"
                                            id="editor218" name="element_kuk_3_39"
                                            rows="5">{{ $edit->element_kuk_3_39 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_3_40') is-invalid @enderror"
                                            id="editor219" name="element_kuk_3_40"
                                            rows="5">{{ $edit->element_kuk_3_40 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_3_41') is-invalid @enderror"
                                            id="editor220" name="element_kuk_3_41"
                                            rows="5">{{ $edit->element_kuk_3_41 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_3_42') is-invalid @enderror"
                                            id="editor221" name="element_kuk_3_42"
                                            rows="5">{{ $edit->element_kuk_3_42 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_3_43') is-invalid @enderror"
                                            id="editor222" name="element_kuk_3_43"
                                            rows="5">{{ $edit->element_kuk_3_43 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_3_44') is-invalid @enderror"
                                            id="editor223" name="element_kuk_3_44"
                                            rows="5">{{ $edit->element_kuk_3_44 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_3_45') is-invalid @enderror"
                                            id="editor224" name="element_kuk_3_45"
                                            rows="5">{{ $edit->element_kuk_3_45 }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#accordionFour" aria-expanded="false" aria-controls="accordionFour">
                                    Kode Unit & Kompetensi </button>
                            </h2>
                            <div id="accordionFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Kode</label>
                                            <input type="text" id="plFirstName" name="kode4" class="form-control"
                                                placeholder="Masukan Kode" value="{{ $edit->kompetensi->kode4 }}" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Unit Kompetensi</label>
                                            <input type="text" id="plFirstName" name="unit4" class="form-control"
                                                placeholder="Masukan Unit Kompetensi"
                                                value="{{ $edit->kompetensi->unit_kompetensi4}}" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor34" name="element_kuk_4_01"
                                            rows="5">{{ $edit->element_kuk_4_01 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor35" name="element_kuk_4_02"
                                            rows="5">{{ $edit->element_kuk_4_02 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor36" name="element_kuk_4_03"
                                            rows="5">{{ $edit->element_kuk_4_03 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor37" name="element_kuk_4_04"
                                            rows="5">{{ $edit->element_kuk_4_04 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor38" name="element_kuk_4_05"
                                            rows="5">{{ $edit->element_kuk_4_05 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor39" name="element_kuk_4_06"
                                            rows="5">{{ $edit->element_kuk_4_06 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor40" name="element_kuk_4_07"
                                            rows="5">{{ $edit->element_kuk_4_07 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor41" name="element_kuk_4_08"
                                            rows="5">{{ $edit->element_kuk_4_08 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor42" name="element_kuk_4_09"
                                            rows="5">{{ $edit->element_kuk_4_09 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor43" name="element_kuk_4_10"
                                            rows="5">{{ $edit->element_kuk_4_10 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor44" name="element_kuk_4_11"
                                            rows="5">{{ $edit->element_kuk_4_11 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_4_12') is-invalid @enderror"
                                            id="editor225" name="element_kuk_4_12"
                                            rows="5">{{ $edit->element_kuk_4_12 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_4_13') is-invalid @enderror"
                                            id="editor226" name="element_kuk_4_13"
                                            rows="5">{{ $edit->element_kuk_4_13 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_4_14') is-invalid @enderror"
                                            id="editor227" name="element_kuk_4_14"
                                            rows="5">{{ $edit->element_kuk_4_14 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_4_15') is-invalid @enderror"
                                            id="editor228" name="element_kuk_4_15"
                                            rows="5">{{ $edit->element_kuk_4_15 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_4_16') is-invalid @enderror"
                                            id="editor229" name="element_kuk_4_16"
                                            rows="5">{{ $edit->element_kuk_4_16 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_4_17') is-invalid @enderror"
                                            id="editor230" name="element_kuk_4_17"
                                            rows="5">{{ $edit->element_kuk_4_17 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_4_18') is-invalid @enderror"
                                            id="editor231" name="element_kuk_4_18"
                                            rows="5">{{ $edit->element_kuk_4_18 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_4_19') is-invalid @enderror"
                                            id="editor232" name="element_kuk_4_19"
                                            rows="5">{{ $edit->element_kuk_4_19 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_4_20') is-invalid @enderror"
                                            id="editor233" name="element_kuk_4_20"
                                            rows="5">{{ $edit->element_kuk_4_20 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_4_21') is-invalid @enderror"
                                            id="editor234" name="element_kuk_4_21"
                                            rows="5">{{ $edit->element_kuk_4_21 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_4_22') is-invalid @enderror"
                                            id="editor235" name="element_kuk_4_22"
                                            rows="5">{{ $edit->element_kuk_4_22 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_4_23') is-invalid @enderror"
                                            id="editor236" name="element_kuk_4_23"
                                            rows="5">{{ $edit->element_kuk_4_23 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_4_24') is-invalid @enderror"
                                            id="editor237" name="element_kuk_4_24"
                                            rows="5">{{ $edit->element_kuk_4_24 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_4_25') is-invalid @enderror"
                                            id="editor238" name="element_kuk_4_25"
                                            rows="5">{{ $edit->element_kuk_4_25 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_4_26') is-invalid @enderror"
                                            id="editor239" name="element_kuk_4_26"
                                            rows="5">{{ $edit->element_kuk_4_26 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_4_27') is-invalid @enderror"
                                            id="editor240" name="element_kuk_4_27"
                                            rows="5">{{ $edit->element_kuk_4_27 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_4_28') is-invalid @enderror"
                                            id="editor241" name="element_kuk_4_28"
                                            rows="5">{{ $edit->element_kuk_4_28 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_4_29') is-invalid @enderror"
                                            id="editor242" name="element_kuk_4_29"
                                            rows="5">{{ $edit->element_kuk_4_29 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_4_30') is-invalid @enderror"
                                            id="editor243" name="element_kuk_4_30"
                                            rows="5">{{ $edit->element_kuk_4_30 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_4_31') is-invalid @enderror"
                                            id="editor244" name="element_kuk_4_31"
                                            rows="5">{{ $edit->element_kuk_4_31 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_4_32') is-invalid @enderror"
                                            id="editor245" name="element_kuk_4_32"
                                            rows="5">{{ $edit->element_kuk_4_32 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_4_33') is-invalid @enderror"
                                            id="editor246" name="element_kuk_4_33"
                                            rows="5">{{ $edit->element_kuk_4_33 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_4_34') is-invalid @enderror"
                                            id="editor247" name="element_kuk_4_34"
                                            rows="5">{{ $edit->element_kuk_4_34 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_4_35') is-invalid @enderror"
                                            id="editor248" name="element_kuk_4_35"
                                            rows="5">{{ $edit->element_kuk_4_35 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_4_36') is-invalid @enderror"
                                            id="editor249" name="element_kuk_4_36"
                                            rows="5">{{ $edit->element_kuk_4_36 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_4_37') is-invalid @enderror"
                                            id="editor250" name="element_kuk_4_37"
                                            rows="5">{{ $edit->element_kuk_4_37 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_4_38') is-invalid @enderror"
                                            id="editor251" name="element_kuk_4_38"
                                            rows="5">{{ $edit->element_kuk_4_38 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_4_39') is-invalid @enderror"
                                            id="editor252" name="element_kuk_4_39"
                                            rows="5">{{ $edit->element_kuk_4_39 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_4_40') is-invalid @enderror"
                                            id="editor253" name="element_kuk_4_40"
                                            rows="5">{{ $edit->element_kuk_4_40 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_4_41') is-invalid @enderror"
                                            id="editor254" name="element_kuk_4_41"
                                            rows="5">{{ $edit->element_kuk_4_41 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_4_42') is-invalid @enderror"
                                            id="editor255" name="element_kuk_4_42"
                                            rows="5">{{ $edit->element_kuk_4_42 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_4_43') is-invalid @enderror"
                                            id="editor256" name="element_kuk_4_43"
                                            rows="5">{{ $edit->element_kuk_4_43 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_4_44') is-invalid @enderror"
                                            id="editor257" name="element_kuk_4_44"
                                            rows="5">{{ $edit->element_kuk_4_44 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_4_45') is-invalid @enderror"
                                            id="editor258" name="element_kuk_4_45"
                                            rows="5">{{ $edit->element_kuk_4_45 }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#accordionFive" aria-expanded="false" aria-controls="accordionFive">
                                    Kode Unit & Kompetensi </button>
                            </h2>
                            <div id="accordionFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Kode</label>
                                            <input type="text" id="plFirstName" name="kode5" class="form-control"
                                                placeholder="Masukan Kode" value="{{ $edit->kompetensi->kode5 }}" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Unit Kompetensi</label>
                                            <input type="text" id="plFirstName" name="unit5" class="form-control"
                                                placeholder="Masukan Unit Kompetensi"
                                                value="{{ $edit->kompetensi->unit_kompetensi5}}" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor45" name="element_kuk_5_01"
                                            rows="5">{{ $edit->element_kuk_5_01 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor46" name="element_kuk_5_02"
                                            rows="5">{{ $edit->element_kuk_5_02 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor47" name="element_kuk_5_03"
                                            rows="5">{{ $edit->element_kuk_5_03 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor48" name="element_kuk_5_04"
                                            rows="5">{{ $edit->element_kuk_5_04 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor49" name="element_kuk_5_05"
                                            rows="5">{{ $edit->element_kuk_5_05 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor50" name="element_kuk_5_06"
                                            rows="5">{{ $edit->element_kuk_5_06 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor51" name="element_kuk_5_07"
                                            rows="5">{{ $edit->element_kuk_5_07 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor52" name="element_kuk_5_08"
                                            rows="5">{{ $edit->element_kuk_5_08 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor53" name="element_kuk_5_09"
                                            rows="5">{{ $edit->element_kuk_5_09 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor54" name="element_kuk_5_10"
                                            rows="5">{{ $edit->element_kuk_5_10 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor55" name="element_kuk_5_11"
                                            rows="5">{{ $edit->element_kuk_5_11 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_5_12') is-invalid @enderror"
                                            id="editor259" name="element_kuk_5_12"
                                            rows="5">{{ $edit->element_kuk_5_12 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_5_13') is-invalid @enderror"
                                            id="editor260" name="element_kuk_5_13"
                                            rows="5">{{ $edit->element_kuk_5_13 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_5_14') is-invalid @enderror"
                                            id="editor541" name="element_kuk_5_14"
                                            rows="5">{{ $edit->element_kuk_5_14 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_5_15') is-invalid @enderror"
                                            id="editor261" name="element_kuk_5_15"
                                            rows="5">{{ $edit->element_kuk_5_15 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_5_16') is-invalid @enderror"
                                            id="editor262" name="element_kuk_5_16"
                                            rows="5">{{ $edit->element_kuk_5_16 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_5_17') is-invalid @enderror"
                                            id="editor263" name="element_kuk_5_17"
                                            rows="5">{{ $edit->element_kuk_5_17 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_5_18') is-invalid @enderror"
                                            id="editor264" name="element_kuk_5_18"
                                            rows="5">{{ $edit->element_kuk_5_18 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_5_19') is-invalid @enderror"
                                            id="editor265" name="element_kuk_5_19"
                                            rows="5">{{ $edit->element_kuk_5_19 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_5_20') is-invalid @enderror"
                                            id="editor266" name="element_kuk_5_20"
                                            rows="5">{{ $edit->element_kuk_5_20 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_5_21') is-invalid @enderror"
                                            id="editor267" name="element_kuk_5_21"
                                            rows="5">{{ $edit->element_kuk_5_21 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_5_22') is-invalid @enderror"
                                            id="editor268" name="element_kuk_5_22"
                                            rows="5">{{ $edit->element_kuk_5_22 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_5_23') is-invalid @enderror"
                                            id="editor269" name="element_kuk_5_23"
                                            rows="5">{{ $edit->element_kuk_5_23 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_5_24') is-invalid @enderror"
                                            id="editor270" name="element_kuk_5_24"
                                            rows="5">{{ $edit->element_kuk_5_24 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_5_25') is-invalid @enderror"
                                            id="editor271" name="element_kuk_5_25"
                                            rows="5">{{ $edit->element_kuk_5_25 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_5_26') is-invalid @enderror"
                                            id="editor272" name="element_kuk_5_26"
                                            rows="5">{{ $edit->element_kuk_5_26 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_5_27') is-invalid @enderror"
                                            id="editor273" name="element_kuk_5_27"
                                            rows="5">{{ $edit->element_kuk_5_27 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_5_28') is-invalid @enderror"
                                            id="editor274" name="element_kuk_5_28"
                                            rows="5">{{ $edit->element_kuk_5_28 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_5_29') is-invalid @enderror"
                                            id="editor275" name="element_kuk_5_29"
                                            rows="5">{{ $edit->element_kuk_5_29 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_5_30') is-invalid @enderror"
                                            id="editor276" name="element_kuk_5_30"
                                            rows="5">{{ $edit->element_kuk_5_30 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_5_31') is-invalid @enderror"
                                            id="editor277" name="element_kuk_5_31"
                                            rows="5">{{ $edit->element_kuk_5_31 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_5_32') is-invalid @enderror"
                                            id="editor278" name="element_kuk_5_32"
                                            rows="5">{{ $edit->element_kuk_5_32 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_5_33') is-invalid @enderror"
                                            id="editor279" name="element_kuk_5_33"
                                            rows="5">{{ $edit->element_kuk_5_33 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_5_34') is-invalid @enderror"
                                            id="editor280" name="element_kuk_5_34"
                                            rows="5">{{ $edit->element_kuk_5_34 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_5_35') is-invalid @enderror"
                                            id="editor281" name="element_kuk_5_35"
                                            rows="5">{{ $edit->element_kuk_5_35 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_5_36') is-invalid @enderror"
                                            id="editor282" name="element_kuk_5_36"
                                            rows="5">{{ $edit->element_kuk_5_36 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_5_37') is-invalid @enderror"
                                            id="editor283" name="element_kuk_5_37"
                                            rows="5">{{ $edit->element_kuk_5_37 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_5_38') is-invalid @enderror"
                                            id="editor284" name="element_kuk_5_38"
                                            rows="5">{{ $edit->element_kuk_5_38 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_5_39') is-invalid @enderror"
                                            id="editor285" name="element_kuk_5_39"
                                            rows="5">{{ $edit->element_kuk_5_39 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_5_40') is-invalid @enderror"
                                            id="editor286" name="element_kuk_5_40"
                                            rows="5">{{ $edit->element_kuk_5_40 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_5_41') is-invalid @enderror"
                                            id="editor287" name="element_kuk_5_41"
                                            rows="5">{{ $edit->element_kuk_5_41 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_5_42') is-invalid @enderror"
                                            id="editor288" name="element_kuk_5_42"
                                            rows="5">{{ $edit->element_kuk_5_42 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_5_43') is-invalid @enderror"
                                            id="editor289" name="element_kuk_5_43"
                                            rows="5">{{ $edit->element_kuk_5_43 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_5_44') is-invalid @enderror"
                                            id="editor290" name="element_kuk_5_44"
                                            rows="5">{{ $edit->element_kuk_5_44 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_5_45') is-invalid @enderror"
                                            id="editor291" name="element_kuk_5_45"
                                            rows="5">{{ $edit->element_kuk_5_45 }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#accordionSix" aria-expanded="false" aria-controls="accordionSix">
                                    Kode Unit & Kompetensi </button>
                            </h2>
                            <div id="accordionSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Kode</label>
                                            <input type="text" id="plFirstName" name="kode6" class="form-control"
                                                placeholder="Masukan Kode" value="{{ $edit->kompetensi->kode6 }}" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Unit Kompetensi</label>
                                            <input type="text" id="plFirstName" name="unit6" class="form-control"
                                                placeholder="Masukan Unit Kompetensi"
                                                value="{{ $edit->kompetensi->unit_kompetensi6}}" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor56" name="element_kuk_6_01"
                                            rows="5">{{ $edit->element_kuk_6_01 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor57" name="element_kuk_6_02"
                                            rows="5">{{ $edit->element_kuk_6_02 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor58" name="element_kuk_6_03"
                                            rows="5">{{ $edit->element_kuk_6_03 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor59" name="element_kuk_6_04"
                                            rows="5">{{ $edit->element_kuk_6_04 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor60" name="element_kuk_6_05"
                                            rows="5">{{ $edit->element_kuk_6_05 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor61" name="element_kuk_6_06"
                                            rows="5">{{ $edit->element_kuk_6_06 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor62" name="element_kuk_6_07"
                                            rows="5">{{ $edit->element_kuk_6_07 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor63" name="element_kuk_6_08"
                                            rows="5">{{ $edit->element_kuk_6_08 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor64" name="element_kuk_6_09"
                                            rows="5">{{ $edit->element_kuk_6_09 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor65" name="element_kuk_6_10"
                                            rows="5">{{ $edit->element_kuk_6_10 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor66" name="element_kuk_6_11"
                                            rows="5">{{ $edit->element_kuk_6_11 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_6_12') is-invalid @enderror"
                                            id="editor292" name="element_kuk_6_12"
                                            rows="5">{{ $edit->element_kuk_6_12 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_6_13') is-invalid @enderror"
                                            id="editor293" name="element_kuk_6_13"
                                            rows="5">{{ $edit->element_kuk_6_13 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_6_14') is-invalid @enderror"
                                            id="editor294" name="element_kuk_6_14"
                                            rows="5">{{ $edit->element_kuk_6_14 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_6_15') is-invalid @enderror"
                                            id="editor295" name="element_kuk_6_15"
                                            rows="5">{{ $edit->element_kuk_6_15 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_6_16') is-invalid @enderror"
                                            id="editor296" name="element_kuk_6_16"
                                            rows="5">{{ $edit->element_kuk_6_16 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_6_17') is-invalid @enderror"
                                            id="editor297" name="element_kuk_6_17"
                                            rows="5">{{ $edit->element_kuk_6_17 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_6_18') is-invalid @enderror"
                                            id="editor298" name="element_kuk_6_18"
                                            rows="5">{{ $edit->element_kuk_6_18 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_6_19') is-invalid @enderror"
                                            id="editor299" name="element_kuk_6_19"
                                            rows="5">{{ $edit->element_kuk_6_19 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_6_20') is-invalid @enderror"
                                            id="editor300" name="element_kuk_6_20"
                                            rows="5">{{ $edit->element_kuk_6_20 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_6_21') is-invalid @enderror"
                                            id="editor301" name="element_kuk_6_21"
                                            rows="5">{{ $edit->element_kuk_6_21 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_6_22') is-invalid @enderror"
                                            id="editor302" name="element_kuk_6_22"
                                            rows="5">{{ $edit->element_kuk_6_22 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_6_23') is-invalid @enderror"
                                            id="editor303" name="element_kuk_6_23"
                                            rows="5">{{ $edit->element_kuk_6_23 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_6_24') is-invalid @enderror"
                                            id="editor304" name="element_kuk_6_24"
                                            rows="5">{{ $edit->element_kuk_6_24 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_6_25') is-invalid @enderror"
                                            id="editor305" name="element_kuk_6_25"
                                            rows="5">{{ $edit->element_kuk_6_25 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_6_26') is-invalid @enderror"
                                            id="editor306" name="element_kuk_6_26"
                                            rows="5">{{ $edit->element_kuk_6_26 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_6_27') is-invalid @enderror"
                                            id="editor307" name="element_kuk_6_27"
                                            rows="5">{{ $edit->element_kuk_6_27 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_6_28') is-invalid @enderror"
                                            id="editor308" name="element_kuk_6_28"
                                            rows="5">{{ $edit->element_kuk_6_28 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_6_29') is-invalid @enderror"
                                            id="editor309" name="element_kuk_6_29"
                                            rows="5">{{ $edit->element_kuk_6_29 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_6_30') is-invalid @enderror"
                                            id="editor310" name="element_kuk_6_30"
                                            rows="5">{{ $edit->element_kuk_6_30 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_6_31') is-invalid @enderror"
                                            id="editor311" name="element_kuk_6_31"
                                            rows="5">{{ $edit->element_kuk_6_31 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_6_32') is-invalid @enderror"
                                            id="editor312" name="element_kuk_6_32"
                                            rows="5">{{ $edit->element_kuk_6_32 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_6_33') is-invalid @enderror"
                                            id="editor313" name="element_kuk_6_33"
                                            rows="5">{{ $edit->element_kuk_6_33 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_6_34') is-invalid @enderror"
                                            id="editor314" name="element_kuk_6_34"
                                            rows="5">{{ $edit->element_kuk_6_34 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_6_35') is-invalid @enderror"
                                            id="editor315" name="element_kuk_6_35"
                                            rows="5">{{ $edit->element_kuk_6_35 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_6_36') is-invalid @enderror"
                                            id="editor316" name="element_kuk_6_36"
                                            rows="5">{{ $edit->element_kuk_6_36 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_6_37') is-invalid @enderror"
                                            id="editor317" name="element_kuk_6_37"
                                            rows="5">{{ $edit->element_kuk_6_37 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_6_38') is-invalid @enderror"
                                            id="editor318" name="element_kuk_6_38"
                                            rows="5">{{ $edit->element_kuk_6_38 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_6_39') is-invalid @enderror"
                                            id="editor319" name="element_kuk_6_39"
                                            rows="5">{{ $edit->element_kuk_6_39 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_6_40') is-invalid @enderror"
                                            id="editor320" name="element_kuk_6_40"
                                            rows="5">{{ $edit->element_kuk_6_40 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_6_41') is-invalid @enderror"
                                            id="editor321" name="element_kuk_6_41"
                                            rows="5">{{ $edit->element_kuk_6_41 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_6_42') is-invalid @enderror"
                                            id="editor322" name="element_kuk_6_42"
                                            rows="5">{{ $edit->element_kuk_6_42 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_6_43') is-invalid @enderror"
                                            id="editor323" name="element_kuk_6_43"
                                            rows="5">{{ $edit->element_kuk_6_43 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_6_44') is-invalid @enderror"
                                            id="editor324" name="element_kuk_6_44"
                                            rows="5">{{ $edit->element_kuk_6_44 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_6_45') is-invalid @enderror"
                                            id="editor325" name="element_kuk_6_45"
                                            rows="5">{{ $edit->element_kuk_6_45 }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#accordionSeven" aria-expanded="false"
                                    aria-controls="accordionSeven">
                                    Kode Unit & Kompetensi </button>
                            </h2>
                            <div id="accordionSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Kode</label>
                                            <input type="text" id="plFirstName" name="kode7" class="form-control"
                                                placeholder="Masukan Kode" value="{{ $edit->kompetensi->kode7 }}" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Unit Kompetensi</label>
                                            <input type="text" id="plFirstName" name="unit7" class="form-control"
                                                placeholder="Masukan Unit Kompetensi"
                                                value="{{ $edit->kompetensi->unit_kompetensi7}}" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor67" name="element_kuk_7_01"
                                            rows="5">{{ $edit->element_kuk_7_01 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor68" name="element_kuk_7_02"
                                            rows="5">{{ $edit->element_kuk_7_02 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor69" name="element_kuk_7_03"
                                            rows="5">{{ $edit->element_kuk_7_03 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor70" name="element_kuk_7_04"
                                            rows="5">{{ $edit->element_kuk_7_04 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor71" name="element_kuk_7_05"
                                            rows="5">{{ $edit->element_kuk_7_05 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor72" name="element_kuk_7_06"
                                            rows="5">{{ $edit->element_kuk_7_06 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor73" name="element_kuk_7_07"
                                            rows="5">{{ $edit->element_kuk_7_07 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor74" name="element_kuk_7_08"
                                            rows="5">{{ $edit->element_kuk_7_08 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor75" name="element_kuk_7_09"
                                            rows="5">{{ $edit->element_kuk_7_09 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor76" name="element_kuk_7_10"
                                            rows="5">{{ $edit->element_kuk_7_10 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor77" name="element_kuk_7_11"
                                            rows="5">{{ $edit->element_kuk_7_11 }}</textarea>
                                    </div>

                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_7_12') is-invalid @enderror"
                                            id="editor326" name="element_kuk_7_12"
                                            rows="5">{{ $edit->element_kuk_7_12 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_7_13') is-invalid @enderror"
                                            id="editor327" name="element_kuk_7_13"
                                            rows="5">{{ $edit->element_kuk_7_13 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_7_14') is-invalid @enderror"
                                            id="editor328" name="element_kuk_7_14"
                                            rows="5">{{ $edit->element_kuk_7_14 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_7_15') is-invalid @enderror"
                                            id="editor329" name="element_kuk_7_15"
                                            rows="5">{{ $edit->element_kuk_7_15 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_7_16') is-invalid @enderror"
                                            id="editor330" name="element_kuk_7_16"
                                            rows="5">{{ $edit->element_kuk_7_16 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_7_17') is-invalid @enderror"
                                            id="editor331" name="element_kuk_7_17"
                                            rows="5">{{ $edit->element_kuk_7_17 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_7_18') is-invalid @enderror"
                                            id="editor332" name="element_kuk_7_18"
                                            rows="5">{{ $edit->element_kuk_7_18 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_7_19') is-invalid @enderror"
                                            id="editor333" name="element_kuk_7_19"
                                            rows="5">{{ $edit->element_kuk_7_19 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_7_20') is-invalid @enderror"
                                            id="editor334" name="element_kuk_7_20"
                                            rows="5">{{ $edit->element_kuk_7_20 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_7_21') is-invalid @enderror"
                                            id="editor335" name="element_kuk_7_21"
                                            rows="5">{{ $edit->element_kuk_7_21 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_7_22') is-invalid @enderror"
                                            id="editor336" name="element_kuk_7_22"
                                            rows="5">{{ $edit->element_kuk_7_22 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_7_23') is-invalid @enderror"
                                            id="editor337" name="element_kuk_7_23"
                                            rows="5">{{ $edit->element_kuk_7_23 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_7_24') is-invalid @enderror"
                                            id="editor338" name="element_kuk_7_24"
                                            rows="5">{{ $edit->element_kuk_7_24 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_7_25') is-invalid @enderror"
                                            id="editor339" name="element_kuk_7_25"
                                            rows="5">{{ $edit->element_kuk_7_25 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_7_26') is-invalid @enderror"
                                            id="editor340" name="element_kuk_7_26"
                                            rows="5">{{ $edit->element_kuk_7_26 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_7_27') is-invalid @enderror"
                                            id="editor341" name="element_kuk_7_27"
                                            rows="5">{{ $edit->element_kuk_7_27 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_7_28') is-invalid @enderror"
                                            id="editor342" name="element_kuk_7_28"
                                            rows="5">{{ $edit->element_kuk_7_28 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_7_29') is-invalid @enderror"
                                            id="editor343" name="element_kuk_7_29"
                                            rows="5">{{ $edit->element_kuk_7_29 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_7_30') is-invalid @enderror"
                                            id="editor344" name="element_kuk_7_30"
                                            rows="5">{{ $edit->element_kuk_7_30 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_7_31') is-invalid @enderror"
                                            id="editor345" name="element_kuk_7_31"
                                            rows="5">{{ $edit->element_kuk_7_31 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_7_32') is-invalid @enderror"
                                            id="editor346" name="element_kuk_7_32"
                                            rows="5">{{ $edit->element_kuk_7_32 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_7_33') is-invalid @enderror"
                                            id="editor347" name="element_kuk_7_33"
                                            rows="5">{{ $edit->element_kuk_7_33 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_7_34') is-invalid @enderror"
                                            id="editor348" name="element_kuk_7_34"
                                            rows="5">{{ $edit->element_kuk_7_34 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_7_35') is-invalid @enderror"
                                            id="editor349" name="element_kuk_7_35"
                                            rows="5">{{ $edit->element_kuk_7_35 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_7_36') is-invalid @enderror"
                                            id="editor350" name="element_kuk_7_36"
                                            rows="5">{{ $edit->element_kuk_7_36 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_7_37') is-invalid @enderror"
                                            id="editor351" name="element_kuk_7_37"
                                            rows="5">{{ $edit->element_kuk_7_37 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_7_38') is-invalid @enderror"
                                            id="editor352" name="element_kuk_7_38"
                                            rows="5">{{ $edit->element_kuk_7_38 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_7_39') is-invalid @enderror"
                                            id="editor353" name="element_kuk_7_39"
                                            rows="5">{{ $edit->element_kuk_7_39 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_7_40') is-invalid @enderror"
                                            id="editor354" name="element_kuk_7_40"
                                            rows="5">{{ $edit->element_kuk_7_40 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_7_41') is-invalid @enderror"
                                            id="editor355" name="element_kuk_7_41"
                                            rows="5">{{ $edit->element_kuk_7_41 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_7_42') is-invalid @enderror"
                                            id="editor356" name="element_kuk_7_42"
                                            rows="5">{{ $edit->element_kuk_7_42 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_7_43') is-invalid @enderror"
                                            id="editor357" name="element_kuk_7_43"
                                            rows="5">{{ $edit->element_kuk_7_43 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_7_44') is-invalid @enderror"
                                            id="editor358" name="element_kuk_7_44"
                                            rows="5">{{ $edit->element_kuk_7_44 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_7_45') is-invalid @enderror"
                                            id="editor359" name="element_kuk_7_45"
                                            rows="5">{{ $edit->element_kuk_7_45 }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card accordion-item">
                            <h2 class="accordion-header" id="headingEight">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#accordionEight" aria-expanded="false"
                                    aria-controls="accordionEight">
                                    Kode Unit & Kompetensi </button>
                            </h2>
                            <div id="accordionEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Kode</label>
                                            <input type="text" id="plFirstName" name="kode8" class="form-control"
                                                placeholder="Masukan Kode" value="{{ $edit->kompetensi->kode8 }}" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Unit Kompetensi</label>
                                            <input type="text" id="plFirstName" name="unit8" class="form-control"
                                                placeholder="Masukan Unit Kompetensi"
                                                value="{{ $edit->kompetensi->unit_kompetensi8}}" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor78" name="element_kuk_8_01"
                                            rows="5">{{ $edit->element_kuk_8_01 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor79" name="element_kuk_8_02"
                                            rows="5">{{ $edit->element_kuk_8_02 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor80" name="element_kuk_8_03"
                                            rows="5">{{ $edit->element_kuk_8_03 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor81" name="element_kuk_8_04"
                                            rows="5">{{ $edit->element_kuk_8_04 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor82" name="element_kuk_8_05"
                                            rows="5">{{ $edit->element_kuk_8_05 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor83" name="element_kuk_8_06"
                                            rows="5">{{ $edit->element_kuk_8_06 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor84" name="element_kuk_8_07"
                                            rows="5">{{ $edit->element_kuk_8_07 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor85" name="element_kuk_8_08"
                                            rows="5">{{ $edit->element_kuk_8_08 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor86" name="element_kuk_8_09"
                                            rows="5">{{ $edit->element_kuk_8_09 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor87" name="element_kuk_8_10"
                                            rows="5">{{ $edit->element_kuk_8_10 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor88" name="element_kuk_8_11"
                                            rows="5">{{ $edit->element_kuk_8_11 }}</textarea>
                                    </div>

                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_8_12') is-invalid @enderror"
                                            id="editor360" name="element_kuk_8_12"
                                            rows="5">{{ $edit->element_kuk_8_12 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_8_13') is-invalid @enderror"
                                            id="editor361" name="element_kuk_8_13"
                                            rows="5">{{ $edit->element_kuk_8_13 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_8_14') is-invalid @enderror"
                                            id="editor362" name="element_kuk_8_14"
                                            rows="5">{{ $edit->element_kuk_8_14 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_8_15') is-invalid @enderror"
                                            id="editor363" name="element_kuk_8_15"
                                            rows="5">{{ $edit->element_kuk_8_15 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_8_16') is-invalid @enderror"
                                            id="editor364" name="element_kuk_8_16"
                                            rows="5">{{ $edit->element_kuk_8_16 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_8_17') is-invalid @enderror"
                                            id="editor365" name="element_kuk_8_17"
                                            rows="5">{{ $edit->element_kuk_8_17 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_8_18') is-invalid @enderror"
                                            id="editor367" name="element_kuk_8_18"
                                            rows="5">{{ $edit->element_kuk_8_18 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_8_19') is-invalid @enderror"
                                            id="editor368" name="element_kuk_8_19"
                                            rows="5">{{ $edit->element_kuk_8_19 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_8_20') is-invalid @enderror"
                                            id="editor369" name="element_kuk_8_20"
                                            rows="5">{{ $edit->element_kuk_8_20 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_8_21') is-invalid @enderror"
                                            id="editor370" name="element_kuk_8_21"
                                            rows="5">{{ $edit->element_kuk_8_21 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_8_22') is-invalid @enderror"
                                            id="editor371" name="element_kuk_8_22"
                                            rows="5">{{ $edit->element_kuk_8_22 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_8_23') is-invalid @enderror"
                                            id="editor372" name="element_kuk_8_23"
                                            rows="5">{{ $edit->element_kuk_8_23 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_8_24') is-invalid @enderror"
                                            id="editor373" name="element_kuk_8_24"
                                            rows="5">{{ $edit->element_kuk_8_24 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_8_25') is-invalid @enderror"
                                            id="editor374" name="element_kuk_8_25"
                                            rows="5">{{ $edit->element_kuk_8_25 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_8_26') is-invalid @enderror"
                                            id="editor375" name="element_kuk_8_26"
                                            rows="5">{{ $edit->element_kuk_8_26 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_8_27') is-invalid @enderror"
                                            id="editor376" name="element_kuk_8_27"
                                            rows="5">{{ $edit->element_kuk_8_27 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_8_28') is-invalid @enderror"
                                            id="editor377" name="element_kuk_8_28"
                                            rows="5">{{ $edit->element_kuk_8_28 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_8_29') is-invalid @enderror"
                                            id="editor378" name="element_kuk_8_29"
                                            rows="5">{{ $edit->element_kuk_8_29 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_8_30') is-invalid @enderror"
                                            id="editor379" name="element_kuk_8_30"
                                            rows="5">{{ $edit->element_kuk_8_30 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_8_31') is-invalid @enderror"
                                            id="editor380" name="element_kuk_8_31"
                                            rows="5">{{ $edit->element_kuk_8_31 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_8_32') is-invalid @enderror"
                                            id="editor381" name="element_kuk_8_32"
                                            rows="5">{{ $edit->element_kuk_8_32 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_8_33') is-invalid @enderror"
                                            id="editor382" name="element_kuk_8_33"
                                            rows="5">{{ $edit->element_kuk_8_33 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_8_34') is-invalid @enderror"
                                            id="editor383" name="element_kuk_8_34"
                                            rows="5">{{ $edit->element_kuk_8_34 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_8_35') is-invalid @enderror"
                                            id="editor384" name="element_kuk_8_35"
                                            rows="5">{{ $edit->element_kuk_8_35 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_8_36') is-invalid @enderror"
                                            id="editor385" name="element_kuk_8_36"
                                            rows="5">{{ $edit->element_kuk_8_36 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_8_37') is-invalid @enderror"
                                            id="editor386" name="element_kuk_8_37"
                                            rows="5">{{ $edit->element_kuk_8_37 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_8_38') is-invalid @enderror"
                                            id="editor387" name="element_kuk_8_38"
                                            rows="5">{{ $edit->element_kuk_8_38 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_8_39') is-invalid @enderror"
                                            id="editor388" name="element_kuk_8_39"
                                            rows="5">{{ $edit->element_kuk_8_39 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_8_40') is-invalid @enderror"
                                            id="editor389" name="element_kuk_8_40"
                                            rows="5">{{ $edit->element_kuk_8_40 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_8_41') is-invalid @enderror"
                                            id="editor390" name="element_kuk_8_41"
                                            rows="5">{{ $edit->element_kuk_8_41 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_8_42') is-invalid @enderror"
                                            id="editor391" name="element_kuk_8_42"
                                            rows="5">{{ $edit->element_kuk_8_42 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_8_43') is-invalid @enderror"
                                            id="editor392" name="element_kuk_8_43"
                                            rows="5">{{ $edit->element_kuk_8_43 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_8_44') is-invalid @enderror"
                                            id="editor393" name="element_kuk_8_44"
                                            rows="5">{{ $edit->element_kuk_8_44 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_8_45') is-invalid @enderror"
                                            id="editor394" name="element_kuk_8_45"
                                            rows="5">{{ $edit->element_kuk_8_45 }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card accordion-item">
                            <h2 class="accordion-header" id="headingNine">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#accordionNine" aria-expanded="false" aria-controls="accordionNine">
                                    Kode Unit & Kompetensi </button>
                            </h2>
                            <div id="accordionNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Kode</label>
                                            <input type="text" id="plFirstName" name="kode9" class="form-control"
                                                placeholder="Masukan Kode" value="{{ $edit->kompetensi->kode9 }}" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Unit Kompetensi</label>
                                            <input type="text" id="plFirstName" name="unit9" class="form-control"
                                                placeholder="Masukan Unit Kompetensi"
                                                value="{{ $edit->kompetensi->unit_kompetensi9}}" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor89" name="element_kuk_9_01"
                                            rows="5">{{ $edit->element_kuk_9_01 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor90" name="element_kuk_9_02"
                                            rows="5">{{ $edit->element_kuk_9_02 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor91" name="element_kuk_9_03"
                                            rows="5">{{ $edit->element_kuk_9_03 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor92" name="element_kuk_9_04"
                                            rows="5">{{ $edit->element_kuk_9_04 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor93" name="element_kuk_9_05"
                                            rows="5">{{ $edit->element_kuk_9_05 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor94" name="element_kuk_9_06"
                                            rows="5">{{ $edit->element_kuk_9_06 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor95" name="element_kuk_9_07"
                                            rows="5">{{ $edit->element_kuk_9_07 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor96" name="element_kuk_9_08"
                                            rows="5">{{ $edit->element_kuk_9_08 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor97" name="element_kuk_9_09"
                                            rows="5">{{ $edit->element_kuk_9_09 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor98" name="element_kuk_9_10"
                                            rows="5">{{ $edit->element_kuk_9_10 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor99" name="element_kuk_9_11"
                                            rows="5">{{ $edit->element_kuk_9_11 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_9_12') is-invalid @enderror"
                                            id="editor395" name="element_kuk_9_12"
                                            rows="5">{{ $edit->element_kuk_9_12 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_9_13') is-invalid @enderror"
                                            id="editor396" name="element_kuk_9_13"
                                            rows="5">{{ $edit->element_kuk_9_13 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_9_14') is-invalid @enderror"
                                            id="editor397" name="element_kuk_9_14"
                                            rows="5">{{ $edit->element_kuk_9_14 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_9_15') is-invalid @enderror"
                                            id="editor398" name="element_kuk_9_15"
                                            rows="5">{{ $edit->element_kuk_9_15 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_9_16') is-invalid @enderror"
                                            id="editor399" name="element_kuk_9_16"
                                            rows="5">{{ $edit->element_kuk_9_16 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_9_17') is-invalid @enderror"
                                            id="editor400" name="element_kuk_9_17"
                                            rows="5">{{ $edit->element_kuk_9_17 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_9_18') is-invalid @enderror"
                                            id="editor401" name="element_kuk_9_18"
                                            rows="5">{{ $edit->element_kuk_9_18 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_9_19') is-invalid @enderror"
                                            id="editor402" name="element_kuk_9_19"
                                            rows="5">{{ $edit->element_kuk_9_19 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_9_20') is-invalid @enderror"
                                            id="editor403" name="element_kuk_9_20"
                                            rows="5">{{ $edit->element_kuk_9_20 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_9_21') is-invalid @enderror"
                                            id="editor404" name="element_kuk_9_21"
                                            rows="5">{{ $edit->element_kuk_9_21 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_9_22') is-invalid @enderror"
                                            id="editor405" name="element_kuk_9_22"
                                            rows="5">{{ $edit->element_kuk_9_22 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_9_23') is-invalid @enderror"
                                            id="editor406" name="element_kuk_9_23"
                                            rows="5">{{ $edit->element_kuk_9_23 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_9_24') is-invalid @enderror"
                                            id="editor407" name="element_kuk_9_24"
                                            rows="5">{{ $edit->element_kuk_9_24 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_9_25') is-invalid @enderror"
                                            id="editor408" name="element_kuk_9_25"
                                            rows="5">{{ $edit->element_kuk_9_25 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_9_26') is-invalid @enderror"
                                            id="editor409" name="element_kuk_9_26"
                                            rows="5">{{ $edit->element_kuk_9_26 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_9_27') is-invalid @enderror"
                                            id="editor410" name="element_kuk_9_27"
                                            rows="5">{{ $edit->element_kuk_9_27 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_9_28') is-invalid @enderror"
                                            id="editor411" name="element_kuk_9_28"
                                            rows="5">{{ $edit->element_kuk_9_28 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_9_29') is-invalid @enderror"
                                            id="editor412" name="element_kuk_9_29"
                                            rows="5">{{ $edit->element_kuk_9_29 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_9_30') is-invalid @enderror"
                                            id="editor413" name="element_kuk_9_30"
                                            rows="5">{{ $edit->element_kuk_9_30 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_9_31') is-invalid @enderror"
                                            id="editor414" name="element_kuk_9_31"
                                            rows="5">{{ $edit->element_kuk_9_31 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_9_32') is-invalid @enderror"
                                            id="editor415" name="element_kuk_9_32"
                                            rows="5">{{ $edit->element_kuk_9_32 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_9_33') is-invalid @enderror"
                                            id="editor416" name="element_kuk_9_33"
                                            rows="5">{{ $edit->element_kuk_9_33 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_9_34') is-invalid @enderror"
                                            id="editor417" name="element_kuk_9_34"
                                            rows="5">{{ $edit->element_kuk_9_34 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_9_35') is-invalid @enderror"
                                            id="editor418" name="element_kuk_9_35"
                                            rows="5">{{ $edit->element_kuk_9_35 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_9_36') is-invalid @enderror"
                                            id="editor419" name="element_kuk_9_36"
                                            rows="5">{{ $edit->element_kuk_9_36 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_9_37') is-invalid @enderror"
                                            id="editor420" name="element_kuk_9_37"
                                            rows="5">{{ $edit->element_kuk_9_37 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_9_38') is-invalid @enderror"
                                            id="editor421" name="element_kuk_9_38"
                                            rows="5">{{ $edit->element_kuk_9_38 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_9_39') is-invalid @enderror"
                                            id="editor422" name="element_kuk_9_39"
                                            rows="5">{{ $edit->element_kuk_9_39 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_9_40') is-invalid @enderror"
                                            id="editor423" name="element_kuk_9_40"
                                            rows="5">{{ $edit->element_kuk_9_40 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_9_41') is-invalid @enderror"
                                            id="editor424" name="element_kuk_9_41"
                                            rows="5">{{ $edit->element_kuk_9_41 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_9_42') is-invalid @enderror"
                                            id="editor425" name="element_kuk_9_42"
                                            rows="5">{{ $edit->element_kuk_9_42 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_9_43') is-invalid @enderror"
                                            id="editor426" name="element_kuk_9_43"
                                            rows="5">{{ $edit->element_kuk_9_43 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_9_44') is-invalid @enderror"
                                            id="editor427" name="element_kuk_9_44"
                                            rows="5">{{ $edit->element_kuk_9_44 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_9_45') is-invalid @enderror"
                                            id="editor428" name="element_kuk_9_45"
                                            rows="5">{{ $edit->element_kuk_9_45 }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card accordion-item">
                            <h2 class="accordion-header" id="headingTen">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#accordionTen" aria-expanded="false" aria-controls="accordionTen">
                                    Kode Unit & Kompetensi </button>
                            </h2>
                            <div id="accordionTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Kode</label>
                                            <input type="text" id="plFirstName" name="kode10" class="form-control"
                                                placeholder="Masukan Kode" value="{{ $edit->kompetensi->kode10 }}" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Unit Kompetensi</label>
                                            <input type="text" id="plFirstName" name="unit10" class="form-control"
                                                placeholder="Masukan Unit Kompetensi"
                                                value="{{ $edit->kompetensi->unit_kompetensi10}}" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor100" name="element_kuk_10_01"
                                            rows="5">{{ $edit->element_kuk_10_01 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor101" name="element_kuk_10_02"
                                            rows="5">{{ $edit->element_kuk_10_02 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor102" name="element_kuk_10_03"
                                            rows="5">{{ $edit->element_kuk_10_03 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor103" name="element_kuk_10_04"
                                            rows="5">{{ $edit->element_kuk_10_04 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor104" name="element_kuk_10_05"
                                            rows="5">{{ $edit->element_kuk_10_05 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor105" name="element_kuk_10_06"
                                            rows="5">{{ $edit->element_kuk_10_06 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor106" name="element_kuk_10_07"
                                            rows="5">{{ $edit->element_kuk_10_07 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor107" name="element_kuk_10_08"
                                            rows="5">{{ $edit->element_kuk_10_08 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor108" name="element_kuk_10_09"
                                            rows="5">{{ $edit->element_kuk_10_09 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor109" name="element_kuk_10_10"
                                            rows="5">{{ $edit->element_kuk_10_10 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor110" name="element_kuk_10_11"
                                            rows="5">{{ $edit->element_kuk_10_11 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_10_12') is-invalid @enderror"
                                            id="editor429" name="element_kuk_10_12"
                                            rows="5">{{ $edit->element_kuk_10_12 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_10_13') is-invalid @enderror"
                                            id="editor430" name="element_kuk_10_13"
                                            rows="5">{{ $edit->element_kuk_10_13 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_10_14') is-invalid @enderror"
                                            id="editor431" name="element_kuk_10_14"
                                            rows="5">{{ $edit->element_kuk_10_14 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_10_15') is-invalid @enderror"
                                            id="editor432" name="element_kuk_10_15"
                                            rows="5">{{ $edit->element_kuk_10_15 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_10_16') is-invalid @enderror"
                                            id="editor433" name="element_kuk_10_16"
                                            rows="5">{{ $edit->element_kuk_10_16 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_10_17') is-invalid @enderror"
                                            id="editor434" name="element_kuk_10_17"
                                            rows="5">{{ $edit->element_kuk_10_17 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_10_18') is-invalid @enderror"
                                            id="editor435" name="element_kuk_10_18"
                                            rows="5">{{ $edit->element_kuk_10_18 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_10_19') is-invalid @enderror"
                                            id="editor436" name="element_kuk_10_19"
                                            rows="5">{{ $edit->element_kuk_10_19 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_10_20') is-invalid @enderror"
                                            id="editor437" name="element_kuk_10_20"
                                            rows="5">{{ $edit->element_kuk_10_20 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_10_21') is-invalid @enderror"
                                            id="editor438" name="element_kuk_10_21"
                                            rows="5">{{ $edit->element_kuk_10_21 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_10_22') is-invalid @enderror"
                                            id="editor439" name="element_kuk_10_22"
                                            rows="5">{{ $edit->element_kuk_10_22 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_10_23') is-invalid @enderror"
                                            id="editor440" name="element_kuk_10_23"
                                            rows="5">{{ $edit->element_kuk_10_23 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_10_24') is-invalid @enderror"
                                            id="editor441" name="element_kuk_10_24"
                                            rows="5">{{ $edit->element_kuk_10_24 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_10_25') is-invalid @enderror"
                                            id="editor442" name="element_kuk_10_25"
                                            rows="5">{{ $edit->element_kuk_10_25 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_10_26') is-invalid @enderror"
                                            id="editor443" name="element_kuk_10_26"
                                            rows="5">{{ $edit->element_kuk_10_26 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_10_27') is-invalid @enderror"
                                            id="editor444" name="element_kuk_10_27"
                                            rows="5">{{ $edit->element_kuk_10_27 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_10_28') is-invalid @enderror"
                                            id="editor445" name="element_kuk_10_28"
                                            rows="5">{{ $edit->element_kuk_10_28 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_10_29') is-invalid @enderror"
                                            id="editor446" name="element_kuk_10_29"
                                            rows="5">{{ $edit->element_kuk_10_29 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_10_30') is-invalid @enderror"
                                            id="editor447" name="element_kuk_10_30"
                                            rows="5">{{ $edit->element_kuk_10_30 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_10_31') is-invalid @enderror"
                                            id="editor448" name="element_kuk_10_31"
                                            rows="5">{{ $edit->element_kuk_10_31 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_10_32') is-invalid @enderror"
                                            id="editor449" name="element_kuk_10_32"
                                            rows="5">{{ $edit->element_kuk_10_32 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_10_33') is-invalid @enderror"
                                            id="editor450" name="element_kuk_10_33"
                                            rows="5">{{ $edit->element_kuk_10_33 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_10_34') is-invalid @enderror"
                                            id="editor451" name="element_kuk_10_34"
                                            rows="5">{{ $edit->element_kuk_10_34 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_10_35') is-invalid @enderror"
                                            id="editor452" name="element_kuk_10_35"
                                            rows="5">{{ $edit->element_kuk_10_35 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_10_36') is-invalid @enderror"
                                            id="editor453" name="element_kuk_10_36"
                                            rows="5">{{ $edit->element_kuk_10_36 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_10_37') is-invalid @enderror"
                                            id="editor454" name="element_kuk_10_37"
                                            rows="5">{{ $edit->element_kuk_10_37 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_10_38') is-invalid @enderror"
                                            id="editor455" name="element_kuk_10_38"
                                            rows="5">{{ $edit->element_kuk_10_38 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_10_39') is-invalid @enderror"
                                            id="editor456" name="element_kuk_10_39"
                                            rows="5">{{ $edit->element_kuk_10_39 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_10_40') is-invalid @enderror"
                                            id="editor457" name="element_kuk_10_40"
                                            rows="5">{{ $edit->element_kuk_10_40 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_10_41') is-invalid @enderror"
                                            id="editor458" name="element_kuk_10_41"
                                            rows="5">{{ $edit->element_kuk_10_41 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_10_42') is-invalid @enderror"
                                            id="editor459" name="element_kuk_10_42"
                                            rows="5">{{ $edit->element_kuk_10_42 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_10_43') is-invalid @enderror"
                                            id="editor460" name="element_kuk_10_43"
                                            rows="5">{{ $edit->element_kuk_10_43 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_10_44') is-invalid @enderror"
                                            id="editor461" name="element_kuk_10_44"
                                            rows="5">{{ $edit->element_kuk_10_44 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_10_45') is-invalid @enderror"
                                            id="editor462" name="element_kuk_10_45"
                                            rows="5">{{ $edit->element_kuk_10_45 }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card accordion-item">
                            <h2 class="accordion-header" id="headingEleven">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#accordionEleven" aria-expanded="false"
                                    aria-controls="accordionEleven">
                                    Kode Unit & Kompetensi </button>
                            </h2>
                            <div id="accordionEleven" class="accordion-collapse collapse"
                                aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Kode</label>
                                            <input type="text" id="plFirstName" name="kode11" class="form-control"
                                                placeholder="Masukan Kode" value="{{ $edit->kompetensi->kode11 }}" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Unit Kompetensi</label>
                                            <input type="text" id="plFirstName" name="unit11" class="form-control"
                                                placeholder="Masukan Unit Kompetensi"
                                                value="{{ $edit->kompetensi->unit_kompetensi11}}" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor111" name="element_kuk_11_01"
                                            rows="5">{{ $edit->element_kuk_11_01 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor112" name="element_kuk_11_02"
                                            rows="5">{{ $edit->element_kuk_11_02 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor113" name="element_kuk_11_03"
                                            rows="5">{{ $edit->element_kuk_11_03 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor114" name="element_kuk_11_04"
                                            rows="5">{{ $edit->element_kuk_11_04 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor115" name="element_kuk_11_05"
                                            rows="5">{{ $edit->element_kuk_11_05 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor116" name="element_kuk_11_06"
                                            rows="5">{{ $edit->element_kuk_11_06 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor117" name="element_kuk_11_07"
                                            rows="5">{{ $edit->element_kuk_11_07 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor118" name="element_kuk_11_08"
                                            rows="5">{{ $edit->element_kuk_11_08 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor119" name="element_kuk_11_09"
                                            rows="5">{{ $edit->element_kuk_11_09 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor120" name="element_kuk_11_10"
                                            rows="5">{{ $edit->element_kuk_11_10 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor121" name="element_kuk_11_11"
                                            rows="5">{{ $edit->element_kuk_11_11 }}</textarea>
                                    </div>

                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_11_12') is-invalid @enderror"
                                            id="editor463" name="element_kuk_11_12"
                                            rows="5">{{ $edit->element_kuk_11_12 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_11_13') is-invalid @enderror"
                                            id="editor464" name="element_kuk_11_13"
                                            rows="5">{{ $edit->element_kuk_11_13 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_11_14') is-invalid @enderror"
                                            id="editor465" name="element_kuk_11_14"
                                            rows="5">{{ $edit->element_kuk_11_14 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_11_15') is-invalid @enderror"
                                            id="editor466" name="element_kuk_11_15"
                                            rows="5">{{ $edit->element_kuk_11_15 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_11_16') is-invalid @enderror"
                                            id="editor467" name="element_kuk_11_16"
                                            rows="5">{{ $edit->element_kuk_11_16 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_11_17') is-invalid @enderror"
                                            id="editor468" name="element_kuk_11_17"
                                            rows="5">{{ $edit->element_kuk_11_17 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_11_18') is-invalid @enderror"
                                            id="editor469" name="element_kuk_11_18"
                                            rows="5">{{ $edit->element_kuk_11_18 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_11_19') is-invalid @enderror"
                                            id="editor470" name="element_kuk_11_19"
                                            rows="5">{{ $edit->element_kuk_11_19 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_11_20') is-invalid @enderror"
                                            id="editor471" name="element_kuk_11_20"
                                            rows="5">{{ $edit->element_kuk_11_20 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_11_21') is-invalid @enderror"
                                            id="editor472" name="element_kuk_11_21"
                                            rows="5">{{ $edit->element_kuk_11_21 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_11_22') is-invalid @enderror"
                                            id="editor473" name="element_kuk_11_22"
                                            rows="5">{{ $edit->element_kuk_11_22 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_11_23') is-invalid @enderror"
                                            id="editor474" name="element_kuk_11_23"
                                            rows="5">{{ $edit->element_kuk_11_23 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_11_24') is-invalid @enderror"
                                            id="editor475" name="element_kuk_11_24"
                                            rows="5">{{ $edit->element_kuk_11_24 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_11_25') is-invalid @enderror"
                                            id="editor476" name="element_kuk_11_25"
                                            rows="5">{{ $edit->element_kuk_11_25 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_11_26') is-invalid @enderror"
                                            id="editor477" name="element_kuk_11_26"
                                            rows="5">{{ $edit->element_kuk_11_26 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_11_27') is-invalid @enderror"
                                            id="editor478" name="element_kuk_11_27"
                                            rows="5">{{ $edit->element_kuk_11_27 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_11_28') is-invalid @enderror"
                                            id="editor479" name="element_kuk_11_28"
                                            rows="5">{{ $edit->element_kuk_11_28 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_11_29') is-invalid @enderror"
                                            id="editor480" name="element_kuk_11_29"
                                            rows="5">{{ $edit->element_kuk_11_29 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_11_30') is-invalid @enderror"
                                            id="editor481" name="element_kuk_11_30"
                                            rows="5">{{ $edit->element_kuk_11_30 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_11_31') is-invalid @enderror"
                                            id="editor482" name="element_kuk_11_31"
                                            rows="5">{{ $edit->element_kuk_11_31 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_11_32') is-invalid @enderror"
                                            id="editor483" name="element_kuk_11_32"
                                            rows="5">{{ $edit->element_kuk_11_32 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_11_33') is-invalid @enderror"
                                            id="editor484" name="element_kuk_11_33"
                                            rows="5">{{ $edit->element_kuk_11_33 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_11_34') is-invalid @enderror"
                                            id="editor485" name="element_kuk_11_34"
                                            rows="5">{{ $edit->element_kuk_11_34 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_11_35') is-invalid @enderror"
                                            id="editor486" name="element_kuk_11_35"
                                            rows="5">{{ $edit->element_kuk_11_35 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_11_36') is-invalid @enderror"
                                            id="editor487" name="element_kuk_11_36"
                                            rows="5">{{ $edit->element_kuk_11_36 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_11_37') is-invalid @enderror"
                                            id="editor488" name="element_kuk_11_37"
                                            rows="5">{{ $edit->element_kuk_11_37 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_11_38') is-invalid @enderror"
                                            id="editor489" name="element_kuk_11_38"
                                            rows="5">{{ $edit->element_kuk_11_38 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_11_39') is-invalid @enderror"
                                            id="editor490" name="element_kuk_11_39"
                                            rows="5">{{ $edit->element_kuk_11_39 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_11_40') is-invalid @enderror"
                                            id="editor491" name="element_kuk_11_40"
                                            rows="5">{{ $edit->element_kuk_11_40 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_11_41') is-invalid @enderror"
                                            id="editor492" name="element_kuk_11_41"
                                            rows="5">{{ $edit->element_kuk_11_41 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_11_42') is-invalid @enderror"
                                            id="editor493" name="element_kuk_11_42"
                                            rows="5">{{ $edit->element_kuk_11_42 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_11_43') is-invalid @enderror"
                                            id="editor494" name="element_kuk_11_43"
                                            rows="5">{{ $edit->element_kuk_11_43 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_11_44') is-invalid @enderror"
                                            id="editor495" name="element_kuk_11_44"
                                            rows="5">{{ $edit->element_kuk_11_44 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_11_45') is-invalid @enderror"
                                            id="editor496" name="element_kuk_11_45"
                                            rows="5">{{ $edit->element_kuk_11_45 }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="mb-3 mt-3">
                    <button type="submit" class="btn btn-primary float-end ms-2">Submit</button>
                    {{-- <a href="{{ route('kompetensi.index') }}" class="btn btn-secondary float-end ">Back</a> --}}
            </form>
        </div>
    </div>
</div>
<!-- /Invoice table -->
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script src="{{ asset('assets/js/ClassicEditor.js') }}"></script>
@endsection