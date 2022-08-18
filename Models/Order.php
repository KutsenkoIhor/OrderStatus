<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

//    For mass assignment of values
    protected $fillable = [
        'customer_id',
        'product_id',
        'order_status_id',
    ];

//    We bind the model to the name of the table
    protected $table = 'orders';

//    Define primaryKey
    protected $primaryKey = 'id';

//    Implement a many-to-one relationship
    public function orderStatus()
    {
        return $this->belongsTo(OrderStatus::class, "order_status_id");
    }
}