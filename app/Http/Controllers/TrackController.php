<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\RefillRequest;
use Illuminate\Support\Facades\Auth;

class TrackController extends Controller
{
    public function Track()
    {
        // Retrieve orders and refill requests for the authenticated user
        $orders = Order::where('user_id', Auth::id())->get(); // Filter by user_id
        $requests = RefillRequest::where('user_id', Auth::id())->get(); // Filter by user_id
        
        return view('track', compact('orders', 'requests'));
    }
}
