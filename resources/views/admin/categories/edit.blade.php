@extends('layouts.admin')
@section('content')
    <div class="admin_create_edit_form">
        <form action="{{ route('admin.categories.update', ['category' => $category]) }}" method="post">
            @csrf
            @method('put')
            <h3>Редактировать категорию</h3>
            <input type="text" name="title" value="{{ $category->title }}">
            <input type="text" name="description" value="{{ $category->description }}">
            <button type="submit">edit</button>
        </form>
    </div>
@endsection
