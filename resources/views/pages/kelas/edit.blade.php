@extends('layout.dashboard')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-box table-responsive">

                <form action="{{ route('dashboard.kelas.update', $kelas->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="kelas">Nama Kelas</label>
                        <input type="text" class="form-control" id="kelas" name="kelas"
                            value="{{ old('kelas', $kelas->kelas) }}" required>
                        @error('kelas')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>

            </div>
        </div>
    </div>
@endsection
