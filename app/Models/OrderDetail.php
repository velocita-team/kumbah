<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $table    = 'order_details';
    protected $fillable = ['order_id', 'service_id', 'name', 'clothes', 'service_quantity', 'subtotal', 'discount', 'total'];
}
