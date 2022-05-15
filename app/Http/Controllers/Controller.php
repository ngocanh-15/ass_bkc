<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Customer;
use App\Models\Categories;
use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function welcome()
    {
        $categories = Categories::all();
        $product = Product::all();
        return view('welcome',['categories'=>$categories, 'product'=>$product]);
    }

    public function about_us()
    {
        $categories = Categories::all();
        return view('about_us',['categories'=>$categories]);
    }

    public function contact()
    {
        $categories = Categories::all();
        return view('contact',['categories'=>$categories]);
    }

    public function news()
    {
        $categories = Categories::all();
        return view('news',['categories'=>$categories]);
    }

    public function showLoginForm()
    {
        return view('login');
    }

    function login(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');

        $rs = Auth::attempt(['email'=>$email,'password'=>$password]);
        if($rs == true){
            return redirect('/');
        }
        else{
            return view('login');
        }
    }

}
