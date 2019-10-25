@extends('layouts.app')

@section('content')
    <h1>All posts:</h1>
    <form action="{{action('PostsController@index')}}" method="GET">
        <div class="form-group row">
            <label for="items" class="col-sm-auto col-form-label col-form-label-sm">Posts for one page:</label>
            <div class="col-sm-1">
            <select name="items" value="5" class="form-control form-control-sm">
                <?php
                    if (isset($_GET['items'])){
                        $items = $_GET['items'];
                    } else {$items = 4;}
                ?>
                <option value="2" <?php if($items == '2'){echo("selected");} ?>>2</option>
                <option value="5" <?php if(($items == '5')||($items == '4')){echo("selected");} ?>>5</option>
                <option value="10" <?php if($items == '10'){echo("selected");} ?>>10</option>
                <option value="20" <?php if($items == '20'){echo("selected");} ?>>20</option>
              </select>
            </div>
            <button type="submit" class="btn btn-light btn-sm">change</button>
        </div>
        {{ csrf_field() }}  <!-- crossside protection rquired-->
    </form>
<hr>
    @if (count($posts)>0)   
        {{ $posts->appends(compact('items'))->links('pagination::bootstrap-4') }}
        @foreach ($posts as $post)
            <div class="card text-dark mb-3 border-dark" style="max-width: 50rem;">
            <div class="card-header pb-1"><h5 class="card-title"><a href="{{action('PostsController@show', $post->id)}}" class="text-dark">{{$post->title}}</a></h5></div>
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
        {{ $posts->appends(compact('items'))->links('pagination::bootstrap-4') }}
    @else
        <p>There are no posts at the moment.</p>    
        
    @endif 
@endsection