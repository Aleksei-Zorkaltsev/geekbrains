@extends('layouts.admin')
@section('content')
    <div class="admin_parser_news_block">
        <h2>{{$parse['title']}}</h2>

        @foreach ($parse['news'] as $news)
            <div class="admin_parser_news_main">
                <img src="{{ asset('assets/src/default/img/no_img.png') }}" alt="img">
                <div class="admin_parser_news_content">
                    <h4> {{ $news['title'] }}</h4>
                    <p class="admin_parser_description">{{ $news['description'] }}</p>
                    <a href="{{ $news['link'] }}">Read more <i class="fas fa-arrow-right"></i></a>
                    <div class="admin_parser_news_footer">
                        <span>pubDate: {{ $news['pubDate'] }} ;</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
