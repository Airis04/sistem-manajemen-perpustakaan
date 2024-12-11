<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Library Management System">
    <meta name="author" content="Universitas Teknologi Yogyakarta">
    <link rel="shortcut icon" href="/images/favicon.ico">

    <title>Library Management System</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>

    <header>
        <section class="hero">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-custom navbar-dark navbar-custom">
                <div class="container">
                    <!-- LOGO -->
                    <a class="navbar-brand logo" href="/">
                        <img src="https://upload.wikimedia.org/wikipedia/id/2/21/Logo_SMAN_1_Banjarsari_Ciamis.png" alt="logo" height="100">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07"
                        aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarsExample07">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="/#about">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/#services">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/#catalog">Catalog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/#contact">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/login">Log In</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="container">
                <div class="row hero-content text-center">
                    <div class="col-12">
                        <h1 class="">Welcome to Our Library</h1>
                        <p class="lead">Explore a world of knowledge and resources</p>
                        <div class="m-t-20">
                            <a href="/register" class="btn btn-custom w-lg">Join Now</a>
                        </div>
                    </div>
                </div>
                <div class="row text-center mt-4">
                    <div class="col-12">
                        <img src="https://images.pexels.com/photos/415071/pexels-photo-415071.jpeg?auto=compress&cs=tinysrgb&w=600"
                            alt="Books" class="img-fluid">
                    </div>
                </div>
            </div> <!-- end container -->
        </section> <!-- end hero -->
    </header>

    <section class="section features" id="about">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="title">About Us</h2>
                    <p class="slogan">Our library management system serves as a platform for personal development and
                        fostering national character.</p>
                </div>
            </div> <!-- End row -->
        </div>
    </section>
    <!-- about -->

    <section class="section features" id="services">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-4">
                    <div class="features-2">
                        <img src="/images/icons/books.png" alt="">
                    </div>
                    <div>
                        <h4>Book Lending</h4>
                        <p>Borrow books from our extensive collection for your reading pleasure.</p>
                    </div>
                </div> <!-- end col -->

                <div class="col-sm-4">
                    <div class="features-2">
                        <img src="/images/icons/online-resources.png" alt="">
                    </div>
                    <div>
                        <h4>Online Resources</h4>
                        <p>Access a wide range of digital resources including e-books and journals.</p>
                    </div>
                </div> <!-- end col -->

                <div class="col-sm-4">
                    <div class="features-2">
                        <img src="/images/icons/study-rooms.png" alt="">
                    </div>
                    <div>
                        <h4>Study Rooms</h4>
                        <p>Reserve private study rooms for group discussions and study sessions.</p>
                    </div>
                </div> <!-- end col -->
            </div> <!-- End row -->
        </div>
    </section>
    <!-- services -->

    <section class="section" id="catalog">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="title">Catalog</h2>
                    <p class="slogan">Browse our catalog to find books, journals, and other resources.</p>
                </div>
            </div> <!-- End row -->
        </div>
    </section>
    <!-- catalog -->

    <section class="section" id="contact">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="title">Contact Us</h2>
                    <p class="slogan">Have questions? Get in touch with us.</p>
                </div>
            </div> <!-- End row -->
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4>Contact Information</h4>
                <p><strong>Address:</strong> Jl. Raya KM 03 Banjarsari, Kab. Ciamis</p>
                <p><strong>Phone:</strong> 0265650015</p>
                <p><strong>Email:</strong> info@sman1bjrs.sch.id</p>
            </div>
            <div class="col-md-6">
                <h4>Send Us a Message</h4>
                <form action="/contact" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-custom">Send Message</button>
                    <div style="margin-bottom: 20px;"></div>
                </form>
            </div>
        </div>
    </div>
    <!-- contact -->

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <a class="navbar-brand-footer" href="/#"><img src="https://upload.wikimedia.org/wikipedia/id/2/21/Logo_SMAN_1_Banjarsari_Ciamis.png" alt="logo"
                            height="40"></a>
                    <span class="text-muted ml-3"> © 2024 SMAN 1 BANJARSARI</span>
                </div>
                <div class="col-md-6">
                    <ul class="social-icons text-md-right">
                        <li><a href="https://www.instagram.com/sman1banjarsari_?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://l.instagram.com/?u=http%3A%2F%2Fsman1bjrs.sch.id%2F%3Ffbclid%3DPAZXh0bgNhZW0CMTEAAaaXw-7zdp1n38-5o9pzxvb-wBdfSOFUJhFzhfHgnOOkWhrrkhlSpNaLlY8_aem_hAlu-o2DHoJuNaHw3i6rmg&e=AT3aB8KrxsFHCeBNSDGfM9ExgGcSoKqnCKHVBB6YiJ0H1HgZ-BClBustJCdqih3X6mTEYvv0gLTs806KeZbp6YS-netklzjTC_Piyw"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </footer>
    <!-- End Footer -->

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <!-- Jquery easing -->
    <script type="text/javascript" src="/js/jquery.easing.min.js"></script>
    <!-- SmoothScroll -->
    <script src="/js/SmoothScroll.js"></script>
    <!-- custom js -->
    <script src="/js/app.js"></script>
</body>

</html>
