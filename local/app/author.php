<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class author extends Model
{
  protected $table = 'authors';
  protected $fillable = [
    'nama',
    'tgllahir',
    'pekerjaan',
    'bidangpekerjaan',
    'detail'
  ];

  public function favoritauthor()
  {
    return $this->hasMany(favoritauthor::class);
  }

  public function book()
  {
    return $this->hasMany(book::class);
  }
}
