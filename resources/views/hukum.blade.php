@extends('layouts/front/app')
@section('content')
    <!-- ========== MAIN ========== -->
    <main id="content" role="main">
        <div class="container space-top-2 space-bottom-2">
            <div class="w-lg-100 mx-lg-auto">
                <div class="space-top-2"></div>
                <h2 class="text-center">{{ $judul }}</h2>
                <br>

                <div class="content">
                    <!-- Basic datatable -->
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="devan" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kategori</th>
                                            <th>Nomor</th>
                                            <th>Tahun</th>
                                            <th>Tentang</th>
                                            <th>QRCode</th>
                                            <th></th>
                                            {{-- <th>#</th> --}}
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /basic datatable -->
                </div>

            </div>
        </div>
    </main>
    <!-- ========== END MAIN ========== -->
@endsection

@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
@endpush

@push('js')
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
        var table = $('#devan').DataTable({
            processing: true,
            serverSide: true,
            // dom: 'lrt',
            // responsive: true,
            "order": [
                [0, "desc"]
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
                    data: 'kategori.nama',
                    name: 'kategori.nama',
                    className: "text-left"
                },
                {
                    data: 'nomor',
                    name: 'nomor',
                    className: "text-left"
                },
                {
                    data: 'tahun',
                    name: 'tahun',
                    className: "text-left"
                },
                {
                    data: 'tentang',
                    name: 'tentang',
                    className: "text-left"
                },
                {
                    data: 'qrcode',
                    name: 'qrcode',
                    orderable: false,
                    searchable: false,
                    className: "text-center"
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    className: "text-center"
                },
            ]
        });
    </script>
@endpush
