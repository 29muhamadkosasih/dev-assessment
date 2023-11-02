@extends('layouts/master')
@section('title', 'FK AK-06')
@section('content')

<style>
    .kbw-signature {
        width: 100%;
        height: 200px;
    }

    #sig canvas {
        width: 100% !important;
        height: auto;
    }
</style>

<div class="col-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">FK.AK-06. MENINJAU PROSES ASESMEN</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="250px" rowspan="2" style="vertical-align: top;padding-top:28px">Skema
                                Sertifikasi
                                Okupasi Nasional</th>
                            <th width="200px">Judul</th>
                            <th width="10px">:</th>
                            <th colspan="4"><b>{{ $show->aspek->apl02->kompetensi02->kompetensi->skema->nama_skema
                                    }}</b>
                            </th>
                        </tr>
                        <tr>
                            <th>Nomor</th>
                            <th>:</th>
                            <th colspan="4"><b>{{ $show->aspek->apl02->kompetensi02->kompetensi->skema->no }}</b></th>
                        </tr>
                        <tr>
                            <td colspan="4">
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

                <table class="table table-bordered table-hover mt-3">
                    <thead>
                        <tr>
                            <th width="500px" rowspan="2" style="vertical-align: middle; text-align:center">Aspek yang
                                ditinjau </th>
                            <th class="text-center" colspan="4">Kesesuaian dengan prinsip asesmen</th>
                        </tr>
                        <tr>
                            <th class="text-center">Validitas</th>
                            <th class="text-center">Reliabilitas</th>
                            <th class="text-center">Fleksibel</th>
                            <th class="text-center">Adil</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="5">Prosedur Asesmen</td>
                        </tr>
                        <tr>
                            <td>
                                <li>Rencana Asesmen</li>
                            </td>

                            @switch($show)
                            @case($show->aspek_1_val == 1)
                            <td style="text-align: center">
                                <input name="aspek_1_val" class="form-check-input" type="checkbox" value="1" checked>
                                <label class="form-check-label"></label>
                            </td>
                            @break
                            @default
                            <td style="text-align: center">
                                <input name="aspek_1_val" class="form-check-input" type="checkbox" value="1">
                                <label class="form-check-label"></label>
                            </td>
                            @endswitch


                            @switch($show)
                            @case($show->aspek_1_rel == 1)
                            <td style="text-align: center">
                                <input name="aspek_1_rel" class="form-check-input" type="checkbox" value="1" checked>
                                <label class="form-check-label"></label>
                            </td>
                            @break
                            @default

                            <td style="text-align: center">
                                <input name="aspek_1_rel" class="form-check-input" type="checkbox" value="1">
                                <label class="form-check-label"></label>
                            </td>
                            @endswitch

                            @switch($show)
                            @case($show->aspek_1_flex == 1)
                            <td style="text-align: center">
                                <input name="aspek_1_flex" class="form-check-input" type="checkbox" value="1" checked>
                                <label class="form-check-label"></label>
                            </td>
                            @break

                            @default

                            <td style="text-align: center">
                                <input name="aspek_1_flex" class="form-check-input" type="checkbox" value="1">
                                <label class="form-check-label"></label>
                            </td>
                            @endswitch

                            @switch($show)
                            @case($show->aspek_1_ad == 1)
                            <td style="text-align: center">
                                <input name="aspek_1_ad" class="form-check-input" type="checkbox" value="1" checked>
                                <label class="form-check-label"></label>
                            </td>
                            @break
                            @default
                            <td style="text-align: center">
                                <input name="aspek_1_ad" class="form-check-input" type="checkbox" value="1">
                                <label class="form-check-label"></label>
                            </td>
                            @endswitch

                        </tr>
                        <tr>
                            <td>
                                <li>Persiapan Asesmen</li>
                            </td>

                            @switch($show)
                            @case($show->aspek_2_val == 1)
                            <td style="text-align: center">
                                <input name="aspek_2_val" class="form-check-input" type="checkbox" value="1" checked>
                                <label class="form-check-label"></label>
                            </td>
                            @break
                            @default
                            <td style="text-align: center">
                                <input name="aspek_2_val" class="form-check-input" type="checkbox" value="1">
                                <label class="form-check-label"></label>
                            </td>
                            @endswitch


                            @switch($show)
                            @case($show->aspek_2_rel == 1)
                            <td style="text-align: center">
                                <input name="aspek_2_rel" class="form-check-input" type="checkbox" value="1" checked>
                                <label class="form-check-label"></label>
                            </td>
                            @break
                            @default

                            <td style="text-align: center">
                                <input name="aspek_2_rel" class="form-check-input" type="checkbox" value="1">
                                <label class="form-check-label"></label>
                            </td>
                            @endswitch

                            @switch($show)
                            @case($show->aspek_2_flex == 1)
                            <td style="text-align: center">
                                <input name="aspek_2_flex" class="form-check-input" type="checkbox" value="1" checked>
                                <label class="form-check-label"></label>
                            </td>
                            @break

                            @default

                            <td style="text-align: center">
                                <input name="aspek_2_flex" class="form-check-input" type="checkbox" value="1">
                                <label class="form-check-label"></label>
                            </td>
                            @endswitch

                            @switch($show)
                            @case($show->aspek_2_ad == 1)
                            <td style="text-align: center">
                                <input name="aspek_2_ad" class="form-check-input" type="checkbox" value="1" checked>
                                <label class="form-check-label"></label>
                            </td>
                            @break
                            @default
                            <td style="text-align: center">
                                <input name="aspek_2_ad" class="form-check-input" type="checkbox" value="1">
                                <label class="form-check-label"></label>
                            </td>
                            @endswitch

                        </tr>
                        <tr>
                            <td>
                                <li>Implementasi Asesmen</li>
                            </td>

                            @switch($show)
                            @case($show->aspek_3_val == 1)
                            <td style="text-align: center">
                                <input name="aspek_3_val" class="form-check-input" type="checkbox" value="1" checked>
                                <label class="form-check-label"></label>
                            </td>
                            @break
                            @default
                            <td style="text-align: center">
                                <input name="aspek_3_val" class="form-check-input" type="checkbox" value="1">
                                <label class="form-check-label"></label>
                            </td>
                            @endswitch


                            @switch($show)
                            @case($show->aspek_3_rel == 1)
                            <td style="text-align: center">
                                <input name="aspek_3_rel" class="form-check-input" type="checkbox" value="1" checked>
                                <label class="form-check-label"></label>
                            </td>
                            @break
                            @default

                            <td style="text-align: center">
                                <input name="aspek_3_rel" class="form-check-input" type="checkbox" value="1">
                                <label class="form-check-label"></label>
                            </td>
                            @endswitch

                            @switch($show)
                            @case($show->aspek_3_flex == 1)
                            <td style="text-align: center">
                                <input name="aspek_3_flex" class="form-check-input" type="checkbox" value="1" checked>
                                <label class="form-check-label"></label>
                            </td>
                            @break

                            @default

                            <td style="text-align: center">
                                <input name="aspek_3_flex" class="form-check-input" type="checkbox" value="1">
                                <label class="form-check-label"></label>
                            </td>
                            @endswitch

                            @switch($show)
                            @case($show->aspek_3_ad == 1)
                            <td style="text-align: center">
                                <input name="aspek_3_ad" class="form-check-input" type="checkbox" value="1" checked>
                                <label class="form-check-label"></label>
                            </td>
                            @break
                            @default
                            <td style="text-align: center">
                                <input name="aspek_3_ad" class="form-check-input" type="checkbox" value="1">
                                <label class="form-check-label"></label>
                            </td>
                            @endswitch

                        </tr>
                        <tr>
                            <td>
                                <li>Keputusan Asesmen</li>
                            </td>
                            @switch($show)
                            @case($show->aspek_4_val == 1)
                            <td style="text-align: center">
                                <input name="aspek_4_val" class="form-check-input" type="checkbox" value="1" checked>
                                <label class="form-check-label"></label>
                            </td>
                            @break
                            @default
                            <td style="text-align: center">
                                <input name="aspek_4_val" class="form-check-input" type="checkbox" value="1">
                                <label class="form-check-label"></label>
                            </td>
                            @endswitch


                            @switch($show)
                            @case($show->aspek_4_rel == 1)
                            <td style="text-align: center">
                                <input name="aspek_4_rel" class="form-check-input" type="checkbox" value="1" checked>
                                <label class="form-check-label"></label>
                            </td>
                            @break
                            @default

                            <td style="text-align: center">
                                <input name="aspek_4_rel" class="form-check-input" type="checkbox" value="1">
                                <label class="form-check-label"></label>
                            </td>
                            @endswitch

                            @switch($show)
                            @case($show->aspek_4_flex == 1)
                            <td style="text-align: center">
                                <input name="aspek_4_flex" class="form-check-input" type="checkbox" value="1" checked>
                                <label class="form-check-label"></label>
                            </td>
                            @break

                            @default

                            <td style="text-align: center">
                                <input name="aspek_4_flex" class="form-check-input" type="checkbox" value="1">
                                <label class="form-check-label"></label>
                            </td>
                            @endswitch

                            @switch($show)
                            @case($show->aspek_4_ad == 1)
                            <td style="text-align: center">
                                <input name="aspek_4_ad" class="form-check-input" type="checkbox" value="1" checked>
                                <label class="form-check-label"></label>
                            </td>
                            @break
                            @default
                            <td style="text-align: center">
                                <input name="aspek_4_ad" class="form-check-input" type="checkbox" value="1">
                                <label class="form-check-label"></label>
                            </td>
                            @endswitch
                        </tr>
                        <tr>
                            <td>
                                <li>Umpan balik Asesmen</li>
                            </td>
                            @switch($show)
                            @case($show->aspek_5_val == 1)
                            <td style="text-align: center">
                                <input name="aspek_5_val" class="form-check-input" type="checkbox" value="1" checked>
                                <label class="form-check-label"></label>
                            </td>
                            @break
                            @default
                            <td style="text-align: center">
                                <input name="aspek_5_val" class="form-check-input" type="checkbox" value="1">
                                <label class="form-check-label"></label>
                            </td>
                            @endswitch


                            @switch($show)
                            @case($show->aspek_5_rel == 1)
                            <td style="text-align: center">
                                <input name="aspek_5_rel" class="form-check-input" type="checkbox" value="1" checked>
                                <label class="form-check-label"></label>
                            </td>
                            @break
                            @default

                            <td style="text-align: center">
                                <input name="aspek_5_rel" class="form-check-input" type="checkbox" value="1">
                                <label class="form-check-label"></label>
                            </td>
                            @endswitch

                            @switch($show)
                            @case($show->aspek_5_flex == 1)
                            <td style="text-align: center">
                                <input name="aspek_5_flex" class="form-check-input" type="checkbox" value="1" checked>
                                <label class="form-check-label"></label>
                            </td>
                            @break

                            @default

                            <td style="text-align: center">
                                <input name="aspek_5_flex" class="form-check-input" type="checkbox" value="1">
                                <label class="form-check-label"></label>
                            </td>
                            @endswitch

                            @switch($show)
                            @case($show->aspek_5_ad == 1)
                            <td style="text-align: center">
                                <input name="aspek_5_ad" class="form-check-input" type="checkbox" value="1" checked>
                                <label class="form-check-label"></label>
                            </td>
                            @break
                            @default
                            <td style="text-align: center">
                                <input name="aspek_5_ad" class="form-check-input" type="checkbox" value="1">
                                <label class="form-check-label"></label>
                            </td>
                            @endswitch
                        </tr>
                    </tbody>
                </table>

                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <td width="350px" style="text-align: left: vertical-align: top"><b>Rekomendasi</b>
                                <br>(untuk
                                peningkatan) :
                                <br>
                                @switch($show)
                                @case($show->rek_1 == true)
                                <input name="rek_1" class="form-check-input" type="radio" value="true"
                                    id="defaultRadio5" checked>
                                <label class="form-check-label" for="defaultRadio5">Ada</label> <br>
                                <input name="rek_1" class="form-check-input" type="radio" value="false"
                                    id="defaultRadio5">
                                <label class="form-check-label" for="defaultRadio5">Tidak Ada</label>
                                @break
                                @default

                                <input name="rek_1" class="form-check-input" type="radio" value="true"
                                    id="defaultRadio5">
                                <label class="form-check-label" for="defaultRadio5">Ada</label> <br>
                                <input name="rek_1" class="form-check-input" type="radio" value="false"
                                    id="defaultRadio5" checked>
                                <label class="form-check-label" for="defaultRadio5">Tidak Ada</label>
                                @endswitch
                            </td>
                            <td style="vertical-align: top">Tuliskan Jika ada : <br>

                                <p>
                                    {{ $show->rek_1_detail }}
                                </p>
                            </td>
                        </tr>
                        <tr>
                        </tr>
                    </thead>
                </table>

                <table class="table table-bordered table-hover mt-3">
                    <thead>
                        <tr>
                            <th rowspan="2" style="vertical-align: middle; text-align:center">Aspek yang ditinjau </th>
                            <th colspan="5" style="text-align: center">Pemenuhan dimensi Kompetensi</th>
                        </tr>
                        <tr>
                            <th style="text-align: center" width="130px">Task Skills</th>
                            <th style="text-align: center">Task Management Skills</th>
                            <th style="text-align: center">Contigency Management Skills</th>
                            <th style="text-align: center">Job Role/Envirotment Skills</th>
                            <th style="text-align: center">Transfer Skills</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Konsistensi Keputusan Asesmen<br> <br> Bukti dari berbagai asesmen diperiksa untuk
                                konsistensi
                                dimensi
                                kompetensi</td>
                            <td>
                                @switch($show)
                                @case($show->p_task == 'L : CL')
                                <p><input name="p_task" class="form-check-input" type="radio" value="L : CL" checked>
                                    <label class="form-check-label">L : CL</label>
                                </p>
                                <p><input name="p_task" class="form-check-input" type="radio" value="TL : DPL">
                                    <label class="form-check-label"> TL : DPL</label>
                                </p>
                                @break
                                @default

                                <p><input name="p_task" class="form-check-input" type="radio" value="L : CL">
                                    <label class="form-check-label">L : CL</label>
                                </p>
                                <p><input name="p_task" class="form-check-input" type="radio" value="TL : DPL" checked>
                                    <label class="form-check-label"> TL : DPL</label>
                                </p>
                                @endswitch

                            </td>
                            <td>
                                @switch($show)
                                @case($show->p_mgmt == 'L : CL')
                                <p><input name="p_mgmt" class="form-check-input" type="radio" value="L : CL" checked>
                                    <label class="form-check-label">L : CL</label>
                                </p>
                                <p><input name="p_mgmt" class="form-check-input" type="radio" value="TL : DPL">
                                    <label class="form-check-label"> TL : DPL</label>
                                </p>
                                @break
                                @default

                                <p><input name="p_mgmt" class="form-check-input" type="radio" value="L : CL">
                                    <label class="form-check-label">L : CL</label>
                                </p>
                                <p><input name="p_mgmt" class="form-check-input" type="radio" value="TL : DPL" checked>
                                    <label class="form-check-label"> TL : DPL</label>
                                </p>
                                @endswitch

                            </td>
                            <td>

                                @switch($show)
                                @case($show->p_con)
                                <p><input name="p_con" class="form-check-input" type="radio" value="L : CL" checked>
                                    <label class="form-check-label">L : CL</label>
                                </p>
                                <p><input name="p_con" class="form-check-input" type="radio" value="TL : DPL">
                                    <label class="form-check-label"> TL : DPL</label>
                                </p>
                                @break
                                @default

                                <p><input name="p_con" class="form-check-input" type="radio" value="L : CL">
                                    <label class="form-check-label">L : CL</label>
                                </p>
                                <p><input name="p_con" class="form-check-input" type="radio" value="TL : DPL" checked>
                                    <label class="form-check-label"> TL : DPL</label>
                                </p>
                                @endswitch

                            </td>
                            <td>
                                @switch($show)
                                @case($show->p_job == 'L : CL')
                                <p><input name="p_job" class="form-check-input" type="radio" value="L : CL" checked>
                                    <label class="form-check-label">L : CL</label>
                                </p>
                                <p><input name="p_job" class="form-check-input" type="radio" value="TL : DPL">
                                    <label class="form-check-label"> TL : DPL</label>
                                </p>
                                @break
                                @default

                                <p><input name="p_job" class="form-check-input" type="radio" value="L : CL">
                                    <label class="form-check-label">L : CL</label>
                                </p>
                                <p><input name="p_job" class="form-check-input" type="radio" value="TL : DPL" checked>
                                    <label class="form-check-label"> TL : DPL</label>
                                </p>
                                @endswitch

                            </td>
                            <td>

                                @switch($show)
                                @case($show->p_tr)
                                <p><input name="p_tr" class="form-check-input" type="radio" value="L : CL" checked>
                                    <label class="form-check-label">L : CL</label>
                                </p>
                                <p><input name="p_tr" class="form-check-input" type="radio" value="TL : DPL">
                                    <label class="form-check-label"> TL : DPL</label>
                                </p>
                                @break

                                @default

                                <p><input name="p_tr" class="form-check-input" type="radio" value="L : CL">
                                    <label class="form-check-label">L : CL</label>
                                </p>
                                <p><input name="p_tr" class="form-check-input" type="radio" value="TL : DPL" checked>
                                    <label class="form-check-label"> TL : DPL</label>
                                </p>
                                @endswitch

                            </td>
                        </tr>
                    </tbody>
                </table>

                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <td width="350px" style="text-align: middle: vertical-align: top"><b>Rekomendasi</b>
                                <br>(untuk
                                peningkatan) :
                                <br>

                                @switch($show)
                                @case($show->rek_2 == true)
                                <input name="rek_2" class="form-check-input" type="radio" value="true"
                                    id="defaultRadio5" checked>
                                <label class="form-check-label" for="defaultRadio5">Ada</label> <br>
                                <input name="rek_2" class="form-check-input" type="radio" value="false"
                                    id="defaultRadio5">
                                <label class="form-check-label" for="defaultRadio5">Tidak Ada</label>
                                @break

                                @default

                                <input name="rek_2" class="form-check-input" type="radio" value="true"
                                    id="defaultRadio5">
                                <label class="form-check-label" for="defaultRadio5">Ada</label> <br>
                                <input name="rek_2" class="form-check-input" type="radio" value="false"
                                    id="defaultRadio5" checked>
                                <label class="form-check-label" for="defaultRadio5">Tidak Ada</label>
                                @endswitch

                                <br>
                            </td>
                            <td rowspan="2" style="vertical-align: top">Tuliskan Jika ada : <br>

                                <p>{{ $show->rek_2_detail }}
                                </p>
                            </td>
                        </tr>
                    </thead>
                </table>

                <table class="table table-bordered table-hover mt-3">
                    <thead>
                        <tr>
                            <th style="vertical-align: top; text-align:left"><b>Komentar :</b> <br>
                                <p>{{ $show->catatan }}
                                </p>

                            </th>
                            <th style="vertical-align: top; text-align:left"><b>Nama Peninjau :</b> <br>
                                <p>
                                    {{ $show->nama_peninjau }}
                                </p>
                                <br>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th colspan="2">
                                <div class="col-6 mb-3">
                                    <label class="form-label d-block" for="plBathrooms"
                                        style="vertical-align: top; text-align:left"><b>Tanda Tangan</b></label>
                                    <p>ini ttd</p>
                                </div>
                            </th>
                        </tr>
                    </tbody>
                </table>
                <div class="col-12 d-flex justify-content-end mt-3">
                    <a href="{{ route('fr_ak_06.index') }}" class="btn btn-primary btn-submit" type="submit">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Jquery -->
<script type="text/javascript" src="'http://code.jquery.com/jquery-3.3.1.min.js'"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<!-- Ajax -->
<script type="text/javascript" src="'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<!-- Signature Pad -->

<script type="text/javascript" src="'https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js'">
</script>
<script type="text/javascript">
    var sig = $('#sig').signature({
        syncField: '#signature',
        syncFormat: 'PNG'
    });
    $('#clear').click(function (e) {
        e.preventDefault();
        sig.signature('clear');
        $("#signature64").val('');
    });
</script>
@endsection