<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderStatus extends Model
{
    use HasFactory;

//    We bind the model to the name of the table
    protected $table = 'orders_status';

//    Define primaryKey
    protected $primaryKey = 'id';

//    Implement a one-to-many relationship
    public function order()
    {
        return $this->hasMany(Order::class, "order_id");
    }
}