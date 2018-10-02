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

    // Attributes
    public function getReviewSheetIdAttribute()
    {
        preg_match('/[-\w]{25,}/', $this->review_spreadsheet, $id);
        return $id[0];
    }

    // Local Scopes
    public function scopeActive($query)
    {
    	return $query->where('active',1);
    }


    // Functions
    public function getLatestReviewCheck($source = null)
    {   
        $reviewChecks = ReviewCheck::whereHas('source',function($q){
            $q->where('client_id',$this->id);
        })->orderBy('check_date','desc')->get();

        if(!is_null($source))
        {
            $reviewChecks = $reviewChecks->where('source_id',$source->id);
        }
        return $reviewChecks->first();
    }
}
