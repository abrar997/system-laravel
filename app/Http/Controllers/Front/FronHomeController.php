<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FronHomeController extends Controller
{
    //
    public function index()
    {
        # code...
        return view('Front.FrontHome');
    }
}
