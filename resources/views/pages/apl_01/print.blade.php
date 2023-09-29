<!DOCTYPE html>

<head>
    <title>FR-APL-01 FORMULIR PERMOHONAN SERTIFIKASI KOMPETENSI
    </title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        body {
            font-family: 'DejaVuSans', sans-serif;
            font-size: 16px;
            margin: 5px;
            /* margin-right: 7px; */
        }

        #judul {
            text-align: left;
            font-family: sans-serif;
        }

        #halaman {
            font-family: sans-serif;
        }

        #ping {
            border-spacing: 0px;
            border-collapse: separate;
            border: 1px solid black;
        }
    </style>
</head>

<body>

    <table style="undefined;table-layout: fixed; width: 766px">
        <colgroup>
            <col style="width: 109.88889px">
            <col style="width: 24.88889px">
            <col style="width: 105.88889px">
            <col style="width: 24.88889px">
            <col style="width: 24.88889px">
            <col style="width: 24.88889px">
            <col style="width: 60.88889px">
            <col style="width: 260.88889px">
            <col style="width: 110.88889px">
            <col style="width: 20.88889px">
        </colgroup>
        <thead>
            <tr>
                <td colspan="2">
                    <img src="{{ asset('https://sisfo.bnsp.go.id/images/K8cRm4d6SGTrLQXefW3ON0JsIYM5ioPH.png') }}"
                        width="80">
                    {{-- <img src="{{ asset('assets/img/favicon/lsp.png') }}" width="80"> --}}
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td colspan="2">
                    <img src="{{ asset('https://sisfo.bnsp.go.id/images/RHdf56WGqTZFU3vaohwy7gIr9pEzNkYc.png') }}"
                        alt="" style="width: 90">
                    {{-- <img src="{{ asset('assets/img/favicon/bnsp.png') }}" alt="" style="width: 90"> --}}
                </td>

            </tr>
        </thead>
    </table>
    <div id=halaman>
        <h3 id=judul>FR-APL-01 FORMULIR PERMOHONAN SERTIFIKASI KOMPETENSI</h3>
        <h4 id=judul>Bagian 1 : Rincian Data Pemohon Sertifikasi</h4>
        <p id=judul>Pada bagian ini, termasuk data pribadi, data pendidikan formal serta data pekerjaan anda saat ini.
        </p>

        <p id=judul><b>A. Data Pribadi </b></p>
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td style="text-align: right">:</td>
                <td>{{ $datas->nama_lengkap->name }}</td>
            </tr>
            <tr>
                <td style="width: 15%;">Tempat/Tanggal Lahir</td>
                <td style="text-align: right"> &nbsp; &nbsp; &nbsp; &nbsp;:</td>
                <td>{{ $datas->tempat_lahir}}, {{\Carbon\Carbon::parse($datas->tanggal_lahir)->format('d M Y')}}</td>
            </tr>
            <tr>
                <td style="width: 15%;">Jenis Kelamin </td>
                <td style="text-align: right">:</td>
                <td>{{ $datas->jenis_kelamin }}</td>
            </tr>
            <tr>
                <td style="width: 15%;">Kebangsaan</td>
                <td style="text-align: right">:</td>
                <td>{{ $datas->kebangsaan }}</td>
            </tr>
            <tr>
                <td style="width: 15%;">Alamat </td>
                <td style="text-align: right">:</td>
                <td>{{ $datas->alamat }}</td>
            </tr>
            <td style="width: 15%;"> No. Telefon</td>
            <td style="text-align: right">:</td>
            <td>{{ $datas->no_hp }}</td>
            </tr>
            <tr>
                <td style="width: 15%;">Email</td>
                <td style="text-align: right">:</td>
                <td>{{ $datas->email->email }}</td>
            </tr>
            <tr>
                <td style="width: 15%;">Pendidikan Terakhir</td>
                <td style="text-align: right">:</td>
                <td>{{ $datas->pendidikan_terakhir }}</td>
            </tr>
        </table>
        <p id=judul><b>B. Data Pekerjaan Sekarang</b></p>
        <table>
            <tr>
                <td style="width: 15%;">Nama Perusahaan</td>
                <td style="text-align: right">:</td>
                <td>{{ $datas->nama_perusahaan }}</td>
            </tr>
            <tr>
                <td style="width: 15%;">Jabatan</td>
                <td style="text-align: right"> &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;:</td>
                <td>{{ $datas->jabatan }}</td>
            </tr>
            <tr>
                <td style="width: 15%;">Alamat</td>
                <td style="text-align: right">:</td>
                <td>{{ $datas->alamat_perusahaan }}</td>
            </tr>
            <tr>
                <td style="width: 15%;">No. Telefon</td>
                <td style="text-align: right">:</td>
                <td>{{ $datas->no_hp_perusahaan }}</td>
            </tr>
            <tr>
                <td style="width: 15%;">Email </td>
                <td style="text-align: right">:</td>
                <td>{{ $datas->email_perusahaan }}</td>
            </tr>
        </table>

        <h4 id=judul>Bagian 2 : Unit Kompetensi</h4>
        <p id=judul>Pada bagian ini, termasuk data pribadi, data pendidikan formal serta data pekerjaan anda saat ini.
        </p>

        <table class="table" border="1" id="ping">
            <thead>
                <tr>
                    <th colspan="3" rowspan="2" style="text-align: center">Nama Sertifikasi Okupasi</th>
                    <th style="text-align: center">Judul</th>
                    <th style="text-align: center">:</th>
                    <th colspan="5" style="text-align: center">Jenis Standar (Standart Khusus/Standar
                        Internasional/SKKNI)</th>
                </tr>
                </tr>
                <tr>
                    <th>Nomor</th>
                    <th>:</th>
                    <th colspan="5">498578329578329473289</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <tr>
                    <th colspan="4">Tujuan Assessment</th>
                    <th>:</th>
                    <th>
                        @switch($datas)
                        @case($datas->tujuan_assessment == 'Sertifikasi')
                        {{-- <img src="{{ asset('assets/img/favicon/ceklis.png') }}" width="80"> --}}
                        Sertifikasi
                        @break
                        @default
                        {{-- <img src="{{ asset('assets/img/favicon/non_ceklis.png') }}" width="80"> --}}
                        <del>Sertifikasi</del>
                        @endswitch
                    </th>
                    <th>
                        @switch($datas)
                        @case($datas->tujuan_assessment == 'RCC')
                        {{-- <img src="{{ asset('assets/img/favicon/ceklis.png') }}" width="80"> --}}
                        RCC
                        @break
                        @default
                        {{-- <img src="{{ asset('assets/img/favicon/non_ceklis.png') }}" width="80"> --}}
                        <del>RCC</del>
                        @endswitch

                    </th>
                    <th>
                        @switch($datas)
                        @case($datas->tujuan_assessment == 'RPL')
                        {{-- <img src="{{ asset('assets/img/favicon/ceklis.png') }}" width="80"> --}}
                        RPL
                        @break
                        @default
                        <del>RPL</del>
                        {{-- <img src="{{ asset('assets/img/favicon/non_ceklis.png') }}" width="80"> --}}
                        @endswitch
                    </th>
                    <th>
                        @switch($datas)
                        @case($datas->tujuan_assessment == 'Hasil Pelatihan/Proses Pembelajaran')
                        {{-- <img src="{{ asset('assets/img/favicon/ceklis.png') }}" width="80"> --}}
                        Hasil Pelatihan/Proses Pembelajaran
                        @break
                        @default
                        {{-- <img src="{{ asset('assets/img/favicon/non_ceklis.png') }}" width="80"> --}}
                        <del>Hasil Pelatihan/Proses Pembelajaran</del>
                        @endswitch
                    </th>
                    <th>
                        @switch($datas)
                        @case($datas->tujuan_assessment == 'Lainnya')
                        Lainnya
                        {{-- <img src="{{ asset('assets/img/favicon/ceklis.png') }}" width="80"> --}}
                        @break
                        @default
                        <del>Lainnya</del>
                        {{-- <img src="{{ asset('assets/img/favicon/non_ceklis.png') }}" width="80"> --}}
                        @endswitch

                    </th>
                </tr>
                <tr>
                    <td style="width: 15%;"> </td>
                    <td style="text-align: right"></td>
                    <td></td>
                </tr>
            </tbody>
        </table>

        <h4 id=judul>Daftar Unit Kompetensi :</h4>
        <table class="table" border=”1″ id="ping">
            <thead>
                <tr>
                    <th width='10px' style="text-align: center">No</th>
                    <th style="text-align: center">Kode Unit </th>
                    <th style="text-align: center">Judul Unit</th>
                    <th style="text-align: center">Jenis Standar (Standart Khusus/Standar Internasional/SKKNI)</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <tr>
                    <td width='40px' style="text-align: center">1</td>
                    <td width='150px'> &nbsp; {{$datas->kompetensi->kode}}</td>
                    <td width='270px'
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{$datas->kompetensi->unit_kompetensi}}</td>

                    @if (!empty($datas->kompetensi->kode10 ))
                    <td rowspan=" 10"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{$datas->kompetensi->no_skkni}}</td>
                    @elseif (!empty($datas->kompetensi->kode9 ))
                    <td rowspan="9"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{$datas->kompetensi->no_skkni}}</td>

                    @elseif (!empty($datas->kompetensi->kode8 ))
                    <td rowspan="8"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{$datas->kompetensi->no_skkni}}</td>

                    @elseif (!empty($datas->kompetensi->kode7 ))
                    <td rowspan="7"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{$datas->kompetensi->no_skkni}}</td>

                    @elseif (!empty($datas->kompetensi->kode6 ))
                    <td rowspan="6"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{$datas->kompetensi->no_skkni}}</td>

                    @elseif (!empty($datas->kompetensi->kode5 ))
                    <td rowspan="5"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{$datas->kompetensi->no_skkni}}</td>

                    @elseif (!empty($datas->kompetensi->kode4 ))
                    <td rowspan="4"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{$datas->kompetensi->no_skkni}}</td>

                    @elseif (!empty($datas->kompetensi->kode3 ))
                    <td rowspan="3"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{$datas->kompetensi->no_skkni}}</td>
                    @elseif (!empty($datas->kompetensi->kode2 ))
                    <td rowspan="2"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{$datas->kompetensi->no_skkni}}</td>

                    @elseif (!empty($datas->kompetensi->kode ))
                    <td rowspan="1"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{$datas->kompetensi->no_skkni}}</td>
                    @else
                    {{-- <td rowspan="10"> &nbsp;{{$datas->kompetensi->no_skkni}}</td> --}}
                    @endif

                </tr>
                <tr>
                    @unless(!$datas->kompetensi->kode2)
                    <!-- Tampilkan data -->
                    <td width='40px' style="text-align: center">2</td>
                    <td width='150px'
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{$datas->kompetensi->kode2}}</td>
                    <td width='300px'
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{$datas->kompetensi->unit_kompetensi2}}</td>
                    @endunless
                </tr>
                <tr>
                    @unless(!$datas->kompetensi->kode3)
                    <!-- Tampilkan data -->
                    <td width='40px' style="text-align: center">3</td>
                    <td width='150px'
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{$datas->kompetensi->kode3}}</td>
                    <td width='300px'
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{$datas->kompetensi->unit_kompetensi3}}</td>
                    @endunless
                </tr>

                <tr>
                    @unless(!$datas->kompetensi->kode4)
                    <!-- Tampilkan data -->
                    <td width='40px' style="text-align: center">4</td>
                    <td width='150px'
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{$datas->kompetensi->kode4}}</td>
                    <td width='300px'
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{$datas->kompetensi->unit_kompetensi4}}</td>
                    @endunless
                </tr>

                <tr>
                    @unless(!$datas->kompetensi->kode5)
                    <!-- Tampilkan data -->
                    <td width='40px' style="text-align: center">5</td>
                    <td width='150px'
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{$datas->kompetensi->kode5}}</td>
                    <td width='300px'
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{$datas->kompetensi->unit_kompetensi5}}</td>
                    @endunless
                </tr>

                <tr>
                    @unless(!$datas->kompetensi->kode6)
                    <!-- Tampilkan data -->
                    <td width='40px' style="text-align: center">6</td>
                    <td width='150px'
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{$datas->kompetensi->kode6}}</td>
                    <td width='300px'
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{$datas->kompetensi->unit_kompetensi6}}</td>
                    @endunless
                </tr>

                <tr>
                    @unless(!$datas->kompetensi->kode7)
                    <!-- Tampilkan data -->
                    <td width='40px' style="text-align: center">7</td>
                    <td width='150px'
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{$datas->kompetensi->kode7}}</td>
                    <td width='300px'
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{$datas->kompetensi->unit_kompetensi7}}</td>
                    @endunless
                </tr>
            </tbody>
        </table>

        <h4 id=judul>Bagian 3 : A. Bukti Persyaratan Kandidat *</h4>

        <table class="table" border=”1″ id="ping">
            <thead>
                <tr>
                    <th rowspan="2" width='40px' style="text-align: center">No</th>
                    <th width="400px" rowspan="2">Bukti Persyaratan </th>
                    <th width="167px" colspan="2">Memenuhi Pesyaratan </th>
                    <th width="100px" rowspan="2">Catatan</th>
                </tr>
                <tr>
                    <th>Ya</th>
                    <th>Tidak</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="text-align: center">1 </td>
                    <td style="padding-left: 10px; padding-right: 10px;">
                        Sertifikasi Pelatihan Berbasi Kompetensi {{ $datas->kompetensi->skema->nama_skema}} dari
                        Transafe Indonesia
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->status == 'Lengkap')
                        {{-- <img
                            src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18"> --}}
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->status == 'Lengkap')
                        @break
                        @default
                        {{-- <img
                            src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18"> --}}
                        @endswitch
                    </td>
                    <td></td>
                </tr>
            </tbody>
        </table>

        <h4 id=judul>Bagian 3 : B. Bukti Relevan Lain *</h4>

        <table class="table" border=”1″ id="ping">
            <thead>
                <tr>
                    <th rowspan="2" width='40px' style="text-align: center">No</th>
                    <th rowspan="2" width="550px">Bukti Pendidikan/Pelatihan </th>
                    <th colspan="2" width="150px">Bukti DiLampiran</th>
                </tr>
                <tr>
                    <th>Ya</th>
                    <th>Tidak</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="text-align: center">1</td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">Fotokopi
                        Ijazah</td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->ijazah == 0)
                        @break
                        @default
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @endswitch
                    </td>
                    <td>
                        @switch($datas)
                        @case($datas->ijazah == 0)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center">2</td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;"> Surat
                        Keterangan Perusahaan</td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->surat_keterangan_perusahaan == 0)
                        @break
                        @default
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @endswitch
                    </td>
                    <td>
                        @switch($datas)
                        @case($datas->surat_keterangan_perusahaan == 0)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center">3</td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        Curruculum Vitae</td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->cv == 0)
                        @break
                        @default
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @endswitch
                    </td>
                    <td>
                        @switch($datas)
                        @case($datas->cv == 0)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center">4</td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        Sertifikat Pendukung</td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->sertifikat_pendukung == 0)
                        @break
                        @default
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @endswitch
                    </td>
                    <td>
                        @switch($datas)
                        @case($datas->sertifikat_pendukung == 0)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center">5</td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">KTP</td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->ktp == 0)
                        @break
                        @default
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18"> @endswitch
                    </td>
                    <td>
                        @switch($datas)
                        @case($datas->ktp == 0)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18"> @break
                        @default
                        @endswitch
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center">6</td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        Bukti Hasil Kerja</td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->p_cbt == 0)
                        @break
                        @default
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @endswitch
                    </td>
                    <td>
                        @switch($datas)
                        @case($datas->p_cbt == 0)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                </tr>
            </tbody>
        </table>
        <p style="margin-top: 5px">*) diisi oleh LSP </p> <br>

        <table class="table" border=”1″ id="ping">
            <thead>
                <tr>
                    <td rowspan="3"
                        style="text-align: left: vertical-align: top; vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        <b>Rekomendasi
                            (diisi oleh LSP):</b>
                        <br><br>
                        Berdasarkan ketentuan
                        persyaratan dasar
                        assessment. <br> <br>

                        <b>Diterima</b>/ <b><del>Tidak diterima</del>*)</b> Sebagai peserta sertifikasi
                    </td>
                    <td colspan="2"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        <b>Pemohon
                            &nbsp;:</b>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">Nama
                    </td>
                    <td width="167px"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">{{
                        $datas->nama_lengkap->name }}</td>
                </tr>
                <tr>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">Tanda
                        Tangan / Tanggal</td>
                    <td height="167px" style="text-align: center">
                        {{-- <img src="{{ asset('storage/ttd'. $datas->ttd) }}" alt="" style="width: 150px"> --}}

                        {{ \Carbon\Carbon::parse($datas->created_at)->format('d-m-Y') }}
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td rowspan="4"
                        style="text-align: left: vertical-align: top; vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        <b>Catatan :</b>

                        <p>{{ $datas->catatan }}</p>

                    </td>
                    <td colspan="2"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;"> <b>Admin
                            LSP &nbsp; :</b> </td>
                    <td></td>
                </tr>
                <tr>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">Nama</td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;"> {{
                        $datas->nama_admin_lsp }}
                    </td>
                </tr>
                <tr>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">No. Reg
                    </td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">{{
                        $datas->no_reg }}
                    </td>
                </tr>
                <tr>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        TandaTangan/ Tanggal</td>
                    <td height="167px" style="text-align: center">
                        {{-- <img src="{{ storage_path('app/public/ttd_admin_lsp/').$datas->ttd_admin_lsp }}" alt=""
                            style="width: 150px"> --}}

                        {{-- <img src="{{ asset('ttd/'.$datas->ttd) }}" alt="" style="width: 90px"> --}}
                        <br>
                        {{ $datas->tanggal_validasi }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <script type="text/php">
        if ( isset($pdf) ) {
                // OLD 
                // $font = Font_Metrics::get_font("DejaVuSans", "bold");
                // $pdf->page_text(72, 18, "{PAGE_NUM} of {PAGE_COUNT}", $font, 6, array(255,0,0));
                // v.0.7.0 and greater



                $x = 38; // from left
                $y = 20; // from bottom
                $text = "Halaman {PAGE_NUM} "; // {PAGE_NUM} and {PAGE_COUNT} are placeholders populated by dompdf
                $font = $fontMetrics->get_font("arial", "normal");
                $size = "10"; // in pt
                $color = array(.3, .3, .3); // rgb, valid values are between 0 and 1
                $pdf->page_text($x, $y, $text, $font, $size);

            }
        </script>
    {{-- $x = 38;
    $y = 20;
    $text = "{PAGE_NUM} of {PAGE_COUNT}";
    $font = $fontMetrics->get_font("DejaVuSans", "bold");
    $size = 10;
    $color = array(0,0,0);
    $word_space = 0.0; // default
    $char_space = 0.0; // default
    $angle = 0.0; // default
    $pdf->page_text($x, $y, $text, $font, $size, $color, $word_space, $char_space, $angle); --}}
</body>

</html>