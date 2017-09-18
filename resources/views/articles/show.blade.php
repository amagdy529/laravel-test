@extends ('app')

@section('content')

<h1> {{ $article->title }} </h1>

<p class='lead'> {{ $article->user->name }} on {{ $article->created_at->toFormattedDateString() }} </p>

@if(count($article->tags))

    <ul>

    @foreach ($article->tags as $tag)

        <a href="articles/tags/{{ $tag->name }}">
        <li> {{ $tag->name }} </li>
        </a>

    @endforeach
    
    </ul>



@endif

<article>
    <p class='lead'> {{ $article->body }} </p>
</article>

<hr>

<div class="comments">

    <ul class="list-group">

        @foreach($article->comments as $comment)

            <li class="list-group-item">

                <strong> 
                    {{ $comment->created_at->diffForHumans() }}: 
                </strong> &nbsp;
               
                <article>
                    {{ $comment->body }}
                </article>
              
            </li>

        @endforeach

    </ul>

</div>

<hr>

<div class="card">

    <div class="card-block">

        <form class="form-group" method="POST" action="/articles/ {{ $article->id }} /comments">

           <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <textarea name="body" placeholder="Your Comment Here" class="form-control"></textarea>

            <hr>

            <button type="submit" class="form-control btn btn-primary"> Add Comment </button>

        </form>

        @include ('errors.list')

    </div>

</div>

@include('articles.sidebar')



@stop