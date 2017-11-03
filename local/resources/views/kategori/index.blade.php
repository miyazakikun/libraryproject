@extends('layouts.app')
@section('title','kategoris')
@section('content')
<section class="content">
  <div class="row">
    <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Kategori</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Judul kategori</th>
                  <th>Jumlah Buku Per kategori</th>
                  <th>Tanggal Dibuat</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  @php
                    $no = 1;
                    $status = \App\kategori::latest()->get();
                  @endphp
                  @foreach ($status as $kategori)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$kategori->kategori}}</td>
                        <td>{{$kategori->book->count()}} Buku</td>
                        <td>
                          {{Carbon\Carbon::parse($kategori->created_at)->toFormattedDateString()}}
                        </td>
                        <td>
                          {!! Form::open(['route' => ['kategoris.destroy', $kategori->id], 'method' => 'delete']) !!}
                          <div class='btn-group'>
                            <a href="{!! route('kategoris.show', [$kategori->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                            <a href="{!! route('kategoris.edit', [$kategori->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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
