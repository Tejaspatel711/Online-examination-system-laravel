<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin extends Controller
{
    public function index()
    {
       return view('admin/dashboard');
    }
    public function exam_category()
    {
        return view('admin/exam_categry');
    }
    public function add_new_category(Request $request)
    {
        print_r($request->all());
    }
}
