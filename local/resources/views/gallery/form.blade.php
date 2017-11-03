<div class="form-group col-sm-12 {{ $errors->has('title') ? 'has-error' :'' }}">
    {!! Form::label('title', 'Judul:') !!}
    {!! Form::text('title', null, ['class' => 'form-control','required','maxlength'=>'50']) !!}
    @if ($errors->has('title'))
        @section('scripts')
            <script type="text/javascript">
            toastr.error('Data Error', 'Data Judul Wajib/Maksimal 30 Karakter Diisi!')
            </script>
        @endsection
    @endif
</div>
