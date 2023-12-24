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
                        <a class="nav-link active" {{ route('dip') }}>Informasi Berkala | Setiap
                            Saat | Serta Merta | Dikecualikan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dip2.list') }}">Daftar
                            Informasi Publik
                            (DIP)</a>
                    </li>
                </ul>
            </div>
            <!-- End Nav -->

            <!-- Tab Content -->
            <div class="tab-content">
                <!-- TAB 1 -->
                <div class="tab-pane fade @if (request('waktu_pembuatan') == '') show active @endif"
                    id="pills-one-code-features-example2" role="tabpanel"
                    aria-labelledby="pills-one-code-features-example2-tab">
                    <div class="row justify-content-center">
                        @include('dip')
                    </div>
                </div>
                <!-- END TAB 1 -->

            </div>
            <!-- End Tab Content -->
        </div>
    </main>
    <!-- ========== END MAIN ========== -->
@endsection
