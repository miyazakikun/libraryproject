<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\slideshow;

use Toastr;

use Alert;

class slideshowController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      return view('slideshow.index');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view('slideshow.create');
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
          'status'=>'required',
          'file'=>'required|max:100000|file',
      ]);
       $data = new slideshow;
       $data->title = $request->title;
       $data->status = $request->status;
       $file       = $request->file('file');
       $fileName   = md5($file->getClientOriginalName().$data->created_at).$file->getClientOriginalName();
       $request->file('file')->move("image/slideshow/", $fileName);
       $data->picture = $fileName;
       $data->save();
       Toastr::success('Aksi Berhasil', 'Tambah Slideshow Berhasil');
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
      // $data = slideshow::findOrFail($id);
      // return view('slideshow.show',compact('data'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      $slideshow = slideshow::find($id);
      return view('slideshow.edit', compact('slideshow'));
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
        'status'=>'required',
        'file'=>'max:100000|file',
    ]);
     $data = slideshow::findOrFail($id);
     $data->title = $request->title;
     $data->status = $request->status;
     if ($request->hasfile('file')) {
         if($data->picture <> '') $this->deleteFile($data->picture);
         $file       = $request->file('file');
         $fileName   = md5($file->getClientOriginalName().$data->created_at).$file->getClientOriginalName();
         $request->file('file')->move("image/slideshow/", $fileName);
         $data->picture = $fileName;
     }
     $data->save();
     Toastr::success('Aksi Berhasil', 'Edit Slideshow Berhasil');
     return redirect('slideshows');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      $data = slideshow::findOrFail($id);
      if($data->picture <> '') $this->deleteFile($data->picture);
      $data->delete();
      Toastr::success('Aksi Berhasil', 'Delete Slideshow Berhasil');
      return redirect()->back();
  }
  public function deleteFile($filename)
   {
     $path =  'image/slideshow/';
     return \File::delete($path.$filename);
   }
}
