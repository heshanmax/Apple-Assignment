<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable = [
        'name', 'dob', 'city','course_id','parent_id'
    ];

    public function course(){
      return  $this->belongsTo('App\Course');
    }

    public function parent(){
      return  $this->belongsToMany('App\Parent');
    }

}
