@extends('layouts.app')
@section('title','katalogs')
@section('content')
<section class="content">
  <div class="row">
    <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Katalog</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Judul Katalog</th>
                  <th>Gambar</th>
                  <th>File</th>
                  <th>Tanggal Terbit</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  @php
                    $no = 1;
                    $status = \App\book::latest()->get();
                  @endphp
                  @foreach ($status as $book)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$book->judul}}</td>
                        <td>
                          <img src="{{asset('image/book/'.$book->picture)}}" class="img-responsive" width="150" alt="">
                        </td>
                        <td>
                          <a href="{{ asset('file/book/'.$book->file) }}" download>Download</a>
                        </td>
                        <td>
                          {{Carbon\Carbon::parse($book->tanggalterbit)->toFormattedDateString()}}
                        </td>
                        <td>
                          {!! Form::open(['route' => ['katalogs.destroy', $book->id], 'method' => 'delete']) !!}
                          <div class='btn-group'>
                            <a href="{!! route('katalogs.show', [$book->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                            <a href="{!! route('katalogs.edit', [$book->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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
