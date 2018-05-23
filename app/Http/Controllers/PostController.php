<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //文章列表页
    public function index(){

        return view("post/index");

    }

    //文章详情页面
    public function show(){

        return view("post/show");

    }

    //创建文章页面
    public function create(){

        return view("post/create");
    }

    //创建逻辑
    public  function  store(){

        return view("post/store");

    }

    //文章编辑
    public  function edit(){

        return view("post/edit");

    }

    //文章更新
    public  function update(){

        return view("post/update");

    }

    //文章删除
    public  function delete(){

        return view("post/delete");

    }















}


