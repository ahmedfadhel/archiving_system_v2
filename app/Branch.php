<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    //
    protected $fillable = [
        'name', 'brch_code', 'location_id',
    ];


    //Get location of Branch
    public function location(){
        return $this->belongsTo('App\Location');
    }

    //Get Departments belongs to branch

    public function departments(){
        return $this->hasMany('App\Departments');
    }
     
}
