@extends('admin/template_admin/main')

@section('template_styles_admin')
@endsection

@section('content_admin')
    <div class="container-fluid">

        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-semibold m-0">Buku</h4>
            </div>

            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                    <li class="breadcrumb-item active">Daftar Buku</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title mb-0">Daftar Buku</h5>
                        <div class="button">
                            <a href="{{ url('admin/buku/_export') }}" class="me-2"><button type="submit"
                                    class="btn btn-info">Export</button></a>
                            <a href="{{ url('admin/buku/tambah_buku') }}"><button type="submit"
                                    class="btn btn-primary">Tambah</button></a>
                        </div>
                    </div>

                    <div class="card-body">
                        <table id="bukuTable" class="table table-bordered table-bordered dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Penulis</th>
                                    <th>Kategori</th>
                                    <th>Jumlah</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('template_scripts_admin')
    <script>
        $(document).ready(function() {
            $('#bukuTable').DataTable({
                processing: true,
                serverSide: false,
                ajax: {
                    url: "{{ url('admin/buku/_list_buku') }}",
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    }
                },
                columns: [{
                        data: null,
                        className: 'text-center',
                        orderable: true,
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    }, {
                        data: 'judul',
                        render: function(data, type, row) {
                            if (data.length > 16) {
                                return data.substring(0, 16) + '...';
                            }
                            return data;
                        }
                    },
                    {
                        data: 'penulis',
                        render: function(data, type, row) {
                            if (data.length > 16) {
                                return data.substring(0, 16) + '...';
                            }
                            return data;
                        }
                    },
                    {
                        data: 'kategori',
                    },
                    {
                        data: 'jumlah',
                    },
                    {
                        data: "id",
                        className: "text-center",
                        orderable: false,
                        render: function(data, type, row, meta) {
                            var deleteLink =
                                `<a href="#" class="ms-2 btn btn-danger btn-sm delete-btn" data-id="${data}"><i class="fas fa-trash"></i></a>`;
                            var editLink =
                                `<a href="{{ url('admin/buku/edit_buku') }}/${data}" class="ms-2 btn btn-primary btn-sm edit-btn"><i class="far fa-edit"></i></a>`;
                            return editLink + ' ' + deleteLink;
                        }
                    }
                ]
            });
        });

        $('#bukuTable').on('click', '.delete-btn', function(e) {
            e.preventDefault();
            var Id = $(this).data('id');
            Swal.fire({
                title: 'Anda yakin?',
                text: "Data ini akan dihapus secara permanen!",
                icon: 'warning',
                showCancelButton: true,
                customClass: {
                    confirmButton: 'btn btn-primary',
                    cancelButton: 'btn btn-info'
                },
                confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: `{{ url('admin/buku/_delete_buku/') }}/${Id}`,
                        type: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            Swal.fire({
                                title: 'Berhasil!',
                                text: 'Data berhasil dihapus.',
                                icon: 'success',
                                confirmButtonText: 'OK',
                                customClass: {
                                    confirmButton: 'btn btn-primary',
                                },
                            });
                            $('#bukuTable').DataTable().ajax.reload();
                        },
                        error: function(error) {
                            Swal.fire({
                                title: 'Gagal!',
                                text: 'Data gagal dihapus',
                                icon: 'error',
                                confirmButtonText: 'OK',
                                customClass: {
                                    confirmButton: 'btn btn-primary',
                                },
                            });
                        }
                    });
                }
            });
        });
    </script>
@endsection
