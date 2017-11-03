@extends('layouts.app')
@section('title','beritas')
@section('content')
<section class="content">
  <div class="row">
    <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Berita</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Judul berita</th>
                  <th>Gambar</th>
                  <th>Tanggal Dibuat</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  @php
                    $no = 1;
                    $status = \App\berita::latest()->get();
                  @endphp
                  @foreach ($status as $berita)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$berita->title}}</td>
                        <td>
                          <img src="{{asset('image/berita/'.$berita->picture)}}" class="img-responsive" width="150" alt="">
                        </td>
                        <td>
                          {{Carbon\Carbon::parse($berita->created_at)->toFormattedDateString()}}
                        </td>
                        <td>
                          {!! Form::open(['route' => ['beritas.destroy', $berita->id], 'method' => 'delete']) !!}
                          <div class='btn-group'>
                            <a href="{!! route('beritas.show', [$berita->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                            <a href="{!! route('beritas.edit', [$berita->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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
