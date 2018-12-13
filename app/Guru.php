<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable as Authenticatable;
use Illuminate\Database\Eloquent\Model;



class Guru extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;
    
    public function kegiatan()
        {
            return $this->hasMany('App\Kegiatan');
        }
    
}