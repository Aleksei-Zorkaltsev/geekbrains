@extends('layouts.admin')
@section('content')
    <div class="admin_create_edit_form">
        <form action="{{ route('admin.news.update', ['news' => $news]) }}" method="post">
            @csrf
            {{-- @include('inc.message') --}}
            @method('put')
            <h3>Редактирование новости</h3>
            @error('category_id') <span style="color:red"> {{ $message }} </span> @enderror
            <select name="category_id">
                @foreach($categories as $category)
                    <option
                        @if($news->category_id === $category->id) selected @endif
                        value="{{ $category->id }}">
                        {{ $category->title }}
                    </option>
                @endforeach
            </select>

            <p>Заголовок:</p>
            @error('title') <span style="color:red"> {{ $message }} </span> @enderror
            <input type="text" name="title" value="{{ $news->title }}">

            <p>Автор:</p>
            @error('author') <span style="color:red"> {{ $message }} </span> @enderror
            <input type="text" name="author" value="{{ $news->author }}">

            <p>Описание:</p>
            @error('description') <span style="color:red"> {{ $message }} </span> @enderror
            <textarea name="description">{{ $news->description }}</textarea>
            <button type="submit">edit</button>
        </form>
    </div>
@endsection
