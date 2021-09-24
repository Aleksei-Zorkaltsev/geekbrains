@extends('layouts.admin')
@section('content')
    <div class="admin_create_edit_form">
        <form method="post" action="{{ route('admin.categories.store') }}">
            @csrf
            <h3>Добавить категорию</h3>
            <p>Название:</p>
            <input type="text" name="title" value="{{ old('title') }}">
            <p>Описание</p>
            <textarea name="description" value="{{ old('description') }}"></textarea>
            <button type="submit">Create</button>
        </form>
    </div>
@endsection
