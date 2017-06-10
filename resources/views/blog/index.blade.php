@extends('layouts.app')
@section('content')


<hr/>
<main class="container">

 <div class="container-fluid">
        <div class="jumbotron">
            <h1>Latest blog posts</h1>
            <a href="/create" class="btn btn-primary">Create</a>
        </div>
        <div class="col-sm-12">
            @foreach($blogs as $blog)
            <article>
                <h2><a href="{{ action('BlogController@show',[$blog->id]) }}">{{ $blog->title }}</a></h2>
                <p>{{ $blog->body }}</p>
            </article>
            @endforeach
        </div>
    </div>
</main>



@endsection