<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\books\BookController;

Route::get('/', function () {
     return view('index');
    //return view('welcome');
});

Route::get('/booklist', [BookController::class, 'show'])->name('booklist');

Route::get('/books/add', [BookController::class, 'add']);
Route::post('/bookadd', [BookController::class, 'save'])->name('bookadd');

Route::get('/books/edit/{id}', [BookController::class, 'view'])->name('bookedit');
Route::post('/books/edit/{id}', [BookController::class, 'update'])->name('bookedit');

Route::get('/books/report', [BookController::class, 'printall'])->name('bookprint');
