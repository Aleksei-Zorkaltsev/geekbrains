@extends('layouts.admin')
@section('content')
    <div class="admin_addNews">
        <h2>Add news</h2>
        <form>
            <div class="row">
                <span> author:</span><input type="text">
            </div>
            <div class="row">
                <span> title :</span><input type="text">
            </div>
            <div class="row">
                <span> description: </span> <input type="text">
            </div>
            <div class="row">
                <button type="submit"> Add </button>
            </div>
        </form>
    </div>
@endsection
