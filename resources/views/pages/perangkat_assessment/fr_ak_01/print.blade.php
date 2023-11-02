<!DOCTYPE html>

<head>
    <title>FK.AK-01. PERSETUJUAN ASESMEN DAN KERAHASIAAN
    </title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        body {
            font-family: 'DejaVuSans', sans-serif;
            font-size: 14px;
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

        @page {
            margin: 100px 45px 10px;
        }

        header {
            position: fixed;
            top: -60px;
            left: 0px;
            right: 0px;
        }
    </style>
</head>

<body>
    <header>
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
    </header> <br>
    <div id=halaman>
        <h3 id=judul>FK.AK-01. PERSETUJUAN ASESMEN DAN KERAHASIAAN</h3>
        <table class="table" border="1" id="ping">
            <thead>
                <tr>
                    <td width="249px" colspan="3" rowspan="2"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">Skema
                        Sertifikasi <br> Okupasi Nasional
                    </td>
                    <td style="text-align: center"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">Judul
                    </td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">:</td>
                    <td width="650px" colspan="5"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        <b>{{
                            $datas->rahasia->apl02->kompetensi02->kompetensi->skema->nama_skema }}</b>
                    </td>
                </tr>
                </tr>
                <tr>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">Nomor
                    </td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">:</td>
                    <td colspan="5"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        <b>{{
                            $datas->rahasia->apl02->kompetensi02->kompetensi->skema->no }}</b>
                    </td>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <tr>
                    <td colspan="4"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        TUK</td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">:</td>
                    <td colspan="5"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        @switch($datas)
                        @case($datas->rahasia->tuk == 'Sewaktu')
                        Sewaktu
                        <del>
                            /Tempat Kerja
                        </del>
                        <del>
                            /Mandiri
                        </del>
                        @break
                        @case($datas->rahasia->tuk == 'Tempat Kerja')
                        <del>
                            Sewaktu
                        </del>
                        /Tempat Kerja
                        <del>
                            /Mandiri
                        </del>
                        @break
                        @case($datas->rahasia->tuk == 'Mandiri')
                        <del>
                            Sewaktu
                        </del>
                        <del>
                            /Tempat Kerja
                        </del>
                        /Mandiri
                        @break
                        @default
                        @endswitch
                    </td>
                </tr>
                <tr>
                    <td colspan="4"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        Nama Asesor</td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">:</td>
                    <td colspan="5"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{ $datas->rahasia->nama_asesor_lsp }}
                    </td>
                </tr>
                <tr>
                    <td colspan="4"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        Nama Asesi</td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">:</td>
                    <td colspan="5"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{$datas->rahasia->apl02->personal_detail->nama_lengkap->name}}
                    </td>
                </tr>
                <tr>
                    <td colspan="4" rowspan="2"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        Bukti yang dikumpulkan </td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">:</td>
                    <td colspan="5"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">

                        @switch($datas)
                        @case($datas->b_bukti_1 == '1')
                        TL : Verifikasi Portofolio /
                        <del>
                            Observasi Langsung
                        </del>
                        @break
                        @case($datas->b_bukti_1 == '2')
                        Observasi Langsung /
                        <del>
                            TL : Verifikasi Portofolio
                        </del>
                        @break
                        @default
                        @endswitch


                    </td>
                </tr>
                <tr>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">:</td>
                    <td colspan="5"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">

                        @switch($datas)
                        @case($datas->b_bukti_2 == '1')
                        T : Hasil Tes Tulis /
                        <del>
                            T : Hasil Tes Lisan
                        </del>
                        /
                        <del>
                            T : Hasil Wawanacara
                        </del>
                        @break
                        @case($datas->b_bukti_2 == '2')

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

                        @case($datas->b_bukti_2 == '3')
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
            </tbody>
        </table> <br>

        <table class="table" border="1" id="ping">
            <tbody>
                <tr>
                    <td colspan="3"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        Pelaksanaan Asesmen disepakati pada :
                        <br>Hari/ Tanggal :

                        {{-- {{ Carbon\Carbon::parse($datas->p_date)->formatLocalized('%A, %e %B %Y') }} --}}
                        {{ \Carbon\Carbon::parse($datas->p_date)->translatedFormat('l, j F Y') }}

                        <br>Tempat Uji Kompetensi : {{ $datas->p_tempat }} <br>
                        Jam : {{ $datas->p_jam }} WIB
                    </td>
                </tr>
                <tr>
                    <td colspan="3"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        Asesi :
                        <br> Bahwa saya sudah mendapatkan penjelasan Hak dan prosedur Banding Asesor
                        <br> <br>
                    </td>
                </tr>
                <tr>
                    <td colspan="3"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        Asesor : <br>
                        Menyatakan tidak akan membuka hasil pekerjaan yang saya
                        peroleh
                        karena penugasan
                        saya sebagai asesor dalam pekerjaan asesmen kepada siapapun atau organisasi apapun
                        selain kepada pihak
                        yang berwenang sehubung dengan kewajiban saya sebagai asesor yang ditugaskan oleh
                        LSP
                        <br> <br>
                    </td>
                </tr>

                <tr>
                    <td colspan="3"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        Asesi :
                        <br>
                        Saya setuju mengikuti asesmen dengan pemahaman bahwa informasi yang dikumpulkan
                        hanya digunakan
                        untuk pengembangan professional dan hanya dapat diakses oleh orang tertentu saja
                        <br>
                        <br>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>

        <table class="table" border="1" id="ping">
            <thead>
                <tr>
                    <th width="114px"></th>
                    <th width="300px">Nama</th>
                    <th width="300px">Tanda Tangan dan Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">Asesi
                    </td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{$datas->rahasia->apl02->personal_detail->nama_lengkap->name}}</td>
                    <td>
                        <p style="text-align: center"> INI TTD <br><br><br>
                            INI TANGGAL
                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">Asesor
                    </td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">{{
                        $datas->rahasia->nama_asesor_lsp }}</td>
                    <td>
                        <p style="text-align: center"> INI TTD <br><br><br>
                            INI TANGGAL
                        </p>
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
</body>


</html>