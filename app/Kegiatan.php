<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    public function guru()
        {
            return $this->belongsTo('App\Guru');
        }    
}