<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Pantau Tumbuh</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets_portal/img/favicons/apple-icon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ asset('assets_portal/img/favicons/android-chrome-192x192.png') }}">

    <link href="{{ asset('assets_admin/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />
    <link href="{{ asset('assets_admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets_admin/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/login.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

</head>

<body class="login-wrapper">
    <div class="card card-login">
        <div class="text-center mb-4">
            <a href="{{ url('/') }}"
                class="header-logo d-flex align-items-center justify-content-center">
                <img src="{{ asset('assets/img/logo/rptra.png') }}" alt="logo-img" style="height: 50px;">
                <span class="logo-text ms-2 fw-bold" style="color:#000">RPTRA AN NUR</span>
            </a>
        </div>

        <form id="loginForm">
            <div class="form-group mb-3">
                <label for="email" class="form-label">Email</label>
                <input class="form-control" type="email" id="email" required placeholder="Masukan Email">
            </div>

            <div class="form-group mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                    <input class="form-control" type="password" id="password" name="password"
                        placeholder="Masukan Password">
                    <span class="input-group-text cursor-pointer" id="togglePasswordIcon1">
                        <i id="icon-pass1" class="fas fa-eye"></i>
                    </span>
                </div>
            </div>

            <div class="d-grid">
                <button class="btn btn-primary" id="submit" type="submit">
                    <div id="loader" class="loader" style="display:none;"></div>
                    <span id="btn-login">Log In</span>
                </button>
            </div>
        </form>
    </div>

    <script src="{{ asset('assets_admin/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets_admin/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets_admin/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets_admin/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets_admin/libs/waypoints/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets_admin/libs/jquery.counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets_admin/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets_admin/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="https://apexcharts.com/samples/assets/stock-prices.js"></script>
    <script src="{{ asset('assets_admin/js/pages/ecommerce-dashboard.init.js') }}"></script>
    <script src="{{ asset('assets_admin/js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('assets_admin/libs/flatpickr/flatpickr.min.js') }}"></script>

    <script>
        $('#loginForm').on('submit', function(e) {
            e.preventDefault();

            let formData = {
                email: $('#email').val(),
                password: $('#password').val(),
            };

            $.ajax({
                url: `{{ url('auth/_login') }}`,
                type: 'POST',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
                beforeSend: function() {
                    $(".loader").show();
                    $("#btn-login").hide()
                    $("#submit").prop("disabled", true);
                },
                success: function(response) {
                    $(".loader").hide();
                    $("#submit").prop("disabled", false);
                    $("#btn-login").show();

                    if (response.status === 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Login Berhasil',
                            text: response.message,
                            confirmButtonText: 'OK',
                            customClass: {
                                confirmButton: 'btn btn-primary',
                            },
                        }).then(() => {
                            window.location.href = `{{ url('admin/dashboard') }}`;
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Login Gagal',
                            text: response.message,
                            confirmButtonText: 'OK',
                            customClass: {
                                confirmButton: 'btn btn-danger',
                            },
                        })
                    }
                },
                error: function(xhr) {
                    $(".loader").hide();
                    $("#submit").prop("disabled", false);
                    $("#btn-login").show();

                    if (xhr.status === 422) {
                        let errors = xhr.responseJSON.errors;
                        let errorMessage = '';

                        $.each(errors, function(key, value) {
                            errorMessage += `<p>${value[0]}</p>`;
                        });

                        Swal.fire({
                            icon: 'error',
                            title: 'Login Gagal',
                            html: errorMessage,
                            confirmButtonText: 'OK',
                            customClass: {
                                confirmButton: 'btn btn-danger',
                            },
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Terjadi kesalahan, silahkan coba lagi.',
                            confirmButtonText: 'OK',
                            customClass: {
                                confirmButton: 'btn btn-danger',
                            },
                        });
                    }
                },
            });
        });

        $(document).ready(function() {
            $("#togglePasswordIcon1").on("click", function() {
                let passwordInput = $("#password");
                let icon = $("#icon-pass1");

                if (passwordInput.attr("type") === "password") {
                    passwordInput.attr("type", "text");
                    icon.removeClass("fas fa-eye").addClass(
                        "fas fa-eye-slash");
                } else {
                    passwordInput.attr("type", "password");
                    icon.removeClass("fas fa-eye-slash").addClass(
                        "fas fa-eye");
                }
            });
        });
    </script>

</body>

</html>
