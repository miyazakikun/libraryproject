@php
  $page = $data->page->first();
@endphp
@if (!empty($page))
  {!! Form::model($page, ['route' => ['pages.update', $page->id], 'method' => 'patch','enctype'=>'multipart/form-data','files' => true]) !!}
    @include('page.form')
    <div class="form-group col-sm-12 text-right">
        <button type="submit" name="button" class="btn btn-success">Ubah</button>
    </div>
  {!! Form::close() !!}
  @else
    {!! Form::open(['route' => 'pages.store','enctype'=>'multipart/form-data','files' => true]) !!}
      @include('page.form')
      <div class="form-group col-sm-12 text-right">
          <button type="submit" name="button" class="btn btn-success">Tambah</button>
      </div>
    {!! Form::close() !!}
@endif
