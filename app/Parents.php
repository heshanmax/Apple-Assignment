<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    //
    protected $fillable = [
        'name', 'type', 'dob',
    ];


    public function student()
    {
       return $this->belongsToMany('App\Student');
    }
}
