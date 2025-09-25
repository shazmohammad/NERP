<?php

namespace App\Http\Controllers\books;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BookController extends Controller
{
    //
    public function show()
    {
        $books = Book::get(); 
        return view('books.booklist',['books' => $books]);
    }

    public function add()
    {
        return view('books.bookadd');
    }

    public function index()
    {
        // return view('welcome');
        return view('index');
    }

    public function save(Request $request)
    {        
       
       Log::info($request->all());
       $validated = $request->validate([
            'name' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
        ]);
        
        Log::info('Validation Passed');
        $book = new Book();
        $book->name = $validated['name'];
        $book->author = $validated['author'];
        $book->price = $validated['price'];
        $book->save();
     
        return redirect(route('booklist',absolute:false));
    }

    public function view($id){
        $book = Book::find($id);
        return view('books.bookedit',['book' => $book]);
    }

    public function update($id,Request $request)
    {        
         
       Log::info($request->all());
       $validated = $request->validate([
            'name' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
        ]);
        
        $book = Book::find($id);

        $book->name =$request->name;
        $book->author =$request->author;
        $book->price =$request->price;

        $book->save();
 
        return redirect(route('booklist',absolute:false));
    }

    public function printall()
    {
        $books = Book::get(); 
        return view('books.reports.bookreport',['books' => $books]);
    }


}
