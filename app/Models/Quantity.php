<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quantity extends Model
{
    use HasFactory;

    //Table name
    protected $table = 'quantity';
    public $quantity = 'qty';
}
