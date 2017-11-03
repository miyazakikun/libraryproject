<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $table = 'kategoris';
    protected $fillable = [
      'kategori'
    ];
    public function book()
    {
      return $this->hasMany(book::class);
    }
}
