<?php

namespace App\Http\Controllers\sale;

use App\Http\Controllers\Controller;
use App\Models\Sales;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    //
    public function show()
    {
        $cust = Sales::get();
        return view('sales.salelist', ['sale' => $cust]);
    }

}
