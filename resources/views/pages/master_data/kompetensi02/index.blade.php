@extends('layouts/master')
@section('title', 'Kompetensi')
@section('content')
<div class="col-xl-12">
    <div class="card">
        <div class="card-body">
            <div class="row ">
                <div class="col-auto me-auto ">
                    <h5 class="mb-0">List Data Kompetensi APL-02</h5>
                </div>
                <div class="col-auto">
                    <a href="{{ route('kompetensi02.create') }}" class="btn btn-primary">Create</a>

                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-hover zero-configuration">
                    <thead>
                        <tr style="background-color: skyblue">
                            <th width='5px' style="text-align: center">No</th>
                            <th width="170px">Nama Skema</th>
                            <th>Kode Kompetensi</th>
                            <th>Unit Kompetensi</th>
                            <th width="100px" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($kompetensi as $data)
                        <tr>
                            <td style="vertical-align: top">{{$loop->iteration}}</td>
                            <td style="vertical-align: top">{{$data->kompetensi->skema->nama_skema}}</td>
                            <td style="vertical-align: top">
                                {{$data->kode}} <br>

                                @unless(!$data->kode2)
                                <!-- Tampilkan data -->
                                {{ $data->kode2 }} <br>
                                @endunless

                                @unless(!$data->kode3)
                                <!-- Tampilkan data -->
                                {{ $data->kode3 }} <br>
                                @endunless

                                @unless(!$data->kode4)
                                <!-- Tampilkan data -->
                                {{ $data->kode4 }} <br>
                                @endunless

                                @unless(!$data->kode5)
                                <!-- Tampilkan data -->
                                {{ $data->kode5 }} <br>
                                @endunless

                                @unless(!$data->kode6)
                                <!-- Tampilkan data -->
                                {{ $data->kode6 }} <br>
                                @endunless

                                @unless(!$data->kode7)
                                <!-- Tampilkan data -->
                                {{ $data->kode7 }} <br>
                                @endunless

                                @unless(!$data->kode8)
                                <!-- Tampilkan data -->
                                {{ $data->kode8 }} <br>
                                @endunless

                                @unless(!$data->kode9)
                                <!-- Tampilkan data -->
                                {{ $data->kode9 }} <br>
                                @endunless

                                @unless(!$data->kode10)
                                <!-- Tampilkan data -->
                                {{ $data->kode10 }} <br>
                                @endunless

                            </td>
                            <td style="vertical-align: top">{{$data->unit}} <br>

                                @unless(!$data->unit2)
                                <!-- Tampilkan data -->
                                {{ $data->unit2 }} <br>
                                @endunless

                                @unless(!$data->unit3)
                                <!-- Tampilkan data -->
                                {{ $data->unit3 }} <br>
                                @endunless

                                @unless(!$data->unit4)
                                <!-- Tampilkan data -->
                                {{ $data->unit4 }} <br>
                                @endunless

                                @unless(!$data->unit5)
                                <!-- Tampilkan data -->
                                {{ $data->unit5 }} <br>
                                @endunless

                                @unless(!$data->unit6)
                                <!-- Tampilkan data -->
                                {{ $data->unit6 }} <br>
                                @endunless

                                @unless(!$data->unit7)
                                <!-- Tampilkan data -->
                                {{ $data->unit7 }} <br>
                                @endunless

                                @unless(!$data->unit8)
                                <!-- Tampilkan data -->
                                {{ $data->unit8 }} <br>
                                @endunless

                                @unless(!$data->unit9)
                                <!-- Tampilkan data -->
                                {{ $data->unit9 }} <br>
                                @endunless

                                @unless(!$data->unit10)
                                <!-- Tampilkan data -->
                                {{ $data->unit10 }} <br>
                                @endunless

                                @unless(!$data->unit11)
                                <!-- Tampilkan data -->
                                {{ $data->unit11 }} <br>
                                @endunless

                            </td>
                            <td style="vertical-align: top;text-align-center">
                                <form method="POST" action="{{ route('kompetensi02.destroy', $data->id) }}">
                                    @csrf
                                    <input name="_method" type="hidden" value="DELETE">
                                    <a href="{{ route('kompetensi02.show', $data->id) }}"
                                        class="btn btn-icon btn-success btn-sm" data-bs-toggle="tooltip"
                                        data-bs-placement="top" data-bs-original-title="Detail"
                                        aria-describedby="tooltip358783">
                                        <span class="ti ti-eye"></span>
                                    </a>

                                    <a href="{{ route('kompetensi02.edit', $data->id) }}"
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
              showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });

</script>
@endsection
