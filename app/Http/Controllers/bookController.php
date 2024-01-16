<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class bookController extends Controller
{
    //
    public function index()
    {
        //
        $show_book = Book::all();
        return Response($show_book, 200);
    }
}
