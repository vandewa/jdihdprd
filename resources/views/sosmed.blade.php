@extends('layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- /.content-header -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        {{ Form::model($data, ['route' => ['sosmed.post']]) }}
                        <!-- /.card-header -->
                        <!-- Input addon -->
                        <div class="card card-info mt-3">
                            <div class="card-header">
                                <h3 class="card-title">Sosial Media</h3>
                            </div>
                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Facebook</span>
                                    </div>
                                    {{ Form::text('fb', null, ['class' => 'form-control ', 'placeholder' => 'https://facebook.com']) }}
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Youtube</span>
                                    </div>
                                    {{ Form::text('yt', null, ['class' => 'form-control ', 'placeholder' => 'https://youtube.com']) }}
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Instagram</span>
                                    </div>
                                    {{ Form::text('ig', null, ['class' => 'form-control ', 'placeholder' => 'https://instagram.com']) }}
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Twitter</span>
                                    </div>
                                    {{ Form::text('twitter', null, ['class' => 'form-control ', 'placeholder' => 'https://twitter.com']) }}
                                </div>
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
