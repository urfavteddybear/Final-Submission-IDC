<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\updateBookRequest;
use App\Models\Book;
use App\Models\bookCategory;
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

    public function store(StoreBookRequest $request)
    {   
        $categoryExists = bookCategory::where('id', $request->category_id)->exists();
        if (!$categoryExists) {
            return response()->json(['error' => 'Category not found'], 404);
        }
        Book::create([
            'book_name' => $request->book_name,
            'category_id' => $request->category_id,
            'description' => $request->description,
        ]);
        return response()->json('Data Added Successfully');
    }

    public function show($id)
    {
        $data = Book::find($id);
        if (!$data) {
            return response()->json(['error' => 'Data not found'], 404);
        }
        return response()->json($data->toArray());
    }

    public function update(updateBookRequest $request, $id)
    {
        $book = Book::find($id);
        if (!$book) {
            return response()->json('Data not found', 404);
        }
        $book->update([
            'book_name' => $request->book_name,
            'category_id' => $request->category_id,
            'description' => $request->description
        ]);
        return response()->json('Data Updated Successfully');
    }

    public function destroy(Book $book, $id)
    {
        $book = Book::find($id);
        if (!$book) {
            return response()->json('Data not found', 404);
        }
        $book->delete();
        return response()->json('Data Deleted Successfully');
    }
}
