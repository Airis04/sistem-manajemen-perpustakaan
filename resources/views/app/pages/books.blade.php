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
                <h1>List Buku</h1>
                <div class="page-header">
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                        <li>
                            <a href="{{ route('home') }}">
                                Beranda
                            </a>
                        </li>
                        <li>
                            <i class="fa-solid fa-chevron-right"></i>
                        </li>
                        <li>
                            List Buku
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Shop Section Start -->
    <livewire:app.book-list />
@endsection
