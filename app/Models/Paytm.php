<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paytm extends Model
{
    use HasFactory;
    protected $table = 'paytms';

    protected $fillable = ['name','mobile','email','status','fee','order_id','transaction_id'];
}
