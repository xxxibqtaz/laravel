<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table='courses';
    protected $filltable=['id_category','name','time','total_lessons','image','preview','description','type','review'];
    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo(Category::class,'id_category','id')
            ->select(['id','name']);
    }
}
