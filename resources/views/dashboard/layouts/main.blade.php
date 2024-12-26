@include('dashboard.components.head')

<body>
    @include('sweetalert::alert')
    @include('dashboard.components.topbar')

    <div id="wrapper">
        @include('dashboard.components.sidebar')

        <div class="content-page">
            <div class="content">

                <div class="container-fluid">
                    <div class="mt-3">
                        @yield('content')
                    </div>
                </div>

            </div>
            @include('dashboard.components.footer')
        </div>
    </div>

    <div class="rightbar-overlay"></div>

    @include('dashboard.components.scripts')
</body>

</html>
