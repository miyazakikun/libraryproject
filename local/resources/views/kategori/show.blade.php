@extends('layouts.app')
@section('title','beritas')
@section('content')
<section class="content">
  <div class="row">
    <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">{{$data->kategori}}
              </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <div class="form-group">
                  {!! Form::label('kategori', 'Nama Kategori:') !!}
                  <p>{!! $data->kategori !!}</p>
              </div>

              <div class="form-group">
                  {!! Form::label('count', 'Jumlah Kunjungan Kategori:') !!}
                  <p>{!! $data->count !!}</p>
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
