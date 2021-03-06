@extends('layouts.app')
@section('title','galleries')
@section('content')
<section class="content">
  <div class="row">
    <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Form Create Gallery</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              {!! Form::open(['route' => 'galleries.store','enctype'=>'multipart/form-data','files' => true]) !!}
                @php
                  $add = '';
                @endphp
                @include('gallery.form')
                <div class="form-group col-sm-12 text-right">
                    <button type="submit" name="button" class="btn btn-success">Tambah</button>
                </div>
              {!! Form::close() !!}
            </div>
            <!-- /.box-body -->
          </div>

    </div>
  </div>
</section>
@endsection
