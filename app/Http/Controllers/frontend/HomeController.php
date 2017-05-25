<?php
/**
 * Created by PhpStorm.
 * User: Leslie
 * Date: 2017/5/20
 * Time: 17:32
 */

namespace App\Http\Controllers\frontend;

use App\Console\Commands\SendMes;
use App\Http\Controllers\Controller;
use App\Jobs\JustQueue;
use App\Theme;

use Illuminate\Support\Facades\Queue;
use Illuminate\Support\Facades\Redis;


class HomeController extends Controller{
    public function index()
    {


        $theme = Theme::all()->toArray();

        return view('frontend/index',['theme'=>$theme]);
    }

}