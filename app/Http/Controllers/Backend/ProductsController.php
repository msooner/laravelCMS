<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class ProductsController extends Controller
{
    //
    public function index()
    {
        $products = Product::all();
        return view('admin/products/index', compact('products'));
    }

    /*
    * 增加产品页面
    */
    public function create()
    {
        return view('admin/products/create');
    }

    /*
     * 增加产品
     */
    public function created()
    {
        $product_name = $_POST['product_name'];
        dd($product_name);die;
        $product = Product::create(['product_name' => $product_name]);
        if (!is_null($product)) {
            return true;
        } else {
            return false;
        }

    }

    public function check()
    {
        $products = Product::all();
        return view('admin/products/check', compact('products'));
    }


}
