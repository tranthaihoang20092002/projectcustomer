<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'tbl_customer';
    protected $fillable = ['id','cus_name','cus_email','cus_password','cus_phone','cus_image','cus_mssv','cus_sothich'];
}
