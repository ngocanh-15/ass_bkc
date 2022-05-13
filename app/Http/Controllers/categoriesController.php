<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class categoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categories::all();
        return view('user.categories.index',['categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.categories.create');
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
            'name' => 'required|min:2|max:255|unique:categories,name'
        ],
        [
            'name.required'=>'Category name not null',
            'name.min'=>'Category names must be between 2 and 255 characters long',
            'name.max'=>'Category names must be between 2 and 255 characters long',
            'name.unique'=>'Category name already exists'
        ]);
        $name = $request->input('name');

        $rs = Categories::store($name);
        if($rs == false){
            return "Insert false!";
        }
        else{
            return redirect('user/categories/index');
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
    public function edit($categories_id)
    {
        $categories = Categories::get_one($categories_id);
        return view('user.categories.edit',['categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $categories_id)
    {
        $this->validate($request,[
            'name' => 'required|min:2|max:255|unique:categories,name'
        ],
        [
            'name.required'=>'Category name not null',
            'name.min'=>'Category names must be between 2 and 255 characters long',
            'name.max'=>'Category names must be between 2 and 255 characters long',
            'name.unique'=>'Category name already exists'
        ]);
        
        $categories_id = $request->input('categories_id');
        $name = $request->input('name');
        
        $rs = Categories::edit($name, $categories_id);
        if ($rs == false) {
            return "Edit false!";
        } else {
            return redirect('user/categories/index');
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
