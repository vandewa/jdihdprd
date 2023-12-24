@extends('layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- /.content-header -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        {{ Form::model($data, ['route' => ['kontak.post']]) }}
                        <!-- /.card-header -->
                        <!-- Input addon -->
                        <div class="card card-info mt-3">
                            <div class="card-header">
                                <h3 class="card-title">Kontak</h3>
                            </div>
                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Telepon</span>
                                    </div>
                                    {{ Form::text('telepon', null, ['class' => 'form-control ', 'placeholder' => 'Telepon']) }}
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Email</span>
                                    </div>
                                    {{ Form::text('email', null, ['class' => 'form-control ', 'placeholder' => 'Email']) }}
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Alamat</span>
                                    </div>
                                    {{ Form::text('alamat', null, ['class' => 'form-control ', 'placeholder' => 'Alamat']) }}
                                </div>
                                {{-- <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Maps</span>
                                    </div>
                                    {{ Form::textarea('maps', null, ['class' => 'form-control ', 'rows' => 3]) }}
                                </div> --}}
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary float-right">Submit</button>
                            </div>
                        </div>

                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </section>
    </div>
@endsection
