@extends('layouts.app')
@section('title','journals')
@section('style')
  <style media="screen">
    .img-kucing{
      Height:200px;
      Width:200px;
      Object-fit:cover;
    }
  </style>
@endsection
@section('content')
<section class="content">
  <div class="row">
    <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Gallery {{$data->title}}
                  <small class="text-muted">Dibuat : {{Carbon\Carbon::parse($data->created_at)->toFormattedDateString()}} | Jumlah Gambar : {{\App\picgallery::where('gallery_id',$data->id)->count()}}</small><br>
                  <small class="text-muted">Untung menghapus gambar klik gambar, lalu Klik Hapus!</small>
              </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <div class="form-group">
                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#TambahGambar">
                  <span class="fa fa-plus"></span>
                  Tambah Gambar
                </button>
                <hr>
                <div class="container-fluid">
                  <div class="col-md-12">
                    <div id="gallery">
                      <div class="container-fluid">
                        <div class="col-md-12">
                          @php
                            $picgallery =\App\picgallery::where('gallery_id',$data->id)->latest()->paginate(12);
                          @endphp
                          @foreach ($picgallery as $gallery)
                            <div class="col-md-3" style="padding-bottom:30px;">
                              <a href="#" onclick="hapus({{$gallery->id}})">
                                <img alt="Gallery " class="img-kucing" src="{{asset('image/gallery/'.$gallery->picture)}}">
                              </a>
                            </div>
                          @endforeach
                          <div class="col-md-12">
                            <div class="text-center">
                              {{$picgallery->links()}}
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @if (\App\picgallery::where('gallery_id',$data->id)->count() < 1)
                  <div class="text-center">
                    Gambar Kosong
                  </div>
                @endif
              <hr>
            </div>

            </div>
            <!-- /.box-body -->
          </div>

    </div>
  </div>
</section>
@endsection
@section('modal')
  <!-- Modal -->
  <div id="TambahGambar" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Gambar {{$data->title}}</h4>
        </div>
          <div class="modal-body">
            <form id="gallerygo" class="dropzone" action="{{url('picgalleries/store/'.$data->id)}}">
            {{ csrf_field() }}
            </form>
            <div id="message">

            </div>
          </div>
      </div>

    </div>
  </div>
@endsection
@section('scripts')
  <script>
	function hapus(id) {
		swal({
			title: "Apa Anda yakin ingin menghapus Gambar ini?",
			type: "warning",
			showCancelButton: true,
			confirmButtonColor: "#DD6B55",
			confirmButtonText: "Hapus",
			cancelButtonText: "Batalkan",
			closeOnConfirm: false,
			closeOnCancel: true
		},
		function(isConfirm){
			if (isConfirm) {
				window.location.replace("../../picgalleries/delete/"+id);
			}
		});
	}
</script>
  <script type="text/javascript">
  Dropzone.autoDiscover = false;
  var request = new XMLHttpRequest();
  var myDropzone = new Dropzone(".dropzone", {
    maxFilesize: 1000,
    parallelUploads : 1,
    acceptedFiles: ".png, .jpg,.gif, .jpeg, .PNG, .JPG",
  });
  $(document).ready(function() {
    myDropzone.on("queuecomplete", function(file) {
      toastr.success('Aksi Berhasil!', 'Gambar Telah Tersimpan!');
      swal({
        title: "Data berhasil ditambah",
        type: "success",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Tambah Gallery",
        cancelButtonText: "Tambah Gambar",
        closeOnConfirm: false,
        closeOnCancel: true
      },
      function(isConfirm){
        if (isConfirm) {
          window.location.replace("../galleries/create");
        }else {
          location.reload();
        }
      });
    });
  });
  </script>
@endsection
