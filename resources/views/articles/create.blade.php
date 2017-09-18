@extends('app')
@section('content')

<h1>Write A New Article</h1>


<hr>

{!! Form::open(['url' => 'articles']) !!}

<input type="hidden" name="_token" value="{{ csrf_token() }}">

@include ('articles._form', ['SubmitButtonText' => 'Add Article'])    

{!! Form::close() !!}

@include ('errors.list')

@stop