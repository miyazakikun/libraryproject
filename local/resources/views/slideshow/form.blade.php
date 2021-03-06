<div class="form-group col-sm-6 {{ $errors->has('title') ? 'has-error' :'' }}">
    {!! Form::label('title', 'Judul:') !!}
    {!! Form::text('title', null, ['class' => 'form-control','required','maxlength'=>'50']) !!}
    @if ($errors->has('title'))
        @section('scripts')
            <script type="text/javascript">
            toastr.error('Data Error', 'Data Judul Wajib Diisi!')
            </script>
        @endsection
    @endif
</div>
<div class="form-group col-sm-12 {{ $errors->has('file') ? 'has-error' :'' }}">
    {!! Form::label('file', 'Gambar:') !!}
    {!! Form::file('file', ['class' => 'form-control','accept'=>'image/x-png,image/gif,image/jpeg']) !!}
     <small class="text-muted">Upload Hanya file berekstensi Dari Gambar (GIF,PNG,JPG,JPEG dan lain lain) {{$add}}</small>
    @if ($errors->has('file'))
        @section('scripts')
            <script type="text/javascript">
            toastr.error('Data Error', 'Data File Gambar Wajib Diisi!')
            </script>
        @endsection
    @endif
</div>
