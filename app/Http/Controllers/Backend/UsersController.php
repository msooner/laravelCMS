<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
class UsersController extends Controller
{
    /*
     * 用户列表
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('admin/users/index',compact('users'));
    }

    /*
    * 新增用户
    */
    public function createUser()
    {
        return view('admin/users/create');
    }

    /*
     * 编辑用户
     */
    public function editUser()
    {
        return view('admin/users/edit');
    }
    /*
     * 删除用户
     */
    public function delUser()
    {

    }
}
