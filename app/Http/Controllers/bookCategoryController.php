<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookCategoryRequest;
use App\Http\Requests\updateBookCategoryRequest;
use App\Models\bookCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class bookCategoryController extends Controller
{
    //
    public function index()
    {
        //
        $show_category = bookCategory::all();
        return Response($show_category, 200);
    }

    public function store(StoreBookCategoryRequest $request)
    {
        bookCategory::create([
            'category'=> $request->category,
        ]);
        return response()->json('Data Added Successfully')  ;
    }

    public function show($id)
    {
        $data = bookCategory::find($id);
        if (!$data) {
            return response()->json(['error' => 'Data not found'], 404);
        }
        return response()->json($data->toArray());
    }

    public function update(updateBookCategoryRequest $request, $id)
    {
        $bookCategory = bookCategory::find($id);
        if (!$bookCategory) {
            return response()->json('Data not found', 404);
        }
        $bookCategory->update([
            'category' => $request->category,
        ]);
        return response()->json('Data Updated Successfully');
    }

    public function destroy(bookCategory $bookCategory, $id)
    {
        $bookCategory = bookCategory::find($id);
        if (!$bookCategory) {
            return response()->json('Data not found', 404);
        }
        $bookCategory->delete();
        return response()->json('Data Deleted Successfully');
    }

}

