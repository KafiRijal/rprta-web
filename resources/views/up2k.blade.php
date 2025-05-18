@extends('template/main')

@section('content')
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="page-heading">
                <h1>UP2K Gross Mart</h1>
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
                            UP2K
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="news-section fix section-padding">
        <div class="container">
            <div class="shop-default-wrapper">
                <div class="row g-4">
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
                                                aria-controls="pills-arts" aria-selected="true">Makanan</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-Biographies-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-Biographies" type="button" role="tab"
                                                aria-controls="pills-Biographies" aria-selected="false">Kerajinan</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-Biographies-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-Biographies" type="button" role="tab"
                                                aria-controls="pills-Biographies" aria-selected="false">Minuman</button>
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
                                        <div class="news-card-items style-2 mt-0">
                                            <div class="news-image">
                                                <img src="assets/img/news/05.jpg" alt="img">
                                                <img src="assets/img/news/05.jpg" alt="img">
                                            </div>
                                            <div class="news-content">
                                                <h3><a href="{{ url('detailUp2k') }}">Top 5 Tarot Decks for the Tarot World
                                                        Summit</a></h3>
                                                <a href="{{ url('detailUp2k') }}" class="theme-btn-2">Lihat Produk <i
                                                        class="fa-regular fa-arrow-right-long"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="news-card-items style-2 mt-0">
                                            <div class="news-image">
                                                <img src="assets/img/news/06.jpg" alt="img">
                                                <img src="assets/img/news/06.jpg" alt="img">
                                            </div>
                                            <div class="news-content">
                                                <h3><a href="news-details.html">Behind the Scenes with Author Victoria
                                                        Aveyard</a></h3>
                                                <a href="news-details.html" class="theme-btn-2">Lihat Produk <i
                                                        class="fa-regular fa-arrow-right-long"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="news-card-items style-2 mt-0">
                                            <div class="news-image">
                                                <img src="assets/img/news/07.jpg" alt="img">
                                                <img src="assets/img/news/07.jpg" alt="img">
                                            </div>
                                            <div class="news-content">
                                                <h3><a href="news-details.html">Tiny Emporium: Playful Picks for Kids’
                                                        Delightful Days.</a>
                                                </h3>
                                                <a href="news-details.html" class="theme-btn-2">Lihat Produk <i
                                                        class="fa-regular fa-arrow-right-long"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                        <div class="news-card-items style-2 mt-0">
                                            <div class="news-image">
                                                <img src="assets/img/news/08.jpg" alt="img">
                                                <img src="assets/img/news/08.jpg" alt="img">
                                            </div>
                                            <div class="news-content">
                                                <h3><a href="news-details.html">Eu parturient dictumst fames quam
                                                        tempor</a>
                                                </h3>
                                                <a href="news-details.html" class="theme-btn-2">Lihat Produk <i
                                                        class="fa-regular fa-arrow-right-long"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="news-card-items style-2 mt-0">
                                            <div class="news-image">
                                                <img src="assets/img/news/09.jpg" alt="img">
                                                <img src="assets/img/news/09.jpg" alt="img">
                                            </div>
                                            <div class="news-content">
                                                <h3><a href="news-details.html">How to Keep Children Safe Online In Simple
                                                        Steps</a></h3>
                                                <a href="news-details.html" class="theme-btn-2">Lihat Produk <i
                                                        class="fa-regular fa-arrow-right-long"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="news-card-items style-2 mt-0">
                                            <div class="news-image">
                                                <img src="assets/img/news/10.jpg" alt="img">
                                                <img src="assets/img/news/10.jpg" alt="img">
                                            </div>
                                            <div class="news-content">
                                                <h3><a href="news-details.html">That jerk Form Finance
                                                        really threw me</a></h3>
                                                <a href="news-details.html" class="theme-btn-2">Lihat Produk <i
                                                        class="fa-regular fa-arrow-right-long"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="news-card-items style-2 mt-0">
                                            <div class="news-image">
                                                <img src="assets/img/news/11.jpg" alt="img">
                                                <img src="assets/img/news/11.jpg" alt="img">
                                            </div>
                                            <div class="news-content">
                                                <h3><a href="news-details.html">Students Intelligence in Education Building
                                                        Resilient</a>
                                                </h3>
                                                <a href="news-details.html" class="theme-btn-2">Lihat Produk <i
                                                        class="fa-regular fa-arrow-right-long"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                        <div class="news-card-items style-2 mt-0">
                                            <div class="news-image">
                                                <img src="assets/img/news/12.jpg" alt="img">
                                                <img src="assets/img/news/12.jpg" alt="img">
                                            </div>
                                            <div class="news-content">
                                                <h3><a href="news-details.html">From without content
                                                        style without </a></h3>
                                                <a href="news-details.html" class="theme-btn-2">Lihat Produk <i
                                                        class="fa-regular fa-arrow-right-long"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="news-card-items style-2 mt-0">
                                            <div class="news-image">
                                                <img src="assets/img/news/13.jpg" alt="img">
                                                <img src="assets/img/news/13.jpg" alt="img">
                                            </div>
                                            <div class="news-content">
                                                <h3><a href="news-details.html">All Inclusive Ultimate Circle Island Day
                                                        with
                                                        Lunch</a></h3>
                                                <a href="news-details.html" class="theme-btn-2">Lihat Produk <i
                                                        class="fa-regular fa-arrow-right-long"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="news-card-items style-2 mt-0">
                                            <div class="news-image">
                                                <img src="assets/img/news/14.jpg" alt="img">
                                                <img src="assets/img/news/14.jpg" alt="img">
                                            </div>
                                            <div class="news-content">
                                                <h3><a href="news-details.html">Playful Picks Paradise: Kids’ Essentials
                                                        with
                                                        Dash.</a></h3>
                                                <a href="news-details.html" class="theme-btn-2">Lihat Produk <i
                                                        class="fa-regular fa-arrow-right-long"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="news-card-items style-2 mt-0">
                                            <div class="news-image">
                                                <img src="assets/img/news/15.jpg" alt="img">
                                                <img src="assets/img/news/15.jpg" alt="img">
                                            </div>
                                            <div class="news-content">
                                                <h3><a href="news-details.html">Tiny Emporium: Playful Picks for Kids’
                                                        Delightful Days.</a>
                                                </h3>
                                                <a href="news-details.html" class="theme-btn-2">Lihat Produk <i
                                                        class="fa-regular fa-arrow-right-long"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                        <div class="news-card-items style-2 mt-0">
                                            <div class="news-image">
                                                <img src="assets/img/news/16.jpg" alt="img">
                                                <img src="assets/img/news/16.jpg" alt="img">
                                            </div>
                                            <div class="news-content">
                                                <h3><a href="news-details.html">Top 10 Tarot Decks for the Tarot World
                                                        Summit</a></h3>
                                                <a href="news-details.html" class="theme-btn-2">Lihat Produk <i
                                                        class="fa-regular fa-arrow-right-long"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-nav-wrap text-center wow fadeInUp" data-wow-delay=".3s">
                                    <ul>
                                        <li><a class="previous" href="news-grid.html">Previous</a></li>
                                        <li><a class="page-numbers" href="news-grid.html">1</a></li>
                                        <li><a class="page-numbers" href="news-grid.html">2</a></li>
                                        <li><a class="page-numbers" href="news-grid.html">3</a></li>
                                        <li><a class="page-numbers" href="news-grid.html">...</a></li>
                                        <li><a class="next" href="news-grid.html">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
