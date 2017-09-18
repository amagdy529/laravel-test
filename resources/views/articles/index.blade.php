@extends ('app')


@section('content')
               
                
    @if (Auth::check())

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
   
        <h2> 
             <a href="/articles/ {{ $article->id }}" > {{ $article->title }} </a>
        </h2>

        <p class="lead"> {{ $article->body }} </p>

        <p class='lead'> {{ $article->user->name }} on {{ $article->created_at->toFormattedDateString() }}</p>

    @endforeach

@include('articles.sidebar')

@stop