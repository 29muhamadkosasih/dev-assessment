@extends('layouts/master')
@section('title', 'APL 01')
@section('content')
<div class="col">
    <div class="card mb">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#form-tabs-account" role="tab"
                        aria-selected="false" tabindex="-1">
                        Data Diri
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#form-tabs-personal" role="tab"
                        aria-selected="true">
                        Data Pekerjaan
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#form-tabs-social" role="tab"
                        aria-selected="false" tabindex="-1">
                        Upload Data
                    </button>
                </li>
            </ul>
        </div>
        <form action="{{ route('apl_01.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="tab-content">
                <div class="tab-pane fade" id="form-tabs-personal" role="tabpanel">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label class="form-label" for="plFirstName">Nama Institusi/Perusahaan</label>
                            <input type="text" id="plFirstName" name="nama_perusahaan"
                                class="form-control @error('nama_perusahaan') is-invalid @enderror"
                                placeholder="Masukan Nama Lengkap" value="{{ old('nama_perusahaan') }}" />
                            @error('nama_perusahaan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="plFirstName">Jabatan</label>
                            <input type="text" id="plFirstName" name="jabatan"
                                class="form-control @error('jabatan') is-invalid @enderror"
                                placeholder="Masukan Nama Lengkap" value="{{ old('jabatan') }}" />
                            @error('jabatan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="plEmail">Email Institusi/Perusahaan</label>
                            <input type="text" id="plEmail" name="email_perusahaan"
                                class="form-control @error('email_perusahaan') is-invalid @enderror"
                                placeholder="john.doe@example.com" value="{{ old('email_perusahaan') }}" />
                            @error('email_perusahaan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="plFirstName">No. Telefon Institusi/Perusahaan</label>
                            <input type="text" id="plFirstName" name="no_hp_perusahaan"
                                class="form-control @error('no_hp_perusahaan') is-invalid @enderror"
                                placeholder="08590210231" value="{{ old('no_hp_perusahaan') }}" />
                            @error('no_hp_perusahaan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-sm-12">
                            <label class="form-label" for="plAddress">Alamat Institusi/Perusahaan</label>
                            <textarea id="plAddress" name="alamat_perusahaan"
                                class="form-control @error('alamat_perusahaan') is-invalid @enderror" rows="2"
                                placeholder="12, Business Park">{{ old('alamat_perusahaan') }}</textarea>
                            @error('alamat_perusahaan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                </div>

                <div class="tab-pane fade active show" id="form-tabs-account" role="tabpanel">
                    <div class="row g-3">
                        <div class="col-sm-12">
                            <label class="form-label" for="plFirstName">Skema</label>
                            <select class="form-select @error('kompetensi_id') is-invalid @enderror" id="selectDefault"
                                name="kompetensi_id" value="{{ old('kompetensi_id') }}">
                                <option selected>Open this select</option>
                                @foreach ($kompetensi as $key => $value)
                                <option value="{{ $value->id }}">
                                    {{ $value->skema->nama_skema }}
                                </option>
                                @endforeach
                            </select>
                            @error('kompetensi_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="plFirstName">Nama Lengkap</label>
                            <input type="text" id="plFirstName" name="nama_lengkap_id" class="form-control"
                                placeholder="Masukan Nama Lengkap" value="{{ Auth::user()->name }}" readonly />

                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="plLastName">Tempat Lahir</label>
                            <input type="text" id="plLastName" name="tempat_lahir"
                                class="form-control @error('tempat_lahir') is-invalid @enderror"
                                placeholder="Masukan Tempat Lahir" value="{{ old('tempat_lahir') }}" />
                            @error('tempat_lahir')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="plLastName">Tanggal Lahir</label>
                            <input type="date" id="plLastName" name="tanggal_lahir"
                                class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                placeholder="Masukan Tanggal Lahir" value="{{ old('tanggal_lahir') }}" />
                            @error('tanggal_lahir')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="plMaintenencePer">Jenis Kelamin</label>
                            <select id="plMaintenencePer" name="jenis_kelamin"
                                class="form-select @error('jenis_kelamin') is-invalid @enderror">
                                <option selected>Open this select</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Wanita">Wanita</option>
                            </select>
                            @error('jenis_kelamin')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="plEmail">Email</label>
                            <input type="text" id="plEmail" name="email_id" class="form-control"
                                placeholder="john.doe@example.com" value="{{ Auth::user()->email }}" readonly />
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="plFirstName">No. Hp</label>
                            <input type="text" id="plFirstName" name="no_hp"
                                class="form-control @error('no_hp') is-invalid @enderror" placeholder="08590210231"
                                value="{{ old('no_hp') }}" />
                            @error('no_hp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="plFirstName">Pendidikan Terakhir</label>
                            <select class="form-select @error('pendidikan_terakhir') is-invalid @enderror"
                                id="selectDefault" name="pendidikan_terakhir" value="{{ old('pendidikan_terakhir') }}">
                                <option selected>Open this select</option>
                                <option value="SD/SEDERAJAT">SD/SEDERAJAT</option>
                                <option value="SMP/SEDERAJAT">SMP/SEDERAJAT</option>
                                <option value="SMA/SEDERAJAT">SMA/SEDERAJAT</option>
                                <option value="D1 (Diploma 1)">D1 (Diploma 1)</option>
                                <option value="D2 (Diploma 2)">D2 (Diploma 2)</option>
                                <option value="D3 (Diploma 3)">D3 (Diploma 3)</option>
                                <option value="S1 (Sarjana)">S1 (Sarjana)</option>
                                <option value="S2 (Magister/Master)">S2 (Magister/Master)</option>
                                <option value="S3 (Doktor/Ph.D.)">S3 (Doktor/Ph.D.)</option>
                            </select>
                            @error('pendidikan_terakhir')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="plFirstName">Kebangsaan</label>
                            <select class="form-select @error('kebangsaan') is-invalid @enderror" id="selectDefault"
                                name="kebangsaan" value="{{ old('kebangsaan') }}">
                                <option selected>Open this select</option>
                                <option value="Indonesia">Indonesia</option>
                            </select>
                            @error('kebangsaan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-sm-12">
                            <label class="form-label" for="plAddress">Alamat</label>
                            <textarea id="plAddress" name="alamat"
                                class="form-control @error('alamat') is-invalid @enderror" rows="2"
                                placeholder="12, Business Park">{{ old('alamat') }}</textarea>
                            @error('alamat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="form-tabs-social" role="tabpanel">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label class="form-label d-block" for="plBathrooms">KTP</label>
                            <input type="file" id="plBathrooms" name="ktp"
                                class="form-control @error('ktp') is-invalid @enderror" placeholder="4" required />
                            @error('ktp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="plFloorNo">Surat Keterangan Perusahaan</label>
                            <input type="file" id="plFloorNo" name="surat_keterangan_perusahaan"
                                class="form-control @error('surat_keterangan_perusahaan') is-invalid @enderror"
                                placeholder="12" required />
                            @error('surat_keterangan_perusahaan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label d-block" for="plBedrooms">Ijazah</label>
                            <input type="file" id="plBedrooms" name="ijazah"
                                class="form-control @error('ijazah') is-invalid @enderror" placeholder="3" required />
                            @error('ijazah')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label d-block" for="plBathrooms">Sertikat Pendukung</label>
                            <input type="file" id="plBathrooms" name="sertifikat_pendukung"
                                class="form-control @error('sertifikat_pendukung') is-invalid @enderror" placeholder="4"
                                required />
                            @error('sertifikat_pendukung')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label d-block" for="plBathrooms">CV</label>
                            <input type="file" id="plBathrooms" name="cv"
                                class="form-control @error('cv') is-invalid @enderror" placeholder="4" required />
                            @error('cv')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label d-block" for="plBathrooms">Sertikat Pelatihan CBT</label>
                            <input type="file" id="plBathrooms" name="p_cbt"
                                class="form-control @error('p_cbt') is-invalid @enderror" placeholder="4" required />
                            @error('p_cbt')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label d-block" for="plBathrooms">Tanda Tangan &nbsp; * file JPEG </label>
                            <input type="file" id="plBathrooms" name="ttd"
                                class="form-control @error('ttd') is-invalid @enderror" placeholder="4" required />
                            @error('ttd')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                    </div>
                    <div class="col-12 d-flex justify-content-end mt-4">
                        <button class="btn btn-success btn-submit">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection