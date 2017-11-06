<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
  protected $table = 'menus';
  protected $fillable = [
    'menu',
    'status'
  ];

  public function submenu()
  {
    return $this->hasMany(submenu::class);
  }

  public function page()
  {
      return $this->morphMany('App\page', 'pageview');
  }
}
