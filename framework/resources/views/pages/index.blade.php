@extends('layouts.home')
@section('content')
@if(Session::has('status'))
<div class="alert alert-success" ><span class="glyphicon glyphicon-ok"></span><em> {!! session('status') !!}</em></div>
@endif

<div class="col-sm-4 col-sm-offset-4 col-xs-8 col-xs-offset-2">
    <div class="rev-box">
        <form action="login" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="text" class="form-control input-box" name="username" id="nik" placeholder="NIK"/>
            </div>
            <div class="form-group">
                <input type="password" class="form-control input-box" name="password" id="password" placeholder="Password"/>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary input-btn" name="submit" value="Login"/> 
            </div>
            <p>Belum punya akun? Daftar <a href="registrasi">disini</a></p>
        </form>
    </div>
</div>
<div class="col-xs-12">
    <img class="img-responsive center-block flow-image" src="images/flow.png"/>
</div>
@endsection