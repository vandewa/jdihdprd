<div class="card card-info mt-3">
    <div class="card-header">
        @if (Request::segment(1) == 'menu')
            <h3 class="card-title">Menu</h3>
        @else
            <h3 class="card-title">Isi Menu - {{ $data->nama ?? '' }}</h3>
        @endif
    </div>
    <div class="card-body">
        @if (Request::segment(1) == 'menu')
            <div class="form-group">
                <label>Parent</label>
                {{ Form::select('parent_id', $menu, null, ['class' => 'form-control select2bs4', 'placeholder' => '-- Pilih Parent --', 'required']) }}
            </div>
            <div class="form-group">
                <label>Nama Menu</label>
                {{ Form::text('nama', null, ['class' => 'form-control ', 'placeholder' => 'Nama Menu', 'required']) }}
            </div>
        @endif

        @if (Request::segment(3) == 'edit')
            <div class="form-group">
                <label>Urutan</label>
                {{ Form::text('urutan', null, ['class' => 'form-control ', 'placeholder' => 'Urutan', 'required']) }}
            </div>
        @endif

        @if (Request::segment(1) == 'isi-menu')
            <input type="hidden" name="jenis_informasi_publik_tp" value="JENIS_INFORMASI_PUBLIK_TP_01">
            <div class="form-group">
                <label>Jenis Menu</label>
                {{ Form::select('jenis_st', get_code_group('JENIS_MENU_ST'), null, ['class' => 'form-control select2bs4 ', 'placeholder' => '-- Pilih Jenis Menu --', 'required', 'id' => 'jenis-menu']) }}
            </div>
            <div class="form-group devan" style="display: none">
                <label>Isi Menu</label>
                {{ Form::textarea('deskripsi', null, ['id' => 'summernote']) }}
            </div>
            <div class="form-group dewananta" style="display: none">
                <label>Link</label>
                {{ Form::text('path', null, ['class' => 'form-control ', 'placeholder' => 'URL Download file', 'id' => 'link']) }}
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
    <script type="text/javascript">
        $(document).ready(function(e) {
            $('select[name=jenis_st]').change(function() {
                let isi = $(this).val();

                if (isi == 'JENIS_MENU_ST_02') {
                    $('.devan').show('slow');
                } else {
                    $('.devan').hide('slow');
                    document.getElementById("summernote").value = null;
                }

                if (isi == 'JENIS_MENU_ST_01') {
                    $('.dewananta').show('slow');
                } else {
                    $('.dewananta').hide('slow');
                    document.getElementById("link").value = null;
                }

            });
            if (document.getElementById("jenis-menu").value == 'JENIS_MENU_ST_01') {
                $('.dewananta').show('slow');
            }
            if (document.getElementById("jenis-menu").value == 'JENIS_MENU_ST_02') {
                $('.devan').show('slow');
            }
        });
    </script>
@endpush
