<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class userController extends Controller
{
    public function login()
    {
        return view('user/pages-login');
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('user/pages-login');
    }
    public function checkLogin(Request $request)
    {
        $user = $request->user;
        $pass = md5($request->password);
        $validate = User::checkLogin($user, $pass);
        if ($validate) {
            session(['id' => $validate->id]);
            $user = User::userByID(session('id'));
            if ($user -> permission==0) {
                return redirect('/');
            }else{
                session(['permission' => $user -> permission]);
                return redirect('/admin');
            }
        } else {
            return redirect('user/login');
        }
    }
    public function signup(){
        return view('user/pages-register');
    }
    public function insertUser(Request $request)
    {
        $name = $request->name;
        $user = $request->user;
        $password = $request->pass;
        $mail = $request->email;
        $phone = $request->phone;
        $image = $request->img;
        $birthday = $request->birthday;
        $address = $request->address;
        $register_date = date('Y-m-d H:m:s', time());
        User::insertUser($user,md5($password),$name,$mail,$birthday,$address,$phone,$image,$register_date);
        return redirect('user/login');
    }
}
