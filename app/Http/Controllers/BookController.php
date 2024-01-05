<?php

namespace App\Http\Controllers;

use App\Models\Tbl_book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $books = Tbl_book::all();
        return view('book.index',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'book_uniq_id' => 'required',
            'book_name' => 'required',
            'book_price' => 'required'
        ]);

        $book = new Tbl_book();
        $book->co_id = $request->co_id;
        $book->publisher_id = $request->publisher_id;
        $book->book_uniq_id = $request->book_uniq_id;
        $book->book_name = $request->book_name;
        $book->price = $request->book_price;

        if($request->file('cover_photo')){
            $file = $request->file('cover_photo');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('public/coverPhoto'),$filename);
            $book['cover_photo'] = $filename;
        }
        

        $book->save();

        return redirect()->route('book.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Tbl_book $tbl_book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tbl_book $tbl_book,$id)
    {

        $book = Tbl_book::findOrFail($id);
        return view('book.edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tbl_book $tbl_book,$id)
    {
        $request->validate([
            'book_uniq_id' => 'required',
            'book_name' => 'required',
            'book_price' => 'required'
        ]);

        $book = Tbl_book::findOrFail($id);

        $book->co_id = $request->co_id;
        $book->publisher_id = $request->publisher_id;
        $book->book_uniq_id = $request->book_uniq_id;
        $book->book_name = $request->book_name;
        $book->price = $request->book_price;
        $book->update();

        return redirect()->route('book.index')->with('message','book has updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tbl_book $tbl_book,$id)
    {
        $book = Tbl_book::findOrFail($id);
        $book->delete();

        return redirect()->back()->with('message','Book has deleted successfully');
    }
}
