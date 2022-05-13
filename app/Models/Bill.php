<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Bill extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "bill";

    // get bản ghi
    static function get_one($bill_id)
    {
        $bill = DB::select("SELECT * FROM bill WHERE bill_id = '$bill_id'");
        return $bill;
    }
}
