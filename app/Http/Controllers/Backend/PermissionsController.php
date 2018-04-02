<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Bouncer;
use DB;

class PermissionsController extends Controller
{
    //

    public function index()
    {
        $permission = DB::select('select * from abilities');
        return view('admin/permissions/index', compact('permission'));
    }


    public function createPermission()
    {

        return view('admin/permissions/create');
    }

    public function createdPermission(Request $request)
    {
        $name = $request->get('name');
        $title = $request->get('title');
        $permission = Bouncer::ability()->create([
            'name' => $name,
            'title' => $title,
        ]);
        return redirect('admin/permissions');
    }


    /*
     * 编辑权限
     */

    public function editPermission($id)
    {
        $permission = DB::select('select * from abilities where id='.$id);
        return view('admin/permissions/edit',compact('permission'));
    }

    public function editedPermission(Request $request)
    {
        $name = $request->get('name');
        $title = $request->get('title');
        $id = $request->get('id');
        $res = DB::table('abilities')->where('id',$id)->update(['name'=>$name,'title'=>$title]);
        if ($res){
            return redirect('admin/permissions');
        }

    }


    /*
     * 删除权限
     */


    public function deletedPermission($id)
    {
        $res = DB::table('abilities')->delete($id);
        if ($res){
            return redirect('admin/permissions');
        }
    }
}
