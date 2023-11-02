@extends('layouts/master')
@section('title', 'FK AK-06')
@section('content')
<div class="col-xl-12">
    <div class="card">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-auto me-auto ">
                    <h5 class="mb-0">FK.AK-05. LAPORAN ASESMEN</h5>
                </div>
            </div>
            <form action="{{ route('fr_ak_05.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label class="form-label" for="plLastName">Tanggal Asesmen</label>
                        <input type="date" name="tgl_asesmen" id="" class="form-control">
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="plLastName">Nama Asesor</label>
                        <select class="form-select @error('asesor_id') is-invalid @enderror" id="selectDefault"
                            name="asesor_id" value="{{ old('asesor_id') }}">
                            <option>Open this select</option>
                            @foreach ($asesor as $key => $value)
                            <option value="{{ $value->id }}">
                                {{ $value->nama }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="plLastName">Nama Skema</label>
                        <select class="form-select @error('kompetensi_id') is-invalid @enderror" id="selectDefault"
                            name="kompetensi_id" value="{{ old('kompetensi_id') }}">
                            <option>Open this select</option>
                            @foreach ($kompetensi as $key => $value)
                            <option value="{{ $value->id }}">
                                {{ $value->skema->nama_skema }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-sm-6">
                        <label class="form-label" for="plMaintenencePer">TUK</label>
                        <select class="form-select @error('tuk') is-invalid @enderror" id="selectDefault" name="tuk"
                            value="{{ old('tuk') }}" required>
                            <option>Open this select</option>
                            <option value="Sewaktu">Sewaktu</option>
                            <option value="Tempat Kerja">Tempat Kerja</option>
                            <option value="Mandiri">Mandiri</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="plEmail"> Nama Asesi 1</label>
                        <select class="form-select @error('answer_apl02_id') is-invalid @enderror" id="selectDefault"
                            name="answer_apl02_id" value="{{ old('answer_apl02_id') }}">
                            <option value="">Open this select</option>
                            @foreach ($apl_02 as $key => $value)
                            <option value="{{ $value->id }}">
                                {{ $value->apl02->personal_detail->no_pendaftaran}} -
                                {{ $value->apl02->personal_detail->nama_lengkap->name}} -
                                {{ $value->apl02->kompetensi02->kompetensi->skema->nama_skema}}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-sm-6">
                        <label class="form-label" for="plEmail">Nama Asesi 2</label>
                        <select class="form-select @error('answer_apl02_id_2') is-invalid @enderror" id="selectDefault"
                            name="answer_apl02_id_2" value="{{ old('answer_apl02_id_2') }}">
                            <option value="">Open this select</option> @foreach ($apl_02 as $key => $value)
                            <option value="{{ $value->id }}">
                                {{ $value->apl02->personal_detail->no_pendaftaran}} -
                                {{ $value->apl02->personal_detail->nama_lengkap->name}} -
                                {{ $value->apl02->kompetensi02->kompetensi->skema->nama_skema}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="plEmail">Nama Asesi 3</label>
                        <select class="form-select @error('answer_apl02_id_3') is-invalid @enderror" id="selectDefault"
                            name="answer_apl02_id_3" value="{{ old('answer_apl02_id_3') }}">
                            <option value="">Open this select</option> @foreach ($apl_02 as $key => $value)
                            <option value="{{ $value->id }}">
                                {{ $value->apl02->personal_detail->no_pendaftaran}} -
                                {{ $value->apl02->personal_detail->nama_lengkap->name}} -
                                {{ $value->apl02->kompetensi02->kompetensi->skema->nama_skema}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="plEmail">Nama Asesi 4</label>
                        <select class="form-select @error('answer_apl02_id_4') is-invalid @enderror" id="selectDefault"
                            name="answer_apl02_id_4" value="{{ old('answer_apl02_id_4') }}">
                            <option value="">Open this select</option> @foreach ($apl_02 as $key => $value)
                            <option value="{{ $value->id }}">
                                {{ $value->apl02->personal_detail->no_pendaftaran}} -
                                {{ $value->apl02->personal_detail->nama_lengkap->name}} -
                                {{ $value->apl02->kompetensi02->kompetensi->skema->nama_skema}}
                            </option>
                            @endforeach
                        </select>
                    </div>


                    <div class="col-sm-6">
                        <label class="form-label" for="plEmail">Nama Asesi 5</label>
                        <select class="form-select @error('answer_apl02_id_5') is-invalid @enderror" id="selectDefault"
                            name="answer_apl02_id_5" value="{{ old('answer_apl02_id_5') }}">
                            <option value="">Open this select</option> @foreach ($apl_02 as $key => $value)
                            <option value="{{ $value->id }}">
                                {{ $value->apl02->personal_detail->no_pendaftaran}} -
                                {{ $value->apl02->personal_detail->nama_lengkap->name}} -
                                {{ $value->apl02->kompetensi02->kompetensi->skema->nama_skema}}
                            </option>
                            @endforeach
                        </select>
                    </div>


                    <div class="col-sm-6">
                        <label class="form-label" for="plEmail">Nama Asesi 6</label>
                        <select class="form-select @error('answer_apl02_id_6') is-invalid @enderror" id="selectDefault"
                            name="answer_apl02_id_6" value="{{ old('answer_apl02_id_6') }}">
                            <option value="">Open this select</option> @foreach ($apl_02 as $key => $value)
                            <option value="{{ $value->id }}">
                                {{ $value->apl02->personal_detail->no_pendaftaran}} -
                                {{ $value->apl02->personal_detail->nama_lengkap->name}} -
                                {{ $value->apl02->kompetensi02->kompetensi->skema->nama_skema}}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-sm-6">
                        <label class="form-label" for="plEmail">Nama Asesi 7</label>
                        <select class="form-select @error('answer_apl02_id_7') is-invalid @enderror" id="selectDefault"
                            name="answer_apl02_id_7" value="{{ old('answer_apl02_id_7') }}">
                            <option value="">Open this select</option> @foreach ($apl_02 as $key => $value)
                            <option value="{{ $value->id }}">
                                {{ $value->apl02->personal_detail->no_pendaftaran}} -
                                {{ $value->apl02->personal_detail->nama_lengkap->name}} -
                                {{ $value->apl02->kompetensi02->kompetensi->skema->nama_skema}}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-sm-6">
                        <label class="form-label" for="plEmail">Nama Asesi 8</label>
                        <select class="form-select @error('answer_apl02_id_8') is-invalid @enderror" id="selectDefault"
                            name="answer_apl02_id_8" value="{{ old('answer_apl02_id_8') }}">
                            <option value="">Open this select</option> @foreach ($apl_02 as $key => $value)
                            <option value="{{ $value->id }}">
                                {{ $value->apl02->personal_detail->no_pendaftaran}} -
                                {{ $value->apl02->personal_detail->nama_lengkap->name}} -
                                {{ $value->apl02->kompetensi02->kompetensi->skema->nama_skema}}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-sm-6">
                        <label class="form-label" for="plEmail">Nama Asesi 9</label>
                        <select class="form-select @error('answer_apl02_id_9') is-invalid @enderror" id="selectDefault"
                            name="answer_apl02_id_9" value="{{ old('answer_apl02_id_9') }}">
                            <option value="">Open this select</option> @foreach ($apl_02 as $key => $value)
                            <option value="{{ $value->id }}">
                                {{ $value->apl02->personal_detail->no_pendaftaran}} -
                                {{ $value->apl02->personal_detail->nama_lengkap->name}} -
                                {{ $value->apl02->kompetensi02->kompetensi->skema->nama_skema}}
                            </option>
                            @endforeach
                        </select>
                    </div>


                    <div class="col-sm-6">
                        <label class="form-label" for="plEmail">Nama Asesi 10</label>
                        <select class="form-select @error('answer_apl02_id_10') is-invalid @enderror" id="selectDefault"
                            name="answer_apl02_id_10" value="{{ old('answer_apl02_id_10') }}">
                            <option value="">Open this select</option> @foreach ($apl_02 as $key => $value)
                            <option value="{{ $value->id }}">
                                {{ $value->apl02->personal_detail->no_pendaftaran}} -
                                {{ $value->apl02->personal_detail->nama_lengkap->name}} -
                                {{ $value->apl02->kompetensi02->kompetensi->skema->nama_skema}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 d-flex justify-content-end mt-4">
                        <button class="btn btn-primary btn-submit">Pengisian Laporan</button>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection