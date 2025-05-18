<!-- Back To Top Start -->
<button id="back-top" class="back-to-top">
    <i class="fa-solid fa-chevron-up"></i>
</button>

<!-- Offcanvas Area Start -->
<div class="fix-area">
    <div class="offcanvas__info">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                    <div class="logo d-flex align-items-center">
                        <a href="{{ url('/') }}" class="header-logo d-flex align-items-center">
                            <img src="{{ asset('assets/img/logo/rptra.png') }}" alt="logo-img" style="height: 40px;">
                            <span class="logo-text d-xl-inline ms-2 bold-header3">RPTRA AN NUR</span>
                        </a>
                    </div>
                    <div class="offcanvas__close">
                        <button>
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="mobile-menu fix mb-3"></div>
                <div class="offcanvas__contact">

                    <div class="header-button mt-4">
                        <a href="{{ url('/auth/login') }}" class="theme-btn text-center">
                            Masuk <i class="fa-solid fa-arrow-right-long"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="offcanvas__overlay"></div>

<!-- Sticky Header Section start  -->
<header class="header-2 sticky-header">
    <div class="mega-menu-wrapper">
        <div class="header-main">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <!-- Logo -->
                    <div class="col-auto">
                        <div class="logo d-flex align-items-center">
                            <a href="{{ url('/') }}" class="header-logo d-flex align-items-center">
                                <img src="{{ asset('assets/img/logo/rptra.png') }}" alt="logo-img"
                                    style="height: 40px;">
                                <span class="logo-text d-xl-inline ms-2 bold-header3">RPTRA AN NUR</span>
                            </a>
                        </div>
                    </div>

                    <!-- Menu -->
                    <div class="col text-center d-none d-xl-block">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul class="d-xl-flex mb-0 list-unstyled">
                                    <li><a class="bold-header2" href="{{ url('buku') }}">Buku</a></li>
                                    <li class="has-dropdown"><a class="bold-header2"
                                            href="{{ url('tanaman') }}">Tanaman</a></li>
                                    <li><a class="bold-header2" href="{{ url('up2k') }}">UP2K</a></li>
                                    <li><a class="bold-header2" href="{{ url('tentang') }}">Tentang Kami</a></li>
                                    <li><a class="bold-header2" href="{{ url('kontak') }}">Kontak</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <!-- Hamburger -->
                    <div class="col-auto d-none d-xl-block">
                        <a href="{{ url('/auth/login') }}" class="theme-btn rounded-1" data-bs-toggle="modal"
                            data-bs-target="#registrationModal">
                            Masuk <i class="fa-solid fa-arrow-right-long"></i>
                        </a>
                    </div>

                    <!-- Mobile: Tombol Hamburger -->
                    <div class="col-auto d-block d-xl-none">
                        <div class="header-right">
                            <div class="menu-cart">
                                <div class="header-humbager ml-30">
                                    <a class="sidebar__toggle" href="javascript:void(0)">
                                        <div class="bar-icon-2">
                                            <img src="assets/img/icon/icon-13.svg" alt="img" />
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Header Section start  -->
<div class="header-2">
    <div class="header-main">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <!-- Logo -->
                <div class="col-auto">
                    <div class="logo d-flex align-items-center">
                        <a href="{{ url('/') }}" class="header-logo d-flex align-items-center">
                            <img src="{{ asset('assets/img/logo/rptra.png') }}" alt="logo-img" style="height: 40px;">
                            <span class="logo-text d-xl-inline ms-2 bold-header3">RPTRA AN NUR</span>
                        </a>
                    </div>
                </div>

                <!-- Menu -->
                <div class="col text-center d-none d-xl-block">
                    <div class="main-menu">
                        <nav id="mobile-menu">
                            <ul class="d-xl-flex mb-0 list-unstyled">
                                <li><a class="bold-header2" href="{{ url('buku') }}">Buku</a></li>
                                <li class="has-dropdown"><a class="bold-header2"
                                        href="{{ url('tanaman') }}">Tanaman</a></li>
                                <li><a class="bold-header2" href="{{ url('up2k') }}">UP2K</a></li>
                                <li><a class="bold-header2" href="{{ url('tentang') }}">Tentang Kami</a></li>
                                <li><a class="bold-header2" href="{{ url('kontak') }}">Kontak</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Hamburger -->
                <div class="col-auto d-none d-xl-block">
                    <a href="{{ url('/auth/login') }}" class="theme-btn rounded-1" data-bs-toggle="modal"
                        data-bs-target="#registrationModal">
                        Masuk <i class="fa-solid fa-arrow-right-long"></i>
                    </a>
                </div>

                <!-- Mobile: Tombol Hamburger -->
                <div class="col-auto d-block d-xl-none">
                    <div class="header-right">
                        <div class="menu-cart">
                            <div class="header-humbager ml-30">
                                <a class="sidebar__toggle" href="javascript:void(0)">
                                    <div class="bar-icon-2">
                                        <img src="assets/img/icon/icon-13.svg" alt="img" />
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
