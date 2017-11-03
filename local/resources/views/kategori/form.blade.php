<div class="form-group col-sm-12 {{ $errors->has('kategori') ? 'has-error' :'' }}">
    {!! Form::label('kategori', 'Kategori:') !!}
    {!! Form::text('kategori', null, ['class' => 'form-control','required','maxlength'=>'50']) !!}
    @if ($errors->has('kategori'))
        @section('scripts')
            <script type="text/javascript">
            toastr.error('Data Error', 'Data Judul Wajib Diisi!')
            </script>
        @endsection
    @endif
</div>
