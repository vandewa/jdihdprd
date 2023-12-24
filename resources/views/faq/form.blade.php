<div class="card card-info mt-3">
    <div class="card-header">
        <h3 class="card-title">FAQ</h3>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label>Pertanyaan</label>
            {{ Form::textarea('pertanyaan', null, ['class' => 'form-control ', 'rows' => 2, 'required']) }}
        </div>
        <div class="form-group">
            <label>Jawaban</label>
            {{ Form::textarea('jawaban', null, ['id' => 'summernote']) }}
        </div>
        <div class="form-group">
            <div class="card-footer">
                <button type="submit" class="btn btn-primary float-right">Submit</button>
            </div>
        </div>
    </div>
</div>

@push('js')
    {!! JsValidator::formRequest('App\Http\Requests\FaqValidation') !!}
@endpush
