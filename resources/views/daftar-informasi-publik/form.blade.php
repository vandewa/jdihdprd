<div class="card card-info mt-3">
    <div class="card-header">
        <h3 class="card-title">Daftar Informasi Publik</h3>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label>Tahun</label>
            {{ Form::number('tahun', null, ['class' => 'form-control ', 'placeholder' => 'Tahun', 'required']) }}
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            {{ Form::textarea('deskripsi', null, ['id' => 'summernote']) }}

        </div>
        <div class="form-group">
            <div class="card-footer">
                <button type="submit" class="btn btn-primary float-right">Submit</button>
            </div>
        </div>
    </div>
</div>

@push('js')
    {{-- {!! JsValidator::formRequest('App\Http\Requests\LinkTerkaitValidation') !!} --}}
@endpush
