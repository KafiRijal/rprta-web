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

    <div class="header-2-section">
        <div class="container">
            <div class="header-2-wrapper">
                <div class="header-top-logo">
                    <a href="{{ url('/') }}" class="header-logo">
                        <img src="{{ asset('assets/img/logo/rptra.png') }}" alt="logo-img">
                        <span class="logo-text">RPTRA AN NUR</span>
                    </a>
                </div>
                <div class="header-2-right">
                    <div class="category-oneadjust gap-6 d-flex align-items-center">
                        <div class="menu-wrapper">
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
                    <div class="menu-cart">
                        <button type="button" class="theme-btn rounded-1" data-bs-toggle="modal"
                            data-bs-target="#registrationModal">Daftar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
