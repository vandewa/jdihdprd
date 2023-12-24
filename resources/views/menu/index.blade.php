@extends('layouts/app')

@section('content')
    <div class="content-wrapper">
        <!-- /.content-header -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('menu.create') }}" type="button" class="btn btn-md btn-primary"> <i
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
                                                <th>Parent</th>
                                                <th>Nama</th>
                                                <th>Urutan</th>
                                                <th>Aksi</th>
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
        var table = $('#devan').DataTable({
            processing: true,
            serverSide: true,
            ajax: window.location.href,
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false,
                    className: "text-left"
                },
                {
                    data: 'parent.nama',
                    name: 'parent_id'
                },
                {
                    data: 'nama',
                },
                {
                    data: 'urutan',
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        });
    </script>
@endpush
