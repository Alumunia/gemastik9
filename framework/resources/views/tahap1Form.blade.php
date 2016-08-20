@extends('layouts.layout')

@section('content')
<div class='container'>
    <form method='POST' action='tahap-1'>
        {{ csrf_field() }}

        <div class="radio">
            <label>
                <input type="radio" name="tahap1Selection" value="option1">
                Option two can be something else and selecting it will deselect option one
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="tahap1Selection"  value="option2">
                Option two can be something else and selecting it will deselect option one
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="tahap1Selection"  value="option3">
                Option two can be something else and selecting it will deselect option one
            </label>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

    </form>
</div>
@endsection