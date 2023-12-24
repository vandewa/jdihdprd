<div class="card card-info mt-3">
    <div class="card-header">
        <h3 class="card-title">Kategori</h3>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label>Nama</label>
            {{ Form::text('nama', null, ['class' => 'form-control ', 'placeholder' => 'Nama']) }}
        </div>
        <div class="form-group">
            <div class="card-footer">
                <button type="submit" class="btn btn-primary float-right">Submit</button>
            </div>
        </div>
    </div>
</div>
