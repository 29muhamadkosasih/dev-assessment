@extends('layouts/master')

@section('title', 'Kompetensi')

@section('content')
<!-- Invoice table -->
<div class="col-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Create Kompetensi APL-02</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('kompetensi02.store') }}">
                @csrf
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label class="form-label" for="plFirstName">Nama Skema</label>
                        <select class="form-select @error('nama_skema_id') is-invalid @enderror" id="selectDefault"
                            name="nama_skema_id" value="{{ old('nama_skema_id') }}" required>
                            <option selected>Open this select</option>
                            @foreach ($nama_skema as $key => $value)
                            <option value="{{ $value->id }}">
                                {{ $value->nama_skema }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="plFirstName">No SKKNI</label>
                        <input type="text" id="plFirstName" class="form-control @error('no_skkni') is-invalid @enderror"
                            placeholder="Masukan No SKKNI" name="no_skkni" />
                    </div>
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
                                                placeholder="Masukan Kode" required />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Unit Kompetensi</label>
                                            <input type="text" id="plFirstName" name="unit"
                                                class="form-control @error('unit') is-invalid @enderror"
                                                placeholder="Masukan Unit Kompetensi" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_01') is-invalid @enderror"
                                            id="editor" name="element_kuk_1_01" rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_02') is-invalid @enderror"
                                            id="editor2" name="element_kuk_1_02" rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_03') is-invalid @enderror"
                                            id="editor3" name="element_kuk_1_03" rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_04') is-invalid @enderror"
                                            id="editor4" name="element_kuk_1_04" rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_05') is-invalid @enderror"
                                            id="editor5" name="element_kuk_1_05" rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_06') is-invalid @enderror"
                                            id="editor6" name="element_kuk_1_06" rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_07') is-invalid @enderror"
                                            id="editor7" name="element_kuk_1_07" rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_08') is-invalid @enderror"
                                            id="editor8" name="element_kuk_1_08" rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_09') is-invalid @enderror"
                                            id="editor9" name="element_kuk_1_09" rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_10') is-invalid @enderror"
                                            id="editor10" name="element_kuk_1_10" rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kuk_1_11') is-invalid @enderror"
                                            id="editor11" name="element_kuk_1_11" rows="5"></textarea>
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
                                                placeholder="Masukan Kode" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Unit Kompetensi</label>
                                            <input type="text" id="plFirstName" name="unit2" class="form-control"
                                                placeholder="Masukan Unit Kompetensi" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor12" name="element_kuk_2_01"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor13" name="element_kuk_2_02"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor14" name="element_kuk_2_03"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor15" name="element_kuk_2_04"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor16" name="element_kuk_2_05"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor17" name="element_kuk_2_06"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor18" name="element_kuk_2_07"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor19" name="element_kuk_2_08"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor20" name="element_kuk_2_09"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor21" name="element_kuk_2_10"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor22" name="element_kuk_2_11"
                                            rows="5"></textarea>
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
                                                placeholder="Masukan Kode" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Unit Kompetensi</label>
                                            <input type="text" id="plFirstName" name="unit3" class="form-control"
                                                placeholder="Masukan Unit Kompetensi" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor23" name="element_kuk_3_01"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor24" name="element_kuk_3_02"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor25" name="element_kuk_3_03"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor26" name="element_kuk_3_04"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor27" name="element_kuk_3_05"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor28" name="element_kuk_3_06"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor29" name="element_kuk_3_07"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor30" name="element_kuk_3_08"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor31" name="element_kuk_3_09"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor32" name="element_kuk_3_10"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor33" name="element_kuk_3_11"
                                            rows="5"></textarea>
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
                                                placeholder="Masukan Kode" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Unit Kompetensi</label>
                                            <input type="text" id="plFirstName" name="unit4" class="form-control"
                                                placeholder="Masukan Unit Kompetensi" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor34" name="element_kuk_4_01"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor35" name="element_kuk_4_02"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor36" name="element_kuk_4_03"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor37" name="element_kuk_4_04"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor38" name="element_kuk_4_05"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor39" name="element_kuk_4_06"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor40" name="element_kuk_4_07"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor41" name="element_kuk_4_08"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor42" name="element_kuk_4_09"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor43" name="element_kuk_4_10"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor44" name="element_kuk_4_11"
                                            rows="5"></textarea>
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
                                                placeholder="Masukan Kode" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Unit Kompetensi</label>
                                            <input type="text" id="plFirstName" name="unit5" class="form-control"
                                                placeholder="Masukan Unit Kompetensi" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor45" name="element_kuk_5_01"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor46" name="element_kuk_5_02"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor47" name="element_kuk_5_03"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor48" name="element_kuk_5_04"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor49" name="element_kuk_5_05"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor50" name="element_kuk_5_06"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor51" name="element_kuk_5_07"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor52" name="element_kuk_5_08"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor53" name="element_kuk_5_09"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor54" name="element_kuk_5_10"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor55" name="element_kuk_5_11"
                                            rows="5"></textarea>
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
                                                placeholder="Masukan Kode" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Unit Kompetensi</label>
                                            <input type="text" id="plFirstName" name="unit6" class="form-control"
                                                placeholder="Masukan Unit Kompetensi" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor56" name="element_kuk_6_01"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor57" name="element_kuk_6_02"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor58" name="element_kuk_6_03"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor59" name="element_kuk_6_04"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor60" name="element_kuk_6_05"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor61" name="element_kuk_6_06"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor62" name="element_kuk_6_07"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor63" name="element_kuk_6_08"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor64" name="element_kuk_6_09"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor65" name="element_kuk_6_10"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor66" name="element_kuk_6_11"
                                            rows="5"></textarea>
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
                                                placeholder="Masukan Kode" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Unit Kompetensi</label>
                                            <input type="text" id="plFirstName" name="unit7" class="form-control"
                                                placeholder="Masukan Unit Kompetensi" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor67" name="element_kuk_7_01"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor68" name="element_kuk_7_02"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor69" name="element_kuk_7_03"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor70" name="element_kuk_7_04"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor71" name="element_kuk_7_05"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor72" name="element_kuk_7_06"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor73" name="element_kuk_7_07"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor74" name="element_kuk_7_08"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor75" name="element_kuk_7_09"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor76" name="element_kuk_7_10"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor77" name="element_kuk_7_11"
                                            rows="5"></textarea>
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
                                                placeholder="Masukan Kode" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Unit Kompetensi</label>
                                            <input type="text" id="plFirstName" name="unit8" class="form-control"
                                                placeholder="Masukan Unit Kompetensi" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor78" name="element_kuk_8_01"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor79" name="element_kuk_8_02"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor80" name="element_kuk_8_03"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor81" name="element_kuk_8_04"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor82" name="element_kuk_8_05"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor83" name="element_kuk_8_06"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor84" name="element_kuk_8_07"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor85" name="element_kuk_8_08"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor86" name="element_kuk_8_09"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor87" name="element_kuk_8_10"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor88" name="element_kuk_8_11"
                                            rows="5"></textarea>
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
                                                placeholder="Masukan Kode" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Unit Kompetensi</label>
                                            <input type="text" id="plFirstName" name="unit9" class="form-control"
                                                placeholder="Masukan Unit Kompetensi" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor89" name="element_kuk_9_01"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor90" name="element_kuk_9_02"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor91" name="element_kuk_9_03"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor92" name="element_kuk_9_04"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor93" name="element_kuk_9_05"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor94" name="element_kuk_9_06"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor95" name="element_kuk_9_07"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor96" name="element_kuk_9_08"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor97" name="element_kuk_9_09"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor98" name="element_kuk_9_10"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor99" name="element_kuk_9_11"
                                            rows="5"></textarea>
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
                                                placeholder="Masukan Kode" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Unit Kompetensi</label>
                                            <input type="text" id="plFirstName" name="unit10" class="form-control"
                                                placeholder="Masukan Unit Kompetensi" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor100" name="element_kuk_10_01"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor101" name="element_kuk_10_02"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor102" name="element_kuk_10_03"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor103" name="element_kuk_10_04"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor104" name="element_kuk_10_05"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor105" name="element_kuk_10_06"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor106" name="element_kuk_10_07"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor107" name="element_kuk_10_08"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor108" name="element_kuk_10_09"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor109" name="element_kuk_10_10"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor110" name="element_kuk_10_11"
                                            rows="5"></textarea>
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
                                                placeholder="Masukan Kode" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Unit Kompetensi</label>
                                            <input type="text" id="plFirstName" name="unit11" class="form-control"
                                                placeholder="Masukan Unit Kompetensi" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor111" name="element_kuk_11_01"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor112" name="element_kuk_11_02"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor113" name="element_kuk_11_03"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor114" name="element_kuk_11_04"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor115" name="element_kuk_11_05"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor116" name="element_kuk_11_06"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor117" name="element_kuk_11_07"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor118" name="element_kuk_11_08"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor119" name="element_kuk_11_09"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor120" name="element_kuk_11_10"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor121" name="element_kuk_11_11"
                                            rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="mb-3 mt-3">
                    <button type="submit" class="btn btn-primary float-end ms-2">Submit</button>
                    <a href="{{ route('kompetensi.index') }}" class="btn btn-secondary float-end ">Back</a>
            </form>
        </div>
    </div>
</div>
<!-- /Invoice table -->
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
		.create( document.querySelector( '#editor' ) )
		.catch( error => {
			console.error( error );
		} );

        ClassicEditor
		.create( document.querySelector( '#editor2' ) )
		.catch( error => {
			console.error( error );
		} );
        ClassicEditor
		.create( document.querySelector( '#editor3' ) )
		.catch( error => {
			console.error( error );
		} );

        ClassicEditor
		.create( document.querySelector( '#editor4' ) )
		.catch( error => {
			console.error( error );
		} );

        ClassicEditor
		.create( document.querySelector( '#editor5' ) )
		.catch( error => {
			console.error( error );
		} );

        ClassicEditor
		.create( document.querySelector( '#editor6' ) )
		.catch( error => {
			console.error( error );
		} );

        ClassicEditor
            .create(document.querySelector('#editor7'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor8'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor9'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor10'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor11'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor12'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor13'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor14'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor15'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor16'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor17'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor18'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor19'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor20'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor21'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor22'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor23'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor24'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor25'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor26'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor27'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor28'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor29'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor30'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor31'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor32'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor33'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor34'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor35'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor36'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor37'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor38'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor39'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor40'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor41'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor42'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor43'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor44'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor45'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor46'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor47'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor48'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor49'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor50'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor51'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor52'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor53'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor54'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor55'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor56'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor57'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor58'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor59'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor60'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor61'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor62'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor63'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor64'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor65'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor66'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor67'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor68'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor69'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor70'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor71'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor72'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor73'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor74'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor75'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor76'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor77'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor78'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor79'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor80'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor81'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor82'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor83'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor84'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor85'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor86'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor87'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor88'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor89'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor90'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor91'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor92'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor93'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor94'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor95'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor96'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor97'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor98'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor99'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor100'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor101'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor102'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor103'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor104'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor105'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor106'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor107'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor108'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor109'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor110'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor111'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor112'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor113'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor114'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor115'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor116'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor117'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor118'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor119'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor120'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor121'))
            .catch(error => {
                console.error(error);
            });
</script>
@endsection