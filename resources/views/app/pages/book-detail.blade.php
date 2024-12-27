@extends('app.layouts.main')

@section('content')
    <div class="breadcrumb-wrapper">
        <div class="book1">
            <img src="/assets/app/img/hero/book1.png" alt="book">
        </div>
        <div class="book2">
            <img src="/assets/app/img/hero/book2.png" alt="book">
        </div>
        <div class="container">
            <div class="page-heading">
                <h1>Detail Buku</h1>
                <div class="page-header">
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                        <li>
                            <a href="{{ route('home') }}">
                                Home
                            </a>
                        </li>
                        <li>
                            <i class="fa-solid fa-chevron-right"></i>
                        </li>
                        <li>
                            Detail Buku
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Shop Details Section Start -->
    <section class="shop-details-section fix section-padding">
        <div class="container">
            <div class="shop-details-wrapper">
                <div class="row g-4">
                    <div class="col-lg-5 d-flex justify-content-center">
                        <img src="{{ asset('storage/' . $book->gambar) }}" alt="img" class="img-fluid col-md-6 col-12"
                            style="object-fit: contain;">
                    </div>
                    <div class="col-lg-7">
                        <div class="shop-details-content">
                            <div class="title-wrapper">
                                <h2>{{ $book->judul_buku }}</h2>
                            </div>
                            <p>
                                @if ($book->deskripsi == null)
                                    Deskripsi tidak tersedia
                                @else
                                    {{ $book->deskripsi }}
                                @endif
                            </p>
                            <div class="category-box">
                                <div class="category-list">
                                    <ul>
                                        <li>
                                            <span>ISBN:</span> {{ $book->isbn }}
                                        </li>
                                        <li>
                                            <span>Judul:</span> {{ $book->judul_buku }}
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <span>Penulis:</span> {{ $book->penulis }}
                                        </li>
                                        <li>
                                            <span>Penerit:</span> {{ $book->penerbit->nama_penerbit }}
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <span>Tahun Terbit:</span> {{ $book->tahun_terbit }}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            @if (auth()->guard('anggota')->check())
                                <div class="category-box">
                                    <h5 class="mb-5">Formulir Peminjaman</h5>

                                    <form action="{{ route('buku.borrow', $book->id) }}" method="POST">
                                        @csrf

                                        <div class="form-group">
                                            <label for="tanggal_pinjam">Tanggal Pinjam</label>
                                            <input type="date" id="tanggal_pinjam" name="tanggal_pinjam"
                                                class="form-control" value="{{ old('tanggal_pinjam') }}" required>
                                            @error('tanggal_pinjam')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggal_kembali">Tanggal Kembali</label>
                                            <input type="date" id="tanggal_kembali" name="tanggal_kembali"
                                                class="form-control" value="{{ old('tanggal_kembali') }}" required>
                                            @error('tanggal_kembali')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group d-flex justify-content-end mt-3">
                                            <button type="submit" class="btn btn-primary">Pinjam</button>
                                        </div>
                                    </form>
                                </div>
                            @else
                                <div class="alert alert-warning mt-3" role="alert">
                                    Anda harus <a href="{{ route('login') }}" class="alert-link">masuk</a> untuk meminjam
                                    buku.
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
