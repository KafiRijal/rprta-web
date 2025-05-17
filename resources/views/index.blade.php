@extends('template/main')

@section('content')
    <!-- Hero Section start  -->
    <div class="hero-section hero-2 fix">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-6 col-lg-6">
                    <div class="hero-items">
                        <div class="hero-content">
                            <h6 class="wow fadeInUp" data-wow-delay=".3s">Tentang Kami</h6>
                            <h1 class="wow fadeInUp" data-wow-delay=".5s">Sistem Informasi <br> RPTRA An Nur </h1>
                            <p class="text-capitalize">hadir sebagai wadah digital terpadu untuk mendukung penyajian
                                informasi lengkap yang meliputi koleksi perpustakaan, koleksi tanaman, serta usaha mikro,
                                kecil, dan menengah (UMKM) binaan. <br> Sistem ini hadir sebagai bentuk upaya guna mendukung
                                kegiatan edukatif, pelestarian lingkungan, serta pemberdayaan ekonomi masyarakat melalui
                                layanan informasi yang mudah diakses, akurat, dan bermanfaat bagi seluruh pengunjung
                                dan warga sekitar.</p>
                            <div class="form-clt wow fadeInUp mt-5" data-wow-delay=".9s">
                                <button type="submit" class="theme-btn">
                                    Tentang Kami <i class="fa-solid fa-arrow-right-long"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Book Banner Section start  -->
    <section class="book-banner-section fix section-padding">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="banner-book-card-items bg-cover"
                        style="background-image: url('assets/img/banner/book-banner-1.jpg');">
                        <div class="book-shape">
                            <img src="{{ asset('assets/img/banner/banner-1.jpg') }}" alt="">
                        </div>
                        <div class="banner-book-content">
                            <h2>Koleksi <br> Perpustakaan</h2>
                            <h6>Berisi daftar lengkap koleksi buku yang ada di perpustakaan RPTRA An Nur.</h6>
                            <a href="shop-details.html" class="theme-btn white-bg">Lihat Sekarang <i
                                    class="fa-solid fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="banner-book-card-items bg-cover"
                        style="background-image: url('assets/img/banner/book-banner-2.jpg');">
                        <div class="book-shape">
                            <img src="{{ asset('assets/img/banner/banner-2.jpg') }}" alt="">
                        </div>
                        <div class="banner-book-content">
                            <h2>Koleksi
                                <br> Tanaman
                            </h2>
                            <h6>Berisi daftar jenis dan manfaat dari tanaman yang ada di taman RPTRA An Nur.
                            </h6>
                            <a href="shop-details.html" class="theme-btn white-bg">Lihat Sekarang <i
                                    class="fa-solid fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="banner-book-card-items bg-cover"
                        style="background-image: url('assets/img/banner/book-banner-3.jpg');">
                        <div class="book-shape">
                            <img src="{{ asset('assets/img/banner/banner-3.jpg') }}" alt="">
                        </div>
                        <div class="banner-book-content">
                            <h2>
                                UP2K
                                <br>
                                Gross Mart
                            </h2>
                            <h6>Berisi daftar produk dan jasa UMKM binaan RPTRA An Nur untuk mendukung usaha warga sekitar.
                            </h6>
                            <a href="shop.html" class="theme-btn white-bg">Lihat Sekarang <i
                                    class="fa-solid fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shop Section Start -->
    <section class="shop-section section-padding fix pt-0">
        <div class="container">
            <div class="section-title-area">
                <div class="section-title">
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Koleksi Buku Perpustakaan</h2>
                </div>
                <a href="shop.html" class="theme-btn transparent-btn wow fadeInUp" data-wow-delay=".5s">Lihat Semua <i
                        class="fa-solid fa-arrow-right-long"></i></a>
            </div>
            <div class="swiper book-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="book-thumb center">
                                <a href="shop-details"><img src="assets/img/book/01.png" alt="img"></a>
                                <div class="shop-button">
                                    <a href="shop-details.html" class="theme-btn"><i class=""></i> Lihat Buku</a>
                                </div>
                            </div>
                            <div class="shop-content">
                                <h5> Design Low Book </h5>
                                <h3><a href="shop-details.html">Simple Things You To <br> Save BOOK</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="book-thumb center">
                                <a href="shop-details"><img src="assets/img/book/02.png" alt="img"></a>
                                <div class="shop-button">
                                    <a href="shop-details.html" class="theme-btn"><i class=""></i> Lihat Buku</a>
                                </div>
                            </div>
                            <div class="shop-content">
                                <h5> Design Low Book </h5>
                                <h3><a href="shop-details.html">How Deal With Very <br> Bad BOOK</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="book-thumb center">
                                <a href="shop-details"><img src="assets/img/book/03.png" alt="img"></a>
                                <div class="shop-button">
                                    <a href="shop-details.html" class="theme-btn"><i class=""></i> Lihat
                                        Buku</a>
                                </div>
                            </div>
                            <div class="shop-content">
                                <h5> Design Low Book </h5>
                                <h3><a href="shop-details.html">The Hidden Mystery <br> Behind</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="book-thumb center">
                                <a href="shop-details"><img src="assets/img/book/04.png" alt="img"></a>
                                <div class="shop-button">
                                    <a href="shop-details.html" class="theme-btn"><i class=""></i> Lihat
                                        Buku</a>
                                </div>
                            </div>
                            <div class="shop-content">
                                <h5> Design Low Book </h5>
                                <h3><a href="shop-details.html">Qple GPad With Retina <br> Sisplay</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="book-thumb center">
                                <a href="shop-details"><img src="assets/img/book/05.png" alt="img"></a>
                                <div class="shop-button">
                                    <a href="shop-details.html" class="theme-btn"><i class=""></i> Lihat
                                        Buku</a>
                                </div>
                            </div>
                            <div class="shop-content">
                                <h5> Design Low Book </h5>
                                <h3><a href="shop-details.html">Flovely and Unicom <br> Erna</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shop Section Start -->
    <section class="shop-section section-padding fix pt-0 mt-5">
        <div class="container">
            <div class="section-title-area">
                <div class="section-title">
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Koleksi Tanaman</h2>
                </div>
                <a href="shop.html" class="theme-btn transparent-btn wow fadeInUp" data-wow-delay=".5s">Lihat Semua <i
                        class="fa-solid fa-arrow-right-long"></i></a>
            </div>
            <div class="swiper book-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="book-thumb center">
                                <a href="shop-details"><img src="assets/img/book/01.png" alt="img"></a>
                                <div class="shop-button">
                                    <a href="shop-details.html" class="theme-btn"><i class=""></i> Lihat
                                        Tanaman</a>
                                </div>
                            </div>
                            <div class="shop-content">
                                <h5> Design Low Book </h5>
                                <h3><a href="shop-details.html">Simple Things You To <br> Save BOOK</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="book-thumb center">
                                <a href="shop-details"><img src="assets/img/book/02.png" alt="img"></a>
                                <div class="shop-button">
                                    <a href="shop-details.html" class="theme-btn"><i class=""></i> Lihat
                                        Tanaman</a>
                                </div>
                            </div>
                            <div class="shop-content">
                                <h5> Design Low Book </h5>
                                <h3><a href="shop-details.html">How Deal With Very <br> Bad BOOK</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="book-thumb center">
                                <a href="shop-details"><img src="assets/img/book/03.png" alt="img"></a>
                                <div class="shop-button">
                                    <a href="shop-details.html" class="theme-btn"><i class=""></i> Lihat
                                        Tanaman</a>
                                </div>
                            </div>
                            <div class="shop-content">
                                <h5> Design Low Book </h5>
                                <h3><a href="shop-details.html">The Hidden Mystery <br> Behind</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="book-thumb center">
                                <a href="shop-details"><img src="assets/img/book/04.png" alt="img"></a>
                                <div class="shop-button">
                                    <a href="shop-details.html" class="theme-btn"><i class=""></i> Lihat
                                        Tanaman</a>
                                </div>
                            </div>
                            <div class="shop-content">
                                <h5> Design Low Book </h5>
                                <h3><a href="shop-details.html">Qple GPad With Retina <br> Sisplay</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="book-thumb center">
                                <a href="shop-details"><img src="assets/img/book/05.png" alt="img"></a>
                                <div class="shop-button">
                                    <a href="shop-details.html" class="theme-btn"><i class=""></i> Lihat
                                        Tanaman</a>
                                </div>
                            </div>
                            <div class="shop-content">
                                <h5> Design Low Book </h5>
                                <h3><a href="shop-details.html">Flovely and Unicom <br> Erna</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section Start -->
    <section class="team-section fix section-padding pt-0 margin-bottom-30 mt-5">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="mb-3 wow fadeInUp" data-wow-delay=".3s">Petugas RPTRA An Nur</h2>
                <p class="wow fadeInUp" data-wow-delay=".5s">Petugas RPTRA yang berdedikasi tinggi dalam melayani
                    masyarakat. <br> Mereka memastikan fasilitas dan kegiatan berjalan dengan lancar.</p>
            </div>
            <div class="array-button">
                <button class="array-prev"><i class="fal fa-arrow-left"></i></button>
                <button class="array-next"><i class="fal fa-arrow-right"></i></button>
            </div>
            <div class="swiper team-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="team-box-items">
                            <div class="team-image">
                                <div class="thumb">
                                    <img src="assets/img/team/01.jpg" alt="img">
                                </div>
                                <div class="shape-img">
                                    <img src="assets/img/team/shape-img.png" alt="img">
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h6><a href="team-details.html">Esther Howard</a></h6>
                                <p>10 Published Books</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-box-items">
                            <div class="team-image">
                                <div class="thumb">
                                    <img src="assets/img/team/02.jpg" alt="img">
                                </div>
                                <div class="shape-img">
                                    <img src="assets/img/team/shape-img.png" alt="img">
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h6><a href="team-details.html">Shikhon Islam</a></h6>
                                <p>07 Published Books</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-box-items">
                            <div class="team-image">
                                <div class="thumb">
                                    <img src="assets/img/team/03.jpg" alt="img">
                                </div>
                                <div class="shape-img">
                                    <img src="assets/img/team/shape-img.png" alt="img">
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h6><a href="team-details.html">Kawser Ahmed</a></h6>
                                <p>04 Published Books</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-box-items">
                            <div class="team-image">
                                <div class="thumb">
                                    <img src="assets/img/team/04.jpg" alt="img">
                                </div>
                                <div class="shape-img">
                                    <img src="assets/img/team/shape-img.png" alt="img">
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h6><a href="team-details.html">Brooklyn Simmons</a></h6>
                                <p>15 Published Books</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-box-items">
                            <div class="team-image">
                                <div class="thumb">
                                    <img src="assets/img/team/05.jpg" alt="img">
                                </div>
                                <div class="shape-img">
                                    <img src="assets/img/team/shape-img.png" alt="img">
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h6><a href="team-details.html">Leslie Alexander</a></h6>
                                <p>05 Published Books</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-box-items">
                            <div class="team-image">
                                <div class="thumb">
                                    <img src="assets/img/team/06.jpg" alt="img">
                                </div>
                                <div class="shape-img">
                                    <img src="assets/img/team/shape-img.png" alt="img">
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h6><a href="team-details.html">Guy Hawkins</a></h6>
                                <p>12 Published Books</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section Start -->
    <section class="news-section fix section-padding section-bg">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="mb-3 wow fadeInUp" data-wow-delay=".3s">UP2K Gross Mart</h2>
                <p class="wow fadeInUp" data-wow-delay=".5s">daftar produk dan jasa dari UMKM binaan RPTRA An Nur <br>
                    sebagai bentuk dukungan terhadap usaha warga sekitar.</p>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="news-card-items">
                        <div class="news-image">
                            <img src="assets/img/news/09.jpg" alt="img">
                            <img src="assets/img/news/09.jpg" alt="img">
                        </div>
                        <div class="news-content">
                            <h3><a href="news-details.html">Montes suspendisse massa curae malesuada</a></h3>
                            <a href="news-details.html" class="theme-btn-2">Lihat Produk <i
                                    class="fa-regular fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="news-card-items">
                        <div class="news-image">
                            <img src="assets/img/news/10.jpg" alt="img">
                            <img src="assets/img/news/10.jpg" alt="img">
                        </div>
                        <div class="news-content">
                            <h3><a href="news-details.html">Playful Picks Paradise: Kids’ Essentials with Dash.</a></h3>
                            <a href="news-details.html" class="theme-btn-2">Lihat Produk <i
                                    class="fa-regular fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="news-card-items">
                        <div class="news-image">
                            <img src="assets/img/news/11.jpg" alt="img">
                            <img src="assets/img/news/11.jpg" alt="img">
                        </div>
                        <div class="news-content">
                            <h3><a href="news-details.html">Tiny Emporium: Playful Picks for Kids’ Delightful Days.</a>
                            </h3>
                            <a href="news-details.html" class="theme-btn-2">Lihat Produk <i
                                    class="fa-regular fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="news-card-items">
                        <div class="news-image">
                            <img src="assets/img/news/12.jpg" alt="img">
                            <img src="assets/img/news/12.jpg" alt="img">
                        </div>
                        <div class="news-content">
                            <h3><a href="news-details.html">Eu parturient dictumst fames quam tempor</a></h3>
                            <a href="news-details.html" class="theme-btn-2">Lihat Produk <i
                                    class="fa-regular fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
