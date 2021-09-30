@extends('layouts.admin')
@section('content')
    <div class="adminWorkspace_title">
        <h2>Admin users panel</h2>
    </div>

    @include('inc.message')
    <table class="admin_table" cellspacing="0">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>created_at</th>
            <th>update_at</th>
            <th>is_admin</th>
            <th>control</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at }}</td>
                <td>{{ $user->updated_at }}</td>
                <td>
                    <input type="checkbox" disabled
                        @if($user->is_admin) checked @endif>
                </td>
                <td>
                    <a href="{{ route('admin.users.edit', ['user' => $user]) }}"><i class="fas fa-cog"></i></a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
