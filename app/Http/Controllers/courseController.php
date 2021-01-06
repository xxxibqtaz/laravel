<?php

namespace App\Http\Controllers;

use App\Category;
use App\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class courseController extends Controller
{
    public function showCourses()
    {
        $courses = Course::all();
        return view('admin/course/courses', ['courses' => $courses]);
    }
    public function addCourses()
    {
        $courses = Course::all();
        $category = Category::all();
        return view('admin/course/add', ['courses' => $courses]);
    }
    public function insertCourses(Request $request)
    {
        $course = new Course;
        $course->id_category = $request->id_category;
        $course->name = $request->name;
        $get_img = $request->file('image');
        if (isset($get_img)) {
            $get_name_img =uniqid(). '.' . $get_img->getClientOriginalExtension();
            $get_img->move(public_path('/upload'), $get_name_img);
            $course->image = $get_name_img;
        }
        $course->preview = $request->preview;
        $course->description = $request->description;
        $course->type = $request->type;
        $course->save();
        return redirect('admin/courses');
    }
    public function editCourses($id)
    {
        $course = Course::find($id);
        $courses = Course::all();
        return view("admin/course/edit", ['course' => $course, 'courses' => $courses]);
    }
    public function updateCourses(Request $request, $id)
    {
        $course = Course::find($id);
        $course->id_category = $request->id_category;
        $course->name = $request->name;
        $get_img = $request->file('image');
        if (isset($get_img)) {
            $get_name_img =uniqid(). '.' . $get_img->getClientOriginalExtension();
            $get_img->move(public_path('/upload'), $get_name_img);
            $course->image = $get_name_img;
        }
        $course->preview = $request->preview;
        $course->description = $request->description;
        $course->type = $request->type;
        $course->save();
        return redirect('admin/courses');
    }
    public function deleteCourses($id)
    {
        $course = Course::find($id)->delete();
        return redirect("admin/courses");
    }
}
