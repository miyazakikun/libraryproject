<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Toastr;

use Alert;

use App\gallery;
use App\picgallery;

class galleryController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      return view('gallery.index');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view('gallery.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
      $this->validate($request,[
          'title'=>'required|max:30',
      ]);
       $data = gallery::create($request->all());
       Toastr::success('Aksi Berhasil', 'Tambah Gallery Berhasil');
       return redirect('galleries/'.$data->id);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      $data = gallery::findOrFail($id);
      return view('gallery.show',compact('data'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      $gallery = gallery::find($id);
      return view('gallery.edit', compact('gallery'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
      $this->validate($request,[
          'title'=>'required|max:30',
      ]);
     $data = gallery::findOrFail($id);
     $update = $data->update($request->all());
     Toastr::success('Aksi Berhasil', 'Edit Gallery Berhasil');
     return redirect('gallerys');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      $data = gallery::findOrFail($id);
      $pic = picgallery::where('gallery_id',$id);
      foreach ($pic->get() as $delete) {
        if($delete->picture <> '') $this->deleteFile($delete->picture);
      }
      $pic->delete();
      $data->delete();
      Toastr::success('Aksi Berhasil', 'Delete Gallery Berhasil');
      return redirect()->back();
  }
  public function deleteFile($filename)
   {
     $path =  'image/gallery/';
     return \File::delete($path.$filename);
   }
}
