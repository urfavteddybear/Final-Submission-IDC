<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookCategoryRequest;
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
        return response()->json('Data Added Successfully');
    }
}

