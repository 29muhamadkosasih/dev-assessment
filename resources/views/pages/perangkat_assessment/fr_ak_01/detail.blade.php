@extends('layouts/master')
@section('title', 'FK AK-01')
@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">FK.AK-01. PERSETUJUAN ASESMEN DAN KERAHASIAAN</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th colspan="4">Persetujuan Asesmen ini untuk menjamin bahwa peserta telah diberiarahan
                                secara rinci tentang
                                perencanaan dan proses asesmen</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td width="250px" rowspan="2">Skema Sertifikasi&nbsp;&nbsp;Okupasi</td>
                            <td width="200px">Judul</td>
                            <td width="10px">:</td>
                            <td> <b>{{ $show->rahasia->apl02->kompetensi02->kompetensi->skema->nama_skema }}</b> </td>
                        </tr>
                        <tr>
                            <td>Nomor</td>
                            <td>:</td>
                            <td><b>{{ $show->rahasia->apl02->kompetensi02->kompetensi->skema->no }}</b></td>
                        </tr>
                        <tr>
                            <td colspan="2">TUK</td>
                            <td>:</td>
                            <td>{{ $show->rahasia->tuk }}</td>
                        </tr>
                        <tr>
                            <td colspan="2">Nama Asesor</td>
                            <td>:</td>
                            <td>{{ $show->rahasia->nama_asesor_lsp }}</td>
                        </tr>
                        <tr>
                            <td colspan="2">Nama Asesi</td>
                            <td>:</td>
                            <td>{{$show->rahasia->apl02->personal_detail->nama_lengkap->name}}</td>
                        </tr>
                        <tr>
                            <td colspan="2">Bukti yang akan dikumpulkan </td>
                            <td>:</td>
                            <td>

                                @switch($show)
                                @case($show->b_bukti_1 == '1')
                                TL : Verifikasi Portofolio /
                                <del>
                                    Observasi Langsung
                                </del>
                                @break
                                @case($show->b_bukti_1 == '2')
                                Observasi Langsung /
                                <del>
                                    TL : Verifikasi Portofolio
                                </del>
                                @break
                                @default
                                @endswitch

                                <br>

                                @switch($show)
                                @case($show->b_bukti_2 == '1')
                                T : Hasil Tes Tulis /
                                <del>
                                    T : Hasil Tes Lisan
                                </del>
                                /
                                <del>
                                    T : Hasil Wawanacara
                                </del>
                                @break
                                @case($show->b_bukti_2 == '2')

                                <del>
                                    T : Hasil Tes Tulis

                                </del>
                                /
                                T : Hasil Tes Lisan

                                /
                                <del>
                                    T : Hasil Wawanacara
                                </del>
                                @break

                                @case($show->b_bukti_2 == '3')
                                <del>
                                    T : Hasil Tes Tulis /
                                </del>
                                <del>
                                    T : Hasil Tes Lisan
                                </del>
                                /
                                T : Hasil Wawanacara
                                @break
                                @default
                                @endswitch

                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">Pelaksanaan Asesmen disepakati pada :<br>Hari /Tanggal : {{
                                Carbon\Carbon::parse($show->p_date)->formatLocalized('%A, %e %B %Y') }}

                                <br>Tempat Uji Kompetensi : {{ $show->p_tempat }}

                                <br>
                                Jam : {{ $show->p_jam }}
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">Asesi :<br>Bahwa saya sudah mendapatkan penjelasan Hak dan Prosedur
                                rahasia
                                oleh Asesor <br> <br>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">Asesor :<br>Menyatakan tidak akan membuka hasil pekerjaan yang saya
                                peroleh
                                karena penugasan
                                saya sebagai asesor dalam pekerjaan asesmen kepada siapapun atau organisasi apapun
                                selain kepada pihak
                                yang berwenang sehubung dengan kewajiban saya sebagai asesor yang ditugaskan oleh
                                LSP.<br><br>Asesi
                                :<br>Saya setuju mengikuti asesmen dengan pemahaman bahwa informasi yang dikumpulkan
                                hanya digunakan
                                untuk pengembangan professional dan hanya dapat diakses oleh orang tertentu saja <br>
                                <br>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="col-12 d-flex justify-content-end mt-2">
                    <a href="{{ route('fr_ak_01.index') }}" class="btn btn-primary" type="submit">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection