@extends('layouts.admin')
@section('content')
    <div class="admin_addNews">
        <h2>Add news</h2>
        <form action="{{ route('admin.news.store') }}" method="POST">
            @csrf
            <div class="row">
                <span> author:</span><input name="author" type="text">
            </div>
            <div class="row">
                <span> title :</span><input name="title" type="text">
            </div>
            <div class="row">
                <span> description: </span> <input name="description" type="text">
            </div>
            <div class="row">
                <button type="submit"> Add </button>
            </div>
        </form>
    </div>
@endsection
