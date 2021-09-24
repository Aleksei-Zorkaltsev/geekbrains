@extends('layouts.admin')
@section('content')
    <div class="admin_create_edit_form">
        <form method="post" action="{{ route('admin.categories.store') }}">
            @csrf
            @include('inc.message')
            <h3>Добавить категорию</h3>
            <p>Название:</p>
            <input type="text" name="title" value="{{ old('title') }}">
            <p>Описание</p>
            <textarea name="description">{{ old('description') }}</textarea>
            <button type="submit">Create</button>
        </form>
    </div>
@endsection
