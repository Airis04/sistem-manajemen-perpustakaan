<div class="navbar-custom">
    <ul class="list-unstyled topnav-menu float-right mb-0">

        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown"
                href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <img src="/assets/dashboard/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                <span class="pro-user-name ml-1">
                    {{ auth()->guard('admin')->user()->nama }} <i class="mdi mdi-chevron-down"></i>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                <div class="dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Halo {{ auth()->guard('admin')->user()->nama }}!</h6>
                </div>

                {{-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="fe-user"></i>
                    <span>Profil</span>
                </a> --}}

                {{-- <div class="dropdown-divider"></div> --}}

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <a href="javascript:void(0);" class="dropdown-item notify-item"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fe-log-out"></i>
                    <span>Keluar</span>
                </a>

            </div>
        </li>
    </ul>

    <div class="logo-box">
        <a href="{{ route('dashboard.index') }}" class="logo text-center">
            <span class="logo-lg">
                <img src="/assets/logo/logo-full-transparent.png" alt="" height="25">
            </span>
            <span class="logo-sm">
                <img src="/assets/logo/logo-full-transparent.png" alt="" height="28">
            </span>
        </a>
    </div>

    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
        <li>
            <button class="button-menu-mobile waves-effect waves-light">
                <i class="fe-menu"></i>
            </button>
        </li>

        <li class="d-none d-sm-block">
            <form class="app-search">
                <div class="app-search-box">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search...">
                        <div class="input-group-append">
                            <button class="btn" type="submit">
                                <i class="fe-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </li>

    </ul>
</div>
