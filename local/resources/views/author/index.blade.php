@extends('layouts.app')
@section('title','authors')
@section('content')
<section class="content">
  <div class="row">
    <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Author</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-responsive table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Author</th>
                  <th>Tanggal Lahir</th>
                  <th>Pekerjaan</th>
                  <th>Bidang Pekerjaan</th>
                  <th>Buku Dirilis</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  @php
                    $no = 1;
                    $status = \App\author::latest()->get();
                  @endphp
                  @foreach ($status as $author)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$author->nama}}</td>
                        <td>
                          {{Carbon\Carbon::parse($author->tgllahir)->toFormattedDateString()}}
                        </td>
                        <td>
                          {{ $author->pekerjaan }}
                        </td>
                        <td>
                          {{ $author->bidangpekerjaan }}
                        </td>
                        <td>
                          {{ $author->book->count() }} Buku
                        </td>
                        <td>
                          {!! Form::open(['route' => ['authors.destroy', $author->id], 'method' => 'delete']) !!}
                          <div class='btn-group'>
                            <a href="{!! route('authors.show', [$author->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                            <a href="{!! route('authors.edit', [$author->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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
