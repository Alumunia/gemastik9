@extends('layouts.home')
@section('content')
<div class="col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
    <div class="rev-box">
        <form action="register" method="POST">
            {{ csrf_field() }}
            <p>Informasi akun</p>
            <hr class="divider"/>
            <div class="form-group">
                <input type="text" class="form-control input-box" name="username" id="username" placeholder="username"/>
            </div>
            @if ($errors->has('username'))
            <span class="help-block">
                <strong>{{ $errors->first('username') }}</strong>
            </span>
            @endif
            <div class="form-group">
                <input type="password" class="form-control input-box" name="password" id="password" placeholder="Password"/>
            </div>
            <p>Biodata</p>
            <hr class="divider"/>
            <div class="form-group">
                <input type="text" class="form-control input-box" name="noKTP" id="nik" placeholder="NIK"/>
            </div>
            <div class="form-group">
                <input type="text" class="form-control input-box" name="namaLengkap" id="name" placeholder="Nama Lengkap"/>
            </div>
            <div class="form-group">
                <input type="text" class="form-control input-box" name="email" id="contact" placeholder="Email / Nomor Telepon"/>
            </div>
            <div class="form-group">
                <input type="text" class="form-control input-box" name="alamat" id="address" placeholder="Alamat"/>
            </div>
            <div class="col-xs-6 nopadding">
                <div class="form-group">
                    <input type="text" class="form-control input-box" name="rt" id="rt" placeholder="RT"/>
                </div>
            </div>
            <div class="col-xs-6 nopadding">
                <div class="form-group">
                    <input type="text" class="form-control input-box" name="rw" id="rw" placeholder="RW"/>
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control input-box" name="kelurahan" id="kelurahan" placeholder="Kelurahan"/>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary input-btn" name="submit" value="Daftar"/> 
            </div>
        </form>
    </div>
</div>
@endsection