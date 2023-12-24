@extends('layouts/front/app')
@section('content')
    <!-- ========== MAIN ========== -->
    <main id="content" role="main">
        <div class="container space-top-2 space-bottom-2">
            <div class="w-lg-60 mx-lg-auto">
                <div class="space-top-2"></div>
                <h2 class="text-center">Profil</h2>
                <br>

                <div>
                    {!! $data->isi ?? '' !!}
                </div>

            </div>
        </div>
    </main>
    <!-- ========== END MAIN ========== -->
@endsection
