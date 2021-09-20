@extends('layouts.admin')
@section('content')
    <div class="admin_create_edit_form">
        <form method="post" action="{{ route('admin.news.store') }}">
            @csrf
            <h3>Добавить новость</h3>
            <p>Выберите категорию:</p>
            <select name="category_id" id="">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
            <p>Заголовок:</p>
            <input type="text" name="title" value="{{ old('title') }}">
            <p>Автор:</p>
            <input type="text" name="author" value="{{ old('author') }}">
            <p>Контент:</p>
            <textarea name="description" value="{{ old('description') }}"></textarea>
            <button type="submit">Create</button>
        </form>
    </div>
@endsection
