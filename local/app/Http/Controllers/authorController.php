<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\author;

use Toastr;

use Alert;

class authorController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      return view('author.index');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view('author.create');
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
          'nama'=>'required',
          'tgllahir'=>'required|date',
          'pekerjaan'=>'required',
          'bidangpekerjaan'=>'required',
          'detail'=>'required',
          'file'=>'required|max:100000|file',
      ]);
       $data = author::create($request->all());
       $file       = $request->file('file');
       $fileName   = md5($file->getClientOriginalName().$data->created_at).$file->getClientOriginalName();
       $request->file('file')->move("image/author/", $fileName);
       $data->picture = $fileName;
       $data->save();
       Toastr::success('Aksi Berhasil', 'Tambah Author Berhasil');
       if (!empty($request->from)) {
         return redirect($request->from.'/create');
       }
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
      $data = author::findOrFail($id);
      return view('author.show',compact('data'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      $author = author::find($id);
      return view('author.edit', compact('author'));
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
          'nama'=>'required',
          'tgllahir'=>'required',
          'pekerjaan'=>'required',
          'bidangpekerjaan'=>'required',
          'detail'=>'required',
          'file'=>'max:100000|file',
      ]);
     $data = author::findOrFail($id);
     $update = $data->update($request->all());
     if ($request->hasfile('file')) {
         if($data->picture <> '') $this->deleteFile($data->picture);
         $file       = $request->file('file');
         $fileName   = md5($file->getClientOriginalName().$data->created_at).$file->getClientOriginalName();
         $request->file('file')->move("image/author/", $fileName);
         $data->picture = $fileName;
     }
     $data->save();
     Toastr::success('Aksi Berhasil', 'Edit Author Berhasil');
     return redirect('authors');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      $data = author::findOrFail($id);
      if($data->picture <> '') $this->deleteFile($data->picture);
      $data->delete();
      Toastr::success('Aksi Berhasil', 'Delete Author Berhasil');
      return redirect()->back();
  }
  public function deleteFile($filename)
   {
     $path =  'image/author/';
     return \File::delete($path.$filename);
   }
}
