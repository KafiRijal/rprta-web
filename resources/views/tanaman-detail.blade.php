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
                                <div class="post-featured-thumb bg-cover"
                                    style="background-image: url('assets/img/news/post-4.jpg');"></div>
                                <div class="post-content">
                                    <h3>Eu parturient Dictumst Frames quam Temper </h3>
                                    <p class="mb-3">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris efficitur et
                                        ipsum ut volutpat. Morbi a mollis felis. Nam consectetur lectus vel lorem
                                        facilisis, quis viverra purus pharetra. Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Fusce dui lacus, tempor a metus vel, varius rhoncus nunc.
                                        Suspendisse luctus feugiat dictum. Curabitur ipsum velit, viverra in pretium
                                        eget, molestie maximus magna. Aliquam elementum vel turpis non bibendum. Cras in
                                        consequat neque.
                                    </p>
                                    <p class="mb-3">
                                        Nunc tincidunt cursus lectus ac semper. Aenean ullamcorper quis arcu molestie
                                        consequat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut nec
                                        lobortis elit, eu ultrices justo. Fusce auctor erat est, non fringilla nibh
                                        tempus quis. Aenean dignissim turpis ut interdum interdum. Nam molestie sed ex
                                        non tempus. Donec sodales aliquam orci non imperdiet. Quisque tempus dolor id
                                        nisi blandit tempor ut id lacus. Aliquam mattis tempor posuere. Sed ut
                                        sollicitudin velit,
                                    </p>
                                    <p class="mb-3">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris efficitur et
                                        ipsum ut volutpat. Morbi a mollis felis. Nam consectetur lectus vel lorem
                                        facilisis, quis viverra purus pharetra. Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Fusce dui lacus, tempor a metus vel, varius rhoncus nunc.
                                        Suspendisse luctus feugiat dictum. Curabitur ipsum velit, viverra in pretium
                                        eget, molestie maximus magna. Aliquam elementum vel turpis non bibendum. Cras in
                                        consequat neque.
                                    </p>

                                    <p class="mb-3">
                                        Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea dolor commodo consequat. Duis
                                        aute irure and dolor in reprehenderit.Consectetur adipisicing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore of magna aliqua. Ut enim ad minim
                                        veniam, made of owl the quis nostrud exercitation ullamco laboris nisi ut
                                        aliquip ex ea dolor commodo consequat. Duis aute irure and dolor in
                                        reprehenderit.
                                    </p>

                                    <p>
                                        Nunc tincidunt cursus lectus ac semper. Aenean ullamcorper quis arcu molestie
                                        consequat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut nec
                                        lobortis elit, eu ultrices justo. Fusce auctor erat est, non fringilla nibh
                                        tempus quis. Aenean dignissim turpis ut interdum interdum. Nam molestie sed ex
                                        non tempus. Donec sodales aliquam orci non imperdiet. Quisque tempus dolor id
                                        nisi blandit tempor ut id lacus. Aliquam mattis tempor posuere.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
