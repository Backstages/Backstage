<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //登陆页面展示
    public function index()
    {
        return view('login.index');
    }

    //提交信息登陆
    public function login()
    {

    }

}