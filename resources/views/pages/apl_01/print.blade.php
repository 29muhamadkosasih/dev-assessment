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
                <td colspan="2">
                    <img src="{{ public_path('Storage/logo/bnsp.png') }}" alt="" style="width: 90">
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
                        <img src="{{ public_path('Storage/ttd/').$datas->ttd }}" alt="" style="width: 150px">
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
                        <img src="{{ public_path('Storage/ttd_admin_lsp/').$datas->ttd_admin_lsp }}" alt=""
                            style="width: 150px">

                        {{-- {{ Storage::url('public/blogs/').$blog->image }} --}}
                    </td>
                </tr>
            </tbody>
        </table>
        <input type="checkbox" id="myCheckbox" name="myCheckbox">
    </div>
</body>

</html>