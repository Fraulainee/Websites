@extends('layouts.app')

@section('content')
        <h1>Comment Anything!</h1>
    
        <form action="/create" method="POST">
            @csrf
            <label for="comment">Comment:</label>
            <input type="text" name="comment"><br><br>
            {{-- <input type="submit" value="Submit"> --}}
            <button>Send</button>
        </form>
        
@endsection