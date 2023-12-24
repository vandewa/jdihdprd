@section('title', $judul ?? '' . '| DPMPTSP Wonosobo')
@section('meta-description')
    <meta content="{{ $judul ?? '' }}" name="description" />
@endsection
@extends('layouts.front.app')
@section('content')
    <!-- ========== MAIN ========== -->
    <main id="content" role="main">
        <!-- Article Description Section -->
        <div class="container space-top-3 space-bottom-2">
            <div class="w-lg-60 mx-lg-auto">
                <div class="mb-4">
                    <center>
                        <h3>{{ $judul ?? '' }}</h3>
                    </center>
                </div>

                <div class="card mt-3">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="devan" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Tahun</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
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
                    data: 'tahun',
                    name: 'tahun',
                    className: "text-left"
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
