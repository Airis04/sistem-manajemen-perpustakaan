@extends('dashboard.layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-box table-responsive">

                <h5>Formulir Pengembalian</h5>
                <form action="{{ route('dashboard.peminjaman.return', $peminjaman->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="tanggal_kembali">Tanggal Kembali</label>
                        <input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali"
                            value="{{ old('tanggal_kembali') }}" required>
                        @error('tanggal_kembali')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
@endsection
