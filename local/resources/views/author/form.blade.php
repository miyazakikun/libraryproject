<div class="form-group col-sm-6 {{ $errors->has('nama') ? 'has-error' :'' }}">
    {!! Form::label('nama', 'Nama Author:') !!}
    {!! Form::text('nama', null, ['class' => 'form-control','required','maxlength'=>'50']) !!}
    @if ($errors->has('nama'))
        @section('scripts')
            <script type="text/javascript">
            toastr.error('Data Error', 'Data Judul Wajib Diisi!')
            </script>
        @endsection
    @endif
</div>
<div class="form-group col-sm-6 {{ $errors->has('tgllahir') ? 'has-error' :'' }}">
    {!! Form::label('tgllahir', 'Tanggal Lahir:') !!}
    {!! Form::date('tgllahir', null, ['class' => 'form-control','required']) !!}
    @if ($errors->has('tgllahir'))
        @section('scripts')
            <script type="text/javascript">
            toastr.error('Data Error', 'Data Tanggal Lahir Wajib Diisi atau Format Tanggal Salah!')
            </script>
        @endsection
    @endif
</div>
<div class="form-group col-sm-6 {{ $errors->has('pekerjaan') ? 'has-error' :'' }}">
    {!! Form::label('pekerjaan', 'Pekerjaan:') !!}
    {!! Form::text('pekerjaan', null, ['class' => 'form-control','required','maxlength'=>'50']) !!}
    @if ($errors->has('pekerjaan'))
        @section('scripts')
            <script type="text/javascript">
            toastr.error('Data Error', 'Data Pekerjaan Wajib Diisi!')
            </script>
        @endsection
    @endif
</div>
<div class="form-group col-sm-6 {{ $errors->has('bidangpekerjaan') ? 'has-error' :'' }}">
    {!! Form::label('bidangpekerjaan', 'Bidang/Sub Pekerjaan:') !!}
    {!! Form::text('bidangpekerjaan', null, ['class' => 'form-control','required','maxlength'=>'50']) !!}
    @if ($errors->has('bidangpekerjaan'))
        @section('scripts')
            <script type="text/javascript">
            toastr.error('Data Error', 'Data Bidang/Sub Pekerjaan Wajib Diisi!')
            </script>
        @endsection
    @endif
</div>
<div class="form-group col-sm-12 {{ $errors->has('file') ? 'has-error' :'' }}">
    {!! Form::label('file', 'Gambar:') !!}
    {!! Form::file('file', ['class' => 'form-control filepicker','accept'=>'image/x-png,image/gif,image/jpeg']) !!}
     <small class="text-muted">Upload Hanya file berekstensi Dari Gambar (GIF,PNG,JPG,JPEG dan lain lain) {{$add}}</small>
    @if ($errors->has('file'))
        @section('scripts')
            <script type="text/javascript">
            toastr.error('Data Error', 'Data File Gambar Wajib Diisi!')
            </script>
        @endsection
    @endif
</div>
<div class="form-group col-sm-12 {{ $errors->has('detail') ? 'has-error' :'' }}">
    <div class="box-body pad">
        {!! Form::label('detail', 'Deskripsi Author:') !!}
        {!! Form::textarea('detail', null,['id' => 'editor1','rows'=>'10','cols'=>'80']) !!}
        @if ($errors->has('detail'))
            @section('scripts')
                <script type="text/javascript">
                toastr.error('Data Error', 'Data Deskripsi Wajib Diisi!')
                </script>
            @endsection
        @endif
    </div>
</div>
