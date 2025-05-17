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
                <h4 class="fs-18 fw-semibold m-0">Ubah</h4>
            </div>

            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                    <li class="breadcrumb-item active">Ubah UP2K</li>
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
                            <input type="hidden" name="id" id="id" value="{{ $up2k->id }}">
                            <div class="row">
                                <div class="mb-3 col-md-6 col-lg-6">
                                    <label for="nama_produk" class="form-label">Nama Produk</label>
                                    <input type="text" id="nama_produk" name="nama_produk" class="form-control"
                                        placeholder="Nama Produk" value="{{ $up2k->nama_produk }}">
                                </div>
                                <div class="mb-3 col-md-6 col-lg-6">
                                    <label for="nama" class="form-label">Nama Pemilik/Toko</label>
                                    <input type="text" class="form-control" id="nama" placeholder="Nama"
                                        value="{{ $up2k->nama }}">
                                </div>
                                <div class="mb-3 col-md-6 col-lg-6">
                                    <label for="telepon" class="form-label">Telepon</label>
                                    <input type="number" class="form-control" id="telepon" placeholder="Telepon"
                                        value="{{ $up2k->telepon }}">
                                </div>
                                <div class="mb-3 col-md-6 col-lg-6">
                                    <label for="perizinan" class="form-label">Perizinan</label>
                                    <input type="text" class="form-control" id="perizinan" placeholder="Perizinan"
                                        value="{{ $up2k->perizinan }}">
                                </div>
                                <div class="mb-3 col-md-6 col-lg-6">
                                    <label for="pemasaran" class="form-label">Pemasaran</label>
                                    <input type="text" class="form-control" id="pemasaran" placeholder="Pemasaran"
                                        value="{{ $up2k->pemasaran }}">
                                </div>
                                <div class="mb-3 col-md-6 col-lg-6">
                                    <label for="keterangan" class="form-label">Keterangan</label>
                                    <input type="text" class="form-control" id="keterangan" placeholder="Keterangan"
                                        value="{{ $up2k->keterangan }}">
                                </div>
                                <div class="mb-3 col-md-6 col-lg-6">
                                    <label for="kecamatan" class="form-label">Kecamatan</label>
                                    <select class="form-control" name="kecamatan" id="kecamatan">
                                        <option value="">Pilih Kecamatan</option>
                                        <option value="Senen" {{ $up2k->kecamatan == 'Senen' ? 'selected' : '' }}>Senen
                                        </option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6 col-lg-6">
                                    <label for="kelurahan" class="form-label">Kelurahan</label>
                                    <select class="form-control" name="kelurahan" id="kelurahan">
                                        <option value="">Pilih Kelurahan</option>
                                        <option value="Kwitang" {{ $up2k->kelurahan == 'Kwiting' ? 'selected' : '' }}>
                                            Kwitang</option>
                                        <option value="Kenari" {{ $up2k->kelurahan == 'Kenari' ? 'selected' : '' }}>Kenari
                                        </option>
                                        <option value="Kramat" {{ $up2k->kelurahan == 'Kramat' ? 'selected' : '' }}>Kramat
                                        </option>
                                        <option value="Paseban" {{ $up2k->kelurahan == 'Paseban' ? 'selected' : '' }}>
                                            Paseban</option>
                                        <option value="Bungur" {{ $up2k->kelurahan == 'Bungur' ? 'selected' : '' }}>Bungur
                                        </option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6 col-lg-6">
                                    <label for="kategori" class="form-label">Kategori</label>
                                    <select class="form-control" name="kategori" id="kategori">
                                        <option value="">Pilih Kategori</option>
                                        <option value="3" {{ $up2k->id_kategori == 3 ? 'selected' : '' }}>Makanan
                                        </option>
                                        <option value="4" {{ $up2k->id_kategori == 4 ? 'selected' : '' }}>Kerajinan
                                        </option>
                                        <option value="5" {{ $up2k->id_kategori == 5 ? 'selected' : '' }}>Minuman
                                        </option>
                                    </select>
                                </div>

                                <div class="mb-3 col-md-6 col-lg-6">
                                    <label for="image" class="form-label">Gambar</label>
                                    <div class="input-group">
                                        <input type="file" id="image" name="image" class="form-control">
                                        <button type="button" class="btn btn-info" id="preview-btn">Preview</button>
                                    </div>
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

    <div class="modal fade" id="previewModal" tabindex="-1" aria-labelledby="previewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="previewModalLabel">Gambar Up2k</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="preview-content"></div>
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
        $(document).ready(function() {
            var input = document.querySelector('#perizinan');
            var Tags = new Tagify(input, {
                originalInputValueFormat: tags => tags.map(tag => tag.value).join(',')
            });

            $('#up2kForm').on('submit', function(e) {
                e.preventDefault();

                let tagsValue = Tags.value.map(tag => tag.value).join(',');
                let imageFile = $('#image')[0].files[0];
                let formData = new FormData();
                formData.append('id', $('#id').val());
                formData.append('kecamatan', $('#kecamatan').val());
                formData.append('kelurahan', $('#kelurahan').val());
                formData.append('alamat', $('#alamat').val());
                formData.append('kategori', $('#kategori').val());
                formData.append('nama_produk', $('#nama_produk').val());
                formData.append('telepon', $('#telepon').val());
                formData.append('pemasaran', $('#pemasaran').val());
                formData.append('nama', $('#nama').val());
                formData.append('keterangan', $('#keterangan').val());
                formData.append('image', imageFile ? imageFile : '');
                formData.append('perizinan', tagsValue);

                $.ajax({
                    url: `{{ url('admin/up2k/_edit_up2k') }}`,
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

            $('#preview-btn').click(function() {
                var file = "{{ $up2k->image }}";
                var path = "{{ asset('image_up2k/') }}/";

                console.log(path + file);

                if (file) {
                    var fileExtension = file.split('.').pop().toLowerCase();

                    var previewContent = $('#preview-content');

                    if (fileExtension === 'jpg' || fileExtension === 'jpeg' || fileExtension === 'png') {
                        previewContent.html('<img src="' + path + file + '" class="img-fluid" />');
                    } else if (fileExtension === 'pdf') {
                        previewContent.html('<embed src="' + path + file +
                            '" type="application/pdf" width="100%" height="400px" />');
                    } else {
                        previewContent.html('<p>Preview tidak tersedia untuk file ini.</p>');
                    }

                    $('#previewModal').modal('show');
                } else {
                    alert('Gambar tidak ditemukan.');
                }
            });
        });
    </script>
@endsection
