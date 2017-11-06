<h4>Sub Menu <a id="" class="btn btn-success btn-xs">Tambah Sub</a></h4>
<hr>
<table id="example1" class="table table-responsive table-bordered table-striped">
  <thead>
  <tr>
    <th>No</th>
    <th>Nama Sub</th>
    <th>Tanggal Dibuat</th>
    <th>Aksi</th>
  </tr>
  </thead>
  <tbody>
    @php
      $no = 1;
      $status = $data->submenu;
    @endphp
    @foreach ($status as $submenu)
      <tr>
          <td>{{$no++}}</td>
          <td>{{$submenu->menu}}</td>
          <td>@if($submenu->status == 'sub')Submenu ({{$submenu->submenu->count()}} Submenu)@else Main Menu @endif </td>
          <td>
            {{Carbon\Carbon::parse($submenu->created_at)->toFormattedDateString()}}
          </td>
          <td>
            {!! Form::open(['route' => ['menus.destroy', $submenu->id], 'method' => 'delete']) !!}
            <div class='btn-group'>
              <a href="{!! route('menus.show', [$submenu->id]) !!}" class='btn btn-default'> <span class="fa fa-file-text-o"></span> Page</a>
              <a href="{!! route('menus.edit', [$submenu->id]) !!}" class='btn btn-warning'> <span class="fa fa-pencil-square-o"></span> Ubah</a>
              {!! Form::button('<i class="glyphicon glyphicon-trash"></i> Hapus', ['type' => 'submit', 'class' => 'btn btn-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
            </div>
            {!! Form::close() !!}
          </td>
      </tr>
    @endforeach
  </tbody>
</table>
