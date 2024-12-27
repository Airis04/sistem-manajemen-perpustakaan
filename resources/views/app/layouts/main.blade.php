<!DOCTYPE html>
<html lang="en">

@include('app.components.head')

<body>
    @include('sweetalert::alert')
    <div class="cursor-follower"></div>

    @include('app.components.preloader')

    <button id="back-top" class="back-to-top">
        <i class="fa-solid fa-chevron-up"></i>
    </button>

    @include('app.components.mobile-nav')

    <div class="offcanvas__overlay"></div>

    @include('app.components.topbar')
    @include('app.components.sticky-navbar')
    @include('app.components.navbar')

    @yield('content')


    @include('app.components.footer')
    @include('app.components.scripts')

</body>

</html>
