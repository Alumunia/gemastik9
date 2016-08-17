@extends('layouts.layout')

@section('content')
<div class="container">

    <form class="form-signin" action='postRegister' method="POST">
        {{ csrf_field() }}

        <h2 class="form-signin-heading">Please sign in</h2>
        @foreach($question as $question)
        <label for="inputEmail" class="sr-only">{{$question->question}}</label>
        <input type="{{$question->type}}" id="inputEmail" class="form-control" name='{{$question->parameter}}' placeholder="{{$question->question}}" required autofocus>
        @endforeach
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>

</div> <!-- /container -->

@endsection