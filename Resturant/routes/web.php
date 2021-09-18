<?php

use App\Http\Controllers\admin\home\HomeController;
use App\Http\Controllers\admin\product\ProductController;
use App\Http\Controllers\admin\traking\TrakeController;
use App\Http\Controllers\admin\users\UsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('wibsite.home.home');
});



Route::group(['prefix'=>'Admin'],function(){
    Route::get('Home',[HomeController::class,'index'])->name('Home.admin');
    Route::get('Menu',[HomeController::class,'menu'])->name('menu');

    Route::resource('product',ProductController::class);

    Route::group(['prefix'=>'Users'],function(){
    Route::get('employee',[UsersController::class,'employee'])->name('employee');
    Route::get('customer',[UsersController::class,'customer'])->name('customer');
    Route::get('profile',[UsersController::class,'profile'])->name('profile');
    });

    Route::group(['prefix'=>'traking'],function(){
    Route::get('order',[TrakeController::class,'order'])->name('order');
    Route::get('addOrder',[TrakeController::class,'addOrder'])->name('addOrder');
    Route::get('Reservation',[TrakeController::class,'Reservation'])->name('Reservation');
    Route::get('calender',[TrakeController::class,'calender'])->name('calender');

    });
});

