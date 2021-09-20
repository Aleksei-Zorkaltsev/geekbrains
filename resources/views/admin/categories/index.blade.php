@extends('layouts.admin')
@section('content')
        <div class="adminWorkspace_title">
            <h2>admin category panel</h2>
            <a href="{{ route('admin.categories.create') }}">Add category <i class="fas fa-plus"></i></a>
        </div>

        @include('inc.message')
        <table class="admin_table" cellspacing="0">
            <tr>
                <th>id</th>
                <th>name</th>
                <th>description</th>
                <th>control</th>
            </tr>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->title }}</td>
                    <td>{{ $category->description }}</td>
                    <td><a href="{{ route('admin.categories.edit', ['category' => $category]) }}"><i class="fas fa-cog"></i></a>
                       <a href=""><i class="fas fa-trash-alt"></i></a></td>
                </tr>
            @endforeach
        </table>
@endsection
