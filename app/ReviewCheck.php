<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReviewCheck extends Model
{
    //
    protected $guarded = [];
    protected $dates = ['check_date'];

    public function source()
    {
    	return $this->belongsTo(\App\ReviewSource::class,'source_id');
    }
}
