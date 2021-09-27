<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $newsList = News::paginate(4);

        return view('news.index', [
            'newsList' => $newsList
        ]);
    }

    public function show(int $id)
    {
        $news = News::find($id);

        return view('news.show', [
            'id' => $id,
            'news' => $news
        ]);
    }

}
