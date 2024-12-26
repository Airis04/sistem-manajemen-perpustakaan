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
                <h1>Kontak</h1>
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
                            Kontak
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section Start -->
    <section class="contact-section fix section-padding">
        <div class="container">
            <div class="contact-wrapper">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-4">
                        <div class="contact-left-items">
                            <div class="contact-info-area-2">
                                <div class="contact-info-items mb-4">
                                    <div class="icon">
                                        <i class="icon-icon-10"></i>
                                    </div>
                                    <div class="content">
                                        <p>Hubungi Kami 24/7</p>
                                        <h3>
                                            <a href="tel:0265650015">0265650015</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="contact-info-items mb-4">
                                    <div class="icon">
                                        <i class="icon-icon-11"></i>
                                    </div>
                                    <div class="content">
                                        <p>Kirim Email</p>
                                        <h3>
                                            <a href="mailto:info@sman1bjrs.sch.id">info@sman1bjrs.sch.id</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="contact-info-items border-none">
                                    <div class="icon">
                                        <i class="icon-icon-12"></i>
                                    </div>
                                    <div class="content">
                                        <p>Lokasi</p>
                                        <h3>
                                            Jl. Raya Km 03 Banjarsari
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="video-image">
                                <iframe width="100%" style="aspect-ratio: 16/9;"
                                    src="https://www.youtube.com/embed/D3NnZwI_ANc?si=MrNUsAb-4EFenbk8"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="contact-content">
                            <h2>Siap untuk Memulai?</h2>
                            <p>
                                Silakan hubungi kami jika Anda memiliki pertanyaan atau membutuhkan bantuan terkait
                                peminjaman buku di perpustakaan sekolah. Kami siap membantu Anda.
                            </p>
                            <form action="#" id="contact-form" method="POST" class="contact-form-items">
                                <div class="row g-4">
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="form-clt">
                                            <span>Nama Anda*</span>
                                            <input type="text" name="name" id="name" placeholder="Nama Anda">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                        <div class="form-clt">
                                            <span>Email Anda*</span>
                                            <input type="text" name="email" id="email123" placeholder="Email Anda">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 wow fadeInUp" data-wow-delay=".7s">
                                        <div class="form-clt">
                                            <span>Tulis Pesan*</span>
                                            <textarea name="message" id="message" placeholder="Tulis Pesan"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 wow fadeInUp" data-wow-delay=".9s">
                                        <button type="submit" class="theme-btn">
                                            Kirim Pesan <i class="fa-solid fa-arrow-right-long"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--<< Map Section Start >>-->
    <div class="map-section">
        <div class="map-items">
            <div class="googpemap">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.6624720119935!2d108.62903947500205!3d-7.502463992510007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e65858927a1e477%3A0xbc1afdcecaf75756!2sSMA%20Negeri%201%20Banjarsari!5e0!3m2!1sid!2sid!4v1735203903367!5m2!1sid!2sid"
                    style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
@endsection
