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

                                {{-- FORM mulai --}}
                                <form action="{{ url('/buku') }}" method="GET" class="search-toggle-box" id="searchForm">
                                    <div class="input-area search-container">
                                        <input class="search-input" type="text" name="search"
                                            value="{{ request('search') }}" style="color: black" placeholder="Cari di sini">

                                        {{-- Hidden input untuk kategori --}}
                                        <input type="hidden" name="kategori" id="kategoriInput"
                                            value="{{ request('kategori') }}">
                                    </div>

                                    <div class="wid-title" style="margin-top: 20px;">
                                        <h5>Kategori</h5>
                                    </div>
                                    <div class="categories-list">
                                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button type="button"
                                                    class="nav-link {{ request('kategori') == 1 ? 'active' : '' }}"
                                                    data-kategori="1">Anak</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button type="button"
                                                    class="nav-link {{ request('kategori') == 2 ? 'active' : '' }}"
                                                    data-kategori="2">Dewasa</button>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="mt-2 col-md-12">
                                        <button type="submit" class="theme-btn rounded-1 w-100">
                                            Cari Buku <i class="far fa-search"></i>
                                        </button>
                                    </div>

                                </form>
                            </div>


                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 order-1 order-md-2">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-arts" role="tabpanel"
                                aria-labelledby="pills-arts-tab" tabindex="0">
                                <div class="row">
                                    @if (!empty($buku))
                                        @foreach ($buku as $bk)
                                            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                                <div class="shop-box-items style-2">
                                                    <div class="book-thumb center">
                                                        <a href="{{ url('detailBuku/' . $bk->slug) }}"><img style="width: 100%; height:100%;" 
                                                                src="{{ asset($bk->image ? 'image_buku/' . $bk->image : 'image_buku/book.jpg') }}"
                                                                alt="img"> </a>
                                                                <h5  class="mt-2 mb-0">{{ $bk->kategori->nama }}</h5>
                                                        <div class="shop-button">
                                                            <a href="{{ url('detailBuku/' . $bk->slug) }}"
                                                                class="theme-btn"><i class=""></i> Lihat
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
                    </div>
                </div>

                <div class="page-nav-wrap text-center">
                    @if ($buku->lastPage() > 1)
                        <ul>
                            @if ($buku->onFirstPage())
                                <li><span class="previous">Previous</span></li>
                            @else
                                <li><a class="previous" href="{{ $buku->previousPageUrl() }}">Previous</a></li>
                            @endif

                            {{-- Jika current > 3, tampilkan halaman 1 dan titik --}}
                            @if ($buku->currentPage() > 3)
                                <li><a class="page-numbers" href="{{ $buku->url(1) }}">1</a></li>
                                @if ($buku->currentPage() > 4)
                                    <li><span class="page-numbers">...</span></li>
                                @endif
                            @endif

                            {{-- Halaman tengah --}}
                            @for ($i = max(1, $buku->currentPage() - 2); $i <= min($buku->lastPage(), $buku->currentPage() + 2); $i++)
                                <li>
                                    <a class="page-numbers {{ $buku->currentPage() == $i ? 'active' : '' }}"
                                        href="{{ $buku->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor

                            {{-- Jika current < lastPage - 2, tampilkan titik dan halaman terakhir --}}
                            @if ($buku->currentPage() < $buku->lastPage() - 2)
                                @if ($buku->currentPage() < $buku->lastPage() - 3)
                                    <li><span class="page-numbers">...</span></li>
                                @endif
                                <li><a class="page-numbers"
                                        href="{{ $buku->url($buku->lastPage()) }}">{{ $buku->lastPage() }}</a></li>
                            @endif

                            {{-- Tombol Next --}}
                            @if ($buku->hasMorePages())
                                <li><a class="next" href="{{ $buku->nextPageUrl() }}">Next</a></li>
                            @else
                                <li><span class="next">Next</span></li>
                            @endif
                        </ul>
                    @endif
                </div>

            </div>
        </div>
    </section>

    <script>
        document.querySelectorAll('button[data-kategori]').forEach(function(btn) {
            btn.addEventListener('click', function() {
                document.getElementById('kategoriInput').value = this.getAttribute('data-kategori');

                document.querySelectorAll('button[data-kategori]').forEach(function(b) {
                    b.classList.remove('active');
                });
                this.classList.add('active');
            });
        });
    </script>

@endsection
