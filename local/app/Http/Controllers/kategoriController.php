<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\kategori;

use Toastr;

use Alert;

class kategoriController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      return view('kategori.index');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view('kategori.create');
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
          'kategori'=>'required',
      ]);
       $data = kategori::create($request->all());
       Toastr::success('Aksi Berhasil', 'Tambah Kategori Berhasil');
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
      $data = kategori::findOrFail($id);
      return view('kategori.show',compact('data'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      $kategori = kategori::find($id);
      return view('kategori.edit', compact('kategori'));
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
          'kategori'=>'required',
      ]);
     $data = kategori::findOrFail($id);
     $update = $data->update($request->all());
     Toastr::success('Aksi Berhasil', 'Edit Kategori Berhasil');
     return redirect('kategoris');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      $data = kategori::findOrFail($id);
      $data->delete();
      Toastr::success('Aksi Berhasil', 'Delete Kategori Berhasil');
      return redirect()->back();
  }
}
