@extends('layouts.app')
@section('title','beritas')
@section('content')
<section class="content">
  <div class="row">
    <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Form Edit berita</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              {!! Form::model($berita, ['route' => ['beritas.update', $berita->id], 'method' => 'patch','enctype'=>'multipart/form-data','files' => true]) !!}
                @php
                  $add = '/ Masukan Baru jika ingin menghapus yang lama';
                @endphp
                @include('berita.form')
                <div class="form-group col-sm-12 text-right">
                    <button type="submit" name="button" class="btn btn-danger">Edit</button>
                </div>
              {!! Form::close() !!}
            </div>
            <!-- /.box-body -->
          </div>

    </div>
  </div>
</section>
@endsection
