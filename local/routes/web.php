<?php
use App\berita;
use App\pengumuman;
use App\kategori;
use Illuminate\Database\Eloquent\Collection;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  // $data = kategori::create([
  //   'kategori'=>'adasd'
  // ]);
  // $a = get_class($data);
  // return $a;
  // $ids = ['6','3','4','5','7'];
  // $data = kategori::whereIn('id',$ids)->orderBy(DB::raw('FIELD(`id`, '.implode(',', $ids).')'))
  //   ->get();
  //   $models = kategori::find($ids);
  //   $sorted = array_flip($ids);
  //
  //   foreach ($models as $model) $sorted[$model->id] = $model;
  //
  //   $sorted = Collection::make(array_values($sorted));
  // return $sorted;
    return redirect('login');;
});



//Admin
Auth::routes();
Route::get('/homes', 'HomeController@index')->name('home');
Route::group(['middleware'=>'auth'], function(){
    Route::get('admin/profile/{id}','HomeController@profile');
    Route::post('admin/profile/{id}','HomeController@updateprofile');

    Route::resource('beritas', 'beritaController');
    Route::resource('galleries', 'galleryController');
    Route::resource('slideshows', 'slideshowController');
    Route::resource('katalogs', 'bookController');
    Route::resource('kategoris', 'kategoriController');
    Route::resource('authors', 'authorController');
    Route::resource('menus', 'MenuController');
    Route::resource('submenus', 'SubmenuController');
    Route::resource('pages', 'PageController');


    Route::post('picgalleries/store/{id}','picgalleryController@store');
    Route::get('picgalleries/delete/{id}','picgalleryController@destroy');


    Route::group(['middleware'=>'adminMiddleware'], function(){
        Route::get('userlog','HomeController@activitylog');
        Route::group(['prefix'=>'user'], function(){
            Route::post('{role}','userController@store')->name('user.store');
            Route::get('{role}/','userController@index')->name('user.index');
            Route::get('{role}/create','userController@create')->name('user.create');
            Route::get('{role}/{user}','userController@show')->name('user.show');
            Route::delete('{user}','userController@destroy')->name('user.destroy');
            Route::patch('{user}','userController@update')->name('user.update');
            Route::get('{role}/edit/{user}','userController@edit')->name('user.edit');
        });
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
