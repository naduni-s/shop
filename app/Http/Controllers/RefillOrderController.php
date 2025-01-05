<?php

namespace App\Http\Controllers;

use App\Models\RefillRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

class RefillOrderController extends Controller
{
    public function index()
    {
       
        $requests = RefillRequest::with(['user', 'decant'])->get(); 
        $userName = Auth::user()->name;
        $userName = Auth::check() ? Auth::user()->name : 'Guest';
        return view('delivery.refillorders',compact('userName','requests'));
    }
}
