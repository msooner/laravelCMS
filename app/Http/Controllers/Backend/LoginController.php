<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{

    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'admin/dash';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:PUPU', ['except' => 'logout']);
    }


    public function showLoginForm()
    {

        return view('admin/login');
    }


    /**
     * 自定义认证驱动
     */
    protected function guard()
    {
        return auth()->guard('PUPU');
    }

    public function logout()
    {
        Auth::guard('PUPU')->logout();

        return Redirect::to('admin/login');
    }

}
