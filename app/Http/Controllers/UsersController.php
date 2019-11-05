<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{

    //用户注册页面
    public function create()
    {
        return view('users.create');
    }

    //注册数据提交
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|min:6'
        ]);
        return;



    }




    //个人中心页面
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }






}
