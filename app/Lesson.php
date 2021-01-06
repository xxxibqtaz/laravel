<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $table='lessons';
    protected $filltable=['id_course','name','time','content','video'];
    public $timestamps = false;

    public function course()
    {
        return $this->belongsTo(Course::class,'id_course','id')
            ->select(['id','name']);
    }
}
