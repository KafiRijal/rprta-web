@extends('template/main')

@section('content')
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="page-heading">
                <h1>Koleksi Perpustakaan</h1>
                <div class="page-header">
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                        <li>
                            <a href="{{ url('/') }}">
                                Beranda
                            </a>
                        </li>
                        <li>
                            <i class="fa-solid fa-chevron-right"></i>
                        </li>
                        <li>
                            Buku
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="shop-section fix section-padding">
        <div class="container">
            <div class="shop-default-wrapper">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 order-2 order-md-1 wow fadeInUp" data-wow-delay=".3s">
                        <div class="main-sidebar">
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h5>Pencarian</h5>
                                </div>
                                <form action="#" class="search-toggle-box">
                                    <div class="input-area search-container">
                                        <input class="search-input" type="text" placeholder="Cari di sini">
                                        <button class="cmn-btn search-icon">
                                            <i class="far fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h5>Kategori</h5>
                                </div>
                                <div class="categories-list">
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-arts-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-arts" type="button" role="tab"
                                                aria-controls="pills-arts" aria-selected="true">Anak</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-Biographies-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-Biographies" type="button" role="tab"
                                                aria-controls="pills-Biographies" aria-selected="false">Dewasa</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 order-1 order-md-2">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-arts" role="tabpanel"
                                aria-labelledby="pills-arts-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="{{ url('detailBuku') }}"><img src="assets/img/book/01.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="{{ url('detailBuku') }}">Simple Things You Save BOOK</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/02.png" alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">How Deal With Very Bad BOOK</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/03.png" alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">The Hidden Mystery Behind</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/04.png" alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">Qple GPad With Retina Sisplay</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/05.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">Flovely and Unicom Erna</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/04.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">Qple GPad With Retina Sisplay</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/02.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">How Deal With Very Bad BOOK</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/06.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">Castle In The Sky</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/06.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">Castle In The Sky</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/02.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">How Deal With Very Bad BOOK</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/03.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">The Hidden Mystery Behind</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/05.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">Flovely and Unicom Erna</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-Biographies" role="tabpanel"
                                aria-labelledby="pills-Biographies-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/01.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">Simple Things You Save BOOK</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/02.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">How Deal With Very Bad BOOK</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/03.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">The Hidden Mystery Behind</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/04.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">Qple GPad With Retina Sisplay</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/05.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">Flovely and Unicom Erna</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/04.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">Qple GPad With Retina Sisplay</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/02.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">How Deal With Very Bad BOOK</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/06.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">Castle In The Sky</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/06.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">Castle In The Sky</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/02.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">How Deal With Very Bad BOOK</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/03.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">The Hidden Mystery Behind</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/05.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">Flovely and Unicom Erna</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-ChristianBooks" role="tabpanel"
                                aria-labelledby="pills-ChristianBooks-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/01.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">Simple Things You Save BOOK</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/02.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">How Deal With Very Bad BOOK</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/03.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">The Hidden Mystery Behind</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/04.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">Qple GPad With Retina Sisplay</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/05.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">Flovely and Unicom Erna</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/04.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">Qple GPad With Retina Sisplay</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/02.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">How Deal With Very Bad BOOK</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/06.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">Castle In The Sky</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/06.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">Castle In The Sky</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/02.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">How Deal With Very Bad BOOK</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/03.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">The Hidden Mystery Behind</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/05.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">Flovely and Unicom Erna</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show active" id="pills-ResearchPublishing" role="tabpanel"
                                aria-labelledby="pills-ResearchPublishing-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/01.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">Simple Things You Save BOOK</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/02.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">How Deal With Very Bad BOOK</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/03.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">The Hidden Mystery Behind</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/04.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">Qple GPad With Retina Sisplay</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/05.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">Flovely and Unicom Erna</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/04.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">Qple GPad With Retina Sisplay</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/02.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">How Deal With Very Bad BOOK</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/06.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">Castle In The Sky</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/06.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">Castle In The Sky</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/02.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">How Deal With Very Bad BOOK</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/03.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">The Hidden Mystery Behind</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/05.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">Flovely and Unicom Erna</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-SportsOutdoors" role="tabpanel"
                                aria-labelledby="pills-SportsOutdoors-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/01.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">Simple Things You Save BOOK</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/02.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">How Deal With Very Bad BOOK</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/03.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">The Hidden Mystery Behind</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/04.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">Qple GPad With Retina Sisplay</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/05.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">Flovely and Unicom Erna</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/04.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">Qple GPad With Retina Sisplay</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/02.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">How Deal With Very Bad BOOK</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/06.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">Castle In The Sky</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/06.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">Castle In The Sky</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/02.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">How Deal With Very Bad BOOK</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/03.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">The Hidden Mystery Behind</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/05.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">Flovely and Unicom Erna</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-FoodDrink" role="tabpanel"
                                aria-labelledby="pills-FoodDrink-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/01.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">Simple Things You Save BOOK</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/02.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">How Deal With Very Bad BOOK</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/03.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">The Hidden Mystery Behind</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/04.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">Qple GPad With Retina Sisplay</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/05.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">Flovely and Unicom Erna</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/04.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">Qple GPad With Retina Sisplay</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/02.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">How Deal With Very Bad BOOK</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/06.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">Castle In The Sky</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/06.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">Castle In The Sky</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/02.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">How Deal With Very Bad BOOK</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/03.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">The Hidden Mystery Behind</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details"><img src="assets/img/book/05.png"
                                                        alt="img"></a>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">Flovely and Unicom Erna</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page-nav-wrap text-center">
                            <ul>
                                <li><a class="previous" href="shop.html">Previous</a></li>
                                <li><a class="page-numbers" href="shop.html">1</a></li>
                                <li><a class="page-numbers" href="shop.html">2</a></li>
                                <li><a class="page-numbers" href="shop.html">3</a></li>
                                <li><a class="page-numbers" href="shop.html">...</a></li>
                                <li><a class="next" href="shop.html">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
