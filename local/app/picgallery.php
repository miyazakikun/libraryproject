<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class picgallery extends Model
{
  protected $table = 'picgalleries';
  public function gallery()
  {
    return $this->belongsTo(gallery::class);
  }
}
