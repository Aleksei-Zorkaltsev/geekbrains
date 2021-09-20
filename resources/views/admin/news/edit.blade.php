@extends('layouts.admin')
@section('content')
    <div class="admin_create_edit_form">
        <form action="{{ route('admin.news.update', ['news' => $news]) }}" method="post">
            @csrf
            @method('put')
            <h3>Редактирование новости</h3>
            <select name="category_id">
                @foreach($categories as $category)
                    <option
                        @if($news->category_id === $category->id) selected @endif
                        value="{{ $category->id }}">
                        {{ $category->title }}
                    </option>
                @endforeach
            </select>
            <p>Заголовок</p>
            <input type="text" name="title" value="{{ $news->title }}">
            <p>Автор</p>
            <input type="text" name="author" value="{{ $news->author }}">
            <p>Контент</p>
            <textarea name="description"> {{ $news->description }} </textarea>
            <button type="submit">edit</button>
        </form>
    </div>
@endsection
