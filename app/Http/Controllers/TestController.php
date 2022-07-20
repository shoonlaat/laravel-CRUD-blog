<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index(){
        return view('index');
    }
    public function about(){
       return view('about');
        //return request()->all();
    }
    public function aboutPost(){
        return request()->all();
    }
}
