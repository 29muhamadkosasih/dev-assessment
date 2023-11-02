<!DOCTYPE html>

<head>
    <title>FK.AK-03. UMPAN BALIK DAN ASESMEN
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
        <h3 id=judul>FK.AK-03. UMPAN BALIK DAN ASESMEN</h3>
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
                            $datas->feedback->apl02->kompetensi02->kompetensi->skema->nama_skema }}</b>
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
                            $datas->feedback->apl02->kompetensi02->kompetensi->skema->no }}</b>
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
                        @case($datas->feedback->tuk == 'Sewaktu')
                        Sewaktu
                        <del>
                            /Tempat Kerja
                        </del>
                        <del>
                            /Mandiri
                        </del>
                        @break
                        @case($datas->feedback->tuk == 'Tempat Kerja')
                        <del>
                            Sewaktu
                        </del>
                        /Tempat Kerja
                        <del>
                            /Mandiri
                        </del>
                        @break
                        @case($datas->feedback->tuk == 'Mandiri')
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
                        {{ $datas->feedback->nama_asesor_lsp }}
                    </td>
                </tr>
                <tr>
                    <td colspan="4"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        Nama Asesi</td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">:</td>
                    <td colspan="5"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{$datas->feedback->apl02->personal_detail->nama_lengkap->name}}
                    </td>
                </tr>
                <tr>
                    <td colspan="4"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        Tanggal</td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">:</td>
                    <td colspan="5"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{
                        Carbon\Carbon::parse($datas->tanggal)->translatedFormat('l, j F Y') }}
                    </td>
                </tr>
                <tr>
                    <td colspan="4"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        Waktu</td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">:</td>
                    <td colspan="5"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{$datas->waktu}} WIB
                    </td>
                </tr>
            </tbody>
        </table> <br>

        <table class="table" border="1" id="ping">
            <thead>
                <tr>
                    <th width="450px" class="text-center" rowspan="2">Komponen</th>
                    <th width="100px" class="text-center" colspan="2">Hasil</th>
                    <th class="text-center" rowspan="2"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        Catatan/Komentar Asesi</th>
                </tr>
                <tr>
                    <th>Ya</th>
                    <th>Tidak</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <ul>
                            <li>Saya Mendapatkan penjelasan yang cukup memadai mengenai proses asesmen/uji
                                kompetensi</li>
                        </ul>
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->kom == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->kom == 2)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>

                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;"> {{
                        $datas->note }}
                    </td>
                </tr>
                <tr>
                    <td>
                        <ul>
                            <li>Saya diberikan kesempatan untuk mempelajari standar kompetensi yang akan
                                diujikan
                                dan menilai diri sendiri terhadap pencapaiannya
                        </ul>
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->kom2 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->kom2 == 2)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>

                    <td style="text-align: center: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{
                        $datas->note2 }}
                    </td>
                </tr>
                <tr>
                    <td>
                        <ul>
                            <li>Asesor memberikan kesempatan untuk mendiskusikan/menegosiasikan metoda,
                                instrumen
                                dan sumber daya asesmen serta jadwal asesmen</li>
                        </ul>
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->kom3 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->kom3 == 2)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center: vertical-align: top;padding-left: 10px; padding-right: 10px;"> {{
                        $datas->note3 }}
                    </td>
                </tr>
                <tr>
                    <td>
                        <ul>
                            <li>Asesor berusaha menggali seluruh bukti pendukung yang yang sesuai dengan latar
                                belakang pelatihan dan pengalaman yang saya miliki</li>
                        </ul>
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->kom4 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->kom4 == 2)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center: vertical-align: top;padding-left: 10px; padding-right: 10px;"> {{
                        $datas->note4 }}
                    </td>
                </tr>
                <tr>
                    <td>
                        <ul>
                            <li>Saya mendapat jaminan kerahasiaan hasil asesmen serta penjelasan penanganan
                                dokumen
                                asesmen</li>
                        </ul>
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->kom5 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->kom5 == 2)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center: vertical-align: top;padding-left: 10px; padding-right: 10px;"> {{
                        $datas->note5 }}
                    </td>
                </tr>
                <tr>
                    <td>
                        <ul>
                            <li>Saya sepenuhnya diberikan kesempatan untuk mendemontrasikan kompetensi yang saya
                                miliki selama asesmen</li>
                        </ul>
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->kom6 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->kom6 == 2)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center: vertical-align: top;padding-left: 10px; padding-right: 10px;"> {{
                        $datas->note6 }}
                    </td>
                </tr>
                <tr>
                    <td>
                        <ul>
                            <li>Saya mendapatkan penjelasan yang memadai mengenai keputusan asesmen</li>
                    </td>
                    </ul>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->kom7 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->kom7 == 2)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center: vertical-align: top;padding-left: 10px; padding-right: 10px;"> {{
                        $datas->note7 }}
                    </td>
                </tr>
                <tr>
                    <td>
                        <ul>
                            <li>Asesor memberikan umpan balik yang mendukung setelah asesmen serta tindak
                                lanjutnya
                            </li>
                        </ul>
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->kom8 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->kom8 == 2)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center: vertical-align: top;padding-left: 10px; padding-right: 10px;"> {{
                        $datas->note8 }}
                    </td>
                </tr>
                <tr>
                    <td>
                        <ul>
                            <li>Asesor menggunakan keterampilan komunikasi yang efektif selama asesmen</li>
                    </td>
                    </ul>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->kom9 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->kom9 == 2)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center: vertical-align: top;padding-left: 10px; padding-right: 10px;"> {{
                        $datas->note9 }}
                    </td>
                </tr>
                <tr>
                    <td>

                        <ul>
                            <li>Asesor bersama saya mendatangani semua dokumen hasil asesmen</li>
                    </td>
                    </ul>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->kom10 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->kom10 == 2)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center: vertical-align: top;padding-left: 10px; padding-right: 10px;"> {{
                        $datas->note10 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="4"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        Catatan/komentar lainnya(Apabila ada): <br> <br> {{
                        $datas->catatan }}
                    </td>

                </tr>
            </tbody>
        </table>
        <br>
        <table class="table" border="1" id="ping">
            <thead>
                <tr>
                    <td width="300px"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">Catatan
                    </td>
                    <td width="700px" colspan="2"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">Asesor :
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;"
                        rowspan="3"></td>
                    <td width="100px"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">Nama</td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">{{
                        $datas->feedback->nama_asesor_lsp }}</td>
                </tr>
                <tr>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">No. Reg
                    </td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">{{
                        $datas->feedback->no_reg }}</td>
                </tr>
                <tr>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">Tanda
                        Tangan / <br> Tanggal</td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;"></td>
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