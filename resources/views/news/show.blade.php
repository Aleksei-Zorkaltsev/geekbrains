@extends('layouts.main')
@section('content')
    <div class="one_news">
        <h2>{{ $news->title }}</h2>
        <img src="#" alt="img">
        <p>{{ $news->author}}</p>
        <p>{{ $news->description }}</p>
        <p>{{ $news->created_at }}</p>
        <span> news id: {{ $id }} </span>
    </div>

@endsection
