<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('news.categories', ['categories' => $this->getCategories()]);
    }

    public function show($categoryName)
    {
        return view('news.category', ['newsList' => $this->getNews(), 'category' => $categoryName]);
    }

    protected function getCategories()
    {
        return [
            ['id' => 1, 'name' => 'politics'],
            ['id' => 2, 'name' => 'sports']
        ];
    }
}
