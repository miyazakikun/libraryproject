<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class submenu extends Model
{
  protected $table = 'submenus';
  protected $fillable = [
    'menu_id',
    'menu'
  ];

  public function menu()
  {
    return $this->belongsTo(menu::class);
  }

  public function page()
  {
      return $this->morphMany('App\page', 'pageview');
  }
}
