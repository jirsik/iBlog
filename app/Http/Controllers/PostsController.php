<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth; 
use App\Http\Requests\PostRequest;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $perPage = request('items', 4);

        $posts = Post::orderBy('updated_at','desc')->paginate($perPage);
        
        //$items = request('items', 6);
        // $posts = Post::orderBy('updated_at','desc')->paginate($items);
        
        return view('pages.posts.index')->with('posts', $posts);
    }

    

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        
        // $this->validate($request, [
        //     'title'=>'required',
        //     'body'=>'required'
        // ]);
        // validation is done in PostRequest
        
        $post = Post::create([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'user_id' => Auth::user()->id,
        ]);

        return redirect('/posts')->with('success', 'Post created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('pages.posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('pages/posts/edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, $id)
    {
        // $this->validate($request, [
        //     'title'=>'required',
        //     'body'=>'required'
        // ]);
        
            $post = Post::find($id);
            $post -> fill([
                'title' => $request->input('title'),
                'body' => $request->input('body'),
                'user_id' => Auth::user()->id,
            ]);
            $post -> save();

        // $post = Post::find($id);
        // $post->title = $request->input('title');
        // $post->body = $request->input('body');
        // $post->save();

        return redirect('/posts')->with('success', 'Post updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('/posts')->with('success', 'Post deleted!');
    }
}
