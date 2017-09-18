@extends('app')
@section('content')

<h1>Edit Article </h1>

<hr>

{!! Form::model($article, ['method' => 'PATCH', 'url' => 'articles/' . $article->id]) !!}

@include ('articles._form', ['SubmitButtonText' => 'Update Article'])

{!! Form::close() !!}

@include ('errors.list')

@stop