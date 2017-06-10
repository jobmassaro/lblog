@extends('layouts.app')
@section('content')


<hr/>
<main class="container">

 <div class="container-fluid">
    <article>
        <div class="jumbotron">
            <h1>{{ $blog->title }}</h1>
            <a href="{{ action('BlogController@edit', [$blog->id]) }}" style="float:right">Edit</a>
        </div>
        <div class="col-sm-12">
           <p>{{ $blog->body }}</p>
        </div>
    </article>
    </div>
</main>



@endsection