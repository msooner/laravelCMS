<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MailController extends Controller
{
    //
    public function index()
    {
        return view('admin/mails/index');
    }
}
