@extends('auth.layouts.main')

@section('content')
    <div class="account-box">
        <div class="account-logo-box">
            <div class="text-center">
                {{-- <a href="index.html">
                    <img src="assets/images/logo-dark.png" alt="" height="30">
                </a> --}}
            </div>
            <h5 class="text-uppercase mb-1 mt-4">Masuk</h5>
            <p class="mb-0">Masuk ke akunmu</p>
        </div>

        <div class="account-content mt-4">
            <form class="form-horizontal" action="{{ route('login.authenticate') }}" method="POST">
                @csrf
                <div class="form-group row">
                    <div class="col-12">
                        <label for="email">Alamat email</label>
                        <input class="form-control" type="email" name="email" id="email"
                            placeholder="email@example.com" value="{{ old('email') }}" required>
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-12">
                        <label for="password">Password</label>
                        <input class="form-control" type="password" required="" name="password" id="password"
                            placeholder="Masukan password kamu">
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-12">
                        <label for="role">Role</label>
                        <select class="form-control" name="role" id="role" required>
                            <option value="">Pilih Role</option>
                            <option value="admin">Admin</option>
                            <option value="anggota">Anggota</option>
                        </select>
                        @error('role')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-group row text-center mt-2">
                    <div class="col-12">
                        <button class="btn btn-md btn-block btn-primary waves-effect waves-light" type="submit">
                            Masuk
                        </button>
                    </div>
                </div>

            </form>

            <div class="row mt-4 pt-2">
                <div class="col-sm-12 text-center">
                    <p class="text-muted mb-0">
                        Belum punya akun?
                        <a href="{{ route('register') }}" class="text-dark ml-1">
                            <b>Daftar</b>
                        </a>
                    </p>
                </div>
            </div>

        </div>
    </div>
@endsection
