<div class="form-group col-sm-6 {{ $errors->has('judul') ? 'has-error' :'' }}">
    {!! Form::label('judul', 'Judul:') !!}
    {!! Form::text('judul', null, ['class' => 'form-control','maxlength'=>'50']) !!}
    @if ($errors->has('judul'))
        @section('scripts')
            <script type="text/javascript">
            toastr.error('Data Error', 'Data Judul Wajib Diisi!')
            </script>
        @endsection
    @endif
</div>
<div class="form-group col-sm-6 {{ $errors->has('tanggalterbit') ? 'has-error' :'' }}">
    {!! Form::label('tanggalterbit', 'Tanggal Terbit:') !!}
    {!! Form::date('tanggalterbit', null, ['class' => 'form-control']) !!}
    @if ($errors->has('tanggalterbit'))
        @section('scripts')
            <script type="text/javascript">
            toastr.error('Data Error', 'Data Tanggal Terbit Wajib Diisi atau Format Tanggal Salah!')
            </script>
        @endsection
    @endif
</div>
<div class="form-group col-sm-6 {{ $errors->has('author_id') ? 'has-error' :'' }}">
    {!! Form::label('author_id', 'Author Buku:') !!}
    {!! Form::select('author_id', $author->pluck('nama','id'),null, ['class' => 'form-control select','maxlength'=>'50']) !!}
    <small class="text-muted">Author Tidak ada ?</small> <a href="{{ url('authors/create?from=katalogs') }}" ><i class="fa fa-plus-circle"></i> Tambah Author</a>
    @if ($errors->has('author_id'))
        @section('scripts')
            <script type="text/javascript">
            toastr.error('Data Error', 'Data Author Wajib Diisi!')
            </script>
        @endsection
    @endif
</div>
<div class="form-group col-sm-6 {{ $errors->has('kategori_id') ? 'has-error' :'' }}">
    {!! Form::label('kategori_id', 'Kategori Buku:') !!}
    {!! Form::select('kategori_id', $kategori->pluck('kategori','id'),null, ['class' => 'form-control select','maxlength'=>'50']) !!}
    <small class="text-muted">Kategori Tidak ada ?</small> <a href="{{ url('kategoris/create?from=katalogs') }}" ><i class="fa fa-plus-circle"></i> Tambah Kategori</a>
    @if ($errors->has('kategori_id'))
        @section('scripts')
            <script type="text/javascript">
            toastr.error('Data Error', 'Data Kategori Wajib Diisi!')
            </script>
        @endsection
    @endif
</div>
<div class="form-group col-sm-12 {{ $errors->has('deskripsi') ? 'has-error' :'' }}">
    <div class="box-body pad">
        {!! Form::label('deskripsi', 'Deskripsi Katalog:') !!}
        {!! Form::textarea('deskripsi', null,['id' => 'editor1','rows'=>'10','cols'=>'80']) !!}
        @if ($errors->has('deskripsi'))
            @section('scripts')
                <script type="text/javascript">
                toastr.error('Data Error', 'Data Deskripsi Wajib Diisi!')
                </script>
            @endsection
        @endif
    </div>
</div>
<div class="form-group col-sm-12 {{ $errors->has('picture') ? 'has-error' :'' }}">
    {!! Form::label('picture', 'Gambar:') !!}
    {!! Form::file('picture', ['class' => 'form-control filepicker','accept'=>'image/x-png,image/gif,image/jpeg']) !!}
     <small class="text-muted">Upload Hanya file berekstensi Dari Gambar (GIF,PNG,JPG,JPEG dan lain lain) {{$add}}</small>
    @if ($errors->has('picture'))
        @section('scripts')
            <script type="text/javascript">
            toastr.error('Data Error', 'Data File Gambar Wajib Diisi dan Harus Sesuai Dengan Detail File!')
            </script>
        @endsection
    @endif
</div>
<div class="form-group col-sm-12 {{ $errors->has('file') ? 'has-error' :'' }}">
    {!! Form::label('file', 'File:') !!}
    {!! Form::file('file', ['class' => 'form-control filepicker','accept'=>'application/pdf,.pdf']) !!}
     <small class="text-muted">Upload Hanya file berekstensi PDF  {{$add}}</small>
    @if ($errors->has('file'))
        @section('scripts')
            <script type="text/javascript">
            toastr.error('Data Error', 'Data File Gambar Wajib Diisi dan Harus Sesuai Dengan Detail File!')
            </script>
        @endsection
    @endif
</div>
