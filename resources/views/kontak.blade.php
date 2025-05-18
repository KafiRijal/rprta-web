@extends('template/main')

@section('content')
    <!-- Breadcumb Section Start -->
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="page-heading">
                <h1>Kontak Kami</h1>
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
                            Kontak
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section Start -->
    <section class="contact-section fix section-padding">
        <div class="container">
            <div class="contact-wrapper justify-content-center">
                <div class="row g-3 align-items-center p-4 rounded-4 shadow-sm bg-white justify-content-center text-center">
                    <h2 class="fw-bold">Berikan Saran & Masukan</h2>
                    <p>Kami menghargai setiap saran dan masukan Anda untuk meningkatkan pelayanan dan fasilitas di RPTRA.
                    </p>
                    <div class="col-12 d-flex justify-content-center">
                        <img src="{{ asset('assets/img/kontak.jpg') }}" alt="img" class="img-fluid rounded-4"
                            style="max-width: 70%;">
                    </div>
                </div>
                <div class="row g-3 align-items-center p-4 rounded-4 shadow-sm bg-white justify-content-center">
                    <div class="col-lg-8">
                        <div class="contact-content">
                            <form action="contact.php" id="contact-form" method="POST" class="contact-form-items">
                                <div class="row g-4">
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="form-clt">
                                            <span>Nama</span>
                                            <input type="text" name="name" id="name" placeholder="Nama Kamu">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                        <div class="form-clt">
                                            <span>Email</span>
                                            <input type="text" name="email" id="email123" placeholder="Email Kamu">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 wow fadeInUp" data-wow-delay=".7s">
                                        <div class="form-clt">
                                            <span>Saran & Masukan</span>
                                            <textarea name="message" id="message" placeholder="Saran & Masukan Kamu"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 wow fadeInUp" data-wow-delay=".9s">
                                        <button type="submit" class="theme-btn">
                                            Kirim <i class="fa-solid fa-arrow-right-long"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--<< Map Section Start >>-->
    <div class="map-section p-4 rounded-4 shadow-sm bg-white">
        <div class="map-items">
            <div class="googpemap overflow-hidden rounded-4 shadow-sm">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7933.003158757375!2d106.855459!3d-6.19736!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f59c2051a3a3%3A0xc8041e039d0a8356!2sRPTRA%20Annur!5e0!3m2!1sen!2sid!4v1747191829433!5m2!1sen!2sid"
                    style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
@endsection
