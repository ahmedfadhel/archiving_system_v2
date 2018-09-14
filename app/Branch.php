<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    //
    protected $fillable = [
        'name', 'brch_code', 'location_id',
    ];

    public function location(){
        return $this->belongsTo('App\Location');
    }
      /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
    */
    public function messages()
    {
        return [
            'name.required' => 'هذا الحقل مطلوب',
            'brch_code.required'  => 'هذا الحقل مطلوب',
            'brch_code.unique' => 'هذا الرمز مستخدم سابقاً'
        ];
    }
}
