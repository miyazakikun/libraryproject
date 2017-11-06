@extends('layouts.app')
@section('title','galleries')
@section('content')
<section class="content">
  <div class="row">
    <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Gallery</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-responsive table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Judul Gallery</th>
                  <th>Tanggal Dibuat</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  @php
                    $no = 1;
                    $status = \App\gallery::latest()->get();
                  @endphp
                  @foreach ($status as $gallery)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$gallery->title}}</td>
                        <td>
                          {{Carbon\Carbon::parse($gallery->created_at)->toFormattedDateString()}}
                        </td>
                        <td>
                          {!! Form::open(['route' => ['galleries.destroy', $gallery->id], 'method' => 'delete']) !!}
                          <div class='btn-group'>
                            <a href="{!! route('galleries.show', [$gallery->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                            <a href="{!! route('galleries.edit', [$gallery->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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
