<?php

namespace App\Http\Controllers\master\accounts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\customer;
use App\Models\Accounts;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class CustomerController extends Controller
{
    //
    private $_status;
    private $_code ;

    public function show()
    {
        $cust = customer::get();
        return view('masters.accounts.customer.list', ['cust' => $cust]);
    }


    public function view($id)
    {
        $book = customer::find($id);
        return view('masters.accounts.customer.list', ['cust' => $book]);
    }

    public function add()
    {
        return view('masters.accounts.customer.add');
    }
    
    public function save(Request $request)
    { 
        if ($request->status=="on")       {
            $this->_status="active";
        }
        else {
            $this->_status="in_active";
        }

   print_r($request); 

     $_code=$this->generateNextInvoiceNo();

   print_r($this->_code);
   die();

         $_code = DB::transaction(function () use ($request) { 
 
   $_acc_id = $this->_add_accounts_table($request);
   
       Log::info($request->all());
       $validated = $request->validate([
            'name' => 'required|string|max:255',
            'namearabic' => 'required|string|max:255',
            'address' => 'string|max:255',
            'addressarabic' => 'string|max:255',
            'mobileno' => 'string|max:25',
            'sellername' => 'string|max:255',
            'vatno' => 'string|max:15',
            'crno' => 'string|max:25',
            'email' => 'string|max:255',
        ]);
        
        Log::info('Validation Passed');
        $book = new customer();
        $book->code = $this->_code;// $validated['code'];
        $book->name = $validated['name'];
        $book->arabic_name = $validated['namearabic'];
        $book->address = $validated['address'];
        $book->arabic_address = $validated['addressarabic'];
        $book->mobile_no = $validated['mobileno'];
        $book->action = $this->_status;// $validated['status'];
        $book->seller_name = $validated['sellername'];
        $book->vat_no = $validated['vatno'];
        $book->cr_no = $validated['crno'];
        $book->email = $validated['email'];
        $book->save();
 
         });
     
        return redirect(route('customer.list',absolute:false));
    }

   private  function generateNextInvoiceNo()
    {

        $lastDoc = Accounts::orderBy('id', 'desc')->first();

        if ($lastDoc) {
            // Extract the numeric part and increment
            $lastNumber = intval(substr($lastDoc->number, 3));
            $newNumber = $lastNumber + 1;
        } else {
            $newNumber = 1;
        }

        // Format the document number (e.g., DOC000123)
        $documentNumber = 'DOC' . str_pad($newNumber, 6, '0', STR_PAD_LEFT);


        // Fetch the last invoice by id
        // $lastid  = Accounts::orderBy('id', 'desc')->first();

        // if ($lastInvoice && preg_match('/^([A-Z]+)(\d+)$/', $lastInvoice->invno, $matches)) {
        //     $prefix = $matches[1]; // Extracts 'SA'
        //     $number = (int)$matches[2]; // Extracts '00001' and converts to an integer
        //     $nextNumber = $number + 1; // Increment the number
        //     $nextInvoiceNo = $prefix . str_pad($nextNumber, strlen($matches[2]), '0', STR_PAD_LEFT); // Reformat with leading zeros
        // } else {
        //     // Default to 'SA00001' if no records are found
        //     $nextInvoiceNo = 'SA00001';
        // }

        // Optional: Use the generated invoice number
        return $documentNumber;
    }
 
   private  function _add_accounts_table(Request $request)
    {

           $validated = $request->validate([
            'name' => 'required|string|max:255',
            'namearabic' => 'required|string|max:255',
        ]);
        
        Log::info('Accounts Validation Passed');
        $book = new Accounts();
        $book->account_id =7;
        $book->code = $this->_code;
        $book->name = $validated['name'];
        $book->name_ar = $validated['namearabic'];
        $book->ledger_type ="L";
        $book->acc_type = 1;
        $book->allow_edit = 0;
        $book->level =3;
        $book->save();
 
        return  $book->id;

    }
 


}
