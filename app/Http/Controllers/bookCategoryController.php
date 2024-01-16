<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeBookCategoryRequest;
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

    public function store(storeBookCategoryRequest $request)
    {
        //create post
        bookCategory::create([
            'category'=> $request->category,
        ]);
    }

    

    // public function store(storeBookCategoryRequest $request)
    // {

    //     $bookCategory = bookCategory::create([
    //         'category' => $request->category
    //     ]);

    //     return new $bookCategory;
    // }

    // public function store(storeBookCategoryRequest $request) 
    // {
    // 	$bookCategory = $request->category([
    //         'category' => 'required'
    //     ]);

    //     bookCategory::create($bookCategory);

    //     return response()->json(['success'=>'Laravel ajax example is being processed.']);
    // }

    // public function store(storeBookCategoryRequest $request)
    // {
    //     $bookCategory = bookCategory::create([
    //         'category' => $request->category
    //     ]);
    //     // $post = Post::create($request->all());

    //     return response()->json([
    //         'status' => true,
    //         'message' => "Post Created successfully!",
    //         'post' => $bookCategory
    //     ], 200);
    // }
}

