@extends('layout.dashboard')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-box table-responsive">

                <form action="{{ route('dashboard.kategori.update', $kategori->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama_kategori">Nama kategori</label>
                        <input type="text" class="form-control" id="nama_kategori" name="nama_kategori"
                            value="{{ old('nama_kategori', $kategori->nama_kategori) }}" required>
                        @error('nama_kategori')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>

            </div>
        </div>
    </div>
@endsection
