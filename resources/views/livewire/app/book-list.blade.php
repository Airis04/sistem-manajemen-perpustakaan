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
                                    <input class="search-input" type="text" placeholder="Cari disini"
                                        wire:model.live="search">
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
                                    @foreach ($categories as $category)
                                        <li @class(['nav-item', 'active' => $categoryId === $category->id])
                                            wire:click="setCategoryId({{ $category->id }})">
                                            <button @class(['nav-link', 'active' => $categoryId === $category->id])>
                                                {{ $category->nama_kategori }}
                                            </button>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 order-1 order-md-2">
                    <div class="tab-pane fade show" tabindex="0">
                        <div class="row">
                            @foreach ($books as $book)
                                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                    <div class="shop-box-items">
                                        <div class="book-thumb center">
                                            <a href="{{ route('buku.show', $book->id) }}"><img
                                                    src="{{ asset('storage/' . $book->gambar) }}" alt="img"></a>
                                            <ul class="shop-icon d-grid justify-content-center align-items-center">
                                                <li>
                                                    <a href="{{ route('buku.show', $book->id) }}"><i
                                                            class="far fa-eye"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="shop-content">
                                            <h3>
                                                <a href="{{ route('buku.show', $book->id) }}">
                                                    {{ $book->judul_buku }}
                                                </a>
                                            </h3>
                                            <div class="shop-button">
                                                <a href="{{ route('buku.show', $book->id) }}" class="theme-btn">
                                                    <i class="fa-solid fa-basket-shopping"></i>
                                                    Detail
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="page-nav-wrap text-center">
                        <div class="page-nav">
                            {{ $books->links('livewire::simple-bootstrap', data: ['scrollTo' => false]) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
