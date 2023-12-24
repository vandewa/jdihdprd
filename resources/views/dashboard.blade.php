@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row mt-5">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{ $total_produk }}</h3>

                                <p>Total Produk Hukum</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-ios-paper-outline"></i>
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ $kategori }}</h3>

                                <p>Total Kategori</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-eye"></i>
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{ $total_pengunjung }}</h3>

                                <p>Total Pengunjung</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-podium"></i>
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{ $pengunjung_hari_ini }}</h3>

                                <p>Pengunjung Hari Ini</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-woman"></i>
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection
