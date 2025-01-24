@extends('layouts.layout')
@section('title', 'Order Success')
@section('content')

<div class="text-center mt-12">
    <h1 class="text-4xl font-bold text-green-600 mb-6">Order Confirmed!</h1>
    <p class="text-lg text-gray-700">Thank you for your order. We will process it shortly.</p>
    <a href="{{ route('home') }}" class="mt-6 inline-block bg-blue-600 text-white py-2 px-6 rounded-lg hover:bg-blue-700 transition duration-200">
        Back to Home
    </a>
</div>

@endsection
