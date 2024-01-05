<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ContentOwnerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layouts.master');
});

Route::post('books',[BookController::class,'store'])->name('book.store');
Route::get('/books/create',[BookController::class,'create'])->name('book.create');
Route::get('books',[BookController::class,'index'])->name('book.index');
Route::get('books/{id}',[BookController::class,'edit'])->name('book.edit');
Route::post('books/{id}',[BookController::class,'update'])->name('book.update');
Route::delete('books/{id}',[BookController::class,'destroy'])->name('book.destroy');

