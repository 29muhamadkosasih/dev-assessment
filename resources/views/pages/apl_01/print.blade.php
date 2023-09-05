<!DOCTYPE html>

<head>
    <title>FR-APL-01 FORMULIR PERMOHONAN SERTIFIKASI KOMPETENSI
    </title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        body {
            font-family: 'DejaVuSans', sans-serif;
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
                <td colspan="2"><img
                        src="{{ asset('https://sisfo.bnsp.go.id/images/K8cRm4d6SGTrLQXefW3ON0JsIYM5ioPH.png') }}"
                        width="80"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td colspan="2"><img
                        src="data:image/png;base64,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"
                        width="90"></td>
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
                    <th colspan="2" rowspan="2" style="text-align: center">Nama Sertifikasi Okupasi</th>
                    <th style="text-align: center">Judul</th>
                    <th style="text-align: center">:</th>
                    <th colspan="4" style="text-align: center">Jenis Standar (Standart Khusus/Standar
                        Internasional/SKKNI)</th>
                </tr>
                </tr>
                <tr>
                    <th>Nomor</th>
                    <th>:</th>
                    <th colspan="4">498578329578329473289</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <tr>
                    <th colspan="3">Tujuan Assessment</th>
                    <th>:</th>
                    <th> </th>
                    <th></th>
                    <th></th>
                    <th></th>
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
                    <td width='320px'> &nbsp; {{$datas->kompetensi->unit_kompetensi}}</td>

                    @if (!empty($datas->kompetensi->kode10 ))
                    <td rowspan="10" width='200px'
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{$datas->kompetensi->no_skkni}}</td>
                    @elseif (!empty($datas->kompetensi->kode9 ))
                    <td rowspan="9" width='200px'
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{$datas->kompetensi->no_skkni}}</td>

                    @elseif (!empty($datas->kompetensi->kode8 ))
                    <td rowspan="8" width='200px'
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{$datas->kompetensi->no_skkni}}</td>

                    @elseif (!empty($datas->kompetensi->kode7 ))
                    <td rowspan="7" width='200px'
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{$datas->kompetensi->no_skkni}}</td>

                    @elseif (!empty($datas->kompetensi->kode6 ))
                    <td rowspan="6" width='200px'
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{$datas->kompetensi->no_skkni}}</td>

                    @elseif (!empty($datas->kompetensi->kode5 ))
                    <td rowspan="5" width='200px'
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{$datas->kompetensi->no_skkni}}</td>

                    @elseif (!empty($datas->kompetensi->kode4 ))
                    <td rowspan="4" width='200px'
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{$datas->kompetensi->no_skkni}}</td>

                    @elseif (!empty($datas->kompetensi->kode3 ))
                    <td rowspan="3" width='200px'
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{$datas->kompetensi->no_skkni}}</td>
                    @elseif (!empty($datas->kompetensi->kode2 ))
                    <td rowspan="2" width='200px'
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{$datas->kompetensi->no_skkni}}</td>

                    @elseif (!empty($datas->kompetensi->kode ))
                    <td rowspan="1" width='200px'
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{$datas->kompetensi->no_skkni}}</td>
                    @else
                    {{-- <td rowspan="10" width='200px'> &nbsp;{{$datas->kompetensi->no_skkni}}</td> --}}
                    @endif

                </tr>
                <tr>
                    @unless(!$datas->kompetensi->kode2)
                    <!-- Tampilkan data -->
                    <td width='40px' style="text-align: center">2</td>
                    <td width='150px'> &nbsp; {{$datas->kompetensi->kode2}}</td>
                    <td width='300px'> &nbsp; {{$datas->kompetensi->unit_kompetensi2}}</td>
                    @endunless
                </tr>
                <tr>
                    @unless(!$datas->kompetensi->kode3)
                    <!-- Tampilkan data -->
                    <td width='40px' style="text-align: center">3</td>
                    <td width='150px'> &nbsp; {{$datas->kompetensi->kode3}}</td>
                    <td width='300px'> &nbsp; {{$datas->kompetensi->unit_kompetensi3}}</td>
                    @endunless
                </tr>

                <tr>
                    @unless(!$datas->kompetensi->kode4)
                    <!-- Tampilkan data -->
                    <td width='40px' style="text-align: center">4</td>
                    <td width='150px'> &nbsp; {{$datas->kompetensi->kode4}}</td>
                    <td width='300px'> &nbsp; {{$datas->kompetensi->unit_kompetensi4}}</td>
                    @endunless
                </tr>

                <tr>
                    @unless(!$datas->kompetensi->kode5)
                    <!-- Tampilkan data -->
                    <td width='40px' style="text-align: center">5</td>
                    <td width='150px'> &nbsp; {{$datas->kompetensi->kode5}}</td>
                    <td width='300px'> &nbsp; {{$datas->kompetensi->unit_kompetensi5}}</td>
                    @endunless
                </tr>

                <tr>
                    @unless(!$datas->kompetensi->kode6)
                    <!-- Tampilkan data -->
                    <td width='40px' style="text-align: center">6</td>
                    <td width='150px'> &nbsp; {{$datas->kompetensi->kode6}}</td>
                    <td width='300px'> &nbsp; {{$datas->kompetensi->unit_kompetensi6}}</td>
                    @endunless
                </tr>

                <tr>
                    @unless(!$datas->kompetensi->kode7)
                    <!-- Tampilkan data -->
                    <td width='40px' style="text-align: center">7</td>
                    <td width='150px'> &nbsp; {{$datas->kompetensi->kode7}}</td>
                    <td width='300px'> &nbsp; {{$datas->kompetensi->unit_kompetensi7}}</td>
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
                    <th width="200px" colspan="2">Memenuhi Pesyaratan </th>
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
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto rerum veritatis maiores
                        deleniti? Id sed labore dolor molestias? Temporibus facere cumque beatae est eligendi possimus?
                        Distinctio laudantium recusandae mollitia doloribus. Facere sequi nihil possimus perspiciatis ea
                        quis facilis temporibus accusantium hic, dolore officia non eligendi velit nam et cupiditate
                        iusto perferendis natus, dolorem voluptatibus laboriosam neque? Non nulla debitis repellat
                        inventore possimus numquam enim ea accusantium perspiciatis quae aliquid delectus facilis
                        voluptas cumque facere, error corrupti amet qui reprehenderit fugit! Eos a quia maiores
                        recusandae soluta earum inventore, unde quis, illum exercitationem eveniet fugit obcaecati
                        adipisci molestias laborum rerum facere?
                    </td>
                    <td></td>
                    <td></td>
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
                    <td></td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center">2</td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;"> Surat
                        Keterangan Perusahaan</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="text-align: center">3</td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        Curruculum Vitae</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="text-align: center">4</td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        Sertifikat Pendukung</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="text-align: center">5</td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">KTP</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="text-align: center">6</td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        Sertifikat Pelatihan CBT</td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <p style="margin-top: 5px">*) diisi oleh LSP ✓ </p> <br>

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
                        assessment jarak
                    </td>
                    <th colspan="2"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">Pemohon :
                    </th>
                </tr>
                <tr>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">Nama
                    </td>
                    <td width="200px"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">{{
                        $datas->nama_lengkap->name }}</td>
                </tr>
                <tr>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">Tanda
                        Tangan</td>
                    <td height="200px" style="text-align: center">
                        <img src="{{ public_path('Storage/Tanda-Tangan/').$datas->ttd }}" alt="" style="width: 150px">
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td rowspan="4"
                        style="text-align: left: vertical-align: top; vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        <b>Catatan :</b>
                    </td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">Admin
                        LSP: </td>
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
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">Tanda
                        Tangan</td>
                    <td height="200px" style="text-align: center">
                        <img src="{{ public_path('Storage/TTD-Admin/').$datas->ttd_admin_lsp }}" alt=""
                            style="width: 150px">
                    </td>
                </tr>
            </tbody>
        </table>
        <input type="checkbox" id="myCheckbox" name="myCheckbox">
    </div>
</body>

</html>