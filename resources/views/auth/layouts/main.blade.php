<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>{{ $title }} | {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="/assets/logo/logo-transparent.png">

    <link href="/assets/dashboard/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
    <link href="/assets/dashboard/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/dashboard/css/app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet" />

</head>

<body class="authentication-bg bg-primary authentication-bg-pattern d-flex align-items-center pb-0 vh-100">
    @include('sweetalert::alert')

    <div class="home-btn d-none d-sm-block">
        <a href="{{ route('home') }}"><i class="fas fa-home h2 text-white"></i></a>
    </div>

    <div class="account-pages w-100 mt-5 mb-5">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="card mb-0">
                        <div class="card-body p-4">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/assets/dashboard/js/vendor.min.js"></script>
    <script src="/assets/dashboard/js/app.min.js"></script>
</body>

</html>
