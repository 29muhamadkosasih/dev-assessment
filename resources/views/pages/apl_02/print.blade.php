<!DOCTYPE html>

<head>
    <title>FR-APL-02 FORMULIR PERMOHONAN SERTIFIKASI KOMPETENSI
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
        <h3 id=judul>FR-APL-02 FORMULIR PERMOHONAN SERTIFIKASI KOMPETENSI</h3>
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
                        <b style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">{{
                            $datas->apl02->kompetensi02->kompetensi->skema->nama_skema }}</b>
                    </td>
                </tr>
                </tr>
                <tr>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">Nomor
                    </td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">:</td>
                    <td colspan="5"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        <b style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">{{
                            $datas->apl02->kompetensi02->kompetensi->skema->no }}</b>
                    </td>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <tr>
                    <td colspan="4"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">TUK</td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">:</td>
                    <td colspan="5"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        @switch($datas)
                        @case($datas->tuk == 'Sewaktu')
                        Sewaktu
                        <del>
                            /Tempat Kerja
                        </del>
                        <del>
                            /Mandiri
                        </del>
                        @break
                        @case($datas->tuk == 'Tempat Kerja')
                        <del>
                            Sewaktu
                        </del>
                        /Tempat Kerja
                        <del>
                            /Mandiri
                        </del>
                        @break
                        @case($datas->tuk == 'Mandiri')
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
            </tbody>
        </table>
        <p>*Coret yang tidak perlu</p>

        <table class="table" border="1" id="ping">
            <thead>
                <tr style="background-color: skyblue">
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        <b>Panduan Assessment</b>
                    </td>
                </tr>
            </thead>
            <tr>
                <td width="691px"
                    style="text-align: left: vertical-align: top;padding-left: 20px; padding-right: 10px;"> <b>Instruksi
                        :</b> <br>

                    <li>Baca
                        setiap pertanyaan di kolom sebelah kiri.</li>
                    <li>Isi dengan <b>" K"</b> pada kotak jika anda yakin dapat melakukan tugas yang
                        dijelaskan.</li>
                    <li>Isi kolom disebelah kanan dengan mendaftar bukti yang anda miliki untuk menunjukkan
                        bahwa anda melakukan tugas-tugas ini.</li>

                </td>
            </tr>
        </table>

        <div class="unit">
            <div class="table-responsive">
                <table class="table" border="1" id="ping" style="background-color: skyblue;border-collapse: collapse;">
                    <thead>
                        <tr>
                            <td width="200px"
                                style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                <b>Unit Kompetensi No.
                                    1</b>
                            </td>
                            <td width="482px" style="vertical-align: top;padding: 10px;"
                                style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                {{
                                $datas->apl02->kompetensi02->kode2 }} <br>
                                {{ $datas->apl02->kompetensi02->unit }}
                            </td>
                        </tr>
                    </thead>
                </table>
            </div>

            <div class="table-responsive">
                <table class="table" border="1" id="ping">
                    <tbody>
                        <tr>
                            <td width="503px"> <b>Dapatkah saya?</b> </td>
                            <td width="62px" style="text-align: center">K</td>
                            <td width="62px" style="text-align: center">BK</td>
                            <td width="80px" style="text-align: center">Bukti</td>
                        </tr>
                        <tr>
                            <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                {!! $datas->apl02->kompetensi02->element_kuk_1_01 !!}</td>
                            <td style="text-align: center">

                                @switch($datas)
                                @case($datas->element_kuk_1_01 == 'K')
                                {{ $datas->element_kuk_1_01 }}
                                @break
                                @default
                                @endswitch

                            </td>
                            <td style="text-align: center">

                                @switch($datas)
                                @case($datas->element_kuk_1_01 == 'BK')
                                {{ $datas->element_kuk_1_01 }}
                                @break
                                @default
                                @endswitch
                            </td>
                            <td style="text-align: center">Bukti 3.a</td>
                        </tr>
                        @unless(!$datas->apl02->kompetensi02->element_kuk_1_02)
                        <tr>
                            <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                {!! $datas->apl02->kompetensi02->element_kuk_1_02 !!}</td>
                            <td style="text-align: center">

                                @switch($datas)
                                @case($datas->element_kuk_1_02 == 'K')
                                {{ $datas->element_kuk_1_02 }}
                                @break
                                @default
                                @endswitch

                            </td>
                            <td style="text-align: center">

                                @switch($datas)
                                @case($datas->element_kuk_1_02 == 'BK')
                                {{ $datas->element_kuk_1_02 }}
                                @break
                                @default
                                @endswitch
                            </td>
                            <td style="text-align: center">Bukti 3.b</td>
                        </tr>
                        @endunless

                        @unless(!$datas->apl02->kompetensi02->element_kuk_1_03)
                        <tr>
                            <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                {!! $datas->apl02->kompetensi02->element_kuk_1_03 !!}</td>
                            <td style="text-align: center">

                                @switch($datas)
                                @case($datas->element_kuk_1_03 == 'K')
                                {{ $datas->element_kuk_1_03 }}
                                @break
                                @default
                                @endswitch

                            </td>
                            <td style="text-align: center">

                                @switch($datas)
                                @case($datas->element_kuk_1_03 == 'BK')
                                {{ $datas->element_kuk_1_03 }}
                                @break
                                @default
                                @endswitch
                            </td>
                            <td style="text-align: center">Bukti 3.a</td>
                        </tr>
                        @endunless

                        @unless(!$datas->apl02->kompetensi02->element_kuk_1_04)
                        <tr>
                            <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                {!! $datas->apl02->kompetensi02->element_kuk_1_04 !!}</td>
                            <td style="text-align: center">

                                @switch($datas)
                                @case($datas->element_kuk_1_04 == 'K')
                                {{ $datas->element_kuk_1_04 }}
                                @break
                                @default
                                @endswitch

                            </td>
                            <td style="text-align: center">

                                @switch($datas)
                                @case($datas->element_kuk_1_04 == 'BK')
                                {{ $datas->element_kuk_1_04 }}
                                @break
                                @default
                                @endswitch
                            </td>
                            <td style="text-align: center">Bukti 3.b</td>
                        </tr>
                        @endunless

                        @unless(!$datas->apl02->kompetensi02->element_kuk_1_05)
                        <tr>
                            <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                {!! $datas->apl02->kompetensi02->element_kuk_1_05 !!}</td>
                            <td style="text-align: center">

                                @switch($datas)
                                @case($datas->element_kuk_1_05 == 'K')
                                {{ $datas->element_kuk_1_05 }}
                                @break
                                @default
                                @endswitch

                            </td>
                            <td style="text-align: center">

                                @switch($datas)
                                @case($datas->element_kuk_1_05 == 'BK')
                                {{ $datas->element_kuk_1_05 }}
                                @break
                                @default
                                @endswitch
                            </td>
                            <td style="text-align: center">Bukti 3.a</td>
                        </tr>
                        @endunless

                        @unless(!$datas->apl02->kompetensi02->element_kuk_1_06)
                        <tr>
                            <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                {!! $datas->apl02->kompetensi02->element_kuk_1_06 !!}</td>
                            <td style="text-align: center">

                                @switch($datas)
                                @case($datas->element_kuk_1_06 == 'K')
                                {{ $datas->element_kuk_1_06 }}
                                @break
                                @default
                                @endswitch

                            </td>
                            <td style="text-align: center">

                                @switch($datas)
                                @case($datas->element_kuk_1_06 == 'BK')
                                {{ $datas->element_kuk_1_06 }}
                                @break
                                @default
                                @endswitch
                            </td>
                            <td style="text-align: center">Bukti 3.b</td>
                        </tr>
                        @endunless

                        @unless(!$datas->apl02->kompetensi02->element_kuk_1_07)
                        <tr>
                            <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                {!! $datas->apl02->kompetensi02->element_kuk_1_07 !!}</td>
                            <td style="text-align: center">

                                @switch($datas)
                                @case($datas->element_kuk_1_07 == 'K')
                                {{ $datas->element_kuk_1_07 }}
                                @break
                                @default
                                @endswitch

                            </td>
                            <td style="text-align: center">

                                @switch($datas)
                                @case($datas->element_kuk_1_07 == 'BK')
                                {{ $datas->element_kuk_1_07 }}
                                @break
                                @default
                                @endswitch
                            </td>
                            <td style="text-align: center">Bukti 3.a</td>
                        </tr>
                        @endunless

                        @unless(!$datas->apl02->kompetensi02->element_kuk_1_08)
                        <tr>
                            <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                {!! $datas->apl02->kompetensi02->element_kuk_1_08 !!}</td>
                            <td style="text-align: center">

                                @switch($datas)
                                @case($datas->element_kuk_1_08 == 'K')
                                {{ $datas->element_kuk_1_08 }}
                                @break
                                @default
                                @endswitch

                            </td>
                            <td style="text-align: center">

                                @switch($datas)
                                @case($datas->element_kuk_1_08 == 'BK')
                                {{ $datas->element_kuk_1_08 }}
                                @break
                                @default
                                @endswitch
                            </td>
                            <td style="text-align: center">Bukti 3.b</td>
                        </tr>
                        @endunless


                        @unless(!$datas->apl02->kompetensi02->element_kuk_1_09)
                        <tr>
                            <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                {!! $datas->apl02->kompetensi02->element_kuk_1_09 !!}</td>
                            <td style="text-align: center">

                                @switch($datas)
                                @case($datas->element_kuk_1_09 == 'K')
                                {{ $datas->element_kuk_1_09 }}
                                @break
                                @default
                                @endswitch

                            </td>
                            <td style="text-align: center">

                                @switch($datas)
                                @case($datas->element_kuk_1_09 == 'BK')
                                {{ $datas->element_kuk_1_09 }}
                                @break
                                @default
                                @endswitch
                            </td>
                            <td style="text-align: center">Bukti 3.a</td>
                        </tr>
                        @endunless

                        @unless(!$datas->apl02->kompetensi02->element_kuk_1_10)
                        <!-- Tampilkan data -->
                        <tr>
                            <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                {!! $datas->apl02->kompetensi02->element_kuk_1_10 !!}</td>
                            <td style="text-align: center">

                                @switch($datas)
                                @case($datas->element_kuk_1_10 == 'K')
                                {{ $datas->element_kuk_1_10 }}
                                @break
                                @default
                                @endswitch

                            </td>
                            <td style="text-align: center">

                                @switch($datas)
                                @case($datas->element_kuk_1_10 == 'BK')
                                {{ $datas->element_kuk_1_10 }}
                                @break
                                @default
                                @endswitch
                            </td>
                            <td style="text-align: center">Bukti 3.b</td>
                        </tr>
                        @endunless

                        @switch($datas)
                        @case($datas->apl02->kompetensi02->element_kuk_1_11 == NULL)
                        @break
                        @default
                        <tr>
                            <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                {!! $datas->apl02->kompetensi02->element_kuk_1_11 !!}</td>
                            <td style="text-align: center">

                                @switch($datas)
                                @case($datas->element_kuk_1_11 == 'K')
                                {{ $datas->element_kuk_1_11 }}
                                @break
                                @default
                                @endswitch

                            </td>
                            <td style="text-align: center">

                                @switch($datas)
                                @case($datas->element_kuk_1_11 == 'BK')
                                {{ $datas->element_kuk_1_11 }}
                                @break
                                @default
                                @endswitch
                            </td>
                            <td style="text-align: center">Bukti 3.a</td>
                        </tr>
                        @endswitch

                    </tbody>
                </table>
            </div>

            @unless(!$datas->apl02->kompetensi02->kode2)
            <div style="margin-top: 20px">
                <div class="table-responsive">
                    <table class="table" border="1" id="ping"
                        style="background-color: skyblue;border-collapse: collapse;">
                        <thead>
                            <tr>
                                <td width="200px"
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    <b>Unit Kompetensi No.
                                        2</b>
                                </td>
                                <td width="482px" style="vertical-align: top;padding: 10px;"
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {{
                                    $datas->apl02->kompetensi02->kode2 }} <br>
                                    {{ $datas->apl02->kompetensi02->unit2 }}
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="table-responsive">
                    <table class="table" border="1" id="ping">
                        <tbody>
                            <tr>
                                <td width="503px"> <b>Dapatkah saya?</b> </td>
                                <td width="62px" style="text-align: center">K</td>
                                <td width="62px" style="text-align: center">BK</td>
                                <td width="80px" style="text-align: center">Bukti</td>
                            </tr>
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_2_01 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_2_01 == 'K')
                                    {{ $datas->element_kuk_2_01 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_2_01 == 'BK')
                                    {{ $datas->element_kuk_2_01 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @unless(!$datas->apl02->kompetensi02->element_kuk_2_02)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_2_02 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_2_02 == 'K')
                                    {{ $datas->element_kuk_2_02 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_2_02 == 'BK')
                                    {{ $datas->element_kuk_2_02 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_2_03)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_2_03 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_2_03 == 'K')
                                    {{ $datas->element_kuk_2_03 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_2_03 == 'BK')
                                    {{ $datas->element_kuk_2_03 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_2_04)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_2_04 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_2_04 == 'K')
                                    {{ $datas->element_kuk_2_04 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_2_04 == 'BK')
                                    {{ $datas->element_kuk_2_04 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_2_05)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_2_05 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_2_05 == 'K')
                                    {{ $datas->element_kuk_2_05 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_2_05 == 'BK')
                                    {{ $datas->element_kuk_2_05 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_2_06)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_2_06 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_2_06 == 'K')
                                    {{ $datas->element_kuk_2_06 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_2_06 == 'BK')
                                    {{ $datas->element_kuk_2_06 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_2_07)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_2_07 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_2_07 == 'K')
                                    {{ $datas->element_kuk_2_07 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_2_07 == 'BK')
                                    {{ $datas->element_kuk_2_07 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_2_08)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_2_08 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_2_08 == 'K')
                                    {{ $datas->element_kuk_2_08 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_2_08 == 'BK')
                                    {{ $datas->element_kuk_2_08 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless


                            @unless(!$datas->apl02->kompetensi02->element_kuk_2_09)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_2_09 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_2_09 == 'K')
                                    {{ $datas->element_kuk_2_09 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_2_09 == 'BK')
                                    {{ $datas->element_kuk_2_09 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_2_10)
                            <!-- Tampilkan data -->
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_2_10 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_2_10 == 'K')
                                    {{ $datas->element_kuk_2_10 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_2_10 == 'BK')
                                    {{ $datas->element_kuk_2_10 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless

                            @switch($datas)
                            @case($datas->apl02->kompetensi02->element_kuk_2_11 == NULL)
                            @break
                            @default
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_2_11 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_2_11 == 'K')
                                    {{ $datas->element_kuk_2_11 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_2_11 == 'BK')
                                    {{ $datas->element_kuk_2_11 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endswitch

                        </tbody>
                    </table>
                </div>
            </div>
            @endunless

            @unless(!$datas->apl02->kompetensi02->kode3)
            <div style="margin-top: 20px">
                <div class="table-responsive">
                    <table class="table" border="1" id="ping"
                        style="background-color: skyblue;border-collapse: collapse;">
                        <thead>
                            <tr>
                                <td width="200px"
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    <b>Unit Kompetensi No.
                                        3</b>
                                </td>
                                <td width="482px" style="vertical-align: top;padding: 10px;"
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {{
                                    $datas->apl02->kompetensi02->kode3 }} <br>
                                    {{ $datas->apl02->kompetensi02->unit3 }}
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="table-responsive">
                    <table class="table" border="1" id="ping">
                        <tbody>
                            <tr>
                                <td width="503px"> <b>Dapatkah saya?</b> </td>
                                <td width="62px" style="text-align: center">K</td>
                                <td width="62px" style="text-align: center">BK</td>
                                <td width="80px" style="text-align: center">Bukti</td>
                            </tr>
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_3_01 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_3_01 == 'K')
                                    {{ $datas->element_kuk_3_01 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_3_01 == 'BK')
                                    {{ $datas->element_kuk_3_01 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @unless(!$datas->apl02->kompetensi02->element_kuk_3_02)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_3_02 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_3_02 == 'K')
                                    {{ $datas->element_kuk_3_02 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_3_02 == 'BK')
                                    {{ $datas->element_kuk_3_02 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_3_03)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_3_03 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_3_03 == 'K')
                                    {{ $datas->element_kuk_3_03 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_3_03 == 'BK')
                                    {{ $datas->element_kuk_3_03 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_3_04)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_3_04 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_3_04 == 'K')
                                    {{ $datas->element_kuk_3_04 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_3_04 == 'BK')
                                    {{ $datas->element_kuk_3_04 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_3_05)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_3_05 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_3_05 == 'K')
                                    {{ $datas->element_kuk_3_05 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_3_05 == 'BK')
                                    {{ $datas->element_kuk_3_05 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_3_06)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_3_06 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_3_06 == 'K')
                                    {{ $datas->element_kuk_3_06 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_3_06 == 'BK')
                                    {{ $datas->element_kuk_3_06 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_3_07)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_3_07 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_3_07 == 'K')
                                    {{ $datas->element_kuk_3_07 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_3_07 == 'BK')
                                    {{ $datas->element_kuk_3_07 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_3_08)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_3_08 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_3_08 == 'K')
                                    {{ $datas->element_kuk_3_08 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_3_08 == 'BK')
                                    {{ $datas->element_kuk_3_08 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless


                            @unless(!$datas->apl02->kompetensi02->element_kuk_3_09)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_3_09 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_3_09 == 'K')
                                    {{ $datas->element_kuk_3_09 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_3_09 == 'BK')
                                    {{ $datas->element_kuk_3_09 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_3_10)
                            <!-- Tampilkan data -->
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_3_10 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_3_10 == 'K')
                                    {{ $datas->element_kuk_3_10 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_3_10 == 'BK')
                                    {{ $datas->element_kuk_3_10 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless

                            @switch($datas)
                            @case($datas->apl02->kompetensi02->element_kuk_3_11 == NULL)
                            @break
                            @default
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_3_11 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_3_11 == 'K')
                                    {{ $datas->element_kuk_3_11 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_3_11 == 'BK')
                                    {{ $datas->element_kuk_3_11 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endswitch

                        </tbody>
                    </table>
                </div>
            </div>
            @endunless

            @unless(!$datas->apl02->kompetensi02->kode4)
            <div style="margin-top: 20px">
                <div class="table-responsive">
                    <table class="table" border="1" id="ping"
                        style="background-color: skyblue;border-collapse: collapse;">
                        <thead>
                            <tr>
                                <td width="200px"
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    <b>Unit Kompetensi No.
                                        4</b>
                                </td>
                                <td width="482px" style="vertical-align: top;padding: 10px;"
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {{
                                    $datas->apl02->kompetensi02->kode4 }} <br>
                                    {{ $datas->apl02->kompetensi02->unit4 }}
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="table-responsive">
                    <table class="table" border="1" id="ping">
                        <tbody>
                            <tr>
                                <td width="503px"> <b>Dapatkah saya?</b> </td>
                                <td width="62px" style="text-align: center">K</td>
                                <td width="62px" style="text-align: center">BK</td>
                                <td width="80px" style="text-align: center">Bukti</td>
                            </tr>
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_4_01 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_4_01 == 'K')
                                    {{ $datas->element_kuk_4_01 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_4_01 == 'BK')
                                    {{ $datas->element_kuk_4_01 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @unless(!$datas->apl02->kompetensi02->element_kuk_4_02)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_4_02 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_4_02 == 'K')
                                    {{ $datas->element_kuk_4_02 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_4_02 == 'BK')
                                    {{ $datas->element_kuk_4_02 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_4_03)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_4_03 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_4_03 == 'K')
                                    {{ $datas->element_kuk_4_03 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_4_03 == 'BK')
                                    {{ $datas->element_kuk_4_03 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_4_04)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_4_04 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_4_04 == 'K')
                                    {{ $datas->element_kuk_4_04 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_4_04 == 'BK')
                                    {{ $datas->element_kuk_4_04 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_4_05)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_4_05 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_4_05 == 'K')
                                    {{ $datas->element_kuk_4_05 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_4_05 == 'BK')
                                    {{ $datas->element_kuk_4_05 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_4_06)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_4_06 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_4_06 == 'K')
                                    {{ $datas->element_kuk_4_06 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_4_06 == 'BK')
                                    {{ $datas->element_kuk_4_06 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_4_07)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_4_07 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_4_07 == 'K')
                                    {{ $datas->element_kuk_4_07 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_4_07 == 'BK')
                                    {{ $datas->element_kuk_4_07 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_4_08)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_4_08 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_4_08 == 'K')
                                    {{ $datas->element_kuk_4_08 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_4_08 == 'BK')
                                    {{ $datas->element_kuk_4_08 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless


                            @unless(!$datas->apl02->kompetensi02->element_kuk_4_09)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_4_09 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_4_09 == 'K')
                                    {{ $datas->element_kuk_4_09 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_4_09 == 'BK')
                                    {{ $datas->element_kuk_4_09 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_4_10)
                            <!-- Tampilkan data -->
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_4_10 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_4_10 == 'K')
                                    {{ $datas->element_kuk_4_10 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_4_10 == 'BK')
                                    {{ $datas->element_kuk_4_10 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless

                            @switch($datas)
                            @case($datas->apl02->kompetensi02->element_kuk_4_11 == NULL)
                            @break
                            @default
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_4_11 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_4_11 == 'K')
                                    {{ $datas->element_kuk_4_11 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_4_11 == 'BK')
                                    {{ $datas->element_kuk_4_11 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endswitch

                        </tbody>
                    </table>
                </div>
            </div>
            @endunless

            @unless(!$datas->apl02->kompetensi02->kode5)
            <div style="margin-top: 20px">
                <div class="table-responsive">
                    <table class="table" border="1" id="ping"
                        style="background-color: skyblue;border-collapse: collapse;">
                        <thead>
                            <tr>
                                <td width="200px"
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    <b>Unit Kompetensi No.
                                        5</b>
                                </td>
                                <td width="482px" style="vertical-align: top;padding: 10px;"
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {{
                                    $datas->apl02->kompetensi02->kode5 }} <br>
                                    {{ $datas->apl02->kompetensi02->unit5 }}
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="table-responsive">
                    <table class="table" border="1" id="ping">
                        <tbody>
                            <tr>
                                <td width="503px"> <b>Dapatkah saya?</b> </td>
                                <td width="62px" style="text-align: center">K</td>
                                <td width="62px" style="text-align: center">BK</td>
                                <td width="80px" style="text-align: center">Bukti</td>
                            </tr>
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_5_01 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_5_01 == 'K')
                                    {{ $datas->element_kuk_5_01 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_5_01 == 'BK')
                                    {{ $datas->element_kuk_5_01 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @unless(!$datas->apl02->kompetensi02->element_kuk_5_02)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_5_02 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_5_02 == 'K')
                                    {{ $datas->element_kuk_5_02 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_5_02 == 'BK')
                                    {{ $datas->element_kuk_5_02 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_5_03)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_5_03 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_5_03 == 'K')
                                    {{ $datas->element_kuk_5_03 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_5_03 == 'BK')
                                    {{ $datas->element_kuk_5_03 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_5_04)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_5_04 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_5_04 == 'K')
                                    {{ $datas->element_kuk_5_04 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_5_04 == 'BK')
                                    {{ $datas->element_kuk_5_04 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_5_05)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_5_05 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_5_05 == 'K')
                                    {{ $datas->element_kuk_5_05 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_5_05 == 'BK')
                                    {{ $datas->element_kuk_5_05 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_5_06)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_5_06 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_5_06 == 'K')
                                    {{ $datas->element_kuk_5_06 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_5_06 == 'BK')
                                    {{ $datas->element_kuk_5_06 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_5_07)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_5_07 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_5_07 == 'K')
                                    {{ $datas->element_kuk_5_07 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_5_07 == 'BK')
                                    {{ $datas->element_kuk_5_07 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_5_08)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_5_08 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_5_08 == 'K')
                                    {{ $datas->element_kuk_5_08 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_5_08 == 'BK')
                                    {{ $datas->element_kuk_5_08 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless


                            @unless(!$datas->apl02->kompetensi02->element_kuk_5_09)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_5_09 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_5_09 == 'K')
                                    {{ $datas->element_kuk_5_09 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_5_09 == 'BK')
                                    {{ $datas->element_kuk_5_09 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_5_10)
                            <!-- Tampilkan data -->
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_5_10 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_5_10 == 'K')
                                    {{ $datas->element_kuk_5_10 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_5_10 == 'BK')
                                    {{ $datas->element_kuk_5_10 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless

                            @switch($datas)
                            @case($datas->apl02->kompetensi02->element_kuk_5_11 == NULL)
                            @break
                            @default
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_5_11 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_5_11 == 'K')
                                    {{ $datas->element_kuk_5_11 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_5_11 == 'BK')
                                    {{ $datas->element_kuk_5_11 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endswitch

                        </tbody>
                    </table>
                </div>
            </div>
            @endunless


            @unless(!$datas->apl02->kompetensi02->kode6)
            <div style="margin-top: 20px">
                <div class="table-responsive">
                    <table class="table" border="1" id="ping"
                        style="background-color: skyblue;border-collapse: collapse;">
                        <thead>
                            <tr>
                                <td width="200px"
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    <b>Unit Kompetensi No.
                                        6</b>
                                </td>
                                <td width="482px" style="vertical-align: top;padding: 10px;"
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {{
                                    $datas->apl02->kompetensi02->kode6 }} <br>
                                    {{ $datas->apl02->kompetensi02->unit6 }}
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="table-responsive">
                    <table class="table" border="1" id="ping">
                        <tbody>
                            <tr>
                                <td width="503px"> <b>Dapatkah saya?</b> </td>
                                <td width="62px" style="text-align: center">K</td>
                                <td width="62px" style="text-align: center">BK</td>
                                <td width="80px" style="text-align: center">Bukti</td>
                            </tr>
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_6_01 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_6_01 == 'K')
                                    {{ $datas->element_kuk_6_01 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_6_01 == 'BK')
                                    {{ $datas->element_kuk_6_01 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @unless(!$datas->apl02->kompetensi02->element_kuk_6_02)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_6_02 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_6_02 == 'K')
                                    {{ $datas->element_kuk_6_02 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_6_02 == 'BK')
                                    {{ $datas->element_kuk_6_02 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_6_03)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_6_03 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_6_03 == 'K')
                                    {{ $datas->element_kuk_6_03 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_6_03 == 'BK')
                                    {{ $datas->element_kuk_6_03 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_6_04)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_6_04 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_6_04 == 'K')
                                    {{ $datas->element_kuk_6_04 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_6_04 == 'BK')
                                    {{ $datas->element_kuk_6_04 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_6_05)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_6_05 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_6_05 == 'K')
                                    {{ $datas->element_kuk_6_05 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_6_05 == 'BK')
                                    {{ $datas->element_kuk_6_05 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_6_06)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_6_06 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_6_06 == 'K')
                                    {{ $datas->element_kuk_6_06 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_6_06 == 'BK')
                                    {{ $datas->element_kuk_6_06 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_6_07)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_6_07 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_6_07 == 'K')
                                    {{ $datas->element_kuk_6_07 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_6_07 == 'BK')
                                    {{ $datas->element_kuk_6_07 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_6_08)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_6_08 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_6_08 == 'K')
                                    {{ $datas->element_kuk_6_08 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_6_08 == 'BK')
                                    {{ $datas->element_kuk_6_08 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless


                            @unless(!$datas->apl02->kompetensi02->element_kuk_6_09)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_6_09 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_6_09 == 'K')
                                    {{ $datas->element_kuk_6_09 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_6_09 == 'BK')
                                    {{ $datas->element_kuk_6_09 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_6_10)
                            <!-- Tampilkan data -->
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_6_10 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_6_10 == 'K')
                                    {{ $datas->element_kuk_6_10 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_6_10 == 'BK')
                                    {{ $datas->element_kuk_6_10 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless

                            @switch($datas)
                            @case($datas->apl02->kompetensi02->element_kuk_6_11 == NULL)
                            @break
                            @default
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_6_11 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_6_11 == 'K')
                                    {{ $datas->element_kuk_6_11 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_6_11 == 'BK')
                                    {{ $datas->element_kuk_6_11 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endswitch

                        </tbody>
                    </table>
                </div>
            </div>
            @endunless

            @unless(!$datas->apl02->kompetensi02->kode7)
            <div style="margin-top: 20px">
                <div class="table-responsive">
                    <table class="table" border="1" id="ping"
                        style="background-color: skyblue;border-collapse: collapse;">
                        <thead>
                            <tr>
                                <td width="200px"
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    <b>Unit Kompetensi No.
                                        7</b>
                                </td>
                                <td width="482px" style="vertical-align: top;padding: 10px;"
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {{
                                    $datas->apl02->kompetensi02->kode7 }} <br>
                                    {{ $datas->apl02->kompetensi02->unit7 }}
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="table-responsive">
                    <table class="table" border="1" id="ping">
                        <tbody>
                            <tr>
                                <td width="503px"> <b>Dapatkah saya?</b> </td>
                                <td width="62px" style="text-align: center">K</td>
                                <td width="62px" style="text-align: center">BK</td>
                                <td width="80px" style="text-align: center">Bukti</td>
                            </tr>
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_7_01 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_7_01 == 'K')
                                    {{ $datas->element_kuk_7_01 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_7_01 == 'BK')
                                    {{ $datas->element_kuk_7_01 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @unless(!$datas->apl02->kompetensi02->element_kuk_7_02)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_7_02 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_7_02 == 'K')
                                    {{ $datas->element_kuk_7_02 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_7_02 == 'BK')
                                    {{ $datas->element_kuk_7_02 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_7_03)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_7_03 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_7_03 == 'K')
                                    {{ $datas->element_kuk_7_03 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_7_03 == 'BK')
                                    {{ $datas->element_kuk_7_03 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_7_04)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_7_04 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_7_04 == 'K')
                                    {{ $datas->element_kuk_7_04 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_7_04 == 'BK')
                                    {{ $datas->element_kuk_7_04 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_7_05)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_7_05 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_7_05 == 'K')
                                    {{ $datas->element_kuk_7_05 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_7_05 == 'BK')
                                    {{ $datas->element_kuk_7_05 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_7_06)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_7_06 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_7_06 == 'K')
                                    {{ $datas->element_kuk_7_06 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_7_06 == 'BK')
                                    {{ $datas->element_kuk_7_06 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_7_07)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_7_07 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_7_07 == 'K')
                                    {{ $datas->element_kuk_7_07 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_7_07 == 'BK')
                                    {{ $datas->element_kuk_7_07 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_7_08)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_7_08 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_7_08 == 'K')
                                    {{ $datas->element_kuk_7_08 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_7_08 == 'BK')
                                    {{ $datas->element_kuk_7_08 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless


                            @unless(!$datas->apl02->kompetensi02->element_kuk_7_09)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_7_09 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_7_09 == 'K')
                                    {{ $datas->element_kuk_7_09 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_7_09 == 'BK')
                                    {{ $datas->element_kuk_7_09 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_7_10)
                            <!-- Tampilkan data -->
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_7_10 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_7_10 == 'K')
                                    {{ $datas->element_kuk_7_10 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_7_10 == 'BK')
                                    {{ $datas->element_kuk_7_10 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless

                            @switch($datas)
                            @case($datas->apl02->kompetensi02->element_kuk_7_11 == NULL)
                            @break
                            @default
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_7_11 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_7_11 == 'K')
                                    {{ $datas->element_kuk_7_11 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_7_11 == 'BK')
                                    {{ $datas->element_kuk_7_11 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endswitch

                        </tbody>
                    </table>
                </div>
            </div>
            @endunless


            @unless(!$datas->apl02->kompetensi02->kode8)
            <div style="margin-top: 20px">
                <div class="table-responsive">
                    <table class="table" border="1" id="ping"
                        style="background-color: skyblue;border-collapse: collapse;">
                        <thead>
                            <tr>
                                <td width="200px"
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    <b>Unit Kompetensi No.
                                        8</b>
                                </td>
                                <td width="482px" style="vertical-align: top;padding: 10px;"
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {{
                                    $datas->apl02->kompetensi02->kode8 }} <br>
                                    {{ $datas->apl02->kompetensi02->unit8 }}
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="table-responsive">
                    <table class="table" border="1" id="ping">
                        <tbody>
                            <tr>
                                <td width="503px"> <b>Dapatkah saya?</b> </td>
                                <td width="62px" style="text-align: center">K</td>
                                <td width="62px" style="text-align: center">BK</td>
                                <td width="80px" style="text-align: center">Bukti</td>
                            </tr>
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_8_01 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_8_01 == 'K')
                                    {{ $datas->element_kuk_8_01 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_8_01 == 'BK')
                                    {{ $datas->element_kuk_8_01 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @unless(!$datas->apl02->kompetensi02->element_kuk_8_02)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_8_02 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_8_02 == 'K')
                                    {{ $datas->element_kuk_8_02 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_8_02 == 'BK')
                                    {{ $datas->element_kuk_8_02 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_8_03)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_8_03 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_8_03 == 'K')
                                    {{ $datas->element_kuk_8_03 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_8_03 == 'BK')
                                    {{ $datas->element_kuk_8_03 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_8_04)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_8_04 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_8_04 == 'K')
                                    {{ $datas->element_kuk_8_04 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_8_04 == 'BK')
                                    {{ $datas->element_kuk_8_04 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_8_05)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_8_05 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_8_05 == 'K')
                                    {{ $datas->element_kuk_8_05 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_8_05 == 'BK')
                                    {{ $datas->element_kuk_8_05 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_8_06)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_8_06 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_8_06 == 'K')
                                    {{ $datas->element_kuk_8_06 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_8_06 == 'BK')
                                    {{ $datas->element_kuk_8_06 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_8_07)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_8_07 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_8_07 == 'K')
                                    {{ $datas->element_kuk_8_07 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_8_07 == 'BK')
                                    {{ $datas->element_kuk_8_07 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_8_08)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_8_08 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_8_08 == 'K')
                                    {{ $datas->element_kuk_8_08 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_8_08 == 'BK')
                                    {{ $datas->element_kuk_8_08 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless


                            @unless(!$datas->apl02->kompetensi02->element_kuk_8_09)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_8_09 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_8_09 == 'K')
                                    {{ $datas->element_kuk_8_09 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_8_09 == 'BK')
                                    {{ $datas->element_kuk_8_09 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_8_10)
                            <!-- Tampilkan data -->
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_8_10 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_8_10 == 'K')
                                    {{ $datas->element_kuk_8_10 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_8_10 == 'BK')
                                    {{ $datas->element_kuk_8_10 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless

                            @switch($datas)
                            @case($datas->apl02->kompetensi02->element_kuk_8_11 == NULL)
                            @break
                            @default
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_8_11 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_8_11 == 'K')
                                    {{ $datas->element_kuk_8_11 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_8_11 == 'BK')
                                    {{ $datas->element_kuk_8_11 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endswitch

                        </tbody>
                    </table>
                </div>
            </div>
            @endunless


            @unless(!$datas->apl02->kompetensi02->kode9)
            <div style="margin-top: 20px">
                <div class="table-responsive">
                    <table class="table" border="1" id="ping"
                        style="background-color: skyblue;border-collapse: collapse;">
                        <thead>
                            <tr>
                                <td width="200px"
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    <b>Unit Kompetensi No.
                                        9</b>
                                </td>
                                <td width="482px" style="vertical-align: top;padding: 10px;"
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {{
                                    $datas->apl02->kompetensi02->kode9 }} <br>
                                    {{ $datas->apl02->kompetensi02->unit9 }}
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="table-responsive">
                    <table class="table" border="1" id="ping">
                        <tbody>
                            <tr>
                                <td width="503px"> <b>Dapatkah saya?</b> </td>
                                <td width="62px" style="text-align: center">K</td>
                                <td width="62px" style="text-align: center">BK</td>
                                <td width="80px" style="text-align: center">Bukti</td>
                            </tr>
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_9_01 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_9_01 == 'K')
                                    {{ $datas->element_kuk_9_01 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_9_01 == 'BK')
                                    {{ $datas->element_kuk_9_01 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @unless(!$datas->apl02->kompetensi02->element_kuk_9_02)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_9_02 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_9_02 == 'K')
                                    {{ $datas->element_kuk_9_02 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_9_02 == 'BK')
                                    {{ $datas->element_kuk_9_02 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_9_03)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_9_03 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_9_03 == 'K')
                                    {{ $datas->element_kuk_9_03 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_9_03 == 'BK')
                                    {{ $datas->element_kuk_9_03 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_9_04)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_9_04 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_9_04 == 'K')
                                    {{ $datas->element_kuk_9_04 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_9_04 == 'BK')
                                    {{ $datas->element_kuk_9_04 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_9_05)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_9_05 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_9_05 == 'K')
                                    {{ $datas->element_kuk_9_05 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_9_05 == 'BK')
                                    {{ $datas->element_kuk_9_05 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_9_06)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_9_06 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_9_06 == 'K')
                                    {{ $datas->element_kuk_9_06 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_9_06 == 'BK')
                                    {{ $datas->element_kuk_9_06 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_9_07)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_9_07 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_9_07 == 'K')
                                    {{ $datas->element_kuk_9_07 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_9_07 == 'BK')
                                    {{ $datas->element_kuk_9_07 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_9_08)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_9_08 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_9_08 == 'K')
                                    {{ $datas->element_kuk_9_08 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_9_08 == 'BK')
                                    {{ $datas->element_kuk_9_08 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless


                            @unless(!$datas->apl02->kompetensi02->element_kuk_9_09)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_9_09 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_9_09 == 'K')
                                    {{ $datas->element_kuk_9_09 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_9_09 == 'BK')
                                    {{ $datas->element_kuk_9_09 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_9_10)
                            <!-- Tampilkan data -->
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_9_10 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_9_10 == 'K')
                                    {{ $datas->element_kuk_9_10 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_9_10 == 'BK')
                                    {{ $datas->element_kuk_9_10 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless

                            @switch($datas)
                            @case($datas->apl02->kompetensi02->element_kuk_9_11 == NULL)
                            @break
                            @default
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_9_11 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_9_11 == 'K')
                                    {{ $datas->element_kuk_9_11 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_9_11 == 'BK')
                                    {{ $datas->element_kuk_9_11 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endswitch

                        </tbody>
                    </table>
                </div>
            </div>
            @endunless

            @unless(!$datas->apl02->kompetensi02->kode10)
            <div style="margin-top: 20px">
                <div class="table-responsive">
                    <table class="table" border="1" id="ping"
                        style="background-color: skyblue;border-collapse: collapse;">
                        <thead>
                            <tr>
                                <td width="200px"
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    <b>Unit Kompetensi No.
                                        10</b>
                                </td>
                                <td width="482px" style="vertical-align: top;padding: 10px;"
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {{
                                    $datas->apl02->kompetensi02->kode10 }} <br>
                                    {{ $datas->apl02->kompetensi02->unit10 }}
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="table-responsive">
                    <table class="table" border="1" id="ping">
                        <tbody>
                            <tr>
                                <td width="503px"> <b>Dapatkah saya?</b> </td>
                                <td width="62px" style="text-align: center">K</td>
                                <td width="62px" style="text-align: center">BK</td>
                                <td width="80px" style="text-align: center">Bukti</td>
                            </tr>
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_10_01 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_10_01 == 'K')
                                    {{ $datas->element_kuk_10_01 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_10_01 == 'BK')
                                    {{ $datas->element_kuk_10_01 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @unless(!$datas->apl02->kompetensi02->element_kuk_10_02)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_10_02 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_10_02 == 'K')
                                    {{ $datas->element_kuk_10_02 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_10_02 == 'BK')
                                    {{ $datas->element_kuk_10_02 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_10_03)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_10_03 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_10_03 == 'K')
                                    {{ $datas->element_kuk_10_03 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_10_03 == 'BK')
                                    {{ $datas->element_kuk_10_03 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_10_04)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_10_04 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_10_04 == 'K')
                                    {{ $datas->element_kuk_10_04 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_10_04 == 'BK')
                                    {{ $datas->element_kuk_10_04 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_10_05)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_10_05 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_10_05 == 'K')
                                    {{ $datas->element_kuk_10_05 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_10_05 == 'BK')
                                    {{ $datas->element_kuk_10_05 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_10_06)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_10_06 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_10_06 == 'K')
                                    {{ $datas->element_kuk_10_06 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_10_06 == 'BK')
                                    {{ $datas->element_kuk_10_06 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_10_07)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_10_07 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_10_07 == 'K')
                                    {{ $datas->element_kuk_10_07 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_10_07 == 'BK')
                                    {{ $datas->element_kuk_10_07 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_10_08)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_10_08 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_10_08 == 'K')
                                    {{ $datas->element_kuk_10_08 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_10_08 == 'BK')
                                    {{ $datas->element_kuk_10_08 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless


                            @unless(!$datas->apl02->kompetensi02->element_kuk_10_09)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_10_09 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_10_09 == 'K')
                                    {{ $datas->element_kuk_10_09 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_10_09 == 'BK')
                                    {{ $datas->element_kuk_10_09 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_10_10)
                            <!-- Tampilkan data -->
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_10_10 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_10_10 == 'K')
                                    {{ $datas->element_kuk_10_10 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_10_10 == 'BK')
                                    {{ $datas->element_kuk_10_10 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless

                            @switch($datas)
                            @case($datas->apl02->kompetensi02->element_kuk_10_11 == NULL)
                            @break
                            @default
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_10_11 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_10_11 == 'K')
                                    {{ $datas->element_kuk_10_11 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_10_11 == 'BK')
                                    {{ $datas->element_kuk_10_11 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endswitch

                        </tbody>
                    </table>
                </div>
            </div>
            @endunless

            @unless(!$datas->apl02->kompetensi02->kode11)
            <div style="margin-top: 20px">
                <div class="table-responsive">
                    <table class="table" border="1" id="ping"
                        style="background-color: skyblue;border-collapse: collapse;">
                        <thead>
                            <tr>
                                <td width="200px"
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    <b>Unit Kompetensi No.
                                        11</b>
                                </td>
                                <td width="482px" style="vertical-align: top;padding: 10px;">
                                    {{
                                    $datas->apl02->kompetensi02->kode11 }} <br>
                                    {{ $datas->apl02->kompetensi02->unit11 }}
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="table-responsive">
                    <table class="table" border="1" id="ping">
                        <tbody>
                            <tr>
                                <td width="503px"> <b>Dapatkah saya?</b> </td>
                                <td width="62px" style="text-align: center">K</td>
                                <td width="62px" style="text-align: center">BK</td>
                                <td width="80px" style="text-align: center">Bukti</td>
                            </tr>
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_11_01 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_11_01 == 'K')
                                    {{ $datas->element_kuk_11_01 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_11_01 == 'BK')
                                    {{ $datas->element_kuk_11_01 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @unless(!$datas->apl02->kompetensi02->element_kuk_11_02)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_11_02 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_11_02 == 'K')
                                    {{ $datas->element_kuk_11_02 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_11_02 == 'BK')
                                    {{ $datas->element_kuk_11_02 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_11_03)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_11_03 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_11_03 == 'K')
                                    {{ $datas->element_kuk_11_03 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_11_03 == 'BK')
                                    {{ $datas->element_kuk_11_03 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_11_04)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_11_04 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_11_04 == 'K')
                                    {{ $datas->element_kuk_11_04 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_11_04 == 'BK')
                                    {{ $datas->element_kuk_11_04 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_11_05)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_11_05 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_11_05 == 'K')
                                    {{ $datas->element_kuk_11_05 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_11_05 == 'BK')
                                    {{ $datas->element_kuk_11_05 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_11_06)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_11_06 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_11_06 == 'K')
                                    {{ $datas->element_kuk_11_06 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_11_06 == 'BK')
                                    {{ $datas->element_kuk_11_06 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_11_07)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_11_07 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_11_07 == 'K')
                                    {{ $datas->element_kuk_11_07 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_11_07 == 'BK')
                                    {{ $datas->element_kuk_11_07 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_11_08)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_11_08 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_11_08 == 'K')
                                    {{ $datas->element_kuk_11_08 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_11_08 == 'BK')
                                    {{ $datas->element_kuk_11_08 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless


                            @unless(!$datas->apl02->kompetensi02->element_kuk_11_09)
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_11_09 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_11_09 == 'K')
                                    {{ $datas->element_kuk_11_09 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_11_09 == 'BK')
                                    {{ $datas->element_kuk_11_09 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endunless

                            @unless(!$datas->apl02->kompetensi02->element_kuk_11_10)
                            <!-- Tampilkan data -->
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_11_10 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_11_10 == 'K')
                                    {{ $datas->element_kuk_11_10 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_11_10 == 'BK')
                                    {{ $datas->element_kuk_11_10 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.b</td>
                            </tr>
                            @endunless

                            @switch($datas)
                            @case($datas->apl02->kompetensi02->element_kuk_11_11 == NULL)
                            @break
                            @default
                            <tr>
                                <td
                                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                                    {!! $datas->apl02->kompetensi02->element_kuk_11_11 !!}</td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_11_11 == 'K')
                                    {{ $datas->element_kuk_11_11 }}
                                    @break
                                    @default
                                    @endswitch

                                </td>
                                <td style="text-align: center">

                                    @switch($datas)
                                    @case($datas->element_kuk_11_11 == 'BK')
                                    {{ $datas->element_kuk_11_11 }}
                                    @break
                                    @default
                                    @endswitch
                                </td>
                                <td style="text-align: center">Bukti 3.a</td>
                            </tr>
                            @endswitch

                        </tbody>
                    </table>
                </div>
            </div>
            @endunless


        </div>


        <table class="table" border="1" id="ping" style="margin-top: 25px">
            <tr>
                <td width="220px"
                    style="text-align: left: vertical-align: top; vertical-align: top;padding-left: 10px; padding-right: 10px;">
                    <b>Nama
                        Peserta :</b>
                    <p style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">{{
                        $datas->apl02->personal_detail->nama_lengkap->name }}</p>

                </td>
                <td width="220px"
                    style="text-align: left: vertical-align: top; vertical-align: top;padding-left: 10px; padding-right: 10px;">
                    <b>Tanggal :</b>

                    <p>2023-12-2440</p>
                </td>
                <td width="218px"
                    style="text-align: left: vertical-align: top; vertical-align: top;padding-left: 10px; padding-right: 10px;">
                    <b>Tanda
                        Tangan Peserta :</b>

                    <p style="text-align: center">
                        <!--<img src="{{ asset('https://sisfo.bnsp.go.id/images/K8cRm4d6SGTrLQXefW3ON0JsIYM5ioPH.png') }}"-->
                        <!--    width="100">-->
                    </p>
                </td>
            </tr>

            <tr style="background-color: skyblue">
                <td colspan="3"
                    style="text-align: left: vertical-align: top; vertical-align: top;padding-left: 10px; padding-right: 10px;">
                    <b>Ditinjau
                        oleh asesor</b>

                </td>
            </tr>
            <tr>
                <td
                    style="text-align: left: vertical-align: top; vertical-align: top;padding-left: 10px; padding-right: 10px;">
                    <b>Nama
                        asesor :</b>
                    <p style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">{{
                        $datas->nama_asesor_lsp }}</p>
                </td>
                <td
                    style="text-align: left: vertical-align: top; vertical-align: top;padding-left: 10px; padding-right: 10px;">
                    <b>Rekomendasi :</b>

                    <p>1. Asesment

                        @switch($datas)
                        @case($datas->status == 'Dapat' )
                        <b>Dapat</b> /
                        @break
                        @default
                        <del><b>Dapat</b></del>/
                        @endswitch

                        @switch($datas)
                        @case($datas->status == 'Tidak dapat')
                        <b>Tidak dapat *)</b>
                        @break
                        @default
                        <del><b>Tidak dapat *)</b></del>
                        @endswitch
                        dilanjutkan
                    </p>

                    <p>2. Proses asesment dapat di lanjutkan melalui: ** <br>
                        @switch($datas)
                        @case($datas->proses_assessment == 'Assessment Portfolio')
                        - &nbsp; Assessment Portfolio <br>
                        @break
                        @default
                        - &nbsp; <del>Assessment Portfolio</del> <br>

                        @endswitch @switch($datas)
                        @case($datas->proses_assessment == 'Uji Kompetensi')
                        - &nbsp; Uji Kompetensi
                        @break
                        @default
                        - &nbsp; <del>Uji Kompetensi</del>
                        @endswitch
                    </p>


                </td>
                <td
                    style="text-align: left: vertical-align: top; vertical-align: top;padding-left: 10px; padding-right: 10px;">
                    <b>Tanda
                        Tangan dan Tanggal :</b>
                    <p style="text-align: center">
                        <!--<img src="{{ asset('https://sisfo.bnsp.go.id/images/K8cRm4d6SGTrLQXefW3ON0JsIYM5ioPH.png') }}"-->
                        <!--    width="100"> <br>-->
                    </p>
                    <p style="text-align: center"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">{{
                        $datas->tanggal_validasi }}</p>

                </td>
            </tr>
        </table>
        <p>*Coret yang tidak perlu
            <br>
            **Beri tanda centang di ([]) dikolom yang sesuai
        </p>

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
