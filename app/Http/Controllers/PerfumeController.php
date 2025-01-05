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

    // Existing logic
    $scentType = $request->input('scent_type');
    $occasion = $request->input('occasion');
    $longevity = $request->input('longevity');
    $gender = $request->input('gender');
    $scentCombination = $request->input('scent_combination');

    $recommendedProducts = collect();
    $tables = ['mens', 'women', 'unisex'];

    foreach ($tables as $table) {
        $products = DB::table($table)->get();
        foreach ($products as $product) {
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
            if (str_contains($product->tags, $gender)) {
                $matchCount++;
            }

            if ($matchCount >= 3) {
                $recommendedProducts->push($product);
            }
        }
    }

    return view('recommender', compact('recommendedProducts'));
}
}
