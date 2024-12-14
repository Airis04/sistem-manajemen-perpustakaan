@extends('layout.dashboard')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-box table-responsive">

                <form action="{{ route('dashboard.kelas.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="kelas">Nama Kelas</label>
                        <input type="text" class="form-control" id="kelas" name="kelas" value="{{ old('kelas') }}"
                            required>
                        @error('kelas')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
@endsection
