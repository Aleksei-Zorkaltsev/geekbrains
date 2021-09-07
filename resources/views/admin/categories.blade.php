@extends('layouts.admin')
@section('content')
    <div class="admin_category_panel">
        <div class="header_admin_categorypanel">
            <h2>admin category panel</h2>
            <a href="admin/create">Add category <i class="fas fa-plus"></i></a>
        </div>

        <table class="admin_categorytable" cellspacing="0">
            <tr>
                <th>name</th>
                <th>control</th>
            </tr>
            @foreach ($categories as $category)
                <tr>
                    <td>{{$category['name']}}</td>
                    <td><a href="admin/edit"><i class="fas fa-cog"></i></a> | <a href="admin/destroy"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
