<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    /**
     * Display a listing of the branches.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Fetch all branches from the database
        $branches = Branch::all();

        // Return the view with the branches data
        return view('admin.addbranch', compact('branches'));
    }

    public function getBranches()
    {
        $branches = Branch::all(); // or any query to get your branches
    
        // Return the branches as JSON
        return response()->json($branches);
    }
    

    /**
     * Show the form for creating a new branch.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.addbranch', compact('branches'));
    }

    /**
     * Store a newly created branch in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'details' => 'nullable|string|max:500',
        ]);

        // Create a new branch in the database
        Branch::create($validated);

        // Redirect back to the branches index with a success message
        return redirect()->route('branches.index')->with('success', 'Branch added successfully!');
    }

    /**
     * Show the form for editing the specified branch.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        // Find the branch by ID
        $branch = Branch::findOrFail($id);

        // Return the edit view with the branch data
        return view('branches.edit', compact('branch'));
    }

    /**
     * Update the specified branch in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        // Find the branch by ID
        $branch = Branch::findOrFail($id);

        // Validate the incoming request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'details' => 'nullable|string|max:500',
        ]);

        // Update the branch in the database
        $branch->update($validated);

        // Redirect back to the branches index with a success message
        return redirect()->route('branches.index')->with('success', 'Branch updated successfully!');
    }

    /**
     * Remove the specified branch from the database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        // Find the branch by ID
        $branch = Branch::findOrFail($id);

        // Delete the branch from the database
        $branch->delete();

        // Redirect back to the branches index with a success message
        return redirect()->route('branches.index')->with('success', 'Branch deleted successfully!');
    }
}
