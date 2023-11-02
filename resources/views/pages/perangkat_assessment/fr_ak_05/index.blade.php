@extends('layouts/master')
@section('title', 'FK AK-05')
@section('content')
<div class="col-xl-12">
    <div class="card">
        <div class="card-body">
            <div class="row ">
                <div class="col-auto me-auto ">
                    <h5 class="mb-0">FK.AK-05. Laporan Asesmen</h5>
                </div>

                <div class="col-auto">
                    <a href="{{ route('fr_ak_05.create_data') }}" class="btn btn-primary">
                        Isi Data Laporan
                    </a>
                </div>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered table-hover dataex-fixh-responsive">
                    <thead>
                        <tr style="background-color: skyblue">
                            <th width='10px' style="text-align: center">No</th>
                            <th>Nama Assessi</th>
                            <th>Nama Skema</th>
                            <th>TUK</th>
                            <th>Asesor</th>
                            <th width='150px' class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($laporan as $item)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}</td>
                            <td>
                                {{$item->laporanPertama->apl02->personal_detail->nama_lengkap->name}} <br>

                                @switch($item)
                                @case($item->answer_apl02_id_2 == null)
                                @break
                                @default
                                {{$item->laporan2->apl02->personal_detail->nama_lengkap->name}}<br>
                                @endswitch

                                @switch($item)
                                @case($item->answer_apl02_id_3 == null)
                                @break
                                @default
                                {{$item->laporan3->apl02->personal_detail->nama_lengkap->name}}<br>
                                @endswitch
                                @switch($item)
                                @case($item->answer_apl02_id_4 == null)
                                @break
                                @default
                                {{$item->laporan4->apl02->personal_detail->nama_lengkap->name}}<br>
                                @endswitch
                                @switch($item)
                                @case($item->answer_apl02_id_5 == null)
                                @break
                                @default
                                {{$item->laporan5->apl02->personal_detail->nama_lengkap->name}}<br>
                                @endswitch
                                @switch($item)
                                @case($item->answer_apl02_id_6 == null)
                                @break
                                @default
                                {{$item->laporan6->apl02->personal_detail->nama_lengkap->name}}<br>
                                @endswitch

                                @switch($item)
                                @case($item->answer_apl02_id_7 == null)
                                @break
                                @default
                                {{$item->laporan7->apl02->personal_detail->nama_lengkap->name}}<br>
                                @endswitch

                                @switch($item)
                                @case($item->answer_apl02_id_8 == null)
                                @break
                                @default
                                {{$item->laporan8->apl02->personal_detail->nama_lengkap->name}}<br>
                                @endswitch

                                @switch($item)
                                @case($item->answer_apl02_id_9 == null)
                                @break
                                @default
                                {{$item->laporan9->apl02->personal_detail->nama_lengkap->name}}<br>
                                @endswitch

                                @switch($item)
                                @case($item->answer_apl02_id_10 == null)
                                @break
                                @default
                                {{$item->laporan10->apl02->personal_detail->nama_lengkap->name}}<br>
                                @endswitch

                            </td>
                            <td>{{$item->laporanPertama->apl02->kompetensi02->kompetensi->skema->nama_skema}}</td>
                            <td>
                                {{ $item->tuk }}
                            </td>
                            <td> {{ $item->asesor->nama}} </td>
                            <td class="text-center">

                                <form method="POST" action="{{ route('fr_ak_05.destroy', $item->id) }}">
                                    @csrf
                                    <input name="_method" type="hidden" value="DELETE">



                                    <a href="{{ route('fr_ak_05.detail', $item->id) }}"
                                        class="btn btn-icon btn-secondary btn-sm" data-bs-toggle="tooltip"
                                        data-bs-placement="top" data-bs-original-title="Detail"
                                        aria-describedby="tooltip358783">
                                        <span class="ti ti-eye"></span>
                                    </a>
                                    <a href="{{ route('fr_ak_05.edit',$item->id) }}"
                                        class="btn btn-icon btn-warning btn-sm" data-bs-toggle="tooltip"
                                        data-bs-placement="top" data-bs-original-title="Edit"
                                        aria-describedby="tooltip358783">
                                        <span class="ti ti-edit"></span>
                                    </a>
                                    <a href="{{ url('fr_ak_05/cetak_pdf',$item->id) }}"
                                        class="btn btn-icon btn-primary btn-sm" target="_blank" data-bs-toggle="tooltip"
                                        data-bs-placement="top" data-bs-original-title="Download"
                                        aria-describedby="tooltip358783">
                                        <span class="ti ti-download"></span>
                                    </a>
                                    <button type="submit" class="btn btn-icon btn-danger btn-sm show_confirm"
                                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Delete"
                                        aria-describedby="tooltip358783">
                                        <span class="ti ti-trash"></span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
    $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Are you sure you want to delete this record?`,
              text: "If you delete this, it will be gone forever.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });

</script>
@endsection