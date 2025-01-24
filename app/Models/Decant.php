<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Decant extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'size', 'price'];


    // Define inverse relationship to RefillRequest
    public function refillRequests()
    {
        return $this->hasMany(RefillRequest::class);
    }
}
