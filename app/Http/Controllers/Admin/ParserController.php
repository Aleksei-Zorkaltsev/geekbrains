<?php

namespace App\Http\Controllers\Admin;

use App\Contract\Parser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ParserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * Parser $service
     * @return
     * void \Illuminate\Http\Response
     * \Illuminate\Http\Response
     */
    public function __invoke(Request $request){
        //Если я добавляю сюда (... , Parser $service) у меня вылетает ошибка.

        $service = app(Parser::class);
        $data = $service->parse('https://news.yandex.ru/sport.rss');
        //dd($data['news']);

        return view('admin.news.parsed', ['parse' => $data]);
    }
}
