<div class="w-lg-60 mx-lg-auto">
    <div class="mb-4">
        <center>
            <h3>Daftar Informasi Publik</h3>
        </center>
    </div>

    <form action="">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-md-12">
                        {{ Form::select('jenis_informasi_publik_tp', get_code_group('JENIS_INFORMASI_PUBLIK_TP'), null, ['class' => 'name form-control', 'placeholder' => '-- Pilih Daftar Informasi Publik --']) }}
                    </div>
                </div>
            </div>
        </div>
    </form>

    <div class="card mt-3">
        <!-- /.card-header -->
        <div class="card-body">
            <div class="table-responsive">
                <table id="devan" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Link</th>
                            <th>#</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

</div>


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
            ajax: "{{ route('dip.list') }}",
            // "order": [
            //     [1, "desc"]
            // ],
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false,
                    className: "text-left"
                },
                {
                    data: 'nama',
                    name: 'nama',
                    className: "text-left"
                },
                {
                    data: 'jenis_informasi_publik_tp',
                    name: 'jenis_informasi_publik_tp',
                    visible: false
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
        $('select[name=jenis_informasi_publik_tp]').change(function() {
            table
                .column(2)
                .search(this.value)
                .draw();
        });
    </script>
@endpush
