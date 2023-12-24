<div class="card card-info mt-3">
    <div class="card-header">
        <h3 class="card-title">Management File</h3>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label>Nama File</label>
            {{ Form::text('nama_file', null, ['class' => 'form-control ', 'placeholder' => 'Nama File', 'required']) }}
        </div>
        @if (Request::segment(3) != 'edit')
            <div class="form-group">
                <label>Upload</label>
                {{ Form::file('path', ['class' => 'form-control']) }}
            </div>
        @endif
        <div class="form-group">
            <div class="card-footer">
                <button type="submit" class="btn btn-primary float-right">Submit</button>
            </div>
        </div>
    </div>
</div>

@push('js')
    {!! JsValidator::formRequest('App\Http\Requests\LinkTerkaitValidation') !!}
@endpush
