<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use  Session;

class Tag extends Model
{
    protected $fillable = ['nama_tag', 'slug', 'id_artikel', 'id_tag'];
    public $timestamps = true;

    public function artikel()
    {
        return $this->belongstoMany('App\Artikel', 'artikel_tags', 'id_tag', 'id_artikel');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
