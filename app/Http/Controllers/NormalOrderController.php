<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NormalOrderController extends Controller
{
    public function index()
    {
        $orders = DB::table('orders')->get();
        
        $userName = Auth::user()->name;
        $userName = Auth::check() ? Auth::user()->name : 'Guest';
        return view('delivery.normalorder', compact('orders','userName'));
    }
}
