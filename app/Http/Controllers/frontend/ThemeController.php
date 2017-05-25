<?php
/**
 * Created by PhpStorm.
 * User: Leslie
 * Date: 2017/5/22
 * Time: 0:13
 */
namespace app\Http\Controllers\frontend;

use App\Http\Controllers\Controller;



use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rules\In;


class ThemeController extends Controller {

    public function change($id)
    {
        if ($id==1){


            return view('frontend/index-light');
        }else{

            return view('frontend/index-dark');

        }

    }
    
}