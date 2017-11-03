@extends('layouts.app')
@if ($role == 'librarian')
  @php
    $title = 'Librarian';
  @endphp
@else
  @php
    $title = 'Admin Yayasan';
  @endphp
@endif
@section('title','Admin '.$title)
@section('content')
<section class="content">
  <div class="row">
    <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Form Edit User {{$title}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              {!! Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'patch','enctype'=>'multipart/form-data','files' => true]) !!}
                @include('user.form')
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
