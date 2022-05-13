<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Events\Login;
use App\Http\Controllers\customerController;
use App\Http\Controllers\userController;
use App\Http\Controllers\categoriesController;
use App\Http\Controllers\productsController;
use App\Http\Controllers\billController;
use App\Http\Controllers\bill_infoController;
use App\Http\Controllers\Controller;

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

Route::get('/', [Controller::class,'welcome']);
Route::get('/about_us', [Controller::class,'about_us']);
Route::get('/contact', [Controller::class,'contact']);
Route::get('/news', [Controller::class,'news']);
//login - sing up customer
Route::get('/login', [Controller::class,'showLoginForm']);
Route::post('/login',[Controller::class,'login']);

//login - sing up admin (User table)
Route::get('/user/ad_login', [userController::class,'showLoginForm']);
Route::post('/user/ad_login',[userController::class,'postLogin']);

Route::group(['prefix'=>'user'],function(){
    //user/customer/index
    Route::group(['prefix'=>'customer'],function(){
        Route::get('/index', [customerController::class,'index']);
    });
    //user/user/index
    Route::group(['prefix'=>'user'],function(){
        Route::get('/dashboard', [userController::class,'show']);
        Route::get('/index', [userController::class,'index']);
    });
    //user/categories/index
    Route::group(['prefix'=>'categories'],function(){
        Route::get('/index', [categoriesController::class,'index']);
        Route::get('/create', [categoriesController::class,'create']);
        Route::post('/create',[categoriesController::class,'store']);
        Route::get('/edit/{categories_id}', [categoriesController::class,'edit']);
        Route::post('/edit/{categories_id}',[categoriesController::class,'update']);
    });
    //user/product/index
    Route::group(['prefix'=>'product'],function(){
        Route::get('/index', [productsController::class,'index']);
        Route::get('/create', [productsController::class, 'create']);
        Route::post('/create',[productsController::class,'store']);
        Route::get('/edit/{product_id}', [productsController::class, 'edit']);
        Route::post('/edit/{product_id}',[productsController::class,'update']);
    });
    //user/bill/index
    Route::group(['prefix'=>'bill'],function(){
        Route::get('/index', [billController::class,'index']);
        Route::get('/create', [billController::class, 'create']);
        Route::get('/edit/{bill_id}/{product_id}', [billController::class,'edit']);
        //bill=>bill_info
        Route::get('/show/{bill_id}/{product_id}', [billController::class,'show']);
    });
});