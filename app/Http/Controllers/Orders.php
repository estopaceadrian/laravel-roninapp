<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
class Orders extends Controller
{
    //
    public function getOrders(){
        $items = Order::all();
        //select  * from orders
        return $items;
    }
}
