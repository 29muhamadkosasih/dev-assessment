@extends('layouts/master')
@section('content')

@section('title', 'Skema')
<!-- Invoice table -->
<div class="col-xs-4 col-sm-4 col-md-4 mb-4">
    <div class="card">
        <div class="card-body">
            <div class="row ">
                <div class="col-auto me-auto ">
                    @if (isset($edit))
                    <h5 class="mb-0">Edit Data Skema</h5>
                    @else
                    <h5 class="mb-0">Tambah Data Skema</h5>
                    @endif
                </div>
                <div class="card-body">
                    @if (isset($edit))
                    @include('pages.master_data.skema.edit')
                    @else
                    @include('pages.master_data.skema.create')
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xs-8 col-sm-8 col-md-8">
    <div class="card">
        <div class="card-body">
            <div class="row ">
                <div class="col-auto me-auto ">
                    <h5 class="mb-0">List Data Skema</h5>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-hover zero-configuration">
                    <thead>
                        <tr style="background-color: skyblue">
                            <th width='10px'>No</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">No. Skema</th>
                            <th width='150px' class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($skema as $data)

                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->nama_skema }}</td>
                            <td>{{ $data->no }}</td>
                            <td style="text-align: center">
                                <a href="{{ route('skema.edit', $data->id) }}" class="btn btn-icon btn-warning btn-sm">
                                    <span class="ti ti-edit"></span>
                                </a>
                                <form method="POST" action="{{ route('skema.destroy', $data->id) }}">
                                    @csrf
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button type="submit" class="btn btn-icon btn-danger btn-sm show_confirm">
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
