<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class DashController extends Controller
{


    public function __construct()
    {
        $this->middleware('PUPU:PUPU');
    }


    public function dash()
    {
        return view('admin/dash');
    }


    

}
