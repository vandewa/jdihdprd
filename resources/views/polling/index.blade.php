@extends('layouts/app')

@section('content')
    <div class="content-wrapper">
        <!-- /.content-header -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">

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
                                                <th>Polling</th>
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
            // dom: 'lrt',
            // responsive: true,
            "order": [
                [4, "desc"]
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
                    data: 'polling.code_nm',
                    name: 'polling.code_nm',
                    orderable: false,
                    searchable: false,
                    className: "text-left",
                    defaultContent: '-'
                },
                {
                    data: 'tanggal',
                    name: 'tanggal',
                    orderable: false,
                    searchable: false,
                    className: "text-left"
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
    </script>
@endpush
