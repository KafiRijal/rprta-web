@extends('template/main')

@section('content')
    <!-- Breadcumb Section Start -->
    <div class="breadcrumb-wrapper">
        <div class="book1">
            <img src="assets/img/hero/book1.png" alt="book">
        </div>
        <div class="book2">
            <img src="assets/img/hero/book2.png" alt="book">
        </div>
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

    <!-- Shop Section Start -->
    <section class="shop-section fix section-padding">
        <div class="container">
            <div class="shop-default-wrapper">
                <div class="row g-4">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-lg-12 wow fadeInUp" data-wow-delay=".3s">
                                <div class="shop-list-items">
                                    <div class="shop-list-thumb">
                                        <img src="assets/img/shop-list/01.png" alt="img">
                                    </div>
                                    <div class="shop-list-content">
                                        <h3><a href="{{ url('detailTanaman') }}">Castle In The Sky</a></h3>
                                        <p>
                                            Vestibulum consectetur fringilla tellus, et pulvinar massa tempus nec. Fusce
                                            nibh nibh, consectetur vitae felis quis, sagittis ullamcorper enim. Nullam
                                            maximus vehicula justo, vel vestibulum turpis dictum at. Nam sed laoreet
                                            sem. Aliquam urna massa,
                                        </p>
                                    </div>
                                </div>
                                <div class="shop-list-items">
                                    <div class="shop-list-thumb">
                                        <img src="assets/img/shop-list/02.png" alt="img">
                                    </div>
                                    <div class="shop-list-content">
                                        <h3><a href="shop-details.html">Simple things you to Save to Book</a></h3>
                                        <p>
                                            Vestibulum consectetur fringilla tellus, et pulvinar massa tempus nec. Fusce
                                            nibh nibh, consectetur vitae felis quis, sagittis ullamcorper enim. Nullam
                                            maximus vehicula justo, vel vestibulum turpis dictum at. Nam sed laoreet
                                            sem. Aliquam urna massa,
                                        </p>
                                    </div>
                                </div>
                                <div class="shop-list-items">
                                    <div class="shop-list-thumb">
                                        <img src="assets/img/shop-list/03.png" alt="img">
                                    </div>
                                    <div class="shop-list-content">
                                        <h3><a href="shop-details.html">Flovely And Unicom Erna</a></h3>
                                        <p>
                                            Vestibulum consectetur fringilla tellus, et pulvinar massa tempus nec. Fusce
                                            nibh nibh, consectetur vitae felis quis, sagittis ullamcorper enim. Nullam
                                            maximus vehicula justo, vel vestibulum turpis dictum at. Nam sed laoreet
                                            sem. Aliquam urna massa,
                                        </p>
                                    </div>
                                </div>
                                <div class="shop-list-items">
                                    <div class="shop-list-thumb">
                                        <img src="assets/img/shop-list/04.png" alt="img">
                                    </div>
                                    <div class="shop-list-content">
                                        <h3><a href="shop-details.html">Qple Gpod with Retina Sisplay</a></h3>
                                        <p>
                                            Vestibulum consectetur fringilla tellus, et pulvinar massa tempus nec. Fusce
                                            nibh nibh, consectetur vitae felis quis, sagittis ullamcorper enim. Nullam
                                            maximus vehicula justo, vel vestibulum turpis dictum at. Nam sed laoreet
                                            sem. Aliquam urna massa,
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page-nav-wrap text-center">
                            <ul>
                                <li><a class="previous" href="shop-list.html">Previous</a></li>
                                <li><a class="page-numbers" href="shop-list.html">1</a></li>
                                <li><a class="page-numbers" href="shop-list.html">2</a></li>
                                <li><a class="page-numbers" href="shop-list.html">3</a></li>
                                <li><a class="page-numbers" href="shop-list.html">...</a></li>
                                <li><a class="next" href="shop-list.html">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
