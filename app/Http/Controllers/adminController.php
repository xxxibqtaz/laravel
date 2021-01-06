<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function admin()
    {
        if (session('permission')) {
            return view('admin/home');
        } else {
            return redirect('user/login');
        }
    }
}
