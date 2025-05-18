@extends('template/main')

@section('content')
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="page-heading">
                <h1>Koleksi Tanaman</h1>
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
                            Tanaman
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

                                <form action="{{ url('/tanaman') }}" method="GET" class="search-toggle-box"
                                    id="searchForm">
                                    <div class="input-area search-container">
                                        <input class="search-input" type="text" name="search"
                                            value="{{ request('search') }}" style="color: black"
                                            placeholder="Cari Tanaman di sini">

                                        <input type="hidden" name="kategori" id="kategoriInput"
                                            value="{{ request('kategori') }}">
                                    </div>

                                    <div class="mt-2 col-md-12">
                                        <button type="submit" class="theme-btn rounded-1 w-100">
                                            Cari Tanaman <i class="far fa-search"></i>
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
                                    @if (!empty($tanaman))
                                        @foreach ($tanaman as $bk)
                                            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                                <div class="shop-box-items style-2">
                                                    <div class="book-thumb center">
                                                        <a href="{{ url('detailTanaman/' . $bk->slug) }}"><img
                                                                style="width: 100%; height:100%;"
                                                                src="{{ asset($bk->image ? 'image_tanaman/' . $bk->image : 'image_tanaman/plant.jpg') }}"
                                                                alt="img"> </a>
                                                        <div class="shop-button">
                                                            <a href="{{ url('detailTanaman/' . $bk->slug) }}"
                                                                class="theme-btn"><i class=""></i> Lihat
                                                                Tanaman</a>
                                                        </div>
                                                    </div>
                                                    <div class="shop-content">
                                                        <h3><a
                                                                href="{{ url('detailTanaman/' . $bk->slug) }}">{{ Str::limit($bk->nama, 60) }}</a>
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
                    @if ($tanaman->lastPage() > 1)
                        <ul>
                            @if ($tanaman->onFirstPage())
                                <li><span class="previous">Previous</span></li>
                            @else
                                <li><a class="previous" href="{{ $tanaman->previousPageUrl() }}">Previous</a></li>
                            @endif

                            {{-- Jika current > 3, tampilkan halaman 1 dan titik --}}
                            @if ($tanaman->currentPage() > 3)
                                <li><a class="page-numbers" href="{{ $tanaman->url(1) }}">1</a></li>
                                @if ($tanaman->currentPage() > 4)
                                    <li><span class="page-numbers">...</span></li>
                                @endif
                            @endif

                            {{-- Halaman tengah --}}
                            @for ($i = max(1, $tanaman->currentPage() - 2); $i <= min($tanaman->lastPage(), $tanaman->currentPage() + 2); $i++)
                                <li>
                                    <a class="page-numbers {{ $tanaman->currentPage() == $i ? 'active' : '' }}"
                                        href="{{ $tanaman->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor

                            {{-- Jika current < lastPage - 2, tampilkan titik dan halaman terakhir --}}
                            @if ($tanaman->currentPage() < $tanaman->lastPage() - 2)
                                @if ($tanaman->currentPage() < $tanaman->lastPage() - 3)
                                    <li><span class="page-numbers">...</span></li>
                                @endif
                                <li><a class="page-numbers"
                                        href="{{ $tanaman->url($tanaman->lastPage()) }}">{{ $tanaman->lastPage() }}</a>
                                </li>
                            @endif

                            {{-- Tombol Next --}}
                            @if ($tanaman->hasMorePages())
                                <li><a class="next" href="{{ $tanaman->nextPageUrl() }}">Next</a></li>
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
