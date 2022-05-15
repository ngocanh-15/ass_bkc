<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Categories extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "categories";

    public function product()
    {
        return $this->hasMany('App\Product','product_id','categories_id');
    }
    //insert
    static function store($name){
        return DB::table('categories')->insert([
            'name'=>$name
        ]);
    }
    // get data edit
    static function get_one($categories_id)
    {
        $category = DB::select("SELECT * FROM categories WHERE categories_id = '$categories_id'");
        return $category;
    }

    static function edit($name, $categories_id){
        $result = DB::update("UPDATE categories SET name = '$name' WHERE categories_id='$categories_id'");
        return $result;
    }
    
}
