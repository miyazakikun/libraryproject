<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
  protected $table = 'books';
  protected $fillable = [
    'judul',
    'tanggalterbit',
    'author_id',
    'kategori_id',
    'deskripsi'
  ];
  public function kategori()
  {
    return $this->belongsTo(kategori::class);
  }
  public function author()
  {
    return $this->belongsTo(author::class);
  }
}
