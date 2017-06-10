@extends('layouts.app')
@section('content')


<hr/>
<main class="container">

 <div class="container-fluid">
        <div class="jumbotron">
            <h1>Delete blog posts</h1>
        </div>
        <div class="col-sm-12">
            @foreach($deleteBlogs as $blog)
            <article>
                <h2>{{ $blog->title }}</h2>
                <p>{{ $blog->body }}</p>
                {!! Form::open(['method' => 'GET','action' => ['BlogController@restore',$blog->id]]) !!}
                    <div class="form-group">
                        {!! Form::submit("Restore Blog",['class' => 'btn btn-primary']) !!}
                    </div>
                {!!Form::close() !!}


                {!! Form::open(['method' => 'DELETE','action' => ['BlogController@destroyBlog',$blog->id]]) !!}
                    
                    <div class="form-group">
                        {!! Form::submit("Destroy Blog",['class' => 'btn btn-danger']) !!}
                    </div>
                {!!Form::close() !!}


            </article>
            @endforeach
        </div>
    </div>
</main>



@endsection