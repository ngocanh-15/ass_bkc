<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Bill_info extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "bill_info";

    static function get_one($bill_id)
    {
        $bill_info = DB::select("SELECT * FROM bill_info WHERE bill_id  = '$bill_id'");
        return $bill_info;
    }
}
