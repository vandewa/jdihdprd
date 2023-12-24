@extends('layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- /.content-header -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        {{ Form::model($data, ['route' => ['visi.post']]) }}
                        <!-- /.card-header -->
                        <!-- Input addon -->
                        <div class="card card-info mt-3">
                            <div class="card-header">
                                <h3 class="card-title">Visi | Misi | Motto</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    {{ Form::textarea('visi', null, ['id' => 'summernote']) }}
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
