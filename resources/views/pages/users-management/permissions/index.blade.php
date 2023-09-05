@extends('layouts/master')

@section('title', 'Permissions')

@section('content')
<!-- Invoice table -->
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <div class="row ">
                <div class="col-auto me-auto ">
                    <h5 class="mb-0">List Data Permissions</h5>
                </div>
                <div class="col-auto">
                    @can('permissions.create')
                    <a href="{{ route('permissions.create') }}" class="btn btn-primary">Create</a>
                    @endcan

                </div>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered table-hover zero-configuration">
                    <thead>
                        <tr>
                            <th width='50px' class="text-center">No</th>
                            <th>Name</th>
                            <th width='100px' class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($permissions as $data)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}</td>
                            <td>
                                <span class="badge bg-success mb-1">
                                    {{$data->name}}
                                </span>
                            </td>
                            <td class="text-center">
                                @can('permissions.edit')
                                <a href="{{ route('permissions.edit', $data->id) }}"
                                    class="btn btn-icon btn-warning btn-sm">
                                    <span class="ti ti-edit"></span>
                                </a>
                                @endcan
                                @can('permissions.delete')
                                <form method="POST" action="{{ route('permissions.destroy', $data->id) }}">
                                    @csrf
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button type="submit" class="btn btn-icon btn-danger btn-sm show_confirm">
                                        <span class="ti ti-trash"></span>
                                    </button>
                                </form>
                                @endcan
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
