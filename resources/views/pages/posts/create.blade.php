@extends('layouts.app')

@section('content')
    <h1>Create new post:</h1>

        @auth
            <div class="card text-white bg-dark mb-3" style="max-width: 50rem;">
                <div class="card-body">
                    <form action="{{ action('PostsController@store') }}" method="POST">
                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" class="form-control" id="titleForm" name="title" placeholder="Title of your post" >
                        </div>
                        <div class="form-group">
                            <label for="body">Text:</label>
                            <textarea class="form-control" id="bodyForm" name="body" rows="5" ></textarea>
                        </div>
                        <button type="submit" class="btn btn-light">Create</button>
                        {{ csrf_field() }}  <!-- crossside protection rquired-->
                    </form>
                </div>
            </div>
        @else
            Please <a href="{{route('home')}}">log in.</a>
           
        @endauth
            
        

              
@endsection