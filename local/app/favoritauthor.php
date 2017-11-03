<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class favoritauthor extends Model
{
  protected $table = 'favoritauthors';
  public function User()
  {
    return $this->belongsTo(User::class);
  }
  public function book()
  {
    return $this->belongsTo(book::class);
  }
}
