<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 

class OrderDetailModel extends Model
{
    use HasFactory;

    protected $table = 'orders';
    
    protected $fillable = [ 
        'fullname',
        'email',
        'address',
        'phone',
        'payment_id',
        'payment_mode',
        'tracking_no',

    ];

    public function orderitems()    
    {
        return $this-hasMany(Orderitems::class, 'order_id', 'id');
    }
    public $timestamps = false; 
}
