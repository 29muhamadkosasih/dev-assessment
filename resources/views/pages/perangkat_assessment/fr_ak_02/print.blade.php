<!DOCTYPE html>

<head>
    <title>FK.AK-02. FORMULIR REKAMAN ASESMEN KOMPETENSI
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
        <h3 id=judul>FK.AK-02. FORMULIR REKAMAN ASESMEN KOMPETENSI</h3>
        <table class="table" border="1" id="ping">
            <tbody class="table-border-bottom-0">
                <tr>
                    <td width="205px" colspan="4"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        <b>Nama Asesor</b>
                    </td>
                    <td width="600px" colspan="5"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{ $datas->rekAsm->nama_asesor_lsp }}
                    </td>
                </tr>
                <tr>
                    <td colspan="4"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        <b>Nama Asesi</b>
                    </td>
                    <td colspan="5"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{$datas->rekAsm->apl02->personal_detail->nama_lengkap->name}}
                    </td>
                </tr>
                <tr>
                    <td colspan="4"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        <b>Skema Sertifikasi Okupasi</b>
                    </td>
                    <td colspan="5"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        <B>{{ $datas->rekAsm->apl02->kompetensi02->kompetensi->skema->nama_skema }}</B>
                    </td>
                </tr>
                <tr>
                    <td colspan="4"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        <b>Unit Kompetensi</b>
                    </td>
                    <td colspan="5"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{ $datas->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi }} <br>
                        {{ $datas->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi2 }} <br>

                        @switch($datas)
                        @case($datas->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi3 == null)
                        @break
                        @default
                        {{ $datas->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi3 }} <br>
                        @endswitch

                        @switch($datas)
                        @case($datas->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi4 == null)
                        @break
                        @default
                        {{ $datas->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi4 }} <br>
                        @endswitch

                        @switch($datas)
                        @case($datas->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi5 == null)
                        @break
                        @default
                        {{ $datas->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi5 }} <br>
                        @endswitch

                        @switch($datas)
                        @case($datas->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi6 == null)
                        @break
                        @default
                        {{ $datas->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi6 }} <br>
                        @endswitch

                        @switch($datas)
                        @case($datas->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi7 == null)
                        @break
                        @default
                        {{ $datas->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi7 }} <br>
                        @endswitch

                        @switch($datas)
                        @case($datas->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi8 == null)
                        @break
                        @default
                        {{ $datas->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi8 }} <br>
                        @endswitch

                        @switch($datas)
                        @case($datas->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi9 == null)
                        @break
                        @default
                        {{ $datas->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi9 }} <br>
                        @endswitch
                    </td>
                </tr>

                <tr>
                    <td colspan="4"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        <b>Tanggal Mulai</b>
                    </td>
                    <td colspan="5"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">

                        {{ \Carbon\Carbon::parse($datas->tgl_mulai)->translatedFormat('l, j F Y') }}

                    </td>
                </tr>

                <tr>
                    <td colspan="4"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        <b>Tanggal Selesai</b>
                    </td>
                    <td colspan="5"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">

                        {{ \Carbon\Carbon::parse($datas->tgl_selesai)->translatedFormat('l, j F Y') }}
                    </td>
                </tr>
            </tbody>
        </table>
        <p class="mt-3 ">
            Beri tanda ( <img
                src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                width="18"> ) dikolom yang sesuai untuk mencermin bukti yang diproses untuk menentukan
            kompetensi asesi untuk setiap unit kompetensi.
        </p>


        <table class="table" border="1" id="ping">
            <thead>
                <tr>
                    <td width="167px"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;"> <b>Unit
                            Kompetensi</b></td>
                    <td style="text-align: center"><b>Observasi
                            Demontrasi</b></td>
                    <td style="text-align: center"><b>Portfolio</b>
                    </td>
                    <td style="text-align: center">
                        <b>Pertanyaan Wawancara</b></th>
                    <td style="text-align: center">
                        <b>Pertanyaan Lisan</b>
                    </td>
                    <td style="text-align: center">
                        <b>Pertanyaan Tertulis</b>
                    </td>
                    <td style="text-align: center"><b>Proyek
                            Kerja</b></td>
                    <td style="text-align: center"><b>Lainnya</b>
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">{{
                        $datas->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi }}</td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom1_1 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom1_2 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom1_3 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom1_4 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom1_5 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom1_6 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom1_7 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                </tr>

                <tr>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">{{
                        $datas->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi2 }}</td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom2_1 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom2_2 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom2_3 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom2_4 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom2_5 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom2_6 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom2_7 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                </tr>

                @switch($datas)
                @case($datas->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi3 == null)
                @break
                @default
                <tr>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">{{
                        $datas->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi3 }}</td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom3_1 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom3_2 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom3_3 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom3_4 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom3_5 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom3_6 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom3_7 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                </tr>
                @endswitch

                @switch($datas)
                @case($datas->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi4 == null)
                @break
                @default
                <tr>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">{{
                        $datas->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi4 }}</td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom4_1 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom4_2 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom4_3 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom4_4 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom4_5 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom4_6 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom4_7 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                </tr>
                @endswitch

                @switch($datas)
                @case($datas->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi5 == null)
                @break
                @default
                <tr>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">{{
                        $datas->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi5 }}</td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom5_1 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom5_2 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom5_3 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom5_4 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom5_5 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom5_6 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom5_7 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                </tr>
                @endswitch

                @switch($datas)
                @case($datas->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi6 == null)
                @break
                @default
                <tr>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">{{
                        $datas->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi6 }}</td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom6_1 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom6_2 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom6_3 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom6_4 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom6_5 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom6_6 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom6_7 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                </tr>
                @endswitch


                @switch($datas)
                @case($datas->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi7 == null)
                @break
                @default
                <tr>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">{{
                        $datas->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi7 }}</td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom7_1 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom7_2 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom7_3 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom7_4 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom7_5 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom7_6 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom7_7 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                </tr>
                @endswitch

                @switch($datas)
                @case($datas->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi8 == null)
                @break
                @default
                <tr>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">{{
                        $datas->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi8 }}</td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom8_1 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom8_2 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom8_3 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom8_4 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom8_5 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom8_6 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom8_7 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                </tr>
                @endswitch


                @switch($datas)
                @case($datas->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi9 == null)
                @break
                @default
                <tr>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">{{
                        $datas->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi9 }}</td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom9_1 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom9_2 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom9_3 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom9_4 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom9_5 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom9_6 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom9_7 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                </tr>
                @endswitch

                @switch($datas)
                @case($datas->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi10 == null)
                @break
                @default
                <tr>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">{{
                        $datas->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi10 }}</td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom10_1 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom10_2 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom10_3 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom10_4 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom10_5 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom10_6 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom10_7 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                </tr>
                @endswitch

                @switch($datas)
                @case($datas->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi11 == null)
                @break
                @default
                <tr>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">{{
                        $datas->rekAsm->apl02->kompetensi02->kompetensi->unit_kompetensi11 }}</td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom11_1 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom11_2 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom11_3 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom11_4 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom11_5 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom11_6 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->unit_kom11_7 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                </tr>
                @endswitch

            </tbody>
        </table> <br>

        <table class="table" border="1" id="ping">
            <thead>
                <tr>
                    <td width="200px"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        <b>Keputusan
                            Asesmen</b>
                    </td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        @switch($datas)
                        @case($datas->result == 'Kompeten')
                        <b>Kompeten / <del>Belum Kompeten</del></b>
                        @break
                        @default
                        <b><del>Kompeten</del> / Belum Kompeten</b>
                        @endswitch

                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">Tindak
                        Lanjut yang dibutuhkan ** (masukkan pekerjaan tambahan dan asesmen yang
                        diperlukan untuk mencapai
                        kompeten)</td>

                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;"> <br>

                        @switch($datas)
                        @case($datas->tindak_lanjut == 'Belum Kompeten')
                        <input name="tindak_lanjut" class="form-check-inline mb-2" type="checkbox" value="Kompeten">
                        <label class="form-check-inline">Seluruh Element Komptetensi/Kriteria Unjuk Kerja
                            (KUK)
                            yang diajukan
                            telah tercapai</label> <br>
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        <label class="form-check-label">Terdapat Element Komptetensi/Kriteria Unjuk Kerja
                            (KUK)
                            yang diujikan belum tercapai pada Element/Kriteria Unjuk Kerja :</label> <br>
                        {!! $datas->bk_tindak_lanjut !!}
                        @break
                        @default
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        <label class="form-check-inline">Seluruh Element Komptetensi/Kriteria Unjuk Kerja
                            (KUK)
                            yang diajukan
                            telah tercapai</label> <br>
                        <input name="tindak_lanjut" class="form-check-inline mb-2" type="checkbox" value="Kompeten">
                        <label class="form-check-label">Terdapat Element Komptetensi/Kriteria Unjuk Kerja
                            (KUK)
                            yang diujikan belum tercapai pada Element/Kriteria Unjuk Kerja :</label> <br>
                        &nbsp; &nbsp; &nbsp;1. ............... <br>
                        &nbsp; &nbsp; &nbsp;2. ............... <br>
                        &nbsp; &nbsp; &nbsp;3. ............... <br>
                        <br>
                        @endswitch


                    </td>
                </tr>
                <tr>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        <b>Kometar/Observasi Oleh Asesor</b>
                    </td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;"> <br>
                        @switch($datas)
                        @case($datas->comment == 'Belum Kompeten')
                        <input name="comment" class="form-check-inline mb-2" type="checkbox" value="Kompeten">
                        <label class="form-check-label">Tingkatkan Kompetensi anda atau kompetensi pada
                            kualitas
                            berikutnya</label> <br>

                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18"> <label class="form-check-label">Perlu dilakukan asesmen ulang pada unit
                            kompetensi
                            :</label> <br>

                        {!! $datas->bk_comment !!}
                        @break
                        @default

                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        <label class="form-check-label">Tingkatkan Kompetensi anda atau kompetensi pada
                            kualitas
                            berikutnya</label> <br>

                        <input name="comment" class="form-check-inline mb-2" type="checkbox" value="Kompeten">
                        <label class="form-check-label">Perlu dilakukan asesmen ulang pada unit
                            kompetensi
                            :</label> <br>
                        &nbsp; &nbsp; &nbsp;1. ............... <br>
                        &nbsp; &nbsp; &nbsp;2. ............... <br>
                        &nbsp; &nbsp; &nbsp;3. ............... <br>
                        <br>

                        @endswitch


                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <table class="table" border="1" id="ping">
            <thead>
                <tr>
                    <td width="340px"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        <b>Tanda Tangan Asesi / Tanggal</b>
                    </td>
                    <td width="340px"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        <b>Tanda Tangan Asesor / Tanggal</b>
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td width="340px"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        <p style="text-align: center">Ini TTD <br>

                            ini Tanggal
                        </p>
                        <br>
                        <br>

                    </td>
                    <td width="340px"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        <p style="text-align: center">Ini TTD <br>

                            ini Tanggal
                        </p>
                        <br>
                        <br>
                    </td>
                </tr>
            </tbody>
        </table>
        <p>* Coret yang tidak perlu <br> ** Beri tanda ( <img
                src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                width="16">) pada kolom sesuai hasil </p>
        <p> LAMPIRAN DOKUMEN : <br>
            1. Dokumen APL 01 Peserta <br>
            2. Dokumen APL 02 Peserta <br>
            3. Bukti-bukti berkualitas Peserta <br>
            4. Tinjauan Proses Asesmen <br>
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