@extends('layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- /.content-header -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        {{ Form::model($data, ['route' => ['bupati.post'], 'files' => true]) }}
                        <!-- /.card-header -->
                        <!-- Input addon -->
                        <div class="card card-info mt-3">
                            <div class="card-header">
                                <h3 class="card-title">Bupati dan Wakil Bupati</h3>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="{{ $data->preview_bupati }}" alt="" width="100%;">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="file" name="bupati_path" placeholder="Choose image" id="picture"
                                            class="form-control mb-3" accept="image/png">
                                        <img id="preview-image-before-upload" src="{{ asset('noimage.png') }}"
                                            alt="preview image" style="max-height: 250px;">
                                    </div>
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

@push('js')
    <script type="text/javascript">
        $(document).ready(function(e) {
            $('#picture').change(function() {
                console.log('berubah');
                let reader = new FileReader();

                reader.onload = (e) => {

                    $('#preview-image-before-upload').attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]);

            });
        });
    </script>
@endpush
