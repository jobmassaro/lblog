@extends('layouts.app')
@section('content')


<hr/>
<main class="container">

 <div class="container-fluid">
        <div class="jumbotron">
            <h1>Admin Controller Panel</h1>
        </div>
        <div class="col-sm-12">
            <a href="/create" class="btn btn-primary link" style="color:#fff;">Create Blog</a>
             <a href="/bin" class="btn btn-danger link" style="color:#fff;">Trashed Blog</a>
        </div>
    </div>
</main>



@endsection