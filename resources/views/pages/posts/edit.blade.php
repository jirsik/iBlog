@extends('layouts.app')

@section('content')
    <h1>Edit post:</h1>
    
            <div class="card text-white bg-dark mb-3" style="max-width: 50rem;">
                <div class="card-body">
                    <form action="{{ action('PostsController@update', $post->id) }}" method="POST"> 
                            <input name="_method" type="hidden" value="PUT">
                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" class="form-control" id="titleForm" name="title" value="{{$post->title}}" >
                        </div>
                        <div class="form-group">
                            <label for="body">Text:</label>
                            <textarea class="form-control" id="bodyForm" name="body" rows="5" >{{$post->body}}</textarea>
                        </div>
                        <a href="{{action('PostsController@show', $post->id)}}" class="btn btn-light">go back</a>
                        <button type="submit" class="btn btn-light">edit</button>
                          {{ csrf_field() }} <!--  crossside protection rquired-->
                    </form>
                </div>
              </div>
        

              
@endsection