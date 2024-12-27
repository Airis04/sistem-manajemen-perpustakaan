<div class="header-top-1">
    <div class="container">
        <div class="header-top-wrapper">
            <ul class="contact-list">
                <li>
                    <i class="fa-regular fa-phone"></i>
                    <a href="tel:0265650015">0265650015</a>
                </li>
                <li>
                    <i class="far fa-envelope"></i>
                    <a href="mailto:info@sman1bjrs.sch.id">info@sman1bjrs.sch.id</a>
                </li>
                <li>
                    <i class="far fa-clock"></i>
                    <span>Jl. Raya Km 03 Banjarsari</span>
                </li>
            </ul>
            <ul class="list">
                <li>
                    @if (auth()->guard('anggota')->check())
                        <div class="dropdown">
                            <button class="btn btn-transparent dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fa-light fa-user"></i>
                                {{ auth()->guard('anggota')->user()->nama }}
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item text-dark" href="{{ route('history') }}">Riwayat</a></li>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item text-dark">Keluar</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @else
                        <a href="{{ route('login') }}">
                            Masuk
                        </a>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</div>
