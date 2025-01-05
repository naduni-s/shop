<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\RefillRequest;

class TrackController extends Controller
{
    
    public function Track()/////////////////////////////
    {
        $orders = Order::all(); // Or fetch orders based on your logic
        $requests = RefillRequest::where('user_id', auth()->id())->get(); 
        
        return view('track', compact('orders', 'requests'));
    }
    
}
