<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class page extends Model
{
  protected $table = 'pages';
  protected $fillable = [
    'nama',
    'page',
    'pageview_id',
    'pageview_type',
  ];

  public function pageview()
  {
      return $this->morphTo();
  }
}
