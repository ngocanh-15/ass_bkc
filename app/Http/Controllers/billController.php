<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Bill;
use App\Models\Bill_info;
use App\Models\User;
use App\Models\Customer;
use Illuminate\Http\Request;

class billController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bill = Bill::all();
        return view('user.bill.index',['bill'=>$bill]);
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
    public function show($bill_id,$product_id)
    {
        $bill = Bill::get_one($bill_id);
        $product = Product::get_one($product_id);
        $bill_info = Bill_info::get_one($bill_id);
        return view('user.bill.show',['bill'=>$bill,'product'=>$product,'bill_info'=>$bill_info]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($bill_id,$product_id)
    {
        $bill = Bill::get_one($bill_id);
        $product = Product::get_one($product_id);
        $bill_info = Bill_info::get_one($bill_id);
        return view('user.bill.edit',['bill'=>$bill,'product'=>$product,'bill_info'=>$bill_info]);
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
