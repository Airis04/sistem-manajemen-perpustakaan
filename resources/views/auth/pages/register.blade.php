@extends('layout.auth')

@section('content')
    <div class="account-box">
        <div class="account-logo-box">
            <div class="text-center">
                {{-- <a href="index.html">
                    <img src="assets/images/logo-dark.png" alt="" height="30">
                </a> --}}
            </div>
            <h5 class="text-uppercase mb-1 mt-4">Daftar</h5>
            <p class="mb-0">Dapatkan akses ke dashboard</p>
        </div>

        <div class="account-content mt-4">
            <form class="form-horizontal" action="{{ route('register.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="col-12">
                                <label for="nis">NIS</label>
                                <input class="form-control @error('nis') is-invalid @enderror" type="text" id="nis"
                                    name="nis" required="" placeholder="Masukkan NIS" value="{{ old('nis') }}">
                                @error('nis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                                <label for="email">Alamat Email</label>
                                <input class="form-control @error('email') is-invalid @enderror" type="email"
                                    id="email" name="email" required="" placeholder="Masukkan Email"
                                    value="{{ old('email') }}">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                                <label for="password">Kata Sandi</label>
                                <input class="form-control @error('password') is-invalid @enderror" type="password"
                                    id="password" name="password" required="" placeholder="Masukkan Kata Sandi">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="col-12">
                                <label for="nama">Nama Lengkap</label>
                                <input class="form-control @error('nama') is-invalid @enderror" type="text"
                                    id="nama" name="nama" required="" placeholder="Masukkan Nama Lengkap"
                                    value="{{ old('nama') }}">
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                                <label for="no_telpon">Nomor Telepon</label>
                                <input class="form-control @error('no_telpon') is-invalid @enderror" type="text"
                                    id="no_telpon" name="no_telpon" required="" placeholder="Masukkan Nomor Telepon"
                                    value="{{ old('no_telpon') }}">
                                @error('no_telpon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                                <label for="alamat">Alamat</label>
                                <input class="form-control @error('alamat') is-invalid @enderror" type="text"
                                    id="alamat" name="alamat" required="" placeholder="Masukkan Alamat"
                                    value="{{ old('alamat') }}">
                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row text-center mt-2">
                    <div class="col-12">
                        <button class="btn btn-md btn-block btn-primary waves-effect waves-light" type="submit">
                            Daftar
                        </button>
                    </div>
                </div>

            </form>

            <div class="row mt-4 pt-2">
                <div class="col-sm-12 text-center">
                    <p class="text-muted">
                        Sudah punya akun?
                        <a href="{{ route('login') }}" class="text-dark ml-1">
                            <b>Masuk</b>
                        </a>
                    </p>
                </div>
            </div>

        </div>
    </div>
@endsection
