<div class="card card-info mt-3">
    <div class="card-header">
        <h3 class="card-title">Aplikasi</h3>
    </div>
    <div class="card-body">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Nama</span>
            </div>
            {{ Form::text('nama', null, ['class' => 'form-control ', 'placeholder' => 'Nama Aplikasi']) }}
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Keterangan</span>
            </div>
            {{ Form::text('keterangan', null, ['class' => 'form-control ', 'placeholder' => 'Keterangan Aplikasi']) }}
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">URL</span>
            </div>
            {{ Form::text('url', null, ['class' => 'form-control ', 'placeholder' => 'Contoh : https://oss.go.id/']) }}
        </div>
        @if (Request::segment(2) != 'create')
            <div class="col-md-12">
                <img src="{{ $data->preview_image }}" alt="" width="100%;">
            </div>
        @endif
        <div class="col-md-12">
            <label for="">Upload Logo</label>
            <input type="file" name="logo" placeholder="Choose image" id="picture" class="form-control mb-3"
                accept="image/png">
            <img id="preview-image-before-upload" src="{{ asset('noimage.png') }}" alt="preview image"
                style="max-height: 250px;">
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <button type="submit" class="btn btn-primary float-right">Submit</button>
    </div>
</div>

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
