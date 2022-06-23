@extends('layouts.app')

@section('content')
    {{-- <h1>Comments</h1>
    @if(count($posts) > 1)
        @foreach ($posts as $post)
            <h4>{{$post->comment_body}}</h4>
        @endforeach
    @else
        <p>No comments found</p>
    @endif --}}
    
    <h1>Comment Anything!</h1>
    
        <form action="/create" method="POST">
            @csrf
            <label for="comment">Comment:</label>
            <input type="text" name="comment"><br><br>
            {{-- <input type="submit" value="Submit"> --}}
            <button>Send</button>
        </form>

@endsection