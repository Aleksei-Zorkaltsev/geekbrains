@extends('layouts.admin')
@section('content')
    <div class="admin_create_edit_form">
        <form action="{{ route('admin.categories.update', ['category' => $category]) }}" method="post">
            @csrf
            @include('inc.message')
            @method('put')
            <h3>Редактировать категорию</h3>
            <p>Имя категории:</p>
            <input type="text" name="title" value="{{ $category->title }}">
            <p>Описание:</p>
            <textarea name="description">{{ $category->description }}</textarea>
            <button type="submit">edit</button>
        </form>
    </div>
@endsection
