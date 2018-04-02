<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SuperUser;
use Illuminate\Support\Facades\DB;
use Crypt;
use Bouncer;
class SuperUserController extends Controller
{
    public function index()
    {
        $users = SuperUser::paginate(10);;
        return view('admin/super/index',compact('users'));
    }


    public function search()
    {
        $keyword = $_POST['keyword'];
        $superUser = DB::table('super_users')
                     ->where('name','like',$keyword.'%')
                        ->paginate(10);
        if (!is_null($superUser)){
            return view('admin/super/search',compact('superUser'));
        }
    }
    
    /*
     * 添加管理员
     */
    public function addAdmin()
    {
        $role = DB::select('select * from roles');
        return view('admin/super/create',compact('role'));
    }


    public function created(Request $request)
    {
        $role = $request->get('role');
        $data = [
            'name'=> $request->get('name'),
            'email'=> $request->get('name'),
            'password'=> Crypt::encrypt($request->get('password')),
        ];

        $res = DB::table('super_users')->insert($data);
        dd($res);die;
        if ($res){
            $user = SuperUser::where('name',$request->get('name'))->get();
            Bouncer::assign($role)->to($user);
            return redirect('admin/superUsers');
        }
    }
}
