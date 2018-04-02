<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SuperUser;
class ProfileController extends Controller
{
    //
    public function index()
    {
        return view('admin/profile/index');
    }


    public function upload()
    {
       //  dd($_FILES['avatar']);die;
       // $user = JWTAuth::parseToken()->authenticate();
        if ((($_FILES["avatar"]["type"] == "image/png")
                || ($_FILES["avatar"]["type"] == "image/jpeg")
                || ($_FILES["avatar"]["type"] == "image/pjpeg"))
            && ($_FILES["avatar"]["size"] < 1000000)) {
            if ($_FILES["avatar"]["error"] > 0) {
                return 1;
            } else {
                move_uploaded_file($_FILES["avatar"]["tmp_name"],
                    'uploads/' . $_FILES["avatar"]["name"]);
                $data = [
                    'avatar' => "http://leslie.net.cn/uploads/" . $_FILES["avatar"]["name"],


                ];
                $res = SuperUser::where('name', auth('PUPU')->user()->name)->update($data);
                if (!is_null($res)) {
                   return redirect('admin/profile')->with('message', '修改头像成功');
                } else {
                    return view('admin/profile')->with('message', '修改头像失败');
                }
            }
        }
    }
}
