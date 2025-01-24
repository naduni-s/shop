<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $userName = Auth::user()->name;
        $userName = Auth::check() ? Auth::user()->name : 'Guest';

        $reviews = Review::with([ 'user'])->latest()->get();
        return view('admin.review',compact('userName', 'reviews'));
    }



    public function store(Request $request, $productId)
    {
        $request->validate([
            'review' => 'required|string|max:1000',
            'rating' => 'required|integer|between:1,5',
        ]);

        Review::create([
            
            'user_id' => auth()->id(),
            'review' => $request->input('review'),
            'rating' => $request->input('rating'),
        ]);

        return redirect()->back()->with('success', 'Review submitted successfully!');
    }

    public function destroy($id)
{
    $review = Review::findOrFail($id);
    $review->delete();

    return redirect()->route('admin.review')->with('success', 'Review deleted successfully!');
}

}
