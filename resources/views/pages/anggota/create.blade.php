@extends('layout.dashboard')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-box table-responsive">

                <form action="{{ route('dashboard.anggota.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="id_kelas">ID Kelas</label>
                        <select class="form-control" id="id_kelas" name="id_kelas">
                            <option value="">Pilih Kelas</option>
                            @foreach ($kelas as $kelasItem)
                                <option value="{{ $kelasItem->id }}"
                                    {{ old('id_kelas') == $kelasItem->id ? 'selected' : '' }}>
                                    {{ $kelasItem->kelas }}
                                </option>
                            @endforeach
                        </select>
                        @error('id_kelas')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="nis">NIS</label>
                        <input type="text" class="form-control" id="nis" name="nis" value="{{ old('nis') }}"
                            required>
                        @error('nis')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}"
                            required>
                        @error('nama')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}"
                            required>
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="no_telpon">No Telpon</label>
                        <input type="text" class="form-control" id="no_telpon" name="no_telpon"
                            value="{{ old('no_telpon') }}" required>
                        @error('no_telpon')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" required>{{ old('alamat') }}</textarea>
                        @error('alamat')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
@endsection
