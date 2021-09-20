<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $model = new Category();
        $categories = $model->getCategories();
        return view('news.categories', ['categories' => $categories]);
    }

    public function show($name)
    {
        $newsModel = new News();
        $newsList = $newsModel->getNews_CategoryName($name);

        return view('news.category', ['newsList' => $newsList, 'category' => $name]);
    }
}
