<?php

namespace App\Http\Controllers;

use App\Models\Tbl_book;
use Illuminate\Http\Request;

class BookApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Tbl_book::get();

        return response()->json($books);
    }

   
}
