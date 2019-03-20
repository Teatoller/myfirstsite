@extends('layout')

@section('title', 'Home')

@section('content')

<h1>My First {{$foo}} Website!</h1>
<ul>
@foreach($task as $task)
<li>{{ $task }}</li>
@endforeach
</ul>

@endsection
