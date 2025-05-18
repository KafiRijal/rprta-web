@extends('template/main')

@section('content')
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="page-heading">
                <h1>Detail Buku</h1>
                <div class="page-header">
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                        <li>
                            <a href="{{ url('buku') }}">
                                Buku
                            </a>
                        </li>
                        <li>
                            <i class="fa-solid fa-chevron-right"></i>
                        </li>
                        <li>
                            Detail Buku
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="shop-details-section fix section-padding">
        <div class="container">
            <div class="shop-details-wrapper">
                <div class="row g-4">
                    @if (!empty($buku))
                        @foreach ($buku as $bk)
                            <div class="col-lg-5">
                                <div class="shop-details-image">
                                    <div class="tab-content">
                                        <div id="thumb1" class="tab-pane fade show active">
                                            <div class="shop-details-thumb">
                                                <img style="width: 100%" src="{{ asset($bk->image ? 'image_buku/' . $bk->image : 'image_buku/book.jpg') }}"
                                                    alt="img">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">

                                <div class="shop-details-content">
                                    <div class="title-wrapper mb-3">
                                        <h2>{{ $bk->judul }}</h2>
                                    </div>
                                    <p>
                                       {{ $bk->deskripsi }}
                                    </p>
                                    <div class="category-box">
                                        <div class="category-list justify-content-beetween d-flex">
                                            <ul class="me-5">
                                                <li>
                                                    <span>Judul:</span>  {{ $bk->judul }}
                                                </li>
                                                <li>
                                                    <span>Penulis:</span>  {{ $bk->penulis }}
                                                </li>
                                                <li>
                                                    <span>Penerbit:</span>  {{ $bk->penerbit }}
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <span>Kategori:</span>  {{ $bk->kategori->nama }}
                                                </li>
                                                <li>
                                                    <span>Eksampler:</span> {{ $bk->jumlah }}
                                                </li>
                                            </ul>
                                        </div>
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
