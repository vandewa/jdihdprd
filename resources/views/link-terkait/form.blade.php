<div class="card card-info mt-3">
    <div class="card-header">
        <h3 class="card-title">Link Terkait</h3>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label>Nama</label>
            {{ Form::text('nama', null, ['class' => 'form-control ', 'placeholder' => 'Nama']) }}
        </div>
        <div class="form-group">
            <label>Link</label>
            {{ Form::text('link', null, ['class' => 'form-control ', 'placeholder' => 'https://google.com']) }}
        </div>
        <div class="form-group">
            <label>Picture</label>
            <input type="file" name="foto" placeholder="Choose image" id="picture" class="form-control mb-3"
                accept="image/png">
            <img id="preview-image-before-upload" src="{{ asset('noimage.png') }}" alt="preview image"
                style="max-height: 250px;">
        </div>
        <div class="form-group">
            <div class="card-footer">
                <button type="submit" class="btn btn-primary float-right">Submit</button>
            </div>
        </div>
    </div>
</div>

@push('js')
    {!! JsValidator::formRequest('App\Http\Requests\LinkTerkaitValidation') !!}

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
