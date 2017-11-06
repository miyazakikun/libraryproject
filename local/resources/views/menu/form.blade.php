<div class="form-group col-sm-6 {{ $errors->has('menu') ? 'has-error' :'' }}">
    {!! Form::label('menu', 'Nama Menu:') !!}
    {!! Form::text('menu', null, ['class' => 'form-control','required','maxlength'=>'50']) !!}
    @if ($errors->has('menu'))
        @section('scripts')
            <script type="text/javascript">
            toastr.error('Data Error', 'Data Nama Menu Wajib Diisi!')
            </script>
        @endsection
    @endif
</div>
