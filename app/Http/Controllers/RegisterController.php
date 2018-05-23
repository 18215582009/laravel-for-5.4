<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model;

class RegisterController extends Controller
{

    public  function  index(){

        return view("register.index");
    }
    //注册逻辑
    /**
     *
     */
    public  function  register(){


        print_r(123);exit;
        //验证
        $this->validate(request(),[
            'name'=>'required|min:3|unique:users,name',
            'password'=>'required|min:5|max:10|confirmed',
        ]);
        //逻辑
        $name = request('name');
        $name = bcrypt(request('password'));//对密码加密操作
        $user = User::create(compact('name','password'));
        //渲染



    }

}
