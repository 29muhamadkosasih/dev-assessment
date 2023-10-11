<!DOCTYPE html>

<head>
    <title>FK.AK-04. BANDING ASESMEN
    </title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        body {
            font-family: 'DejaVuSans', sans-serif;
            font-size: 16px;
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
        <h3 id=judul>FK.AK-04. BANDING ASESMEN</h3>
        <table class="table" border="1" id="ping">
            <thead>
                <tr>
                    <td width="249px" colspan="3" rowspan="2"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">Skema
                        Sertifikasi <br> Okupasi
                    </td>
                    <td style="text-align: center"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">Judul
                    </td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">:</td>
                    <td width="650px" colspan="5"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        <b>{{
                            $datas->banding->apl02->kompetensi02->kompetensi->skema->nama_skema }}</b>
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
                            $datas->banding->apl02->kompetensi02->kompetensi->skema->no }}</b>
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
                        @case($datas->banding->tuk == 'Sewaktu')
                        Sewaktu
                        <del>
                            /Tempat Kerja
                        </del>
                        <del>
                            /Mandiri
                        </del>
                        @break
                        @case($datas->banding->tuk == 'Tempat Kerja')
                        <del>
                            Sewaktu
                        </del>
                        /Tempat Kerja
                        <del>
                            /Mandiri
                        </del>
                        @break
                        @case($datas->banding->tuk == 'Mandiri')
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
                        {{ $datas->banding->nama_asesor_lsp }}
                    </td>
                </tr>
                <tr>
                    <td colspan="4"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        Nama Asesi</td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">:</td>
                    <td colspan="5"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{$datas->banding->apl02->personal_detail->nama_lengkap->name}}
                    </td>
                </tr>
                <tr>
                    <td colspan="4"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        Tanggal</td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">:</td>
                    <td colspan="5"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{-- {{$datas->banding->apl02->personal_detail->nama_lengkap->name}} --}}
                    </td>
                </tr>
            </tbody>
        </table> <br>

        <table class="table" border="1" id="ping">
            <thead>
                <tr style="background-color:skyblue">
                    <th width="532px"
                        style="text-align: center">
                        Jawablah
                        dengan ya atau tidak pertanyaan pertanyaan berikut ini</th>
                    <th width="80px" style="text-align: center">Ya</th>
                    <th width="80px" style="text-align: center">Tidak
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">Apakah
                        proses banding telah dijelaskan kepada anda?</td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->answer_1 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->answer_1 == 2)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch

                    </td>
                </tr>
                <tr>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">Apakah
                        anda telah mendiskusikan banding dengan asesor?</td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->answer_2 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch

                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->answer_2 == 2)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch

                    </td>
                </tr>
                <tr>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">Apakah
                        anda mau melibatkan "orang lain " membantu anda dalam proses banding?</td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->answer_3 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch

                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->answer_3 == 2)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch

                    </td>
                </tr>
                <tr>
                    <td colspan="3"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        Banding ini diajukan atas keputusan assessment yang dibuat terhadap skema
                        sertifikasi
                        okupasi nasional berikut :
                        <br>Skema : {{ $datas->banding->apl02->kompetensi02->kompetensi->skema->nama_skema
                        }}
                        <br>No. Skema : {{ $datas->banding->apl02->kompetensi02->kompetensi->skema->no }}
                    </td>
                </tr>
                <tr>
                    <td colspan="3"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        Banding ini diajukan atas alasan sebagai berikut :
                        <br> {{ $datas->catatan }}
                        <br> <br> <br>
                    </td>
                </tr>
                <tr>
                    <td colspan="3"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        Anda mempunyai hak mengajukan banding jika anda menilai proses assessment tidak sesuai SOP dan
                        tidak memenuhi prinsip
                        assessment.
                        <br> <br> <br>
                    </td>
                </tr>

                <tr>
                    <td colspan="3"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        Tanda Tangan asesi dan Tanggal:
                        <br> <br>

                        <p style="text-align: center"></p>
                        <br>
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