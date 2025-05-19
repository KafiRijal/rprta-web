@extends('template/main')

@section('content')
    <div class="hero-section hero-2 fix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-xl-6 col-lg-6 mb-lg-0">
                    <div class="hero-items">
                        <div class="hero-content">
                            <h1 class="wow fadeInUp" data-wow-delay=".5s">
                                Sistem Informasi <br> RPTRA AN NUR
                            </h1>
                            <p class="text-capitalize">
                                RPTRA An Nur (Ruang Publik Terpadu Ramah Anak) adalah ruang terbuka hijau yang dirancang
                                untuk mendukung tumbuh kembang anak dan interaksi sosial warga.
                            </p>
                            <div class="form-clt wow fadeInUp my-2" data-wow-delay=".9s">
                                <a href="{{ url('/tentang') }}" class="theme-btn mb-3">
                                    Tentang Kami <i class="fa-solid fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-xl-6 col-lg-6 text-center hero-image">
                    <img src="{{ asset('assets/img/hero/hero-head.png') }}" alt="Gambar RPTRA" class="img-fluid" />
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
                        style="background-image: url('{{ asset('assets/img/banner/banner-1.jpg') }}');">
                        <div class="book-shape">
                        </div>
                        <div class="banner-book-content">
                            <h2>Koleksi <br> Perpustakaan</h2>
                            <h6>Berisi daftar lengkap koleksi buku yang ada di perpustakaan RPTRA An Nur.</h6>
                            <a href="{{ url('buku') }}" class="theme-btn white-bg">Lihat Sekarang <i
                                    class="fa-solid fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="banner-book-card-items bg-cover"
                        style="background-image: url('{{ asset('assets/img/banner/banner-2.jpg') }}');">
                        <div class="book-shape">
                        </div>
                        <div class="banner-book-content">
                            <h2>Koleksi
                                <br> Tanaman
                            </h2>
                            <h6>Berisi daftar jenis dan manfaat dari tanaman yang ada di taman RPTRA An Nur.
                            </h6>
                            <a href="{{ url('tanaman') }}" class="theme-btn white-bg">Lihat Sekarang <i
                                    class="fa-solid fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="banner-book-card-items bg-cover"
                        style="background-image: url('{{ asset('assets/img/banner/banner-3.jpg') }}');">
                        <div class="book-shape">
                            {{-- <img src="{{ asset('assets/img/banner/banner-3.jpg') }}" alt=""> --}}
                        </div>
                        <div class="banner-book-content">
                            <h2>
                                UP2K
                                <br>
                                Gross Mart
                            </h2>
                            <h6>Berisi daftar produk dan jasa UMKM Binaan Jakpreneur dan UP2K Kelurahan Paseban.
                            </h6>
                            <a href="{{ url('up2k') }}" class="theme-btn white-bg">Lihat Sekarang <i
                                    class="fa-solid fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Buku -->
    <section class="shop-section section-padding fix pt-2 mt-5">
        <div class="container">
            <div class="section-title-area">
                <div class="section-title">
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Koleksi Buku Perpustakaan</h2>
                </div>
                <a href="{{ url('buku') }}" class="theme-btn transparent-btn wow fadeInUp" data-wow-delay=".5s">Lihat
                    Semua <i class="fa-solid fa-arrow-right-long"></i></a>
            </div>
            <div class="swiper book-slider">
                <div class="swiper-wrapper">
                    @if (!empty($buku))
                        @foreach ($buku as $bk)
                            <div class="swiper-slide">
                                <div class="shop-box-items style-2">
                                    <div class="book-thumb center">
                                        <a href="{{ url('detailBuku/' . $bk->slug) }}"><img
                                                style="width: 100%; height:100%;"
                                                src="{{ asset($bk->image ? 'image_buku/' . $bk->image : 'image_buku/book.jpg') }}"
                                                alt="img"></a>
                                        <div class="shop-button">
                                            <a href="{{ url('detailBuku/' . $bk->slug) }}" class="theme-btn"><i
                                                    class=""></i> Lihat
                                                Buku</a>
                                        </div>
                                    </div>
                                    <div class="shop-content">
                                        <h5> {{ $bk->penulis }} </h5>
                                        <h3><a
                                                href="{{ url('detailBuku/' . $bk->slug) }}">{{ Str::limit($bk->judul, 60) }}</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Section Tanaman -->
    <section class="shop-section section-padding fix pt-2 mt-5">
        <div class="container">
            <div class="section-title-area">
                <div class="section-title">
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Koleksi Tanaman</h2>
                </div>
                <a href="{{ url('tanaman') }}" class="theme-btn transparent-btn wow fadeInUp" data-wow-delay=".5s">Lihat
                    Semua <i class="fa-solid fa-arrow-right-long"></i></a>
            </div>
            <div class="swiper book-slider">
                <div class="swiper-wrapper">
                    @if (!empty($tanaman))
                        @foreach ($tanaman as $tm)
                            <div class="swiper-slide">
                                <div class="shop-box-items style-2">
                                    <div class="book-thumb center">
                                        <a href="{{ url('detailTanaman/' . $tm->slug) }}"><img
                                                style="width: 100%; height:100%;"
                                                src="{{ asset($tm->image ? 'image_tanaman/' . $tm->image : 'image_tanaman/plant.jpg') }}"
                                                alt="img"></a>
                                        <div class="shop-button">
                                            <a href="{{ url('detailTanaman/' . $tm->slug) }}" class="theme-btn"><i
                                                    class=""></i> Lihat
                                                Tanaman</a>
                                        </div>
                                    </div>
                                    <div class="shop-content">
                                        <h3><a
                                                href="{{ url('detailTanaman/' . $tm->slug) }}">{{ Str::limit($tm->nama, 60) }}</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Section Up2k -->
    <section class="shop-section section-padding fix pt-2 mt-5">
        <div class="container">
            <div class="section-title-area">
                <div class="section-title">
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Koleksi Up2k</h2>
                </div>
                <a href="{{ url('up2k') }}" class="theme-btn transparent-btn wow fadeInUp" data-wow-delay=".5s">Lihat
                    Semua <i class="fa-solid fa-arrow-right-long"></i></a>
            </div>
            <div class="swiper book-slider">
                <div class="swiper-wrapper">
                    @if (!empty($up2k))
                        @foreach ($up2k as $up)
                            <div class="swiper-slide">
                                <div class="shop-box-items style-2">
                                    <div class="book-thumb center">
                                        <a href="{{ url('detailUp2k/' . $up->slug) }}"><img
                                                style="width: 100%; height:100%;"
                                                src="{{ asset($up->image ? 'image_up2k/' . $up->image : 'image_up2k/up2k.png') }}"
                                                alt="img"></a>
                                        <div class="shop-button">
                                            <a href="{{ url('detailUp2k/' . $up->slug) }}" class="theme-btn"><i
                                                    class=""></i> Lihat Produk</a>
                                        </div>
                                    </div>
                                    <div class="shop-content">
                                        <h5> {{ $up->nama }} </h5>

                                        <h3><a
                                                href="{{ url('detailUp2k/' . $up->slug) }}">{{ Str::limit($up->nama_produk, 60) }}</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section Start -->
    <section class="team-section news-section fix section-padding section-bg">
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
                                <div class="team-box-items"
                                    style="min-height: 320px; display: flex; flex-direction: column; justify-content: space-between;">
                                    <div class="team-image">
                                        <div class="thumb">
                                            <img style="width: 100%; aspect-ratio: 5 / 6; object-fit: cover; object-position: top; border-radius: 5px;"
                                                src="{{ asset($pt->foto ? 'foto_user/' . $pt->foto : 'foto_user/user.jpg') }}"
                                                alt="img">
                                        </div>
                                    </div>

                                    <div class="team-content text-center" style="margin-top: 10px;">
                                        <h6 style="margin: 5px 0 2px 0; font-size: 16px; font-weight: 600;">
                                            <a href="#"
                                                style="text-decoration: none; color: inherit;">{{ $pt->nama }}</a>
                                        </h6>
                                        <span
                                            style="font-size: 11px; white-space: nowrap;">{{ $pt->jabatan->jabatan }}</span>
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
