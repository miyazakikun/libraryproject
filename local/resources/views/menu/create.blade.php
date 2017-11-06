@extends('layouts.app')
@section('title','menus')
@section('content')
<section class="content">
  <div class="row">
    <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Form Create Menu</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              {!! Form::open(['route' => 'menus.store','enctype'=>'multipart/form-data','files' => true]) !!}
                @php
                  $add = '';
                @endphp
                @include('menu.form')
                <div class="form-group col-sm-6 {{ $errors->has('status') ? 'has-error' :'' }}">
                    {!! Form::label('status', 'Kategori Buku:') !!}
                    {!! Form::select('status', ['main'=>'Menu Utama','sub'=>'Memilki Sub'],null, ['class' => 'form-control select','v-model'=>'status']) !!}
                    @if ($errors->has('status'))
                        @section('scripts')
                            <script type="text/javascript">
                            toastr.error('Data Error', 'Data Status Wajib Diisi!')
                            </script>
                        @endsection
                    @endif
                </div>
                <div class="form-group col-sm-12 text-right">
                    <button type="submit" name="button" class="btn btn-success">Tambah</button>
                </div>
              {!! Form::close() !!}
            </div>
            <!-- /.box-body -->
          </div>

    </div>
  </div>
</section>
@endsection
