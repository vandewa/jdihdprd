<div class="card card-info mt-3">
    <div class="card-header">
        <h3 class="card-title">Monografi Hukum</h3>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label>Kategori</label>
            {{ Form::select('kategori_id', $kategori, null, ['class' => 'form-control select-search', 'placeholder' => 'Pilih Kategori']) }}
        </div>
        <div class="form-group">
            <label>Nomor</label>
            {{ Form::number('nomor', null, ['class' => 'form-control ', 'placeholder' => 'Nomor']) }}
        </div>
        <div class="form-group">
            <label>Tahun</label>
            {{ Form::number('tahun', null, ['class' => 'form-control ', 'placeholder' => 'Tahun']) }}
        </div>
        <div class="form-group">
            <label>Tentang</label>
            {{ Form::text('tentang', null, ['class' => 'form-control ', 'placeholder' => 'Tentang']) }}
        </div>
        <div class="form-group">
            <label>File</label>
            <input type="file" name="path" accept="application/pdf" />
        </div>
        @if (Request::segment(3) == 'edit')
            @if ($data->path)
                <div>
                    <object data="{{ asset($data->preview_file) }}" type="application/pdf" width="100%" height="500"
                        style="border: solid 1px #ccc;"></object>
                </div>
            @endif
        @endif
        <div class="form-group">
            <div class="card-footer">
                <button type="submit" class="btn btn-primary float-right">Submit</button>
            </div>
        </div>
    </div>
</div>
