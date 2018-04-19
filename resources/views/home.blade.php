@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi assumenda, saepe modi eos alias reiciendis unde quasi ullam quo necessitatibus. Sit excepturi in commodi dicta dolores, earum itaque quidem animi!</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection