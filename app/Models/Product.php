<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "product";
    //insert
    static function store($name,$image,$unit_price,$quantity,$status,$date,$user_id,$categories_id){
        return DB::table('product')->insert([
            'name' => $name,
            'image' => $image,
            'unit_price' => $unit_price,
            'quantity' => $quantity,
            'status' => $status,
            'date' => $date,
            'user_id' => $user_id,
            'categories_id' => $categories_id
        ]);
    }
    // get bản ghi cần edit
    static function get_one($product_id)
    {
        $product = DB::select("SELECT * FROM product WHERE product_id = '$product_id'");
        return $product;
    }
    static function edit($name,$image,$unit_price,$quantity,$status,$date,$user_id,$categories_id,$product_id){
        $result = DB::update
        ("UPDATE product SET name = '$name', image = '$image', unit_price = '$unit_price', quantity = '$quantity', status = '$status', date = '$date', user_id = '$user_id', categories_id = '$categories_id' WHERE product_id='$product_id' ");
        //dd($result);
        return $result;
    }
}
