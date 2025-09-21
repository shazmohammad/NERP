<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\books\BookController;

Route::get('/', function () {
     return view('index');
    //return view('welcome');
});

// Route::get('/booklist', [BookController::class, 'show'])->name('booklist');

// Route::get('/books/add', [BookController::class, 'add']);
// Route::post('/bookadd', [BookController::class, 'save'])->name('bookadd');

// Route::get('/books/edit/{id}', [BookController::class, 'view'])->name('bookedit');
// Route::post('/books/edit/{id}', [BookController::class, 'update'])->name('bookedit');

// Route::get('/books/report', [BookController::class, 'printall'])->name('bookprint');


// Route::middleware([BasicAuth::class])->group(function () {
    Route::get('/', [BookController::class, 'index'])->name('index');
    Route::prefix('books')->group(function () {
        Route::controller(BookController::class)->group(function () {
            // Route::prefix('country')->group(function () {
                Route::get('/', 'show')->name('booklist');
                Route::get('/add', 'add')->name('bookadd');
                Route::post('/add', 'save')->name('bookadd');
                Route::get('edit/{id}', 'view')->name('bookedit');
                Route::post('edit/{id}', 'update')->name('bookedit');
                Route::get('/report', 'printall')->name('bookprint');
            // });
        });

    });
   
        Route::prefix('master')->group(function () {
        Route::prefix('customer')->group(function () {
        Route::controller(BookController::class)->group(function () {
            // Route::prefix('country')->group(function () {
                Route::get('/', 'show')->name('booklist');
                Route::get('/add', 'add')->name('bookadd');
                Route::post('/add', 'save')->name('bookadd');
                Route::get('edit/{id}', 'view')->name('bookedit');
                Route::post('edit/{id}', 'update')->name('bookedit');
                Route::get('/report', 'printall')->name('bookprint');
            // });
        });

    });
    });
   
// });
