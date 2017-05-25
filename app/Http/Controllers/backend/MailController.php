<?php
/**
 * Created by PhpStorm.
 * User: Leslie
 * Date: 2017/5/21
 * Time: 23:46
 */

namespace app\Http\Controllers\backend;

use App\Http\Controllers\Controller;

class MailController extends Controller{

    public function index()
    {
        return view('backend/mail/index');
    }
    
}