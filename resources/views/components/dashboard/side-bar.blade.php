<div class="left-side-menu">
    <div class="slimscroll-menu">
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li class="menu-title">Menu Utama</li>

                <li>
                    <a href="{{ route('dashboard.index') }}">
                        <i class="fe-home"></i>
                        <span class="badge badge-success badge-pill float-right"></span>
                        <span> Dashboard </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('dashboard.anggota.index') }}">
                        <i class="fe-users"></i>
                        <span class="badge badge-success badge-pill float-right"></span>
                        <span> Anggota </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('dashboard.penerbit.index') }}">
                        <i class="fe-briefcase"></i>
                        <span class="badge badge-success badge-pill float-right"></span>
                        <span> Penerbit </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('dashboard.kategori.index') }}">
                        <i class="fe-tag"></i>
                        <span class="badge badge-success badge-pill float-right"></span>
                        <span> Kategori </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('dashboard.buku.index') }}">
                        <i class="fe-book"></i>
                        <span class="badge badge-success badge-pill float-right"></span>
                        <span> Buku </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('dashboard.peminjaman.index') }}">
                        <i class="fe-clipboard"></i>
                        <span class="badge badge-success badge-pill float-right"></span>
                        <span> Peminjaman </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('dashboard.pengembalian.index') }}">
                        <i class="fe-refresh-cw"></i>
                        <span class="badge badge-success badge-pill float-right"></span>
                        <span> Pengembalian </span>
                    </a>
                </li>
            </ul>

        </div>

        <div class="clearfix"></div>
    </div>
</div>
