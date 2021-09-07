@extends('layouts.admin')
@section('content')
    <div class="admin_news_panel">
        <div class="header_adminnewspanel">
            <h2>admin news panel</h2>
            <a href="{{ route('admin.addNews') }}">Add news <i class="fas fa-plus"></i></a>
        </div>

        <table class="admin_newstable" cellspacing="0">
            <tr>
                <th>id</th>
                <th>title</th>
                <th>author</th>
                <th>created_at:</th>
                <th>control</th>
            </tr>
            @foreach ($newsList as $news)
                <tr>
                    <td> {{ $news['id'] }} </td>
                    <td> {{ $news['title'] }} </td>
                    <td> {{ $news['author'] }} </td>
                    <td> {{ $news['created_at'] }} </td>
                    <td><a href="{{ route('news.show', ['id' => $news['id']]) }}"><i class="fas fa-arrow-right"></i></a> | <a href="admin/edit"><i class="fas fa-cog"></i></a> | <a href="admin/destroy"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection



