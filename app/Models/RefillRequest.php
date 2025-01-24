<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefillRequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'decant_id',
        'size',
        'price',
        'address',
        'phone_number',
        'status',
        'delivery_status',
    ];

     // Define relationship to User
     public function user()
     {
         return $this->belongsTo(User::class);
     }
 
     // Define relationship to Decant
     public function decant()
     {
         return $this->belongsTo(Decant::class);
     }
}
