<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    //
    public function sources()
    {
    	return $this->hasMany(\App\ReviewSource::class);
    }
}
