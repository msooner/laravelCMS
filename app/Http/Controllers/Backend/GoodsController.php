<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class GoodsController extends Controller
{
    //
    public function index()
    {
        $goods = DB::table('goods')
            ->join('users', 'users.uid', '=', 'goods.uid')
            ->join('products', 'products.pid', '=', 'goods.pid')
            ->join('types','types.type_id','=','goods.type_id')
            ->select('goods.gid','products.product_name','types.type_name','users.user_name','users.phone_num')
            ->paginate(10);

        return view('admin/goods/index', compact('goods'));
    }



}
