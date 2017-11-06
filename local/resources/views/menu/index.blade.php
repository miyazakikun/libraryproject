@extends('layouts.app')
@section('title','menus')
@section('content')
<section class="content">
  <div class="row">
    <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Menu</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-responsive table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama menu</th>
                  <th>Type</th>
                  <th>Tanggal Dibuat</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  @php
                    $no = 1;
                    $status = \App\menu::latest()->get();
                  @endphp
                  @foreach ($status as $menu)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$menu->menu}}</td>
                        <td>@if($menu->status == 'sub')Submenu ({{$menu->submenu->count()}} Submenu)@else Main Menu @endif </td>
                        <td>
                          {{Carbon\Carbon::parse($menu->created_at)->toFormattedDateString()}}
                        </td>
                        <td>
                          {!! Form::open(['route' => ['menus.destroy', $menu->id], 'method' => 'delete']) !!}
                          <div class='btn-group'>
                            <a href="{!! route('menus.show', [$menu->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                            <a href="{!! route('menus.edit', [$menu->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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
