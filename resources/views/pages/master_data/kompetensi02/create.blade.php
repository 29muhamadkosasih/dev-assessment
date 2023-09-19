@extends('layouts/master')
@section('title', 'Kompetensi')
@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Create Kompetensi APL-02</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('kompetensi02.store') }}">
                @csrf
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label class="form-label" for="plFirstName">Kompetensi APL-01</label>
                        <select class="form-select @error('kompetensi_id') is-invalid @enderror" id="selectDefault"
                            name="kompetensi_id" value="{{ old('kompetensi_id') }}" required>
                            <option selected>Open this select</option>
                            @foreach ($kompetensi as $key => $value)
                            <option value="{{ $value->id }}">
                                {{ $value->skema->nama_skema }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3 mt-3">
                    <button type="submit" class="btn btn-primary float-end ms-2">Submit</button>
                    <a href="{{ route('kompetensi.index') }}" class="btn btn-secondary float-end ">Back</a>
            </form>
        </div>
    </div>
</div>
@endsection