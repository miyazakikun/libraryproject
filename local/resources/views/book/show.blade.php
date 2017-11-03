@extends('layouts.app')
@section('title','books')
@section('content')
<section class="content">
  <div class="row">
    <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">{{$data->judul}}
              </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <div class="form-group">
                  {!! Form::label('title', 'Title:') !!}
                  <p>{!! $data->judul !!}</p>
              </div>
              <div class="form-group">
                  {!! Form::label('view', 'DIlihat:') !!}
                  <p>{!! $data->count !!} Dilihat</p>
              </div>
              <div class="form-group">
                {!! Form::label('kategori', 'Kategori:') !!}
                <p>{!! $data->kategori->kategori !!}</p>
              </div>
              <div class="form-group">
                {!! Form::label('author', 'Author Buku:') !!}
                <p>{!! $data->author->nama !!}</p>
              </div>
              <div class="form-group">
                  {!! Form::label('created_at', 'Tanggal Terbit:') !!}
                  <p>{{Carbon\Carbon::parse($data->tanggalterbit)->toFormattedDateString()}}</p>
              </div>

              <div class="form-group">
                  {!! Form::label('content', 'Content:') !!}
                  <p>{!! $data->deskripsi !!}</p>
              </div>
              <div class="form-group">
                  <img src="{{asset('image/book/'.$data->picture)}}" class="img-responsive" height="250" alt="">
              </div>

              <div class="form-group">
                  {!! Form::label('file', 'File Buku:') !!}
                  <p>
                    <a href="{{ asset('file/book/'.$data->file) }}" download class="btn btn-success btn-sm">Download</a>
                  </p>
                  <div class="text-center">
                    <iframe src="{{ asset('file/book/'.$data->file) }}" width="100%" height="450"></iframe>
                  </div>
              </div>




            </div>
            <!-- /.box-body -->
          </div>

    </div>
  </div>
</section>
@endsection
