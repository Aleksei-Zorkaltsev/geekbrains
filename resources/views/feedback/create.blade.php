@extends('layouts.main')
@section('content')
    <h2>Add Feedback Form</h2>
    <form class="addFeedBackForm" action="{{ route('feedback.store') }}" method="POST">
        @csrf
        author: <input name="author" type="text" value="">
        feedback: <input name="feedback" type="text" value="">
        <button type="submit">add</button>
    </form>

    @if(isset($response))
        <div>
            <h2>added feedback / response</h2>
            <p>author: {{ $response['author'] }}</p>
            <p>feedback: {{ $response['feedback'] }}</p>
        </div>
    @endif
@endsection
