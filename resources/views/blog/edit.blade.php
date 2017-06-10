@extends('layouts.app')
@section('content')


<hr/>
<main class="container">

    <div class="container-fluid">
        <div class="jumbotron">
            <h1>Edit blog post</h1>
        </div>
        <div class="col-sm-12">
            {!! Form::model($blog,['method' => 'PATCH','action' => ['BlogController@update',$blog->id]]) !!}
            <div class="form-group">
                {!! Form::label('title',"Title") !!}
                {!! Form::text('title',null,['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('body',"Body") !!}
                {!! Form::textarea('body',null,['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit("Edit a Blog",['class' =>'btn btn-primary'])!!}
            </div>

            {!! Form::close() !!}

            {!!Form::open(['method'=>'DELETE','action' => ['BlogController@destroy',$blog->id]] ) !!}

                <div class="form-group">
                    {!! Form::submit("Delete Blog",['class' => 'btn btn-danger']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>

</main>



@endsection