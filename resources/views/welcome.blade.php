@extends('layout')

@section('title', 'Home')

@section('content')

<h1>My First Website!</h1>
<ul>
<?php foreach ($task as $task): ?>
<li><?= $task; ?></li>
<?php endforeach ?>
</ul>

@endsection
