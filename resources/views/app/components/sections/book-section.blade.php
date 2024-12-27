<section class="shop-section section-padding fix">
    <div class="container">
        <div class="section-title-area">
            <div class="section-title mb- wow fadeInUp" data-wow-delay=".3s">
                <h2>Bookle Top Books</h2>
            </div>
            <a href="{{ route('buku.index') }}" class="theme-btn transparent-btn wow fadeInUp" data-wow-delay=".5s">Lihat
                semua <i class="fa-solid fa-arrow-right-long"></i></a>
        </div>
        <div class="book-shop-wrapper">

            @foreach ($books as $book)
                <div class="shop-box-items style-2">
                    <div class="book-thumb center">
                        <a href="shop-details"><img src="{{ asset('storage/' . $book->gambar) }}" alt="img"></a>
                        <ul class="shop-icon d-grid justify-content-center align-items-center">
                            <li>
                                <a href="{{ route('buku.show', $book->id) }}"><i class="far fa-eye"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="shop-content">
                        <h5> Design Low Book </h5>
                        <h3><a href="{{ route('buku.show', $book->id) }}">{{ $book->judul_buku }}</a></h3>
                        <ul class="author-post">
                            <li class="authot-list">
                                <span class="content">{{ $book->penulis }}</span>
                            </li>
                            <li class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </li>
                        </ul>
                    </div>
                    <div class="shop-button">
                        <a href="{{ route('buku.show', $book->id) }}" class="theme-btn">
                            <i class="fa-solid fa-basket-shopping"></i>
                            Detail
                        </a>
                    </div>
                </div>
            @endforeach

            <div class="cta-shop-box">
                <h2 class="wow fadeInUp" data-wow-delay=".2s">
                    Find Your Nest
                    Books!
                </h2>
                <h6 class="wow fadeInUp" data-wow-delay=".4s">And get your 25% discount now!</h6>
                <a href="shop.html" class="theme-btn white-bg wow fadeInUp" data-wow-delay=".6s">Shop Now <i
                        class="fa-solid fa-arrow-right-long"></i></a>
                <div class="girl-shape">
                    <img src="/assets/app/img/girl-shape.png" alt="shape-img">
                </div>
                <div class="circle-shape">
                    <img src="/assets/app/img/circle-shape.png" alt="shape-img">
                </div>
            </div>
        </div>
    </div>
</section>
