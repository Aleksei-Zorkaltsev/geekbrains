@extends('layouts.main')
@section('content')
    <div class="news_block">
        @foreach ($newsList as $news)
            <div class="news_mini">
                <img src="{{ asset('assets/src/default/img/no_img.png') }}" alt="img">
                <div class="news_minidesk">
                    <h4> {{ $news['title'] }}</h4>
                    <p>author: {{ $news['author'] }} </p>
                    <a href="{{ route('news.show', ['id' => $news['id']]) }}">Read more <i class="fas fa-arrow-right"></i></a>
                    <div class="news_minifooter">
                        <span>id: {{ $news['id'] }} ;</span>
                        <span>created_at: {{ $news['created_at'] }} ;</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
