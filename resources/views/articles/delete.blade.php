@extends('app')
@section('content')

<h1>Delete Article </h1>

<hr>



    <ul>

    @foreach ($articles as $article)

        <a href="articles/{{ $user->id }}/delete">
        <li> {{ $article->title }} </li>
        </a>



    @endforeach
    
    </ul>








@include ('errors.list')

@stop