<?php
/**
 * Created by PhpStorm.
 * User: Leslie
 * Date: 2017/5/21
 * Time: 16:52
 */


namespace app\Http\Controllers\backend;

use App\Http\Controllers\Controller;

class SettingController extends Controller{
    public function index()
    {
        return view('backend/system/index');
    }

}