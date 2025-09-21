<?php

namespace App\Http\Controllers\master\accounts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\customer;


class CustomerController extends Controller
{
    //
        public function show()
    {
        $cust = customer::get(); 
        return view('masters.accounts.customer',['cust' => $cust]);
    }

    
    public function view($id){
        $book = customer::find($id);
        return view('masters.accounts.customer',['cust' => $book]);
    }

}
