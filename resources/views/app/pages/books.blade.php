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
    <section class="shop-section fix section-padding">
        <div class="container">
            <div class="shop-default-wrapper">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 order-2 order-md-1 wow fadeInUp" data-wow-delay=".3s">
                        <div class="main-sidebar">
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h5>Cari</h5>
                                </div>
                                <form action="#" class="search-toggle-box">
                                    <div class="input-area search-container">
                                        <input class="search-input" type="text" placeholder="Cari disini">
                                        <button class="cmn-btn search-icon">
                                            <i class="far fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h5>Kategori</h5>
                                </div>
                                <div class="categories-list">
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-arts-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-arts" type="button" role="tab"
                                                aria-controls="pills-arts" aria-selected="true">Arts &
                                                Photography
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 order-1 order-md-2">
                        <div class="tab-pane fade show" tabindex="0">
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                    <div class="shop-box-items">
                                        <div class="book-thumb center">
                                            <a href="shop-details.html"><img src="/assets/app/img/book/01.png"
                                                    alt="img"></a>
                                            <ul class="post-box">
                                                <li>
                                                    Hot
                                                </li>
                                                <li>
                                                    -30%
                                                </li>
                                            </ul>
                                            <ul class="shop-icon d-grid justify-content-center align-items-center">
                                                <li>
                                                    <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="shop-cart.html">
                                                        <img class="icon" src="/assets/app/img/icon/shuffle.svg"
                                                            alt="svg-icon">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-details.html"><i class="far fa-eye"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="shop-content">
                                            <h3><a href="shop-details.html">Simple Things You Save BOOK</a></h3>
                                            <ul class="price-list">
                                                <li>$30.00</li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                    3.4 (25)
                                                </li>
                                            </ul>
                                            <div class="shop-button">
                                                <a href="shop-details.html" class="theme-btn"><i
                                                        class="fa-solid fa-basket-shopping"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page-nav-wrap text-center">
                            <ul>
                                <li><a class="previous" href="shop.html">Previous</a></li>
                                <li><a class="page-numbers" href="shop.html">1</a></li>
                                <li><a class="page-numbers" href="shop.html">2</a></li>
                                <li><a class="page-numbers" href="shop.html">3</a></li>
                                <li><a class="page-numbers" href="shop.html">...</a></li>
                                <li><a class="next" href="shop.html">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
