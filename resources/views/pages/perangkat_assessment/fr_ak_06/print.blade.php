<!DOCTYPE html>

<head>
    <title>FK.AK-06. MENINJAU PROSES ASESMEN
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

        ul,
        ul li {
            margin: 0;
            padding: 0;
            margin-left: 10px
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
        <h3 id=judul>FK.AK-06. MENINJAU PROSES ASESMEN</h3>
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
                            $datas->aspek->apl02->kompetensi02->kompetensi->skema->nama_skema }}</b>
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
                            $datas->aspek->apl02->kompetensi02->kompetensi->skema->no }}</b>
                    </td>
                </tr>
                <tr>
                    <td colspan="10"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        Penjelasan : <br>
                        1. Peninjauan seharusnya dilakukan oleh asesor yang mensupervisi implementasi
                        asesmen.
                        <br>

                        2. Jika tinjauan dilakukan oleh asesor lain, tinjauan akan dilakukan setelah seluruh
                        proses implementasi asesmen telah selesai. <br>
                        3. Peninjauan dapat dilakukan secara terpadu dalam skema dan / atau asesi kelompok
                        homogen.
                    </td>
                </tr>
            </thead>
        </table>
        <br>
        <table class="table" border="1" id="ping">
            <thead>
                <tr>
                    <th width="384px" rowspan="2">Aspek yang ditinjau </th>
                    <th class="text-center" colspan="4">Kesesuaian dengan prinsip asesmen</th>
                </tr>
                <tr>
                    <td width="80px" style="text-align: center;"><em>Validitas</em></td>
                    <td width="80px" style="text-align: center;"><em>Reliabilitas</em>
                    </td>
                    <td width="80px" style="text-align: center;"> <em>Fleksibel</em></td>
                    <td width="80px" style="text-align: center;"> <em>Fleksibel</em> </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="5"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">Prosedur
                        Asesmen</td>
                </tr>
                <tr>
                    <td>

                        <ul>
                            <li>Rencana Asesmen</li>
                        </ul>
                    </td>
                    <td style="text-align: center">

                        @switch($datas)
                        @case($datas->aspek_1_val == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch

                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->aspek_1_rel == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->aspek_1_flex == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->aspek_1_ad == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                </tr>
                <tr>
                    <td>
                        <ul>
                            <li>Persiapan Asesmen</li>
                        </ul>
                    </td>
                    <td style="text-align: center">

                        @switch($datas)
                        @case($datas->aspek_2_val == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch

                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->aspek_2_rel == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->aspek_2_flex == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->aspek_2_ad == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                </tr>
                <tr>
                    <td>
                        <ul>
                            <li>Implementasi Asesmen</li>
                        </ul>
                    </td>
                    <td style="text-align: center">

                        @switch($datas)
                        @case($datas->aspek_3_val == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch

                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->aspek_3_rel == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->aspek_3_flex == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->aspek_3_ad == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                </tr>
                <tr>
                    <td>
                        <ul>
                            <li>Keputusan Asesmen</li>
                        </ul>
                    </td>
                    <td style="text-align: center">

                        @switch($datas)
                        @case($datas->aspek_4_val == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch

                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->aspek_4_rel == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->aspek_4_flex == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->aspek_4_ad == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                </tr>
                <tr>
                    <td>
                        <ul>
                            <li>Umpan balik Asesmen</li>
                        </ul>
                    </td>
                    <td style="text-align: center">

                        @switch($datas)
                        @case($datas->aspek_5_val == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch

                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->aspek_5_rel == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->aspek_5_flex == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->aspek_5_ad == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                </tr>
                <tr>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        <b>Rekomendasi</b> <br>[untuk peningkatan ]: <br> <br>

                        @switch($datas)
                        @case($datas->rek_1 == false)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">&nbsp;Ada

                        <br>
                        <input name="comment" type="checkbox" style="margin-top: 5px">
                        <label class="form-check-label"> &nbsp; &nbsp;Tidak Ada
                        </label>

                        @break
                        @default
                        <input name="comment" type="checkbox" style="margin-top: 5px">
                        <label class="form-check-label">&nbsp; &nbsp;Ada
                        </label>
                        <br>
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18"> &nbsp; Tidak Ada
                        </label>
                        @endswitch

                    </td>
                    <td colspan="4"
                        style="text-align: left; vertical-align: top;padding-left: 10px; padding-right: 10px;">Tuliskan
                        jika ada: <br>
                        {{ $datas->rek_1_detail }}

                    </td>
                </tr>

            </tbody>
        </table>
        <br>

        <table class="table" border="1" id="ping">
            <thead>
                <tr>
                    <td rowspan="2"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;"><b>Aspek
                            yang ditinjau</b></td>
                    <td colspan="5" style="text-align: center;"><b>Pemenuhan dimensi Kompetensi</b></td>
                </tr>
                <tr>
                    <td style="text-align: center;"><em>Task Skills</em></td>
                    <td style="text-align: center;"><em>Task Mgmt Skills</em></td>
                    <td style="text-align: center;"><em>Contingency Mgmt Skills</em></td>
                    <td style="text-align: center;"><em>Job Role/Envirotment Skills</em></td>
                    <td style="text-align: center;"><em>Transfer Skills</em></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        <b>Konsistensi Keputusan Asesmen</b><br> Bukti dari berbagai asesmen diperiksa untuk
                        konsistensi
                        dimensi
                        kompetensi
                    </td>
                    <td style="text-align: center;">
                        {{ $datas->p_task }}
                    </td>
                    <td style="text-align: center;">
                        {{ $datas->p_mgmt }}
                    </td>
                    <td style="text-align: center;">
                        {{ $datas->p_con }}
                    </td>

                    <td style="text-align: center;">
                        {{ $datas->p_job }}
                    </td>

                    <td style="text-align: center;">
                        {{ $datas->p_tr }}
                    </td>
                </tr>
                <tr>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        <b>Rekomendasi</b> <br>[untuk peningkatan ]: <br> <br>

                        @switch($datas)
                        @case($datas->rek_2 == false)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">&nbsp;Ada

                        <br>
                        <input name="comment" type="checkbox" style="margin-top: 5px">
                        <label class="form-check-label"> &nbsp; &nbsp;Tidak Ada
                        </label>

                        @break
                        @default
                        <input name="comment" type="checkbox" style="margin-top: 5px">
                        <label class="form-check-label">&nbsp; &nbsp;Ada
                        </label>
                        <br>
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18"> &nbsp; Tidak Ada
                        </label>
                        @endswitch

                    </td>
                    <td colspan="5"
                        style="text-align: left; vertical-align: top;padding-left: 10px; padding-right: 10px;">Tuliskan
                        jika ada: <br>
                        {{ $datas->rek_2_detail }}

                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <table class="table" border="1" id="ping">
            <thead>
                <tr>
                    <td width="280px" rowspan="2"
                        style="text-align: left; vertical-align: top;padding-left: 10px; padding-right: 10px;">Komentar
                        <p>
                            {{ $datas->catatan }}
                        </p>
                    </td>
                    <td width="400px" colspan=" 0"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">Nama
                        Peninjau : {{ $datas->nama_peninjau }}</td>
                </tr>
                <tr>
                    <td style="text-align: center;">

                        <p><img src="{{ asset('https://sisfo.bnsp.go.id/images/K8cRm4d6SGTrLQXefW3ON0JsIYM5ioPH.png') }}"
                                width="80"> <br>
                            {{ $datas->created_at->format('d-m-Y') }}</p>
                    </td>
                </tr>
            </thead>
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
