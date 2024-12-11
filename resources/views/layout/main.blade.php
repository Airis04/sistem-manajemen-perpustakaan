<!DOCTYPE html>
<html lang="en">
@include('components.head')

<body>
    @include('components.top-bar')
    <!-- Begin page -->
    <div id="wrapper">
        @include('components.side-bar')

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    @yield('content')

                </div> <!-- end container-fluid -->

            </div> <!-- end content -->
            @include('components.footer')
        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    @include('components.custom')

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>
    @include('components.scripts')


</body>

</html>
