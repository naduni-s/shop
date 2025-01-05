<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RefillRequest;
use App\Models\Decant;
use App\Models\Order;  
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;

class RefillRequestController extends Controller
{
   
    public function store(Request $request)
    {


    // Check if the user is logged in
    if (!Auth::check()) {
        return redirect()->route('login')->with('error', 'You need to be logged in to submit a refill request.');
    }
        // Validate the input
        $validated = $request->validate([
            'address' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'decant_id' => 'required|exists:decants,id',
            'size' => 'required|string|in:5ml,10ml',
            'price' => 'required|numeric|min:0',
        ]);
    
        // Save the refill request
        RefillRequest::create([
            'user_id' => Auth::id(), // Ensure the user is logged in
            'decant_id' => $validated['decant_id'],
            'size' => $validated['size'],
            'price' => $validated['price'],
            'address' => $validated['address'],
            'phone_number' => $validated['phone_number'],
            'status' => 'Pending', // Default status
        ]);
    
        // Redirect with a success message
        return redirect()->route('refilling_request.index')->with('success', 'Your refill request has been submitted!');
    }

    public function create()
    {
        // Retrieve all decants for the dropdown
        $decants = Decant::all();
       
        // Return the view with decants data
        return view('decantrefill', compact('decants'));
    }


    public function index()
    {
        // Get requests for the logged-in user
        $requests = RefillRequest::where('user_id', Auth::id())->with(['decant'])->get();
      
    
        // Pass the data to the view
        return view('requests', compact('requests'));
    }



    
    public function destroy($id)
    {
        $request = RefillRequest::findOrFail($id); // Replace 'RefillRequest' with your model name
        $request->delete();
    
        return redirect()->route('admin.refilling')->with('success', 'Request deleted successfully.');
    }
    



    // View the admin refilling requests and payment details
    public function adminView()
    {
        // Retrieve all refill requests and payments
        $requests = RefillRequest::with(['user', 'decant'])->get();
        $userName = Auth::user()->name;
        $userName = Auth::check() ? Auth::user()->name : 'Guest';

       

        // Pass both requests and payments to the view
        return view('admin.refilling', compact('requests','userName'));
    }

    // Update the status of a refill request
    public function update(Request $request, RefillRequest $refillRequest)
    {
        // Validate the status input
        $validated = $request->validate([
            'status' => 'required|string|in:Pending,Approved,Rejected,Paid',  // Validate that only valid statuses are accepted
        ]);

        // Update the status of the refill request
        $refillRequest->status = $validated['status'];
        $refillRequest->save();

        // Redirect with success message
        return redirect()->route('admin.refilling')->with('success', 'Request status updated successfully!');
    }

    // Show payment details (separate from refill requests)
    public function showPayments()
    {
        // Retrieve all payment records from the database
        $payments = Payment::all();

        // Return the view with only payments (if you need a separate payments view)
        return view('admin.refilling', compact('payments'));
    }
}
