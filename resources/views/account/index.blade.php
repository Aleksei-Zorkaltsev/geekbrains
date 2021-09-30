@extends('layouts.main')
@section('content')
    <h2>Account {{ Auth::user()->name }}</h2>

    @if(Auth::user()->is_admin)
    <a href="{{ route('admin.index') }}">Admin panel</a>
    <br>
    @endif
    <a href="{{ route('logout') }}">Logout</a>
@endsection
