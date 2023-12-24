@extends('layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- /.content-header -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        {{ Form::model($data, ['route' => ['menu.update', $data->id], 'method' => 'put', 'files' => true]) }}
                        <input type="text" value="{{ $data->id }}" id="vans" hidden>
                        @include('menu.form')
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('js')
    {!! JsValidator::formRequest('App\Http\Requests\MenuStoreValidation') !!}

    <script type="text/javascript">
        var uploadedDocumentMap = {};
        let token = $("meta[name='csrf-token']").attr("content");

        Dropzone.autoDiscover = false;
        $(".dropzone").dropzone({

            url: `{{ route('file_image.store') }}`,
            maxFilesize: 2, // MB
            acceptedFiles: ".jpeg,.jpg,.png",
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            success: function(file, response) {
                $('form').append('<input type="hidden" name="document[]" value="' + response.name + '">')
                uploadedDocumentMap[file.name] = response.name
                uploadedDocumentMap[file.path] = response.path
            },
            removedfile: function(file) {
                file.previewElement.remove()
                var name = '';
                var path = '';
                if (typeof file.file_name !== 'undefined') {
                    name = file.file_name;
                } else {
                    name = uploadedDocumentMap[file.name];
                    path = uploadedDocumentMap[file.path];
                }

                // console.log(file.name);

                $('form').find('input[name="document[]"][value="' + name + '"]').remove();

                $.ajax({
                    url: `/file_image/${name}`,
                    type: "DELETE",
                    cache: false,
                    data: {
                        "_token": token
                    },
                    success: function(response) {
                        console.log(response);
                    }
                });
            },
            init: function() {
                let id_ku = document.getElementById('vans').value;
                $.ajax({
                    url: `/file_image/${id_ku}`,
                    type: 'get',
                    // data: { request: 'fetch' },
                    dataType: 'json',
                    success: function(response) {
                        $.each(response, function(key, value) {
                            var mockFile = {
                                name: value.name,
                                size: value.size
                            };

                            myDropzone.emit("addedfile", mockFile);
                            myDropzone.emit("thumbnail", mockFile, value.path);
                            myDropzone.emit("complete", mockFile);

                        });

                    }
                });

                myDropzone = this;

                this.on("removedfile", function(file) {
                    // alert("Delete this file?");
                    var devan = file.name;
                    $.ajax({
                        url: `/file_image/` + devan,
                        type: "DELETE",
                        data: {
                            "_token": token,
                        },
                        success: function(response) {
                            console.log(response);
                        },
                        error: function(response) {
                            console.log(response);
                        }
                    });
                });


                @if (isset($project) && $project->document)
                    var files = {!! json_encode($project->document) !!}
                    for (var i in files) {
                        var file = files[i]
                        this.options.addedfile.call(this, file)
                        file.previewElement.classList.add('dz-complete')
                        $('form').append('<input type="hidden" name="document[]" value="' + file.file_name +
                            '">')
                    }
                @endif
            }
        });
    </script>
@endpush

@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropzone@5.9.2/dist/dropzone.css"
        integrity="sha256-6X2vamB3vs1zAJefAme/aHhUeJl13mYKs3VKpIGmcV4=" crossorigin="anonymous">
    <style>
        .dropzone .dz-preview .dz-image img {
            display: block;
            height: auto !important;
            width: 100%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate3d(-50%, -50%, 0);
        }
    </style>
@endpush
