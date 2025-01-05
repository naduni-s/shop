@extends('layouts.layout')

@section('title', 'Order Summary')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-semibold mb-4">My Orders</h1>

    @if($orders->isEmpty())
        <p class="text-gray-500">No orders found.</p>
    @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($orders as $order)
                <div class="border p-4 rounded-lg shadow-lg">
                    <h2 class="text-lg font-medium">{{ $order->name }}</h2>
                    <p class="text-sm text-gray-500">Phone: {{ $order->phone }}</p>
                    <p class="text-sm text-gray-500">Address: {{ $order->address }}</p>
                    <p class="text-sm text-gray-500">Postal Code: {{ $order->postal_code }}</p>

                    <h3 class="text-md font-semibold mt-2">Ordered Products:</h3>
                    @php
                        $products = json_decode($order->products, true);
                    @endphp
                    @if(is_array($products))
                        @foreach ($products as $item)
                            <div class="text-sm text-gray-500">
                                Perfume Name: {{ $item['name'] }}<br>
                                Size: {{ $item['size'] }}<br>
                                Quantity: {{ $item['quantity'] }}
                            </div>
                        @endforeach
                    @else
                        <p>No products available</p>
                    @endif
                    
                    <p class="text-sm text-gray-500 mt-2">Total Price: Rs. {{ number_format($order->total_price, 2) }}</p>
                    <p class="text-sm text-gray-500">Payment Method: {{ $order->payment_method }}</p>
                    
                    <p class="text-sm text-gray-500 mt-2">Delivery Status:
                        @if($order->delivery_status === 'Pending')
                            <span class="text-yellow-500 font-bold">Pending</span>
                        @elseif($order->delivery_status === 'Processing')
                            <span class="text-orange-500 font-bold">Processing</span>
                        @elseif($order->delivery_status === 'Shipped')
                            <span class="text-blue-500 font-bold">Shipped</span>
                        @elseif($order->delivery_status === 'Delivered')
                            <span class="text-green-500 font-bold">Delivered</span>
                        @elseif($order->delivery_status === 'Cancelled')
                            <span class="text-red-500 font-bold">Cancelled</span>
                        @endif
                    </p>

                </div>
            @endforeach
        </div>
    @endif

    @if($requests->isEmpty())
        <p class="text-gray-500">No refill orders found.</p>
    @else
        <h1 class="text-2xl font-semibold mt-8 mb-4">My Refilling Orders</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($requests as $request)
                <div class="border p-4 rounded-lg shadow-lg">
                    <h2 class="text-lg font-medium">{{ $request->user->name ?? 'N/A' }}</h2>
                    <p class="text-sm text-gray-500">Phone: {{ $request->phone_number }}</p>
                    <p class="text-sm text-gray-500">Address: {{ $request->address }}</p>

                    <h3 class="text-md font-semibold mt-2">Decant Details:</h3>
                    <div class="text-sm text-gray-500">
                        Name: {{ $request->decant->name ?? 'N/A' }}<br>
                        Size: {{ $request->size }}<br>
                        Price: Rs. {{ number_format($request->price, 2) }}
                    </div>

                    <p class="text-sm text-gray-500 mt-2">Delivery Status:
                        @if($request->delivery_status === 'Pending')
                            <span class="text-yellow-500 font-bold">Pending</span>
                        @elseif($request->delivery_status === 'Processing')
                            <span class="text-orange-500 font-bold">Processing</span>
                        @elseif($request->delivery_status === 'Shipped')
                            <span class="text-blue-500 font-bold">Shipped</span>
                        @elseif($request->delivery_status === 'Delivered')
                            <span class="text-green-500 font-bold">Delivered</span>
                        @elseif($request->delivery_status === 'Cancelled')
                            <span class="text-red-500 font-bold">Cancelled</span>
                        @endif
                    </p>
                </div>
            @endforeach
        </div>
    @endif

</div>
@endsection
