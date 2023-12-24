@extends('layouts/app')

@section('content')
    <div class="content-wrapper">
        <!-- /.content-header -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('berita.create') }}" type="button" class="btn btn-md btn-primary"> <i
                                    class="nav-icon fas fa-plus-square mr-3"></i>Add Data</a>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <!-- Content area -->
                        <div class="card mt-3">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="devan" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Judul</th>
                                                <th>Kategori</th>
                                                <th>Publish</th>
                                                <th>Tanggal</th>
                                                <th>Aksi</th>
                                                <th style="display: none"></th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
@endsection

@push('js')
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var table = $('#devan').DataTable({
            processing: true,
            serverSide: true,
            dom: 'lrt',
            // responsive: true,
            "order": [
                [6, "desc"]
            ],
            ajax: window.location.href,
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false,
                    className: "text-left"
                },
                {
                    data: 'judul',
                    name: 'judul',
                    orderable: false,
                    searchable: false,
                    className: "text-left"
                },
                {
                    data: 'kategori.code_nm',
                    name: 'kategori.code_nm',
                    orderable: false,
                    searchable: false,
                    className: "text-left",
                    defaultContent: '-'
                },
                {
                    data: 'tombol',
                    name: 'tombol',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'tanggal',
                    orderable: false,
                    searchable: false,
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    className: "text-center"
                },
                {
                    data: 'created_at',
                    name: 'created_at',
                    className: "text-left",
                    visible: false
                },
            ]
        });

        function publish(submenu) {
            var url = "{{ url('sendCheckbox') }}";
            $.ajax({
                url: url,
                method: 'POST',
                data: {
                    id: submenu
                },
                success: function(response) {
                    if (response.success) {
                        Swal.fire(
                            'Good job!',
                            'Status is changed',
                            'success'
                        )
                        location.reload();
                    } else {

                    }
                },
                error: function(error) {
                    alert("Error")
                }
            });
        };
    </script>
@endpush
