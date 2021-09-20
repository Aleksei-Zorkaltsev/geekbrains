<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $model = new News();
        $newsList = $model->getNews();

        return view('news.index', [
            'newsList' => $newsList
        ]);
    }

    public function show(int $id)
    {

        $model = new News();
        $news = $model->getOneNews($id);

        return view('news.show', [
            'id' => $id,
            'news' => $news
        ]);
    }

}
