@extends('layouts.app')
@section('title','authors')
@section('content')
<section class="content">
  <div class="row">
    <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">{{$data->nama}}
              </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="col-md-12 text-center">
                <div class="form-group">
                  <img src="{{asset('image/author/'.$data->picture)}}" class="img-responsive img-rounded" width="350" alt="">
                </div>
              </div>
              <div class="form-group">
                  {!! Form::label('nama', 'Nama:') !!}
                  <p>{!! $data->nama !!}</p>
              </div>

              <div class="form-group">
                  {!! Form::label('detail', 'Tentang Author:') !!}
                  <p>{!! $data->detail !!}</p>
              </div>
              <div class="form-group">
                  {!! Form::label('pekerjaan', 'Pekerjaan:') !!}
                  <p>{!! $data->pekerjaan !!}</p>
              </div>
              <div class="form-group">
                  {!! Form::label('bidangpekerjaan', 'Jabatan/Bidang Pekerjaan:') !!}
                  <p>{!! $data->bidangpekerjaan !!}</p>
              </div>

              <div class="form-group">
                {!! Form::label('tgllahir', 'Tanggal lahir:') !!}
                <p>{{Carbon\Carbon::parse($data->tgllahir)->toFormattedDateString()}}</p>
              </div>



            </div>
            <!-- /.box-body -->
          </div>

    </div>
  </div>
</section>
@endsection
