@extends('layouts.app')

@section('content')
    <div class="card mb-3 border-dark text-dark" style="max-width: 50rem;">
        <div class="card-header  pb-1">
            <h3 class="card-title">{{$post->title}}</h3>
        </div>
        <div class="card-body">
            <div class="card-text">{!!$post->body!!}</div><br>
            <small>written: {{$post->created_at}}</small><br>
            @if ($post->created_at != $post->updated_at)
                <small>Updated: {{$post->updated_at}}</small><br>
            @endif
            <br>
            <div class="input-group">
            <a href="{{ url()->previous() }}" class="btn btn-light mr-3">go back</a>
            @auth
                @if (Auth::user()->id == $post->user_id)
            <a href="{{action('PostsController@edit', $post->id)}}" class="btn btn-light mr-3">edit post</a>
                    
                    <form action="{{ action('PostsController@destroy', $post->id) }}" method="POST" class="pull-right"> 
                        <input name="_method" type="hidden" value="DELETE">
                        <button type="submit" class="btn btn-danger">delete post</button>
                        {{ csrf_field() }}
                    </form> 
                @endif
            @endauth
            </div>
        </div>
        
    </div>
@endsection