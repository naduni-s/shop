<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RefillRequest;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DeliveryController extends Controller
{
    public function dashboard()
    {
      
        $totalOrders = DB::table('orders')->count();
        $orders = DB::table('orders')->get();

        $totalRefill = DB::table('refill_requests')->count();
        $refill_requests = DB::table('refill_requests')->get(); 

        $userName = Auth::user()->name;
        $userName = Auth::check() ? Auth::user()->name : 'Guest';
        return view('delivery.dashboard', compact('userName','orders', 'totalOrders','totalRefill','refill_requests' )); // Delivery dashboard view
    }

    public function index()
{
    // Fetch all refill requests
    $requests = RefillRequest::all();
    return view('delivery.refillorders', compact('requests'));
}

public function updateStatus(Request $request, $id)
{
    // Validate the input
    $validated = $request->validate([
        'delivery_status' => 'required|string|in:Pending,Processing,Shipped,Delivered,Cancelled',
    ]);

    // Find the refill request by ID
    $request = RefillRequest::findOrFail($id);

    // Update the delivery status
    $request->delivery_status = $validated['delivery_status'];
    $request->save();

    // Redirect back with a success message
    return redirect()->route('delivery.refillorders')->with('status', 'Delivery status updated successfully!');
}

    
}

