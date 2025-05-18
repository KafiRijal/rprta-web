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
                @if (!empty($up2k))
                    @foreach ($up2k as $up)
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="shop-details-image">
                                    <div class="tab-content">
                                        <div id="thumb1" class="tab-pane fade show active">
                                            <div class="shop-details-thumb">
                                                {{-- <img src="assets/img/shop-details/01.png" alt="img"> --}}
                                                <img style="width: 100%; height:100%;" 
                                                                src="{{ asset($up->image ? 'image_up2k/' . $up->image : 'image_up2k/up2k.png') }}"
                                                                alt="img">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-tab section-padding pb-0">
                            <ul class="nav mb-5" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a href="#additional" data-bs-toggle="tab" class="nav-link active" aria-selected="false"
                                        tabindex="-1" role="tab">
                                        <h6>Informasi UP2K</h6>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="additional" class="tab-pane fade show active" role="tabpanel">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td class="text-1">Kecamatan</td>
                                                    <td class="text-2">{{ $up->kecamatan }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-1">Kelurahan</td>
                                                    <td class="text-2">{{ $up->kelurahan }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-1">Jenis Produk</td>
                                                    <td class="text-2">{{ $up->kategori->nama }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-1">Nama Produk</td>
                                                    <td class="text-2">{{ $up->nama_produk }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-1">Nomor Telepon</td>
                                                    <td class="text-2">{{ $up->telepon }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-1">Perizinan</td>
                                                    <td class="text-2">{{ $up->perizinan }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-1">Pemasaran</td>
                                                    <td class="text-2">{{ $up->pemasaran }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-1">Nama UP2K</td>
                                                    <td class="text-2">{{ $up->nama }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-1">Keterangan</td>
                                                    <td class="text-2">{{ $up->keterangan }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
@endsection
