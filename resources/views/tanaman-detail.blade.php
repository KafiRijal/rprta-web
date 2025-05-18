@extends('template/main')

@section('content')
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="page-heading">
                <h1>Detail Tanaman</h1>
                <div class="page-header">
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                        <li>
                            <a href="{{ url('tanaman') }}">
                                Tanaman
                            </a>
                        </li>
                        <li>
                            <i class="fa-solid fa-chevron-right"></i>
                        </li>
                        <li>
                            Detail Tanaman
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="news-details fix section-padding">
        <div class="container">
            <div class="news-details-area">
                <div class="row g-5">
                    <div class="col-xl-12 col-lg-12">
                        <div class="blog-post-details">
                            <div class="single-blog-post">
                                @if (!empty($tanaman))
                                    @foreach ($tanaman as $bk)
                                        <div class="post-featured-thumb bg-cover"
                                            style="background-image: url('{{ asset($bk->image ? 'image_tanaman/' . $bk->image : 'image_tanaman/plant.jpg') }}');">
                                        </div>

                                        <div class="post-content">
                                            <h3> {{ $bk->nama }} </h3>
                                            <h5> Deskripsi </h5>
                                            <p class="mb-3" style="text-align: justify;">
                                              {{ $bk->deskripsi }}
                                            </p>

                                            <h5> Manfaat </h5>
                                            <p class="mb-3" style="text-align: justify;">
                                              {{ $bk->manfaat }}
                                            </p>

                                             <h5> Fakta Unik </h5>
                                            <p class="mb-3" style="text-align: justify;">
                                              {{ $bk->fakta_unik }}
                                            </p>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
