<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    public function dashboard()
    {
        $showcata=DB::table('category')->get();
        $showbanner=DB::table('banner')->first();
        $showkh = DB::table('courses')
            ->join('category', 'courses.id_category', '=', 'category.id')
            ->select('courses.*', 'category.name AS CataName')
            ->get();
        return view('layout/dashboard', ["course" => $showkh, "category"=> $showcata, "banner"=> $showbanner]);
    }
    public function courses()
    {
        $showcata=DB::table('category')->get();
        $showkh = DB::table('courses')
            ->join('category', 'courses.id_category', '=', 'category.id')
            ->select('courses.*', 'category.name AS CataName')
            ->get();
        return view('layout/courses',["category"=> $showcata, "course" => $showkh]);
    }
    public function coursesByID($id)
    {
        $showcata=DB::table('category')->get();
        $showkh = DB::table('courses')
            ->join('category', 'courses.id_category', '=', 'category.id')
            ->select('courses.*', 'category.name AS CataName')
            ->where('courses.id_category', $id)
            ->get();
        return view('layout/courses',["category"=> $showcata, "course" => $showkh]);
    }
    public function courseintro()
    {
        $showcata=DB::table('category')->get();
        return view('layout/course-intro',["category"=> $showcata]);
    }
    public function courselesson()
    {
        $showcata=DB::table('category')->get();
        $showlessons = DB::table('lessons')->get();
        return view('layout/course-lesson-1',["category"=> $showcata, "lessons"=> $showlessons]);
    }
    public function book()
    {
        return view('layout/book');
    }
    public function episode()
    {
        return view('layout/episode');
    }
    public function coursepath()
    {
        return view('layout/course-path');
    }
    public function blog()
    {
        return view('layout/blog-1');
    }
}
