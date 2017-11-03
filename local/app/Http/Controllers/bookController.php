<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\book;

use App\author;

use App\kategori;

use Toastr;

use Alert;

class bookController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      return view('book.index');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $author = author::orderBy('nama')->get();
    $kategori = kategori::orderBy('kategori')->get();
    return view('book.create', compact('author','kategori'));
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
          'tanggalterbit'=>'required',
          'judul'=>'required',
          'deskripsi'=>'required',
          'kategori_id'=>'required',
          'author_id'=>'required',
          'file'=>'required|max:100000|file',
          'picture'=>'required|max:100000',
      ]);
       $data       = book::create($request->all());

       $filePicture        = $request->file('picture');
       $filePictureName   = md5($filePicture->getClientOriginalName().$data->created_at).$filePicture->getClientOriginalName();
       $request->file('picture')->move("image/book/", $filePictureName);
       $data->picture  = $filePictureName;

       $file      = $request->file('file');
       $fileName   = md5($file->getClientOriginalName().$data->created_at).$file->getClientOriginalName();
       $request->file('file')->move("file/book/", $fileName);
       $data->file  = $fileName;

       $data->save();
       Toastr::success('Aksi Berhasil', 'Tambah Buku Berhasil');
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
      $data = book::findOrFail($id);
      return view('book.show',compact('data'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      $book = book::find($id);
      $author = author::orderBy('nama')->get();
      $kategori = kategori::orderBy('kategori')->get();
      return view('book.edit', compact('book','author','kategori'));
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
          'tanggalterbit'=>'required',
          'judul'=>'required',
          'deskripsi'=>'required',
          'kategori_id'=>'required',
          'author_id'=>'required',
          'file'=>'max:100000|file',
          'picture'=>'max:100000',
      ]);
     $data = book::findOrFail($id);
     $update = $data->update($request->all());
     if ($request->hasfile('file')) {
         if($data->file <> '') $this->deleteFile($data->file);
         $file       = $request->file('file');
         $fileName   = md5($file->getClientOriginalName().$data->created_at).$file->getClientOriginalName();
         $request->file('file')->move("file/book/", $fileName);
         $data->file = $fileName;
     }
     if ($request->hasfile('picture')) {
       if($data->picture <> '') $this->deleteFilePicture($data->picture);
       $filePicture        = $request->file('picture');
       $filePictureName   = md5($filePicture->getClientOriginalName().$data->created_at).$filePicture->getClientOriginalName();
       $request->file('picture')->move("image/book/", $filePictureName);
       $data->picture  = $filePictureName;
     }
     $data->save();
     Toastr::success('Aksi Berhasil', 'Edit Buku Berhasil');
     return redirect('book');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      $data = book::findOrFail($id);
      if($data->file <> '') $this->deleteFile($data->file);
      if($data->picture <> '') $this->deleteFilePicture($data->picture);
      $data->delete();
      Toastr::success('Aksi Berhasil', 'Delete Buku Berhasil');
      return redirect()->back();
  }
  public function deleteFile($filename)
   {
     $path =  'file/book/';
     return \File::delete($path.$filename);
   }
   public function deleteFilePicture($filename)
    {
      $path =  'image/book/';
      return \File::delete($path.$filename);
    }
}
