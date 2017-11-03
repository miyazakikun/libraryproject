<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\berita;

use Toastr;

use Alert;

class beritaController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      return view('berita.index');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view('berita.create');
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
          'title'=>'required',
          'content'=>'required',
          'file'=>'required|max:100000|file',
      ]);
       $data = berita::create($request->all());
       $file       = $request->file('file');
       $fileName   = md5($file->getClientOriginalName().$data->created_at).$file->getClientOriginalName();
       $request->file('file')->move("image/berita/", $fileName);
       $data->picture = $fileName;
       $data->slug = str_slug($request->title.'-'.md5($data->created_at));
       $data->save();
       Toastr::success('Aksi Berhasil', 'Tambah Berita Berhasil');
       return redirect()->back();
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      $data = berita::findOrFail($id);
      return view('berita.show',compact('data'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      $berita = berita::find($id);
      return view('berita.edit', compact('berita'));
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
          'title'=>'required',
          'content'=>'required',
          'file'=>'max:100000|file',
      ]);
     $data = berita::findOrFail($id);
     $update = $data->update($request->all());
     $data->slug = str_slug($request->title.'-'.md5($data->created_at));
     if ($request->hasfile('file')) {
         if($data->picture <> '') $this->deleteFile($data->picture);
         $file       = $request->file('file');
         $fileName   = md5($file->getClientOriginalName().$data->created_at).$file->getClientOriginalName();
         $request->file('file')->move("image/berita/", $fileName);
         $data->picture = $fileName;
     }
     $data->save();
     Toastr::success('Aksi Berhasil', 'Edit Berita Berhasil');
     return redirect('beritas');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      $data = berita::findOrFail($id);
      if($data->picture <> '') $this->deleteFile($data->picture);
      $data->delete();
      Toastr::success('Aksi Berhasil', 'Delete Berita Berhasil');
      return redirect()->back();
  }
  public function deleteFile($filename)
   {
     $path =  'image/berita/';
     return \File::delete($path.$filename);
   }
}
