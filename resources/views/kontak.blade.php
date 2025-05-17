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
            <div class="contact-wrapper">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="contact-left-items">
                            <div class="contact-info-area-2">
                                <div class="contact-info-items mb-4">
                                    <div class="icon">
                                        <i class="icon-icon-10"></i>
                                    </div>
                                    <div class="content">
                                        <p>Hubungi Kami</p>
                                        <h3>
                                            <a href="tel:085782754934">085782754934</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="contact-info-items mb-4">
                                    <div class="icon">
                                        <i class="icon-icon-11"></i>
                                    </div>
                                    <div class="content">
                                        <p>Email</p>
                                        <h3>
                                            <a href="mailto:rptraannur530@gmail.com">rptraannur530@gmail.com</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="contact-info-items border-none">
                                    <div class="icon">
                                        <i class="icon-icon-7"></i>
                                    </div>
                                    <div class="content">
                                        <p>Jam Operasional</p>
                                        <h3>
                                            Sen - Min: 07.00 - 17.00
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="video-image">
                                <img src="{{ asset('assets/img/kontak.jpg') }}" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-content">
                            <h2>Berikan Saran & Masukan</h2>
                            <p>
                                Kami menghargai setiap saran dan masukan Anda untuk meningkatkan pelayanan dan fasilitas di
                                RPTRA.
                            </p>
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
    <div class="map-section">
        <div class="map-items">
            <div class="googpemap">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7933.003158757375!2d106.855459!3d-6.19736!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f59c2051a3a3%3A0xc8041e039d0a8356!2sRPTRA%20Annur!5e0!3m2!1sen!2sid!4v1747191829433!5m2!1sen!2sid"
                    style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
@endsection
