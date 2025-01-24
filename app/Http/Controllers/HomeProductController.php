<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
=======
use App\Models\Review;
>>>>>>> 5d9d91a (Initial commit or Updated files)
use App\Models\Mens; 
use App\Models\Women;
use App\Models\Unisex; 

class HomeProductController extends Controller
{
    public function showProducts()
    {
        $menProducts = Mens::orderBy('id', 'asc')->take(3)->get();
        $womenProducts = Women::orderBy('id', 'asc')->take(3)->get();
        $unisexProducts = Unisex::orderBy('id', 'asc')->take(3)->get();
<<<<<<< HEAD
        
        return view('home', compact('menProducts', 'womenProducts', 'unisexProducts'));
=======

        $reviews = Review::with([ 'user'])->latest()->get();
        
        return view('home', compact('menProducts', 'womenProducts', 'unisexProducts', 'reviews'));
>>>>>>> 5d9d91a (Initial commit or Updated files)
    }
}
