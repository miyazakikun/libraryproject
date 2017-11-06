<?php

namespace App\Http\Controllers;

use App\submenu;

use Illuminate\Http\Request;

use Toastr;

use Alert;

class SubmenuController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      return view('submenu.index');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view('submenu.create');
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
          'submenu'=>'required',
      ]);
       $data = submenu::create($request->all());
       Toastr::success('Aksi Berhasil', 'Tambah Menu Berhasil');
       return redirect('submenus/'.$data->id);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      $data = submenu::findOrFail($id);
      return view('submenu.show',compact('data'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      $submenu = submenu::find($id);
      return view('submenu.edit', compact('submenu'));
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
          'submenu'=>'required',
      ]);
     $data = submenu::findOrFail($id);
     $update = $data->update($request->all());
     Toastr::success('Aksi Berhasil', 'Edit Menu Berhasil');
     return redirect('submenus');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      $data = submenu::findOrFail($id);
      $data->delete();
      Toastr::success('Aksi Berhasil', 'Delete Menu Berhasil');
      return redirect()->back();
  }
}
