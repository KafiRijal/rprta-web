@extends('template/main')

@section('content')
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp">Tentang Kami</h1>
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
                            Tentang Kami
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="about-section fix section-padding">
        <div class="container">
            <div class="about-wrapper">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="about-image">
                            <img src="{{ asset('assets/img/hero/hero-3.jpg') }}" alt="img">
                            <div class="video-box">
                                <a href="https://www.youtube-nocookie.com/embed/mL_nHCZjkjY?si=TCqfq2A2hAPKjeWY"
                                    class="video-btn ripple video-popup">
                                    <i class="fa-solid fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-title">
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">RPTRA An Nur</h2>
                            </div>
                            <p class="mt-3 wow fadeInUp" data-wow-delay=".5s">
                                RPTRA An Nur (Ruang Publik Terpadu Ramah Anak) adalah ruang terbuka hijau yang dirancang
                                untuk mendukung tumbuh kembang anak dan interaksi sosial warga. Terletak di Jl. H. Murtadho
                                XVI RT 008 RW 06, Kelurahan Paseban, Kecamatan Senen, Jakarta Pusat, RPTRA ini diresmikan
                                pada 13 November 2019 dan dibangun di atas lahan seluas sekitar 340 meter persegi.
                            </p>
                            <p class="mt-3 wow fadeInUp" data-wow-delay=".7s">
                                RPTRA An Nur dilengkapi dengan berbagai fasilitas, termasuk area bermain anak (seperti
                                ayunan dan jungkat-jungkit), ruang perpustakaan, aula serbaguna, serta sarana olahraga
                                seperti tenis meja. Lingkungan ini dirancang agar ramah dan aman bagi anak-anak, sekaligus
                                menjadi tempat yang nyaman bagi orang tua dan warga sekitar untuk berinteraksi.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial-section fix section-padding pt-0">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="mb-3 wow fadeInUp" data-wow-delay=".3s">Saran & Masukan</h2>
                <p class="wow fadeInUp" data-wow-delay=".5s">Kami menghargai setiap saran dan masukan Anda untuk
                    meningkatkan pelayanan dan fasilitas di RPTRA. <br> Bersama, kita ciptakan ruang terbuka yang lebih baik
                    untuk semua.</p>
            </div>
            <div class="swiper testimonial-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-card-items">
                            <p>
                                One of the most powerful takeaways from this book is the emphasis on adopting a mindset
                                of abundance and possibility. The idea that we can choose to see opportunities rather
                                than limitations is a game-changer.
                            </p>
                            <div class="client-info-wrapper d-flex align-items-center justify-content-between">
                                <div class="client-info">
                                    <div class="client-img bg-cover"
                                        style="background-image: url('assets/img/testimonial/01.jpg');">
                                        <div class="icon">
                                            <img class="shape" src="assets/img/testimonial/shape.svg" alt="img">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3>Ronald Richards</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card-items">
                            <p>
                                The idea that we can choose to see opportunities rather than limitations is a
                                game-changer. The book encourages readers to step out of their comfort zones and embrace
                                a more positive outlook on life.
                            </p>
                            <div class="client-info-wrapper d-flex align-items-center justify-content-between">
                                <div class="client-info">
                                    <div class="client-img bg-cover"
                                        style="background-image: url('assets/img/testimonial/02.jpg');">
                                        <div class="icon">
                                            <img class="shape" src="assets/img/testimonial/shape.svg" alt="img">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3>Dianne Russell</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card-items">
                            <p>
                                "The Art of Possibility" by Rosamund Stone Zander and Benjamin Zander is a
                                transformative read that challenges conventional thinking and opens up new
                                possibilities. As a reader, I found myself profoundly .
                            </p>
                            <div class="client-info-wrapper d-flex align-items-center justify-content-between">
                                <div class="client-info">
                                    <div class="client-img bg-cover"
                                        style="background-image: url('assets/img/testimonial/03.jpg');">
                                        <div class="icon">
                                            <img class="shape" src="assets/img/testimonial/shape.svg" alt="img">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3>Ronald Richards</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card-items">
                            <p>
                                From the very first chapter, the authors engage readers with inspiring stories and
                                practical insights. Benjamin Zander's experiences as a conductor bring a unique
                                perspective to leadership .
                            </p>
                            <div class="client-info-wrapper d-flex align-items-center justify-content-between">
                                <div class="client-info">
                                    <div class="client-img bg-cover"
                                        style="background-image: url('assets/img/testimonial/04.jpg');">
                                        <div class="icon">
                                            <img class="shape" src="assets/img/testimonial/shape.svg" alt="img">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3>Ronald Richards</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team-section fix section-padding pt-0 margin-bottom-30">
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
@endsection
