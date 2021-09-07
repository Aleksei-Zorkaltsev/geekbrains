@extends('layouts.main')
@section('content')
    <div class="categories_block">
        <h2>Categories</h2>
        <ul>
            @foreach ($categories as $category)
                <li>
                    <a href="{{ route('category.show', ['name' => $category['name']]) }}">
                        {{$category['name']}}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection

