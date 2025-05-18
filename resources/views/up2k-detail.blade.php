@extends('template/main')

@section('content')
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="page-heading">
                <h1>Detail UP2K</h1>
                <div class="page-header">
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                        <li>
                            <a href="{{ url('up2k') }}">
                                UP2K
                            </a>
                        </li>
                        <li>
                            <i class="fa-solid fa-chevron-right"></i>
                        </li>
                        <li>
                            Detail UP2K
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
                    <div class="col-lg-12">
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
                </div>
                <div class="single-tab section-padding pb-0">
                    <ul class="nav mb-5" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="#description" data-bs-toggle="tab" class="nav-link ps-0 active" aria-selected="true"
                                role="tab">
                                <h6>Deskripsi UP2K</h6>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#additional" data-bs-toggle="tab" class="nav-link" aria-selected="false" tabindex="-1"
                                role="tab">
                                <h6>Informasi UP2K</h6>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="description" class="tab-pane fade show active" role="tabpanel">
                            <div class="description-items">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis erat
                                    interdum, tempor turpis in, sodales ex. In hac habitasse platea dictumst. Etiam
                                    accumsan scelerisque urna, a lobortis velit vehicula ut. Maecenas porttitor dolor a
                                    velit aliquet, et euismod nibh vulputate. Duis nunc velit, lacinia vel risus in,
                                    finibus sodales augue. Aliquam lacinia imperdiet dictum. Etiam tempus finibus
                                    tortor, quis placerat arcu tristique in. Sed vitae dui a diam luctus maximus.
                                    Quisque nec felis dapibus, dapibus enim vitae, vestibulum libero. Aliquam erat
                                    volutpat. Phasellus luctus rhoncus justo. Duis a nulla sit amet justo aliquam
                                    ullamcorper. Phasellus nulla lorem, pretium et libero in, porta auctor dui. In a
                                    ornare purus, et efficitur elit. Etiam consectetur sit amet quam ut tincidunt. Donec
                                    gravida ultricies tellus ac pharetra.
                                    Praesent a pulvinar purus. Proin sollicitudin leo eget mi sagittis aliquam. Donec
                                    sollicitudin ex ac lobortis mollis. Sed eget libero nec mi
                                </p>
                            </div>
                        </div>
                        <div id="additional" class="tab-pane fade" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td class="text-1">Kecamatan</td>
                                            <td class="text-2">Senen</td>
                                        </tr>
                                        <tr>
                                            <td class="text-1">Kelurahan</td>
                                            <td class="text-2">Jl. Kramat Lontar IX No. J26 RT 001 RW 001</td>
                                        </tr>
                                        <tr>
                                            <td class="text-1">Jenis Produk</td>
                                            <td class="text-2">Makanan</td>
                                        </tr>
                                        <tr>
                                            <td class="text-1">Nama Produk</td>
                                            <td class="text-2">Chatering Fera</td>
                                        </tr>
                                        <tr>
                                            <td class="text-1">Nomor Telepon</td>
                                            <td class="text-2">085780067855</td>
                                        </tr>
                                        <tr>
                                            <td class="text-1">Perizinan</td>
                                            <td class="text-2">Halal</td>
                                        </tr>
                                        <tr>
                                            <td class="text-1">Pemasaran</td>
                                            <td class="text-2">Offline</td>
                                        </tr>
                                        <tr>
                                            <td class="text-1">Nama UP2K</td>
                                            <td class="text-2">Fera</td>
                                        </tr>
                                        <tr>
                                            <td class="text-1">Keterangan</td>
                                            <td class="text-2">RW 01</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
