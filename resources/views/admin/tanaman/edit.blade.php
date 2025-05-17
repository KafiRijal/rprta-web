@extends('admin/template_admin/main')

@section('template_styles_admin')
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
                    <li class="breadcrumb-item active">Ubah Tanaman</li>
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
                            <input type="hidden" name="id" id="id" value="{{ $tanaman->id }}">
                            <div class="row">
                                <div class="mb-3 col-md-6 col-lg-6">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" id="nama" name="nama" class="form-control"
                                        placeholder="Nama" value="{{ $tanaman->nama }}">
                                </div>
                                <div class="mb-3 col-md-6 col-lg-6">
                                    <label for="image" class="form-label">Gambar</label>
                                    <div class="input-group">
                                        <input type="file" id="image" name="image" class="form-control">
                                        <button type="button" class="btn btn-info" id="preview-btn">Preview</button>
                                    </div>
                                </div>

                                <div class="mb-3 col-md-12 col-lg-12">
                                    <label for="editor" class="form-label">Deskripsi</label>
                                    <textarea type="text" class="form-control" id="editor"> {{ $tanaman->deskripsi }} </textarea>
                                </div>

                                <div class="mb-3 col-md-12 col-lg-12">
                                    <label for="editor1" class="form-label">Manfaat</label>
                                    <textarea type="text" class="form-control" id="editor1"> {{ $tanaman->manfaat }} </textarea>
                                </div>

                                <div class="mb-3 col-md-12 col-lg-12">
                                    <label for="editor2" class="form-label">Fakta Unik</label>
                                    <textarea type="text" class="form-control" id="editor2"> {{ $tanaman->fakta_unik }} </textarea>
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

    <div class="modal fade" id="previewModal" tabindex="-1" aria-labelledby="previewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="previewModalLabel">Gambar Tanaman</h5>
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
    <script>
        $(document).ready(function() {
            $('#tanamanForm').on('submit', function(e) {
                e.preventDefault();

                let imageFile = $('#image')[0].files[0];
                let formData = new FormData();
                formData.append('id', $('#id').val());
                formData.append('nama', $('#nama').val());
                formData.append('deskripsi', $('#editor').summernote('code'))
                formData.append('manfaat', $('#editor1').summernote('code'))
                formData.append('fakta_unik', $('#editor2').summernote('code'))
                formData.append('deskripsi', $('#editor').summernote('code'))
                formData.append('image', imageFile ? imageFile : '');

                $.ajax({
                    url: `{{ url('admin/tanaman/_edit_tanaman') }}`,
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

            $('#preview-btn').click(function() {
                var file = "{{ $tanaman->image }}";
                var path = "{{ asset('image_tanaman/') }}/";

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
