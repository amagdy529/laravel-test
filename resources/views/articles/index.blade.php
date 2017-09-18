@extends ('app')


@section('content')
               
                
    @if (Auth::check())

        <a href="{{ url('/articles/create') }}">create</a>

        <a class="nav-link ml-auto" href="#">{{ Auth::user()->name }}</a>
        <a href="{{ route('logout') }}"onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout</a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
        </form>


    @else
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Register</a>

        
              
    @endif

<h1>Articles</h1>

                    
<hr>


    @foreach ($articles as $article)
   
        <p>{{$article->id}}</p>
        
        <p>{{Auth::user()->id}}<p>

        <h2> 
             <a href="/articles/ {{ $article->id }}" > {{ $article->title }} </a>
        </h2>
        {{$article}}

        {{$article->user_id}}
        <p class="lead"> {{ $article->body }} </p>

        @if (Auth::user()->id == $article->user_id )
            <button type="button" class="btn btn-primary">Primary</button>
            <a class="btn btn-xs btn-warning" href="{{ route('articles.edit', $article->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
            <form action="{{ route('articles.delete', $article->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
            </form>
        @endif



        <p class='lead'> {{ $article->user->name }} on {{ $article->created_at->toFormattedDateString() }}</p>

    @endforeach

@include('articles.sidebar')

@stop