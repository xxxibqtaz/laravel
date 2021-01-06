<?php

namespace App\Http\Controllers;

use App\Course;
use App\Lesson;
use Illuminate\Http\Request;

class lessonController extends Controller
{
    public function showLessons($id_course)
    {
        $lessons = Lesson::where('id_course',$id_course)->get();
        return view('admin/lesson/lessons', ['lessons' => $lessons]);
    }
    public function addLesson()
    {
        $lesson = Lesson::all();
        return view('admin/lesson/add', ['lesson' => $lesson]);
    }
    public function insertLesson(Request $request)
    {
        $lesson = new Lesson;
        $lesson->id_course = $request->id_course;
        $lesson->name = $request->name;
        $get_img = $request->file('image');
        if (isset($get_img)) {
            $get_name_img =uniqid(). '.' . $get_img->getClientOriginalExtension();
            $get_img->move(public_path('/upload'), $get_name_img);
            $course->image = $get_name_img;
        }
        $lesson->preview = $request->preview;
        $course->description = $request->description;
        $course->type = $request->type;
        $course->save();
        return redirect('admin/lesson');
    }
    public function editLesson($id)
    {
        $course = Course::find($id);
        $lesson = Course::all();
        return view("admin/course/edit", ['course' => $course, 'lesson' => $lesson]);
    }
    public function updateLesson(Request $request, $id)
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
        return redirect('admin/lesson');
    }
    public function deleteLesson($id)
    {
        $course = Course::find($id)->delete();
        return redirect("admin/lesson");
    }
}
