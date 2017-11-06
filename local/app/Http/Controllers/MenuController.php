<?php

namespace App\Http\Controllers;

use App\menu;

use App\page;

use Illuminate\Http\Request;

use Toastr;

use Alert;

class MenuController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      return view('menu.index');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view('menu.create');
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
          'menu'=>'required',
      ]);
       $data = menu::create($request->all());
       Toastr::success('Aksi Berhasil', 'Tambah Menu Berhasil');
       return redirect('menus/'.$data->id);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      $data = menu::findOrFail($id);
      return view('menu.show',compact('data'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      $menu = menu::find($id);
      return view('menu.edit', compact('menu'));
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
          'menu'=>'required',
      ]);
     $data = menu::findOrFail($id);
     $update = $data->update($request->all());
     Toastr::success('Aksi Berhasil', 'Edit Menu Berhasil');
     return redirect('menus');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      $data = menu::findOrFail($id);
      if ($data->menu == 'main') {
        $data->page()->delete();
      }else {
        foreach ($data->submenu as $sub) {
          $sub->delete();
        }

      }
      $data->delete();
      Toastr::success('Aksi Berhasil', 'Delete Menu Berhasil');
      return redirect()->back();
  }
}
