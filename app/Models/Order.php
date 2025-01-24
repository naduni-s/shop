<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
<<<<<<< HEAD
        'name', 'phone', 'address', 'postal_code', 'cart_details', 'total_price', 'payment_method','delivery_status',
=======
        'name', 'phone', 'address', 'postal_code', 'cart_details', 'total_price', 'payment_method','delivery_status','user_id',
>>>>>>> 5d9d91a (Initial commit or Updated files)
    ];
}
