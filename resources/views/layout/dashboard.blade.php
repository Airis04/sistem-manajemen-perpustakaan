@include('components.dashboard.head')

<body>
    @include('components.dashboard.top-bar')
    <div id="wrapper">
        @include('components.dashboard.side-bar')

        <div class="content-page">
            <div class="content">

                <div class="container-fluid">
                    @yield('content')
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
