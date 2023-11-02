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

<form action="{{ route('fr_ak_06.update', $show->id) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
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
                                <th colspan="4"><b>{{ $show->aspek->apl02->kompetensi02->kompetensi->skema->no }}</b>
                                </th>
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
                                <th width="500px" rowspan="2">Aspek yang ditinjau </th>
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
                                <td style="text-align: center">
                                    <input name="aspek_1_val" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="aspek_1_rel" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="aspek_1_flex" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="aspek_1_ad" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <li>Persiapan Asesmen</li>
                                </td>
                                <td style="text-align: center">
                                    <input name="aspek_2_val" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="aspek_2_rel" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="aspek_2_flex" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="aspek_2_ad" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <li>Implementasi Asesmen</li>
                                </td>
                                <td style="text-align: center">
                                    <input name="aspek_3_val" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="aspek_3_rel" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="aspek_3_flex" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="aspek_3_ad" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <li>Keputusan Asesmen</li>
                                </td>
                                <td style="text-align: center">
                                    <input name="aspek_4_val" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="aspek_4_rel" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="aspek_4_flex" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="aspek_4_ad" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <li>Umpan balik Asesmen</li>
                                </td>
                                <td style="text-align: center">
                                    <input name="aspek_5_val" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="aspek_5_rel" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="aspek_5_flex" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                                <td style="text-align: center">
                                    <input name="aspek_5_ad" class="form-check-input" type="checkbox" value="1">
                                    <label class="form-check-label"></label>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td style="text-align: left: vertical-align: top">Rekomendasi <br>(untuk peningkatan) :
                                    <br>
                                    <input name="rek_1" class="form-check-input" type="radio" value="true"
                                        id="defaultRadio5">
                                    <label class="form-check-label" for="defaultRadio5">Ada</label>
                                </td>
                                <td rowspan="2">Tuliskan Jika ada :

                                    <p>
                                        <textarea name="rek_1_detail" class="form-control" cols="113"
                                            rows="3"></textarea>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input name="rek_1" class="form-check-input" type="radio" value="false"
                                        id="defaultRadio5">
                                    <label class="form-check-label" for="defaultRadio5">Tidak Ada</label>
                                </td>
                            </tr>
                        </thead>
                    </table>
                    <table class="table table-bordered table-hover mt-3">
                        <thead>
                            <tr>
                                <th rowspan="2">Aspek yang ditinjau </th>
                                <th colspan="5">Pemenuhan dimensi Kompetensi</th>
                            </tr>
                            <tr>
                                <th width="130px">Task Skills</th>
                                <th>Task Management Skills</th>
                                <th>Contigency Management Skills</th>
                                <th>Job Role/Envirotment Skills</th>
                                <th>Transfer Skills</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Konsistensi Keputusan Asesmen<br> <br> Bukti dari berbagai asesmen diperiksa untuk
                                    konsistensi
                                    dimensi
                                    kompetensi</td>
                                <td>
                                    <p><input name="p_task" class="form-check-input" type="radio" value="L : CL">
                                        <label class="form-check-label">L : CL</label>
                                    </p>
                                    <p><input name="p_task" class="form-check-input" type="radio" value="TL : DPL">
                                        <label class="form-check-label"> TL : DPL</label>
                                    </p>
                                </td>
                                <td>
                                    <p><input name="p_mgmt" class="form-check-input" type="radio" value="L : CL">
                                        <label class="form-check-label">L : CL</label>
                                    </p>
                                    <p><input name="p_mgmt" class="form-check-input" type="radio" value="TL : DPL">
                                        <label class="form-check-label"> TL : DPL</label>
                                    </p>
                                </td>
                                <td>
                                    <p><input name="p_con" class="form-check-input" type="radio" value="L : CL">
                                        <label class="form-check-label">L : CL</label>
                                    </p>
                                    <p><input name="p_con" class="form-check-input" type="radio" value="TL : DPL">
                                        <label class="form-check-label"> TL : DPL</label>
                                    </p>
                                </td>
                                <td>
                                    <p><input name="p_job" class="form-check-input" type="radio" value="L : CL">
                                        <label class="form-check-label">L : CL</label>
                                    </p>
                                    <p><input name="p_job" class="form-check-input" type="radio" value="TL : DPL">
                                        <label class="form-check-label"> TL : DPL</label>
                                    </p>
                                </td>
                                <td>
                                    <p><input name="p_tr" class="form-check-input" type="radio" value="L : CL">
                                        <label class="form-check-label">L : CL</label>
                                    </p>
                                    <p><input name="p_tr" class="form-check-input" type="radio" value="TL : DPL">
                                        <label class="form-check-label"> TL : DPL</label>
                                    </p>
                                </td>
                            </tr>
                            {{-- <tr>
                                <th colspan="6">Rekomendasi Untuk Peningkatan

                                    <p>
                                        <textarea name="rek_2" class="form-control" id="" cols="30"
                                            rows="10"></textarea>
                                    </p>

                                </th>
                            </tr> --}}
                        </tbody>
                    </table>

                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td style="text-align: left: vertical-align: top">Rekomendasi <br>(untuk peningkatan) :
                                    <br>
                                    <input name="rek_2" class="form-check-input" type="radio" value="true"
                                        id="defaultRadio5">
                                    <label class="form-check-label" for="defaultRadio5">Ada</label>
                                </td>
                                <td rowspan="2">Tuliskan Jika ada :

                                    <p>
                                        <textarea name="rek_2_detail" class="form-control" cols="113"
                                            rows="3"></textarea>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input name="rek_2" class="form-check-input" type="radio" value="false"
                                        id="defaultRadio5">
                                    <label class="form-check-label" for="defaultRadio5">Tidak Ada</label>
                                </td>
                            </tr>
                        </thead>
                    </table>

                    <table class="table table-bordered table-hover mt-3">
                        <thead>
                            <tr>
                                <th>Catatan :
                                    <p>
                                        <textarea name="catatan" class="form-control" id="" cols="0"
                                            rows="0"></textarea>
                                    </p>

                                </th>
                                <th>Nama Peninjau :
                                    <p>
                                        <input type="text" name="nama_peninjau" class="form-control">
                                    </p>
                                    <br>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th colspan="2">
                                    <div class="col-6 mb-3">
                                        <label class="form-label d-block" for="plBathrooms">Tanda Tangan</label>
                                        <div id="sig"></div>
                                    </div>
                                    <button id="clear" class="btn btn-primary btn-sm ">Clear</button>
                                    <textarea id="signature" name="ttd_peninjau" style="display: none"></textarea>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                    <div class="col-12 d-flex justify-content-end mt-3">
                        <button class="btn btn-primary btn-submit" type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</form>

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
