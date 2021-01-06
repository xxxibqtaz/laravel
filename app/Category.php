<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    protected $table='category';

    public static function showCategory()
    {
        $category = DB::table('category')->get();
        return $category;
    }
    public static function insertCategory($name,$image)
    {
        $category = DB::table('category')->insert(['name' => $name, 'image' => $image]);
        return $category;
    }
    public static function categoryByID($id)
    {
        $category = DB::table('category')->where('id', $id)->first();
        return $category;
    }
    public static function insertCategoryByID($id,$name,$image)
    {
        $category = DB::table('category')->where('id', $id)->update(['name' => $name, 'image' => $image]);
        return $category;
    }
    public static function deleteCategoryByID($id)
    {
        $category = DB::table('category')->where('id', $id)->delete();
        return $category;
    }
}
