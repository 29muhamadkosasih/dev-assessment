<!DOCTYPE html>

<head>
    <title>FK.AK-05. laporan ASESMEN
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
        <h3 id=judul>FK.AK-05. LAPORAN ASESMEN</h3>
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
                            $datas->laporanPertama->apl02->kompetensi02->kompetensi->skema->nama_skema }}</b>
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
                            $datas->laporanPertama->apl02->kompetensi02->kompetensi->skema->no }}</b>
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
                        @case($datas->laporanPertama->tuk == 'Sewaktu')
                        Sewaktu
                        <del>
                            /Tempat Kerja
                        </del>
                        <del>
                            /Mandiri
                        </del>
                        @break
                        @case($datas->laporanPertama->tuk == 'Tempat Kerja')
                        <del>
                            Sewaktu
                        </del>
                        /Tempat Kerja
                        <del>
                            /Mandiri
                        </del>
                        @break
                        @case($datas->laporanPertama->tuk == 'Mandiri')
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
                        Unit Kompetensi</td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">:</td>
                    <td colspan="5"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{ $datas->laporanPertama->apl02->kompetensi02->kompetensi->unit_kompetensi }} <br>
                        {{ $datas->laporanPertama->apl02->kompetensi02->kompetensi->unit_kompetensi2 }} <br>

                        @switch($datas)
                        @case($datas->laporanPertama->apl02->kompetensi02->kompetensi->unit_kompetensi3 == null)
                        @break
                        @default
                        {{ $datas->laporanPertama->apl02->kompetensi02->kompetensi->unit_kompetensi3 }} <br>
                        @endswitch

                        @switch($datas)
                        @case($datas->laporanPertama->apl02->kompetensi02->kompetensi->unit_kompetensi4 == null)
                        @break
                        @default
                        {{ $datas->laporanPertama->apl02->kompetensi02->kompetensi->unit_kompetensi4 }} <br>
                        @endswitch

                        @switch($datas)
                        @case($datas->laporanPertama->apl02->kompetensi02->kompetensi->unit_kompetensi5 == null)
                        @break
                        @default
                        {{ $datas->laporanPertama->apl02->kompetensi02->kompetensi->unit_kompetensi5 }} <br>
                        @endswitch

                        @switch($datas)
                        @case($datas->laporanPertama->apl02->kompetensi02->kompetensi->unit_kompetensi6 == null)
                        @break
                        @default
                        {{ $datas->laporanPertama->apl02->kompetensi02->kompetensi->unit_kompetensi6 }} <br>
                        @endswitch

                        @switch($datas)
                        @case($datas->laporanPertama->apl02->kompetensi02->kompetensi->unit_kompetensi7 == null)
                        @break
                        @default
                        {{ $datas->laporanPertama->apl02->kompetensi02->kompetensi->unit_kompetensi7 }} <br>
                        @endswitch

                        @switch($datas)
                        @case($datas->laporanPertama->apl02->kompetensi02->kompetensi->unit_kompetensi8 == null)
                        @break
                        @default
                        {{ $datas->laporanPertama->apl02->kompetensi02->kompetensi->unit_kompetensi8 }} <br>
                        @endswitch

                        @switch($datas)
                        @case($datas->laporanPertama->apl02->kompetensi02->kompetensi->unit_kompetensi9 == null)
                        @break
                        @default
                        {{ $datas->laporanPertama->apl02->kompetensi02->kompetensi->unit_kompetensi9 }} <br>
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
                        {{ $datas->asesor->nama }}
                    </td>
                </tr>
                <tr>
                    <td colspan="4"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        Tanggal Asesmen</td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">:</td>
                    <td colspan="5"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{ $datas->tgl_asesmen }}
                    </td>
                </tr>
            </tbody>
        </table> <br>

        <table class="table" border="1" id="ping">
            <thead>
                <tr>
                    <td width="100x" class="text-center"
                        style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;"><b>No</b>
                    </td>
                    <td width="200px" class="text-center"
                        style="text-align: center: vertical-align: top;padding-left: 10px; padding-right: 10px;"><b>Nama
                            Asesi</b></td>
                    <td width="50px" class="text-center"
                        style="text-align: center: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        <b>K</b>
                    </td>
                    <td width="50px" class="text-center"
                        style="text-align: center: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        <b>BK</b>
                    </td>
                    <td width="294px" class="text-center"
                        style="text-align: center: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        <b>Keterangan</b>
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">1</td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{$datas->laporanPertama->apl02->personal_detail->nama_lengkap->name}}</td>

                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->rek == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->rek == 2)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{ $datas->ket }}
                    </td>
                </tr>

                @switch($datas)
                @case($datas->answer_apl02_id_2 == null)
                @break
                @default
                <tr>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">2</td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{$datas->laporan2->apl02->personal_detail->nama_lengkap->name}}</td>

                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->rek_2 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->rek_2 == 2)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{ $datas->ket_2 }}
                    </td>
                </tr>
                @endswitch

                @switch($datas)
                @case($datas->answer_apl02_id_3 == null)
                @break
                @default
                <tr>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">3</td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{$datas->laporan3->apl02->personal_detail->nama_lengkap->name}}</td>

                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->rek_3 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->rek_3 == 2)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{ $datas->ket_3 }}
                    </td>
                </tr>
                @endswitch


                @switch($datas)
                @case($datas->answer_apl02_id_4 == null)
                @break
                @default
                <tr>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">4</td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{$datas->laporan4->apl02->personal_detail->nama_lengkap->name}}</td>

                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->rek_3 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->rek_4 == 2)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{ $datas->ket_4 }}
                    </td>
                </tr>
                @endswitch


                @switch($datas)
                @case($datas->answer_apl02_id_5 == null)
                @break
                @default
                <tr>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">5</td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{$datas->laporan5->apl02->personal_detail->nama_lengkap->name}}</td>

                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->rek_5 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->rek_5 == 2)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{ $datas->ket_5 }}
                    </td>
                </tr>
                @endswitch


                @switch($datas)
                @case($datas->answer_apl02_id_6 == null)
                @break
                @default
                <tr>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">6</td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{$datas->laporan6->apl02->personal_detail->nama_lengkap->name}}</td>

                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->rek_6 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->rek_6 == 2)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{ $datas->ket_6 }}
                    </td>
                </tr>
                @endswitch


                @switch($datas)
                @case($datas->answer_apl02_id_7 == null)
                @break
                @default
                <tr>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">7</td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{$datas->laporan7->apl02->personal_detail->nama_lengkap->name}}</td>

                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->rek_7 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->rek_7 == 2)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{ $datas->ket_7 }}
                    </td>
                </tr>
                @endswitch


                @switch($datas)
                @case($datas->answer_apl02_id_8 == null)
                @break
                @default
                <tr>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">8</td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{$datas->laporan8->apl02->personal_detail->nama_lengkap->name}}</td>

                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->rek_8 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->rek_8== 2)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{ $datas->ket_8 }}
                    </td>
                </tr>
                @endswitch


                @switch($datas)
                @case($datas->answer_apl02_id_9 == null)
                @break
                @default
                <tr>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">9</td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{$datas->laporan9->apl02->personal_detail->nama_lengkap->name}}</td>

                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->rek_9 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->rek_9== 2)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{ $datas->ket_9 }}
                    </td>
                </tr>
                @endswitch

                @switch($datas)
                @case($datas->answer_apl02_id_10 == null)
                @break
                @default
                <tr>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">10</td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{$datas->laporan10->apl02->personal_detail->nama_lengkap->name}}</td>

                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->rek_10 == 1)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: center">
                        @switch($datas)
                        @case($datas->rek_10== 2)
                        <img src="{{ asset('https://tse3.mm.bing.net/th?id=OIP.e8eVc4yxvayW82qcX6Yo8QHaHa&pid=Api&P=0&h=220') }}"
                            width="18">
                        @break
                        @default
                        @endswitch
                    </td>
                    <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                        {{ $datas->ket_10 }}
                    </td>
                </tr>
                @endswitch

                </thead>
        </table>
        <i style="font-size: 12px">** tuliskan Kode dan Judul Unit Kompetensi yang dinyatakan BK bila mengaksessatu
            skema</i>
    </div>

    <br>

    <table class="table" border="1" id="ping">
        <thead>
            <tr>
                <td width="300px"
                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                    Aspek
                    Negatif dan Positif dalam asesmen </td>
                <td width="380px"
                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">{{
                    $datas->laporan }}</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">Pencatatan
                    Penolakan Hasil Asesmen</td>
                <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">{{
                    $datas->pencatatan }}</td>
            </tr>
            <tr>
                <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">Saran
                    Perbaikan : (Asesor/Personil Terkait)</td>
                <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">{{
                    $datas->saran }}</td>
            </tr>
        </tbody>
    </table>
    <br>
    <table class="table" border="1" id="ping">
        <thead>
            <tr>
                <td width="300px"
                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">
                    <B>Catatan</B>
                </td>
                <td width="700px" colspan="2"
                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;"><B>Asesor</B>
                </td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;" rowspan="3">
                </td>
                <td width="100px"
                    style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">Nama</td>
                <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">{{
                    $datas->asesor->nama}}</td>
            </tr>
            <tr>
                <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">No. Reg
                </td>
                <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">{{
                    $datas->asesor->no_met }}</td>
            </tr>
            <tr>
                <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;">Tanda
                    Tangan / <br> Tanggal</td>
                <td style="text-align: left: vertical-align: top;padding-left: 10px; padding-right: 10px;"> <br><br>
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
