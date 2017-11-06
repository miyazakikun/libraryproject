@extends('layouts.app')
@section('title','slideshows')
@section('content')
<section class="content">
  <div class="row">
    <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Slideshow</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-responsive table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Judul Slideshow</th>
                  <th>Gambar</th>
                  <th>Tanggal Dibuat</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  @php
                    $no = 1;
                      $status = \App\slideshow::latest()->get();
                  @endphp
                  @foreach ($status as $slideshow)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$slideshow->title}}</td>
                        <td>
                          <img src="{{asset('image/slideshow/'.$slideshow->picture)}}" class="img-responsive" width="150" alt="">
                        </td>
                        <td>
                          {{Carbon\Carbon::parse($slideshow->created_at)->toFormattedDateString()}}
                        </td>
                        <td>
                          {!! Form::open(['route' => ['slideshows.destroy', $slideshow->id], 'method' => 'delete']) !!}
                          <div class='btn-group'>
                            {{-- <a href="{!! route('slideshows.show', [$slideshow->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a> --}}
                            <a href="{!! route('slideshows.edit', [$slideshow->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                            {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                          </div>
                          {!! Form::close() !!}
                        </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>

    </div>
  </div>
</section>
@endsection
