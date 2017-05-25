<?php

namespace App\Http\Controllers\backend;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    /**
     *用户管理控制器
     * author：Leslie
     * time：13.50
     */
    public function index()
    {
        $user = new User();

        $data = $user->show();

        return view('backend/user/index')->with('data',$data);
    }
    /**
     * 增加用户
     * author：Leslie
     *
     */
    public function adduser()
    {
        return view('backend/user/add');
    }

    /**
     * 用户编辑
     * author：Leslie
     */
    public function edit($id)


    {
        $user = new User();

        $data = $user->edit($id);


        return view('backend/user/edit')->with('data',$data);

    }

    public function change()
    {
        $input = Input::except('_token');
      //dd($data);die;
      if (empty($input)){

          return view('backend/error');

      }else{

          $users = new User();

          $res= $users->where('id',$input['id'])->update($input);


          if ($res){
              echo "xiugaicheng";

              return redirect('user/index');
          }else{
              return view('backend/error');

          }
      }

    }

    /**
     * 删除用户
     */
    public function deluser($id)
    {



        return view('backend/user/index');
    }

}
