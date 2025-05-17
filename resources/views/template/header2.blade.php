    <header class="header-2 sticky-header">
        <div class="mega-menu-wrapper">
            <div class="header-main">
                <div class="container">
                    <div class="row">
                        <div class="col-6 col-xl-9">
                            <div class="header-left">
                                <div class="logo">
                                    <a href="{{ url('/') }}" class="header-logo">
                                        <img src="{{ asset('assets/img/logo/rptra.png') }}" alt="logo-img">
                                        <span class="logo-text">RPTRA AN NUR</span>
                                    </a>
                                </div>
                                <div class="mean__menu-wrapper">
                                    <div class="main-menu">
                                        <nav id="mobile-menu">
                                            <ul>
                                                <li>
                                                    <a href="{{ url('tentang') }}">
                                                        Tentang Kami
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('buku') }}">
                                                        Buku
                                                    </a>
                                                </li>
                                                <li class="has-dropdown">
                                                    <a href="{{ url('tanaman') }}">
                                                        Tanaman
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('up2k') }}">
                                                        UP2K
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('kontak') }}">Kontak</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-xl-3">
                            <div class="header-right">
                                <div class="menu-cart">
                                    <button type="button" class="theme-btn rounded-1" data-bs-toggle="modal"
                                        data-bs-target="#registrationModal">Daftar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    {{-- <header class="header-2">
        <div class="mega-menu-wrapper">
            <div class="header-main">
                <div class="container">
                    <div class="row">
                        <div class="col-6 col-xl-9">
                            <div class="header-left d-flex justify-content-beetween">
                                <div class="logo">
                                    <a href="{{ url('/') }}" class="header-logo">
                                        <img src="{{ asset('assets/img/logo/rptra.png') }}" alt="logo-img">
                                        <span class="logo-text">RPTRA AN NUR</span>
                                    </a>
                                </div>
                                <div class="mean__menu-wrapper">
                                    <div class="main-menu">
                                        <nav id="mobile-menu">
                                            <ul>
                                                <li>
                                                    <a class="bold-header2" href="{{ url('tentang') }}">
                                                        Tentang Kami
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="bold-header2" href="{{ url('buku') }}">
                                                        Buku
                                                    </a>
                                                </li>
                                                <li class="has-dropdown">
                                                    <a class="bold-header2" href="{{ url('tanaman') }}">
                                                        Tanaman
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="bold-header2" href="{{ url('up2k') }}">
                                                        UP2K
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="bold-header2" href="{{ url('kontak') }}">Kontak</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-xl-3">
                            <div class="header-right">
                                <div class="menu-cart">
                                    <button type="button" class="theme-btn rounded-1" data-bs-toggle="modal"
                                        data-bs-target="#registrationModal">Daftar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header> --}}

    <header class="header-2">
    <div class="mega-menu-wrapper">
        <div class="header-main">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-6 col-xl-9">
                        <div class="header-left d-flex align-items-center justify-content-between">
                            <!-- Logo -->
                            <div class="logo d-flex align-items-center">
                                <a href="{{ url('/') }}" class="header-logo d-flex align-items-center">
                                    <img src="{{ asset('assets/img/logo/rptra.png') }}" alt="logo-img" style="height: 40px;">
                                    <span class="logo-text d-none d-xl-inline ms-2">RPTRA AN NUR</span>
                                </a>
                            </div>

                            <!-- Hamburger Button (visible only on mobile) -->
                            <button class="mobile-menu-toggle d-xl-none" type="button">
                                <span class="hamburger-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </button>

                            <!-- Menu -->
                            <div class="mean__menu-wrapper d-none d-xl-block">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul class="d-xl-flex mb-0 list-unstyled">
                                            <li><a class="bold-header2" href="{{ url('tentang') }}">Tentang Kami</a></li>
                                            <li><a class="bold-header2" href="{{ url('buku') }}">Buku</a></li>
                                            <li class="has-dropdown"><a class="bold-header2" href="{{ url('tanaman') }}">Tanaman</a></li>
                                            <li><a class="bold-header2" href="{{ url('up2k') }}">UP2K</a></li>
                                            <li><a class="bold-header2" href="{{ url('kontak') }}">Kontak</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>

                        <!-- Menu Mobile (Toggle) -->
                        <div class="mobile-menu-content d-xl-none mt-3" style="display: none;">
                            <ul class="list-unstyled">
                                <li><a href="{{ url('tentang') }}">Tentang Kami</a></li>
                                <li><a href="{{ url('buku') }}">Buku</a></li>
                                <li><a href="{{ url('tanaman') }}">Tanaman</a></li>
                                <li><a href="{{ url('up2k') }}">UP2K</a></li>
                                <li><a href="{{ url('kontak') }}">Kontak</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Right Section (e.g., Button) -->
                    <!-- Desktop: Tombol Daftar -->
<div class="col-auto d-none d-xl-block">
    <button type="button" class="theme-btn rounded-1" data-bs-toggle="modal" data-bs-target="#registrationModal">
        Daftar
    </button>
</div>

<!-- Mobile: Tombol Hamburger -->
<div class="col-auto d-block d-xl-none">
    <div class="header-humbager">
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

    <!-- Style for Hamburger -->
    <style>
        .hamburger-icon {
            display: inline-block;
            width: 24px;
            height: 18px;
            position: relative;
        }

        .hamburger-icon span {
            background-color: #000;
            display: block;
            height: 2px;
            margin: 4px 0;
            transition: 0.3s ease;
        }
    </style>

    <!-- Script for Toggle -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const toggle = document.querySelector('.mobile-menu-toggle');
            const mobileMenu = document.querySelector('.mobile-menu-content');

            toggle.addEventListener('click', function () {
                mobileMenu.style.display = (mobileMenu.style.display === 'none' || mobileMenu.style.display === '') ? 'block' : 'none';
            });
        });
    </script>
</header>


    <div class="modal fade" id="registrationModal" tabindex="-1" aria-labelledby="registrationModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="close-btn">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="identityBox">
                        <div class="form-wrapper">
                            <h1 id="registrationModalLabel">Buat Akun Kamu</h1>
                            <input class="inputField" type="text" name="name" id="name" placeholder="Nama">
                            <input class="inputField" type="email" name="email" placeholder="Email">
                            <input class="inputField" type="password" name="password" placeholder=" Masukkan Password">
                            <input class="inputField" type="password" name="password" placeholder="Konfirmasi Password">
                            <div class="input-check remember-me">
                                <div class="checkbox-wrapper">
                                    <input type="checkbox" class="form-check-input" name="save-for-next"
                                        id="rememberMe">
                                    <label for="rememberMe">Ingat Akun</label>
                                </div>
                                <div class="text"> <a href="index-2.html">Lupa Password</a> </div>
                            </div>
                            <div class="loginBtn">
                                <a href="index-2.html" class="theme-btn rounded-0">Masuk</a>
                            </div>
                            <div class="orting-badge">
                                Atau
                            </div>
                            <div>
                                <a class="another-option" href="https://www.google.com/">
                                    <img src="assets/img/google.png" alt="google">
                                    Masuk dengan Google
                                </a>
                            </div>
                            <div>
                                <a class="another-option another-option-two" href="https://www.facebook.com/">
                                    <img src="assets/img/facebook.png" alt="google">
                                    Masuk dengan Facebook
                                </a>
                            </div>
                            <div class="form-check-3 d-flex align-items-center from-customradio-2 mt-3">
                                <input class="form-check-input" type="radio" name="flexRadioDefault">
                                <label class="form-check-label">
                                    I Accept Your Terms & Conditions
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="close-btn">
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="identityBox">
                        <div class="form-wrapper">
                            <h1 id="loginModalLabel">Selamat Datang Kembali</h1>
                            <input class="inputField" type="email" name="email" placeholder="Email">
                            <input class="inputField" type="password" name="password"
                                placeholder="Masukkan Password">
                            <div class="input-check remember-me">
                                <div class="checkbox-wrapper">
                                    <input type="checkbox" class="form-check-input" name="save-for-next"
                                        id="saveForNext">
                                    <label for="saveForNext">Ingat Akun</label>
                                </div>
                                <div class="text"> <a href="index-2.html">Lupa Password</a> </div>
                            </div>
                            <div class="loginBtn">
                                <a href="index-2.html" class="theme-btn rounded-0">Masuk</a>
                            </div>
                            <div class="orting-badge">
                                Atau
                            </div>
                            <div>
                                <a class="another-option" href="https://www.google.com/">
                                    <img src="assets/img/google.png" alt="google">
                                    Masuk dengan Google
                                </a>
                            </div>
                            <div>
                                <a class="another-option another-option-two" href="https://www.facebook.com/">
                                    <img src="assets/img/facebook.png" alt="google">
                                    Masuk dengan Facebook
                                </a>
                            </div>

                            <div class="form-check-3 d-flex align-items-center from-customradio-2 mt-3">
                                <input class="form-check-input" type="radio" name="flexRadioDefault">
                                <label class="form-check-label">
                                    I Accept Your Terms & Conditions
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
