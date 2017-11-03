@extends('layouts.app')
@section('title','authors')
@section('content')
<section class="content">
  <div class="row">
    <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Form Create Author</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              {!! Form::open(['route' => 'authors.store','enctype'=>'multipart/form-data','files' => true]) !!}
                @php
                  $add = '';
                @endphp
                @if (!empty($_GET['from']))
                  <input type="hidden" name="from" value="katalogs">
                @endif
                @include('author.form')
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
