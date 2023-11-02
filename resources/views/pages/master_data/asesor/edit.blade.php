<form action="{{ route('asesor.update', $edit->id) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label class="form-label">No MET</label>
        <input type="text" class="form-control @error('no_met') is-invalid @enderror" placeholder="Masukan No MET"
            name="no_met" value="{{ $edit->no_met }}" />
        @error('no_met')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Nama Asesor</label>
        <input type="text" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukan Nama Asesor"
            name="nama" value="{{ $edit->nama }}" />
        @error('nama')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Validiti MET</label>
        <input type="text" class="form-control @error('validiti_met') is-invalid @enderror"
            placeholder="Masukan Validiti MET" name="validiti_met" value="{{ $edit->validiti_met }}" />
        @error('validiti_met')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary float-end ms-2">Submit</button>
    <a href="{{ route('asesor.index') }}" class="btn btn-secondary float-end ">Back</a>
</form>
