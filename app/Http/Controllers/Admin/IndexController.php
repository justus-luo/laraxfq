<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index()
    {
        return view('admin.index.index');
    }
    //欢迎页
    public function welcome(){
        return view('admin.index.welcome');
    }

    public function logout(){
        //退出登录
        auth()->logout();
        return redirect(route('admin.login'))->with('success','退出成功，请重新登录！');
    }
}
