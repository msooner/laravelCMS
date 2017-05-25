<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     *用户管理控制器
     * author：Leslie
     * time：13.50
     */
    public function index()
    {
        return view('backend/category/index');
    }
    /**
     * 增加用户
     * author：Leslie
     *
     */
    public function adduser()
    {
        return view('backend/category/add');
    }

    /**
     * 用户编辑
     * author：Leslie
     */
    public function edituser()
    {
        return view('backend/category/edit');

    }

    /**
     * 删除用户
     */
    public function deluser($id)
    {



        return view('backend/category/index');
    }

}
