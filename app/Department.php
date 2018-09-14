<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    //Get Branch info that related to specific department

    public function branch(){

        return $this->belongsTo('App\Branch');
    }

    //Get Department users

    public function users(){
        return $this->hasMany('App\User');
    }
}
