<div class="card card-info mt-3">
    <div class="card-header">
        <h3 class="card-title">Penyelenggara</h3>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label>Nama Dinas</label>
            {{ Form::text('nama_opd', null, ['class' => 'form-control ', 'placeholder' => 'Nama Dinas', 'required']) }}
        </div>
        <div class="form-group">
            <label>Layanan</label>
            {{ Form::textarea('layanan', null, ['id' => 'summernote']) }}
        </div>
        <div class="form-group">
            <div class="card-footer">
                <button type="submit" class="btn btn-primary float-right">Submit</button>
            </div>
        </div>
    </div>
</div>

@push('js')
    {{-- {!! JsValidator::formRequest('App\Http\Requests\FaqValidation') !!} --}}
@endpush
