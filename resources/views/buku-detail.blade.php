@extends('template/main')

@section('content')
    <div class="breadcrumb-wrapper">
        <div class="book1">
            <img src="assets/img/hero/book1.png" alt="book">
        </div>
        <div class="book2">
            <img src="assets/img/hero/book2.png" alt="book">
        </div>
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
                    <div class="col-lg-5">
                        <div class="shop-details-image">
                            <div class="tab-content">
                                <div id="thumb1" class="tab-pane fade show active">
                                    <div class="shop-details-thumb">
                                        <img src="assets/img/shop-details/01.png" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="shop-details-content">
                            <div class="title-wrapper mb-3">
                                <h2>Castle The Sky</h2>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pulvinar, tortor quis
                                varius pretium est felis scelerisque nulla, vitae placerat justo nunc a massa. Aenean
                                nec montes vestibulum urna vel imperdiet ipsum. Orci varius natoque penatibus et magnis
                                dis ridicul parturient montes.
                            </p>
                            <div class="category-box">
                                <div class="category-list justify-content-beetween d-flex">
                                    <ul class="me-5">
                                        <li>
                                            <span>Judul:</span> FTC1020B65D
                                        </li>
                                        <li>
                                            <span>Penulis:</span> Kids Toys
                                        </li>
                                        <li>
                                            <span>Penerbit:</span> Design Low Book
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <span>Kategori:</span> Hardcover
                                        </li>
                                        <li>
                                            <span>Eksampler:</span> 330
                                        </li>
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
