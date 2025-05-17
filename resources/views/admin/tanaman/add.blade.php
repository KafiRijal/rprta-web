@extends('admin/template_admin/main')

@section('content_admin')
    <div class="container-fluid">

        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-semibold m-0">Tambah</h4>
            </div>

            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                    <li class="breadcrumb-item active">Tambah Tanaman</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-header">
                        <h5 class="card-title mb-0">Data Tanaman</h5>
                    </div>

                    <div class="card-body">
                        <form id="tanamanForm" enctype="multipart/form-data">
                            <div class="row">
                                <div class="mb-3 col-md-6 col-lg-6">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" id="nama" name="nama" class="form-control"
                                        placeholder="Nama">
                                </div>
                                <div class="mb-3 col-md-6 col-lg-6">
                                    <label for="image" class="form-label">Gambar</label>
                                    <input type="file" id="image" name="image" class="form-control">
                                </div>
                                <div class="mb-3 col-md-12 col-lg-12">
                                    <label for="editor" class="form-label">Deskripsi</label>
                                    <textarea type="text" class="form-control" id="editor"> </textarea>
                                </div>
                                <div class="mb-3 col-md-12 col-lg-12">
                                    <label for="editor1" class="form-label">Manfaat</label>
                                    <textarea type="text" class="form-control" id="editor1"> </textarea>
                                </div>
                                <div class="mb-3 col-md-12 col-lg-12">
                                    <label for="editor2" class="form-label">Fakta Unik</label>
                                    <textarea type="text" class="form-control" id="editor2"> </textarea>
                                </div>
                            </div>
                            <div class="text-end">
                                <a href="{{ url('admin/tanaman') }}"><button class="btn btn-info"
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
    <script>
        $(document).ready(function() {
            $('#tanamanForm').on('submit', function(e) {
                e.preventDefault();

                let formData = new FormData();
                formData.append('nama', $('#nama').val());
                formData.append('deskripsi', $('#editor').summernote('code'))
                formData.append('manfaat', $('#editor1').summernote('code'))
                formData.append('fakta_unik', $('#editor2').summernote('code'))
                const imageInput = $('#image')[0].files[0];
                if (imageInput) {
                    formData.append('image', imageInput);
                }

                $.ajax({
                    url: `{{ url('admin/tanaman/_tambah_tanaman') }}`,
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
                                window.location.href = `{{ url('admin/tanaman') }}`;
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
