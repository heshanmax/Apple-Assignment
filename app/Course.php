<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $fillable = [
        'name', 'year'
    ];



    public function student(){
       return $this->hasMany('App\Student');
    }
}
