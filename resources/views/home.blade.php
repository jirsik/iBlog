@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Homepage</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Yours posts:
                    
                    @if (count($posts)>0)   
                        @foreach ($posts as $post)
                            <div class="card mb-3 text-dark" style="max-width: 50rem;">
                            <div class="card-header  pb-1"><h4 class="card-title"><a href="{{action('PostsController@show', $post->id)}}" class="text-dark">{{$post->title}}</a></h4></div>
                                <div class="card-body">
                                    <p class="card-text">
                                        <?php
                                            $part = (strlen($post->body) > 260) ? substr($post->body, 0, 260) . '...' : $post->body;
                                            echo $part;
                                        ?>
                                    </p>
                                <small>written: {{$post->created_at}}</small>
                                </div>
                            </div>
                        @endforeach
                        {{ $posts->links('pagination::bootstrap-4') }}
                    @else
                        <p>There are no posts at the moment.</p>    
                        
                    @endif 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
