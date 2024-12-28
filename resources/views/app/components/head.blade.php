<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ======== Page title ============ -->
    <title>{{ $title ?? '' }} - {{ config('app.name') }}</title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="/assets/logo/logo-transparent.png">

    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="/assets/app/css/bootstrap.min.css">
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="/assets/app/css/all.min.css">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="/assets/app/css/animate.css">
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="/assets/app/css/magnific-popup.css">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="/assets/app/css/meanmenu.css">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="/assets/app/css/swiper-bundle.min.css">
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="/assets/app/css/nice-select.css">
    <!--<< Icomoon.css >>-->
    <link rel="stylesheet" href="/assets/app/css/icomoon.css">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="/assets/app/css/main.css">

    @livewireStyles

    @stack('styles')
</head>
