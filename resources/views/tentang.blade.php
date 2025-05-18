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
                    @if (!empty($petugas))
                        @foreach ($petugas as $pt)
                            <div class="swiper-slide">
                                <div class="team-box-items">
                                    <div class="team-image">
                                        <div class="thumb">
                                            <img
                                                style="width: 100%; height:100%;"
                                                src="{{ asset($pt->foto ? 'foto_user/' . $pt->foto : 'foto_user/user.jpg') }}"
                                                alt="img">
                                        </div>
                                    </div>
                                    <div class="team-content text-center">
                                        <h6><a href="#">{{ $pt->nama }}</a></h6>
                                        <span style="font-size: 12px">{{ $pt->jabatan->jabatan }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
