<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PerfumeController extends Controller
{
    public function recommendPerfume(Request $request)
{
    // Validate mandatory fields
    //$validated = $request->validate([
    //    'scent_type' => 'required|string',
    //    'occasion' => 'required|string',
    //    'longevity' => 'required|string',
    //    'gender' => 'required|string',
    //]);

    $scentType = $request->input('scent_type');
    $occasion = $request->input('occasion');
    $longevity = $request->input('longevity');
    $gender = $request->input('gender');
    $scentCombination = $request->input('scent_combination');

    $recommendedProducts = collect();
    $tables = ['mens', 'women', 'unisex']; // The tables for different perfumes

    foreach ($tables as $table) {
        $products = DB::table($table)->get();
        foreach ($products as $product) {

            // Check if the gender tag matches the selected gender
            if ($gender === 'male' && !str_contains($product->tags, 'male')) {
                continue;
            } elseif ($gender === 'female' && !str_contains($product->tags, 'female')) {
                continue;
            } elseif ($gender === 'unisex' && !str_contains($product->tags, 'unisex')) {
                continue;
            }

            // Now check for matching tags (scent type, occasion, longevity, scent combination)
            $matchCount = 0;
            if (str_contains($product->tags, $scentType)) {
                $matchCount++;
            }
            if (str_contains($product->tags, $occasion)) {
                $matchCount++;
            }
            if (str_contains($product->tags, $longevity)) {
                $matchCount++;
            }
            if (str_contains($product->tags, $scentCombination)) {
                $matchCount++;
            }

            // If 3 or more other tags match, add the product to the recommendations
            if ($matchCount >= 3) {
                $recommendedProducts->push($product);
            }
        }
    }


    return view('recommender', compact('recommendedProducts'));
}
}
