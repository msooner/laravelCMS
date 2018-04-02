<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Bouncer;
use DB;

class RolesController extends Controller
{
    //
    public function index()
    {
        $role = DB::select('select * from roles');
        return view('admin/roles/index', compact('role'));
    }

    public function createRole()
    {
        return view('admin/roles/create');
    }

    /*
     * 建立角色
     */
    public function createdRole(Request $request)
    {
        $name = $request->get('name');
        $title = $request->get('title');
        $role = Bouncer::role()->create([
            'name' => $name,
            'title' => $title
        ]);

        return redirect('admin/roles');


    }

    public function editRole($id)
    {
        $role = DB::select('select * from roles where id =' . $id);
        return view('admin/roles/edit', compact('role'));
    }

    public function editedRole(Request $request)
    {
        $name = $_POST['name'];
        $title = $_POST['title'];
        $id = $_POST['id'];
        $role = DB::table('roles')->where('id', $id)->update(['name' => $name, 'title' => $title]);
        if ($role) {
            return redirect('admin/roles');
        } else {
            return false;
        }
    }

    public function deletedRole($id)
    {
        $res = DB::table('roles')->delete($id);
        if ($res) {
            return redirect('admin/roles');
        }
    }
}
