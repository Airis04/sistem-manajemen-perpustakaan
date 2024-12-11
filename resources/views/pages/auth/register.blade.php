<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Register | Adminox - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet" />

</head>

<body class="authentication-bg bg-primary authentication-bg-pattern d-flex align-items-center pb-0 vh-100">

    <div class="home-btn d-none d-sm-block">
        <a href="index.html"><i class="fas fa-home h2 text-white"></i></a>
    </div>

    <div class="account-pages w-100 mt-5 mb-5">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card mb-0">

                        <div class="card-body p-4">

                            <div class="account-box">
                                <div class="account-logo-box">
                                    <div class="text-center">
                                        {{-- <a href="index.html">
                                            <img src="assets/images/logo-dark.png" alt="" height="30">
                                        </a> --}}
                                    </div>
                                    <h5 class="text-uppercase mb-1 mt-4">Register</h5>
                                    <p class="mb-0">Get access to our dashboard</p>
                                </div>

                                <div class="account-content mt-4">
                                    <form class="form-horizontal" action="/register" method="POST">

                                        @csrf
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="nis">NIS</label>
                                                <input class="form-control @error('nis') is-invalid @enderror"
                                                    type="text" id="nis" name="nis" required=""
                                                    placeholder="Enter NIS" value="{{ old('nis') }}">
                                                @error('nis')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="nama">Full Name</label>
                                                <input class="form-control @error('nama') is-invalid @enderror"
                                                    type="text" id="nama" name="nama" required=""
                                                    placeholder="Enter Full Name" value="{{ old('nama') }}">
                                                @error('nama')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="email">Email address</label>
                                                <input class="form-control @error('email') is-invalid @enderror"
                                                    type="email" id="email" name="email" required=""
                                                    placeholder="Enter Email" value="{{ old('email') }}">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="password">Password</label>
                                                <input class="form-control @error('password') is-invalid @enderror"
                                                    type="password" id="password" name="password" required=""
                                                    placeholder="Enter Password">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="no_telpon">Phone Number</label>
                                                <input class="form-control @error('no_telpon') is-invalid @enderror"
                                                    type="text" id="no_telpon" name="no_telpon" required=""
                                                    placeholder="Enter Phone Number" value="{{ old('no_telpon') }}">
                                                @error('no_telpon')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="alamat">Address</label>
                                                <input class="form-control @error('alamat') is-invalid @enderror"
                                                    type="text" id="alamat" name="alamat" required=""
                                                    placeholder="Enter Address" value="{{ old('alamat') }}">
                                                @error('alamat')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row text-center mt-2">
                                            <div class="col-12">
                                                <button
                                                    class="btn btn-md btn-block btn-primary waves-effect waves-light"
                                                    type="submit">Sign Up</button>
                                            </div>
                                        </div>

                                    </form>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="text-center">
                                                <button type="button"
                                                    class="btn mr-1 btn-facebook waves-effect waves-light">
                                                    <i class="fab fa-facebook-f"></i>
                                                </button>
                                                <button type="button"
                                                    class="btn mr-1 btn-googleplus waves-effect waves-light">
                                                    <i class="fab fa-google"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-4 pt-2">
                                        <div class="col-sm-12 text-center">
                                            <p class="text-muted">Already have an account? <a href="/login"
                                                    class="text-dark ml-1"><b>Sign In</b></a></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

</body>

</html>
