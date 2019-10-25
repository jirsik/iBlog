@extends('layouts.app')
@section('content')
    @guest
        <h1>WELCOME</h1>
        <p>Please log in or register.</p>
    @endguest
    @auth
        Hi, {{Auth::user()->name}}
    @endauth
@endsection