<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){

        $categories = Category::get();
        return view('categories.index', ['categories' => $categories]);
    }

    public function show($id)
    {
        $category = Category::find($id);
        $newsList = News::where('category_id', $id)->paginate(4);

        return view('categories.show', [
            'category' => $category,
            'newsList' => $newsList
            ]);
    }
}
