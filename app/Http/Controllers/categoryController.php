<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function showCategory()
    {
        $category = Category::showCategory();
        return view('admin/category/category', ['category'=>$category]);
    }
    public function addCategory()
    {
        return view('admin/category/add');
    }
    public function insertCategory(Request $request)
    {
        $name = $request->name;
        $get_name_img  = '';
        $get_img = $request->file('img');
        if ($get_img) {
            $get_name_img =uniqid(). '.' . $get_img->getClientOriginalExtension();
            $get_img->move(public_path('/upload'), $get_name_img);
        }
        Category::insertCategory($name,$get_name_img);
        return redirect('admin/category');
    }
    public function editCategory(Request $request, $id)
    {
        $category = Category::categoryByID($id);

//        if (file('img'))
//        {
//            $get_img = $request->file('img');
//        }
//        $img = $get_img->getClientOriginalName();
        return view("admin/category/edit", ['category' => $category]);
    }
    public function updateCategory(Request $request,$id)
    {
        $name = $request->name;
        $get_name_img  = '';
        $get_img = $request->file('img');
        if ($get_img) {
            $get_name_img =uniqid(). '.' . $get_img->getClientOriginalExtension();
            $get_img->move(public_path('/upload'), $get_name_img);
        }
        Category::insertCategoryByID($id,$name,$get_name_img);
        return redirect('admin/category');
    }
    public function deleteCategory($id)
    {
        $category = Category::deleteCategoryByID($id);
        return redirect("admin/category");
    }
}
