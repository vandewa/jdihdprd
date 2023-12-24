@section('title', 'Personil | DPMPTSP Wonosobo')
@section('meta-description')
    <meta content="Personil" name="description" />
@endsection
@extends('layouts.front.app')
@section('content')
    <!-- ========== MAIN ========== -->
    <main id="content" role="main">
        <!-- Article Description Section -->
        <div class="container space-top-3 space-bottom-2">
            <div class="w-lg-100 mx-lg-auto">
                <div class="mb-4">
                    <center>
                        <h3>Personil DPMPTSP</h3>
                    </center>
                </div>

                <div class="card mt-3">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="devan" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>NAMA</th>
                                        <th>PANGKAT / GOL. RUANG</th>
                                        <th>JABATAN</th>
                                        <th>PENDIDIKAN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $list)
                                        <tr>
                                            <td>
                                                @if ($list->gdb)
                                                    {{ $list->gdp . ' ' . $list->nama . ', ' . $list->gdb }}
                                                @else    
                                                    {{ $list->gdp . ' ' . $list->nama }}
                                                @endif
                                            </td>
                                            <td>{{ $list->pangkat . ' / ' . $list->golru }}</td>
                                            <td>{{ $list->jabatan }}</td>
                                            <td>{{ $list->pendidikan }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
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
