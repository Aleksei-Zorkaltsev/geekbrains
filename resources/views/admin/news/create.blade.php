@extends('layouts.admin')
@section('content')
    <div class="admin_create_edit_form">
        <form method="post" action="{{ route('admin.news.store') }}">
            @csrf
            {{-- @include('inc.message') --}}
            <h3>Добавить новость</h3>
            <p>Выберите категорию:</p>
            @error('category_id') <span style="color:red"> {{ $message }} </span> @enderror
            <select name="category_id" id="">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>

            <p>Заголовок:</p>
            @error('title') <span style="color:red"> {{ $message }} </span> @enderror
            <input type="text" name="title" value="{{ old('title') }}">


            <p>Автор:</p>
            @error('author') <span style="color:red"> {{ $message }} </span> @enderror
            <input type="text" name="author" value="{{ old('author') }}">


            <p>Описание:</p>
            @error('description') <span style="color:red"> {{ $message }} </span> @enderror
            <textarea name="description" value="{{ old('description') }}"></textarea>


            <button type="submit">Create</button>
        </form>
    </div>
@endsection
