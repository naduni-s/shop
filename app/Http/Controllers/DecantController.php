<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Decant;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class DecantController extends Controller

{
    public function index()
    {
        $decants = Decant::all();
        return view('decantrefill', compact('decants'));
//     return view('decantrefill');
    }

    public function AddDecants()
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            $userName = Auth::user()->name;
        } else {
            // Redirect to login page or handle accordingly if the user is not authenticated
            return redirect()->route('login'); // or return a response like 'Unauthorized'
        }
    
        $decants = Decant::all();
        return view('admin.adddecant', compact('decants', 'userName'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'size' => 'required|string|max:50',
            'price' => 'required|numeric|min:0',
        ]);

        Decant::create($validated);

        return redirect()->back()->with('success', 'Decant added successfully!');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'size' => 'required|string|max:50',
            'price' => 'required|numeric|min:0',
        ]);

        $decant = Decant::findOrFail($id);
        $decant->update($validated);

        return redirect()->back()->with('success', 'Decant updated successfully!');
    }

    public function destroy($id)
    {
        $decant = Decant::findOrFail($id);
        $decant->delete();

        return redirect()->back()->with('success', 'Decant deleted successfully!');
    }





    public function showRefillForm()
{
    $user = Auth::user(); // Get logged-in user
    $decants = Decant::all(); // Fetch decants with their base prices

    return view('decantrefill', compact('user', 'decants'));
}


}


