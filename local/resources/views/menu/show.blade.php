@extends('layouts.app')
@section('title','menus')
@section('content')
<section class="content">
  <div class="row">
    <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Menu {{$data->menu}}
              </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              @if ($data->status == 'main')
                @include('page.main')
              @else
                @include('page.sub')
              @endif
            </div>
            <!-- /.box-body -->
          </div>

    </div>
  </div>
</section>
@endsection
