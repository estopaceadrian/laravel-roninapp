<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    
    //Table name
    protected $table = 'orderdetails';
    public $Order_Number = 'Order_Number';
}
