@section('title', 'Daftar Informasi Publik | DPMPTSP Wonosobo')
@section('meta-description')
    <meta content="Daftar Informasi Publik" name="description" />
@endsection
@extends('layouts.front.app')
@section('content')
    <!-- ========== MAIN ========== -->
    <main id="content" role="main">
        <!-- Article Description Section -->
        <div class="container space-top-3 space-bottom-2">
            <!-- Nav -->
            <div class="d-flex justify-content-center text-center ">
                <ul class="nav nav-pills mb-7" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dip') }}">Informasi Berkala | Setiap
                            Saat | Serta Merta | Dikecualikan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('dip2.list') }}">Daftar
                            Informasi Publik
                            (DIP)</a>
                    </li>
                </ul>
            </div>
            <!-- End Nav -->

            <!-- Tab Content -->
            <div class="tab-content">
                <!-- TAB 2 -->
                <div class="tab-pane fade show active" id="pills-two-code-features-example2" role="tabpanel"
                    aria-labelledby="pills-two-code-features-example2-tab">
                    <div class="row d-flex justify-content-center">

                        <div class="w-lg-80 mx-lg-auto">
                            <div class="mb-4">
                                <form action="{{ route('cari.tahun.dip2') }}"method="get">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    {{ Form::number('tahun', null, ['class' => 'form-control', 'placeholder' => 'Cari berdasarkan tahun']) }}
                                                </div>
                                                <div class="col-md-3">
                                                    <button type="submit" class="btn btn-primary"> Cari</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div>

                            @if ($data)
                                <div>
                                    {!! $data->deskripsi !!}
                                </div>
                            @else
                                Data tidak ditemukan.
                            @endif

                        </div>

                    </div>
                </div>
                <!-- END TAB 2 -->
            </div>
            <!-- End Tab Content -->
        </div>
    </main>
    <!-- ========== END MAIN ========== -->
@endsection
