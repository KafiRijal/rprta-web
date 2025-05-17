<div class="app-sidebar-menu">
    <div class="h-100" data-simplebar>

        <div id="sidebar-menu">
            <div class="logo-box">
                <div class="logo d-flex align-items-center">
                    <a href="{{ url('/admin/dashboard') }}" class="header-logo d-flex align-items-center">
                        <img src="{{ asset('assets/img/logo/rptra.png') }}" alt="logo-img" style="height: 40px;">
                        <span class="logo-text d-xl-inline ms-2" style="color:black; font-weight:300px;"><b>RPTRA AN
                                NUR</b></span>
                    </a>
                </div>
            </div>

            <ul id="side-menu">
                <li class="menu-title"></li>
                <li>
                    <a href="{{ url('/admin/dashboard') }}" class="tp-link">
                        <i data-feather="home"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                @if (Auth::user()->role->id == 1 || Auth::user()->role->id == 2)
                    <li class="menu-title mt-2">Petugas</li>

                    <li>
                        <a href="{{ url('/admin/buku') }}" class="tp-link">
                            <i data-feather="book"></i>
                            <span> Buku </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/admin/tanaman') }}" class="tp-link">
                            <i data-feather="slack"></i>
                            <span> Tanaman </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/admin/up2k') }}" class="tp-link">
                            <i data-feather="shopping-cart"></i>
                            <span> UP2K </span>
                        </a>
                    </li>
                @endif

                @if (Auth::user()->role->id == 1)
                    <li class="menu-title mt-2">Administrator</li>

                    <li>
                        <a href="{{ url('admin/usermanagement') }}" class="tp-link">
                            <i data-feather="users"></i>
                            <span> User Management </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/faq') }}" class="tp-link">
                            <i data-feather="package"></i>
                            <span> FAQ </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('kontak') }}" class="tp-link">
                            <i data-feather="user"></i>
                            <span> Kontak Masuk </span>
                        </a>
                    </li>
                @endif
            </ul>

        </div>
        <div class="clearfix"></div>
    </div>
</div>
