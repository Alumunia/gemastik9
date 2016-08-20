@extends('layouts.layout')

@section('content')
<div class='container'>
    <form method='POST' action='tahap-1'>
        {{ csrf_field() }}
        <div class="form-group">
            <label class="radio-inline">
                <input type="file" name="tahap2Selection1"> 
            </label>

        </div>
        <div class="form-group">
            <label class="radio-inline">
                <input type="file" name="tahap2Selection2"> 
            </label>

        </div>
        <div class="form-group">
            <label class="radio-inline">
                <input type="file" name="tahap2Selection3"> 
            </label>

        </div>



        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

    </form>
</div>
@endsection