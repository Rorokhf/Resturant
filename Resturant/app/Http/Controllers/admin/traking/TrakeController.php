<?php

namespace App\Http\Controllers\admin\traking;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrakeController extends Controller
{
    public function order(){
        return view('Admin.traking.orderTrake');
    }
    public function Reservation()
    {
        return view('Admin.traking.Reservation');
    }

    public function calender()
    {
        return view('Admin.traking.calender');
    }
    public function addOrder(){
        return view('Admin.traking.addOrder');
    }
}
