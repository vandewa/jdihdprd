@extends('layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- /.content-header -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        {{ Form::open(['route' => ['produk-hukum.store'], 'files' => true]) }}
                        @include('produk-hukum.form')
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('js')
    {!! JsValidator::formRequest('App\Http\Requests\ProdukHukumStoreValidation') !!}
@endpush
