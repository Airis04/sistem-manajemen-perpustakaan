@include('components.dashboard.head')

<body>
    @include('sweetalert::alert')
    @include('components.dashboard.top-bar')
    <div id="wrapper">
        @include('components.dashboard.side-bar')

        <div class="content-page">
            <div class="content">

                <div class="container-fluid">
                    <div class="mt-3">
                        @yield('content')
                    </div>
                </div>

            </div>
            @include('components.dashboard.footer')
        </div>
    </div>

    @include('components.dashboard.custom')

    <div class="rightbar-overlay"></div>
    @include('components.dashboard.scripts')
</body>

</html>
