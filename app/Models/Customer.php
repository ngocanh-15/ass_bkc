<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Customer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "customer";

    static function get_one($id)
    {
        $customer = DB::select("SELECT * FROM customer WHERE id = '$id'");
        return $customer;
    }
}
