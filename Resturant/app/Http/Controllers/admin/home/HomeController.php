<?php

namespace App\Http\Controllers\admin\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index (){
        return view('Admin.home.home');
    }

    public function menu (){
        return view('Admin.home.Menu');
    }

   
}
