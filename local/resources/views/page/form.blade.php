<div class="form-group col-sm-12 {{ $errors->has('nama') ? 'has-error' :'' }}">
    {!! Form::label('nama', 'Judul Halaman:') !!}
    {!! Form::text('nama', null, ['class' => 'form-control','required','maxlength'=>'50']) !!}
    @if ($errors->has('nama'))
        @section('scripts')
            <script type="text/javascript">
            toastr.error('Data Error', 'Data Nama Page Wajib Diisi!')
            </script>
        @endsection
    @endif
</div>
<div class="form-group col-sm-12 {{ $errors->has('page') ? 'has-error' :'' }}">
    <div class="box-body pad">
        {!! Form::label('page', 'Halaman Menu:') !!}
        {!! Form::textarea('page', null,['id' => 'editor1','rows'=>'10','cols'=>'80']) !!}
        @if ($errors->has('page'))
            @section('scripts')
                <script type="text/javascript">
                toastr.error('Data Error', 'Data Halaman Wajib Diisi!')
                </script>
            @endsection
        @endif
    </div>
</div>
