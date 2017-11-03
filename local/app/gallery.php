<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
  protected $table = 'galleries';
  protected $fillable = [
    'title'
  ];
  public function picgallery()
  {
    return $this->hasMany(picgallery::class);
  }
}
