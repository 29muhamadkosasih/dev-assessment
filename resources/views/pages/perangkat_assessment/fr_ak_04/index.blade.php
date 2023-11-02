@extends('layouts/master')
@section('title', 'FK AK-04')
@section('content')
<div class="col-xl-12">
    <div class="card">
        <div class="card-body">
            <div class="row ">
                <div class="col-auto me-auto ">
                    <h5 class="mb-0">FK.AK-04. Banding Asesmen</h5>
                </div>

                <div class="col-auto">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
                        Isi Form
                    </button>
                </div>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered table-hover dataex-fixh-responsive">
                    <thead>
                        <tr style="background-color: skyblue">
                            <th width='10px' style="text-align: center">No</th>
                            <th>No Pendaftaran </th>
                            <th>Tanggal Daftar</th>
                            <th>Nama Assessi</th>
                            <th>Nama Skema</th>
                            <th>Validasi Asesor LSP</th>
                            <th>Tanggal Validasi</th>
                            <th width='150px' class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($banding as $item)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}</td>
                            <td>{{$item->banding->apl02->personal_detail->no_pendaftaran}}</td>
                            <td> {{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y') }}</td>
                            <td>{{$item->banding->apl02->personal_detail->nama_lengkap->name}}</td>
                            <td>{{$item->banding->apl02->kompetensi02->kompetensi->skema->nama_skema}}</td>
                            <td>
                                {{ $item->banding->nama_asesor_lsp }}

                            </td>
                            <td>
                                {{
                                \Carbon\Carbon::parse($item->banding->tanggal_validasi)->format('d-m-Y')
                                }}
                            </td>
                            <td class="text-center">

                                <form method="POST" action="{{ route('fr_ak_04.destroy', $item->id) }}">
                                    @csrf
                                    <input name="_method" type="hidden" value="DELETE">



                                    <a href="{{ route('fr_ak_04.detail', $item->id) }}"
                                        class="btn btn-icon btn-secondary btn-sm" data-bs-toggle="tooltip"
                                        data-bs-placement="top" data-bs-original-title="Detail"
                                        aria-describedby="tooltip358783">
                                        <span class="ti ti-eye"></span>
                                    </a>
                                    <a href="{{ route('fr_ak_04.edit',$item->id) }}"
                                        class="btn btn-icon btn-warning btn-sm" data-bs-toggle="tooltip"
                                        data-bs-placement="top" data-bs-original-title="Edit"
                                        aria-describedby="tooltip358783">
                                        <span class="ti ti-edit"></span>
                                    </a>
                                    <a href="{{ url('fr_ak_04/cetak_pdf',$item->id) }}"
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

<!-- Modal -->
<div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">FK.AK-04. Banding Asesmen</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('fr_ak_04.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameWithTitle" class="form-label">Name</label>
                            <select class="form-select @error('answer_apl02_id') is-invalid @enderror"
                                id="selectDefault" name="answer_apl02_id" value="{{ old('answer_apl02_id') }}">
                                @foreach ($apl_02 as $key => $value)
                                <option value="{{ $value->id }}">
                                    {{ $value->apl02->personal_detail->no_pendaftaran}} -
                                    {{ $value->apl02->personal_detail->nama_lengkap->name}} -
                                    {{ $value->apl02->kompetensi02->kompetensi->skema->nama_skema}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
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