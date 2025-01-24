<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RefillRequest;
use App\Models\Decant;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;

class RefillPaymentController extends Controller
{



public function AdminView()
    {
        
        $payments = Payment::all();
        $userName = Auth::user()->name;
        $userName = Auth::check() ? Auth::user()->name : 'Guest';


        // Pass both requests and payments to the view
        return view('admin.refillpayment', compact( 'payments','userName'));
    }

}