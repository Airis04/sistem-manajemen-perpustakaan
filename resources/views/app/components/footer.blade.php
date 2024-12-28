<footer class="footer-section footer-bg">
    <div class="container">
        <div class="contact-info-area">
            <div class="contact-info-items wow fadeInUp" data-wow-delay=".2s">
                <div class="icon">
                    <i class="icon-icon-5"></i>
                </div>
                <div class="content">
                    <p>Hubungi Kami 7/24</p>
                    <h3>
                        <a href="tel:0265650015">0265650015</a>
                    </h3>
                </div>
            </div>
            <div class="contact-info-items wow fadeInUp" data-wow-delay=".4s">
                <div class="icon">
                    <i class="icon-icon-6"></i>
                </div>
                <div class="content">
                    <p>Kirim Email</p>
                    <h3>
                        <a href="mailto:info@sman1bjrs.sch.id">info@sman1bjrs.sch.id</a>
                    </h3>
                </div>
            </div>
            <div class="contact-info-items wow fadeInUp" data-wow-delay=".6s">
                <div class="icon">
                    <i class="icon-icon-7"></i>
                </div>
                <div class="content">
                    <p>Jam Operasional</p>
                    <h3>
                        Minggu - Jumat: 9 AM - 6 PM
                    </h3>
                </div>
            </div>
            <div class="contact-info-items wow fadeInUp" data-wow-delay=".8s">
                <div class="icon">
                    <i class="icon-icon-8"></i>
                </div>
                <div class="content">
                    <p>Lokasi</p>
                    <h3>
                        Jl. Raya Km 03 Banjarsari
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-widgets-wrapper">
        <div class="plane-shape float-bob-y">
            <img src="/assets/app/img/plane-shape.png" alt="img">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <a href="{{ route('home') }}">
                                <img src="/assets/logo/logo-full-transparent.png" alt="logo-img" class="img-fluid">
                            </a>
                        </div>
                        <div class="footer-content">
                            <p>
                                Perpustakaan sekolah yang menyediakan berbagai macam buku untuk siswa.
                            </p>
                            <div class="social-icon d-flex align-items-center">
                                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://x.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                                <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 ps-lg-5 wow fadeInUp" data-wow-delay=".4s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h3>Dukungan Siswa</h3>
                        </div>
                        <ul class="list-area">
                            <li>
                                <a href="{{ route('buku.index') }}">
                                    <i class="fa-solid fa-chevrons-right"></i>
                                    Daftar Buku
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}">
                                    <i class="fa-solid fa-chevrons-right"></i>
                                    Jam Operasional
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}">
                                    <i class="fa-solid fa-chevrons-right"></i>
                                    Hubungi Kami
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}">
                                    <i class="fa-solid fa-chevrons-right"></i>
                                    Kebijakan Pengembalian
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 ps-lg-5 wow fadeInUp" data-wow-delay=".6s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h3>Kategori Buku</h3>
                        </div>
                        <ul class="list-area">
                            <li>
                                <a href="{{ route('buku.index') }}">
                                    <i class="fa-solid fa-chevrons-right"></i>
                                    Buku Novel
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('buku.index') }}">
                                    <i class="fa-solid fa-chevrons-right"></i>
                                    Buku Puisi
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('buku.index') }}">
                                    <i class="fa-solid fa-chevrons-right"></i>
                                    Buku Politik
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('buku.index') }}">
                                    <i class="fa-solid fa-chevrons-right"></i>
                                    Buku Sejarah
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h3>Newsletter</h3>
                        </div>
                        <div class="footer-content">
                            <p>Daftar untuk mendapatkan berita terbaru dari perpustakaan.</p>
                            <div class="footer-input">
                                <input type="email" id="email2" placeholder="Masukkan Alamat Email">
                                <button class="newsletter-btn" type="submit">
                                    <i class="fa-regular fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-wrapper d-flex align-items-center justify-content-between">
                <p class="wow fadeInLeft" data-wow-delay=".3s">
                    © Hak Cipta 2024 oleh <a href="{{ route('home') }}">{{ config('app.name') }}</a>
                </p>
                <ul class="brand-logo wow fadeInRight" data-wow-delay=".5s">
                    <li>
                        <a href="{{ route('contact') }}">
                            <img src="/assets/app/img/visa-logo.png" alt="img">
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}">
                            <img src="/assets/app/img/mastercard.png" alt="img">
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}">
                            <img src="/assets/app/img/payoneer.png" alt="img">
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}">
                            <img src="/assets/app/img/affirm.png" alt="img">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
