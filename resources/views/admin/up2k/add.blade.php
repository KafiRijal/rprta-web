@extends('admin/template_admin/main')

@section('template_styles_admin')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.17.9/tagify.css"
        integrity="sha512-ow+Nd7zEYyHRdsyHsJPcRMAMakb1Efry0Nij9UQ+aKMCJr5zRuzCeWkVDfIpHV1XztmeLnviHCqVPYkRufF47g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content_admin')
    <div class="container-fluid">

        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-semibold m-0">Tambah</h4>
            </div>

            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                    <li class="breadcrumb-item active">Tambah UP2K</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-header">
                        <h5 class="card-title mb-0">Data UP2K</h5>
                    </div>

                    <div class="card-body">
                        <form id="up2kForm" enctype="multipart/form-data">
                            <div class="row">
                                <div class="mb-3 col-md-6 col-lg-6">
                                    <label for="nama_produk" class="form-label">Nama Produk</label>
                                    <input type="text" id="nama_produk" name="nama_produk" class="form-control"
                                        placeholder="Nama Produk">
                                </div>
                                <div class="mb-3 col-md-6 col-lg-6">
                                    <label for="nama" class="form-label">Nama Pemilik/Toko</label>
                                    <input type="text" class="form-control" id="nama" placeholder="Nama">
                                </div>
                                <div class="mb-3 col-md-6 col-lg-6">
                                    <label for="telepon" class="form-label">Telepon</label>
                                    <input type="number" class="form-control" id="telepon" placeholder="Telepon">
                                </div>
                                <div class="mb-3 col-md-6 col-lg-6">
                                    <label for="perizinan" class="form-label">Perizinan</label>
                                    <input type="text" class="form-control" id="perizinan" placeholder="Perizinan">
                                </div>
                                <div class="mb-3 col-md-6 col-lg-6">
                                    <label for="pemasaran" class="form-label">Pemasaran</label>
                                    <input type="text" class="form-control" id="pemasaran" placeholder="Pemasaran">
                                </div>
                                <div class="mb-3 col-md-6 col-lg-6">
                                    <label for="keterangan" class="form-label">Keterangan</label>
                                    <input type="text" class="form-control" id="keterangan" placeholder="Keterangan">
                                </div>
                                <div class="mb-3 col-md-6 col-lg-6">
                                    <label for="kecamatan" class="form-label">Kecamatan</label>
                                    <select class="form-control" name="kecamatan" id="kecamatan">
                                        <option value="">Pilih Kecamatan</option>
                                        <option value="Senen">Senen</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6 col-lg-6">
                                    <label for="kelurahan" class="form-label">Kelurahan</label>
                                    <select class="form-control" name="kelurahan" id="kelurahan">
                                        <option value="">Pilih Kelurahan</option>
                                        <option value="Kwitang">Kwitang</option>
                                        <option value="Kenari">Kenari</option>
                                        <option value="Kramat">Kramat</option>
                                        <option value="Paseban">Paseban</option>
                                        <option value="Bungur">Bungur</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6 col-lg-6">
                                    <label for="kategori" class="form-label">Kategori</label>
                                    <select class="form-control" name="kategori" id="kategori">
                                        <option value="">Pilih Kategori</option>
                                        <option value="3">Makanan</option>
                                        <option value="4">Kerajinan</option>
                                        <option value="5">Minuman</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6 col-lg-6">
                                    <label for="image" class="form-label">Gambar</label>
                                    <input type="file" id="image" name="image" class="form-control">
                                </div>
                            </div>
                            <div class="text-end">
                                <a href="{{ url('admin/up2k') }}"><button class="btn btn-info"
                                        type="button">Kembali</button></a>
                                <button type="submit" class="btn btn-primary btn-submit"> Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('template_scripts_admin')
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />

    <script>
            var input = document.querySelector('#perizinan');
            var Tags = new Tagify(input, {
                originalInputValueFormat: tags => tags.map(tag => tag.value).join(',')
            });

        $(document).ready(function() {
            $('#up2kForm').on('submit', function(e) {
                e.preventDefault();

                let tagsValue = Tags.value.map(tag => tag.value).join(',');
                let formData = new FormData();
                formData.append('kecamatan', $('#kecamatan').val());
                formData.append('kelurahan', $('#kelurahan').val());
                formData.append('alamat', $('#alamat').val());
                formData.append('kategori', $('#kategori').val());
                formData.append('nama_produk', $('#nama_produk').val());
                formData.append('telepon', $('#telepon').val());
                formData.append('pemasaran', $('#pemasaran').val());
                formData.append('nama', $('#nama').val());
                formData.append('keterangan', $('#keterangan').val());
                formData.append('perizinan', tagsValue);

                const imageInput = $('#image')[0].files[0];
                if (imageInput) {
                    formData.append('image', imageInput);
                }

                $.ajax({
                    url: `{{ url('admin/up2k/_tambah_up2k') }}`,
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    },
                    beforeSend: function() {
                        $(".overlay").show();
                        $(".loader").show();
                        $("#btn-login").hide()
                        $("#submit").prop("disabled", true);
                    },
                    success: function(response) {
                        $(".overlay").hide();
                        $(".loader").hide();
                        $("#submit").prop("disabled", false);
                        $("#btn-login").show();

                        if (response.status === 'success') {
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil',
                                text: response.message,
                                confirmButtonText: 'OK',
                                customClass: {
                                    confirmButton: 'btn btn-primary',
                                },
                            }).then(() => {
                                window.location.href = `{{ url('admin/up2k') }}`;
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Data Gagal Terkirim',
                                text: response.message,
                                confirmButtonText: 'OK',
                                customClass: {
                                    confirmButton: 'btn btn-danger',
                                },
                            })
                        }
                    },
                    error: function(xhr) {
                        $(".overlay").hide();
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
                                title: 'Data Gagal Terkirim',
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

        });
    </script>
@endsection
