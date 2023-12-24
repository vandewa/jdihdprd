@extends('layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- /.content-header -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        {{ Form::open(['route' => ['berita.store'], 'files' => true]) }}
                        @include('berita.form')
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('js')
    <script>
        const judul_posting = document.querySelector('#judul');
        const slug = document.querySelector('#slug');

        judul.addEventListener('change', function() {
            fetch('/berita/checkSlug?judul=' + judul.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug);
        });
    </script>
    <script>
        var uploadedDocumentMap = {}
        let token = $("meta[name='csrf-token']").attr("content");
        Dropzone.options.myDropzone = {

            url: '{{ route('file_image.store') }}',
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
                var name = ''
                var path = ''
                if (typeof file.file_name !== 'undefined') {
                    name = file.file_name
                } else {
                    name = uploadedDocumentMap[file.name]
                    path = uploadedDocumentMap[file.path]
                }
                $('form').find('input[name="document[]"][value="' + name + '"]').remove();

                // alert(name);
                console.log(path);
                console.log(name);
                $.ajax({
                    url: `/berita-delete/${name}`,
                    type: "DELETE",
                    cache: false,
                    data: {
                        "_token": token
                    },
                    success: function(response) {
                        console.log(response);
                        //show success message
                        // Swal.fire({
                        //     type: 'success',
                        //     icon: 'success',
                        //     title: `${response.message}`,
                        //     showConfirmButton: false,
                        //     timer: 3000
                        // });

                        //remove post on table
                        // $(`#index_${post_id}`).remove();
                    }
                });
            },
            init: function() {
                @if (isset($project) && $project->document)
                    var files =
                        {!! json_encode($project->document) !!}
                    for (var i in files) {
                        var file = files[i]
                        this.options.addedfile.call(this, file)
                        file.previewElement.classList.add('dz-complete')
                        $('form').append('<input type="hidden" name="document[]" value="' + file.file_name + '">')
                    }
                @endif
            }
        }
    </script>
@endpush
