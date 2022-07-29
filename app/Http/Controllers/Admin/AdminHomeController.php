<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cat;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    //

    public function index()
    {
        # code...
        return view('Admin.AdminHome');
        // return 'hello' ;
    }


    //Category
    public  function AddCategory(Request $request)
    {
        # code...
        $cate = new Cat();
        $cate->name_ar = $request->input('name-an');
        $cate->name_en = $request->input('name-en');
        $cate->desc_en = $request->input('desc-en');
        $cate->desc_ar = $request->input('desc-ar');
        $cate->img = $request->file('categ-img')->store('categories');
        $cate->save();
        // return  view('Admin.AdminHome');
    }
}
