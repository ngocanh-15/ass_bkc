<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class productsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view('user.product.index',['product'=>$product]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|min:2|max:255',
            'image' => 'required',
            'unit_price' => 'required',
            'status' => 'required',
            'date' => 'required',
            'user_id' => 'required',
            'categories_id' => 'required'
        ],
        [
            'name.required'=>'Product name not null',
            'name.min'=>'Product names must be between 2 and 255 characters long',
            'name.max'=>'Product names must be between 2 and 255 characters long',
            'image.required'=>'Product image not null',
            'unit_price.required'=>'Product unit_price not null',
            'status.required'=>'Product status not null',
            'date.required'=>'Product date create not null',
            'user_id.required'=>'Product user_id not null',
            'categories_id.required'=>'Product categories_id not null'
        ]);
        $name = $request->input('name');
        $image = $request->input('image');
        $unit_price = $request->input('unit_price');
        $quantity = $request->input('quantity');
        $status = $request->input('status');
        $date = $request->input('date');
        $user_id = $request->input('user_id');
        $categories_id = $request->input('categories_id');

        $rs = Product::store($name,$image,$unit_price,$quantity,$status,$date,$user_id,$categories_id);
        if($rs == false){
            return "Insert false!";
        }
        else{
            return redirect('user/product/index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($product_id)
    {
        $product = Product::get_one($product_id);
        return view('user.product.edit',['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $product_id)
    {
        $this->validate($request,[
            'name' => 'required|min:2|max:255',
            'image' => 'required',
            'unit_price' => 'required',
            'status' => 'required',
            'date' => 'required',
            'user_id' => 'required',
            'categories_id' => 'required'
        ],
        [
            'name.required'=>'Product name not null',
            'name.min'=>'Product names must be between 2 and 255 characters long',
            'name.max'=>'Product names must be between 2 and 255 characters long',
            'image.required'=>'Product image not null',
            'unit_price.required'=>'Product unit_price not null',
            'status.required'=>'Product status not null',
            'date.required'=>'Product date create not null',
            'user_id.required'=>'Product user_id not null',
            'categories_id.required'=>'Product categories_id not null'
        ]);
        $product_id = $request->input('product_id');
        $name = $request->input('name');
        $image = $request->input('image');
        $unit_price = $request->input('unit_price');
        $quantity = $request->input('quantity');
        $status = $request->input('status');
        $date = $request->input('date');
        $user_id = $request->input('user_id');
        $categories_id = $request->input('categories_id');
        
        $rs = Product::edit($name, $image, $unit_price, $quantity, $status, $date, $user_id, $categories_id, $product_id);
        if ($rs == false) {
            return "Edit false!";
        } else {
            return redirect('user/product/index');
        }
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
