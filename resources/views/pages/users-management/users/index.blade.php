@extends('layouts/master')
@section('title', 'Users')
@section('content')
<div class="col-xl-12">
    <div class="card">
        <div class="card-body">
            <div class="row ">
                <div class="col-auto me-auto ">
                    <h5 class="mb-0">List Data Users</h5>
                </div>
                <div class="col-auto">
                    @can('users.create')
                    <a href="{{ route('users.create') }}" class="btn btn-primary">Create</a>
                    @endcan

                </div>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered table-hover zero-configuration">
                    <thead>
                        <tr>
                            <th width='10px' style="text-align: center">No</th>
                            <th>Name</th>
                            <th>UserName</th>
                            <th>Email</th>
                            <th>Roles</th>
                            <th width='150px' class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($users as $user)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->username}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->role->title ?? "--"}}</td>
                            <td class="text-center">

                                <form method="POST" action="{{ route('users.destroy', $user->id) }}">
                                    @csrf
                                    <input name="_method" type="hidden" value="DELETE">
                                    <a href="{{ route('users.show', $user->id) }}"
                                        class="btn btn-icon btn-success btn-sm" data-bs-toggle="tooltip"
                                        data-bs-placement="top" data-bs-original-title="Detail"
                                        aria-describedby="tooltip358783">
                                        <span class="ti ti-eye"></span>
                                    </a>

                                    <a href="{{ route('users.edit', $user->id) }}"
                                        class="btn btn-icon btn-warning btn-sm" data-bs-toggle="tooltip"
                                        data-bs-placement="top" data-bs-original-title="Edit"
                                        aria-describedby="tooltip358783">
                                        <span class="ti ti-edit"></span>
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