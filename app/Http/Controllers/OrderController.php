<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Auth;
>>>>>>> 5d9d91a (Initial commit or Updated files)

class OrderController extends Controller
{
    public function confirmOrder(Request $request)
    {
        // Validate incoming data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'address' => 'required|string',
            'postal_code' => 'required|string|max:10',
            'payment_method' => 'required|string',
            'total_price' => 'required|numeric',

        ]);

        // Get cart items from session
        $cart = session('cart', []);
        $subtotal = 0;
        foreach ($cart as $item) {
            $subtotal += $item['price'] * $item['quantity'];
        }
        $courierCharge = 400; // Fixed courier charge

        // Create an order
        $order = new Order();
        $order->name = $validatedData['name'];
        $order->phone = $validatedData['phone'];
        $order->address = $validatedData['address'];
        $order->postal_code = $validatedData['postal_code'];
        $order->products = json_encode($cart); // Convert cart items to JSON
        $order->subtotal = $subtotal;
        $order->courier_charge = $courierCharge;
        $order->total_price = $validatedData['total_price'];
        $order->payment_method = $validatedData['payment_method'];
        $order->delivery_status = 'Pending';
<<<<<<< HEAD
=======
        $order->user_id = Auth::id();
>>>>>>> 5d9d91a (Initial commit or Updated files)
        $order->save(); // Save order to the database

        // Clear the cart session
        session()->forget('cart');

        // Redirect to a success page (or the homepage)
        return redirect('/')->with('success', 'Order placed successfully!');
    }

<<<<<<< HEAD


=======
>>>>>>> 5d9d91a (Initial commit or Updated files)
    public function updateDeliveryStatus(Request $request, $id)
{
    // Validate the incoming data
    $validatedData = $request->validate([
        'delivery_status' => 'required|in:Pending,Processing,Shipped,Delivered,Cancelled',
    ]);

    // Retrieve the order by ID
    $order = Order::find($id);

    if (!$order) {
        return redirect()->back()->withErrors('Order not found.');
    }

    // Update the delivery status
    $order->delivery_status = $validatedData['delivery_status'];
    $order->save();

    return redirect()->back()->with('success', 'Delivery status updated successfully.');
}

<<<<<<< HEAD


=======
>>>>>>> 5d9d91a (Initial commit or Updated files)
public function destroy($id)
{
    $order = Order::findOrFail($id);
    $order->delete();

    return redirect()->route('delivery.dashboard')->with('success', 'Order deleted successfully');
}
<<<<<<< HEAD


=======
>>>>>>> 5d9d91a (Initial commit or Updated files)
    
}
