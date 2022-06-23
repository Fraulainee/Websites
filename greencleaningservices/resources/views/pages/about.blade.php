@extends('layouts.app')

@section('content')
        <h1>{{$title}}</h1>
    <p>    
        @if(count($records) > 0)
        <ul>
        @foreach ($records as $dis)
        <li>{{$dis}}</li>
        @endforeach
         <ul>
        @endif
              
    <p>    
@endsection
