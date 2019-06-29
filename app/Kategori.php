<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

class Kategori extends Model
{
    protected $fillable = ['nama_kategori', 'slug'];
    public $timestamps = true;

    public function artikel()
    {
        return $this->hasMany('App\Artikel', 'id_kategori');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
