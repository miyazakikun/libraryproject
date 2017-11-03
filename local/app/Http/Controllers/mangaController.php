<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\manga;

use Toastr;

use Alert;

class mangaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manga.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manga.create');
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
            'details'=>'required',
            'type'=>'required',
            'file'=>'required|max:100000|file',
        ]);
         $data = manga::create($request->all());
         $file       = $request->file('file');
         $fileName   = md5($file->getClientOriginalName().$data->created_at).$file->getClientOriginalName();
         $request->file('file')->move("image/manga/", $fileName);
         $data->picture = $fileName;
         $data->slug = str_slug($request->title.'-'.md5($data->created_at));
         $data->save();
         Toastr::success('Aksi Berhasil', 'Tambah Manga/Manhwa Berhasil');
         return redirect('mangas/'.$data->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = manga::findOrFail($id);
        return view('manga.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $manga = manga::find($id);
        return view('manga.edit', compact('manga'));
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
            'details'=>'required',
            'type'=>'required',
            'file'=>'max:100000|file',
        ]);
       $data = manga::findOrFail($id);
       $update = $data->update($request->all());
       $data->slug = str_slug($request->title.'-'.md5($data->created_at));
       if ($request->hasfile('file')) {
           if($data->picture <> '') $this->deleteFile($data->picture);
           $file       = $request->file('file');
           $fileName   = md5($file->getClientOriginalName().$data->created_at).$file->getClientOriginalName();
           $request->file('file')->move("image/manga/", $fileName);
           $data->picture = $fileName;
       }
       $data->save();
       Toastr::success('Aksi Berhasil', 'Edit Manga/Manhwa Berhasil');
       return redirect('mangas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = manga::findOrFail($id);
        $chapter = $data->chapter;
        if (!empty($chapter)) {
          $chapter->delete();
        }
        if($data->picture <> '') $this->deleteFile($data->picture);
        $data->delete();
        Toastr::success('Aksi Berhasil', 'Delete Manga/Manhwa Berhasil');
        return redirect()->back();
    }
    public function deleteFile($filename)
     {
       $path =  'image/manga/';
       return \File::delete($path.$filename);
     }
}
