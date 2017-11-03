@extends('layouts.app')
@section('title','beritas')
@section('content')
<section class="content">
  <div class="row">
    <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">{{$data->title}}
              </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <div class="form-group">
                  {!! Form::label('title', 'Title:') !!}
                  <p>{!! $data->title !!}</p>
              </div>

              <div class="form-group">
                  {!! Form::label('content', 'Content:') !!}
                  <p>{!! $data->content !!}</p>
              </div>

              <div class="form-group">
                  <img src="{{asset('image/berita/'.$data->picture)}}" class="img-responsive" height="250" alt="">
              </div>

              <div class="form-group">
                  {!! Form::label('created_at', 'Dibuat Tanggal:') !!}
                  <p>{!! $data->created_at !!}</p>
              </div>
            </div>
            <!-- /.box-body -->
          </div>

    </div>
  </div>
</section>
@endsection
