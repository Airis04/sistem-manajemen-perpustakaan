@extends('dashboard.layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">

            <div class="card-box table-responsive">

                <form action="{{ route('dashboard.buku.update', $buku->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="judul_buku">Judul Buku</label>
                        <input type="text" class="form-control" id="judul_buku" name="judul_buku"
                            value="{{ old('judul_buku', $buku->judul_buku) }}" required>
                        @error('judul_buku')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="penulis">Penulis</label>
                        <input type="text" class="form-control" id="penulis" name="penulis"
                            value="{{ old('penulis', $buku->penulis) }}" required>
                        @error('penulis')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="isbn">ISBN</label>
                        <input type="text" class="form-control" id="isbn" name="isbn"
                            value="{{ old('isbn', $buku->isbn) }}" required>
                        @error('isbn')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="preview_gambar">Preview Gambar</label>
                        <div>
                            <img id="preview_gambar" src="{{ asset('storage/' . $buku->gambar) }}" alt="Preview Gambar"
                                style="max-width: 200px;">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="file" class="form-control" id="gambar" name="gambar">
                        @error('gambar')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="id_penerbit">Penerbit</label>
                        <select class="form-control" id="id_penerbit" name="id_penerbit" required>
                            @foreach ($penerbits as $penerbit)
                                <option value="{{ $penerbit->id }}"
                                    {{ $buku->id_penerbit == $penerbit->id ? 'selected' : '' }}>
                                    {{ $penerbit->nama_penerbit }}
                                </option>
                            @endforeach
                        </select>
                        @error('id_penerbit')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="tahun_terbit">Tahun Terbit</label>
                        <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit"
                            value="{{ old('tahun_terbit', $buku->tahun_terbit) }}" required>
                        @error('tahun_terbit')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <p class="text-info">*Abaikan gambar jika tidak ingin mengubahnya</p>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>

            </div>
        </div>
    </div>
@endsection
