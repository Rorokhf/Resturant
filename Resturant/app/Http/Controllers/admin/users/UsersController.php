<?php

namespace App\Http\Controllers\admin\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function employee(){
        return view('Admin.users.employee');
    }

    public function customer(){
        return view('Admin.users.custommer');
    }

    public function profile()
    {
        return view('Admin.users.Profile');
    }
}
