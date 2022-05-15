<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    //login - signup admin with user 
    public function showLoginForm()
    {
        return view('user.ad_login');
    }
    public function postLogin(Request $request)
    {
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required|min:6|max:100'
        ],
        [
            'email.required'=>'Email not null',
            'password.required'=>'Password not null',
            'password.min'=>'Password must be between 6 and 100 characters long',
            'password.max'=>'Password must be between 6 and 100 characters long'
        ]);
        $email = $request->input('email');
        $password = $request->input('password');

        $rs = Auth::attempt(['email'=>$email,'password'=>$password]);
        if($rs == true){
            return redirect('/user/user/dashboard');
        }
        else{
            dd($email,$password);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('user.user.index',['user'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('user.user.dashboard');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
