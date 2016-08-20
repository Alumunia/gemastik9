@extends('layouts.home')
@section('content')
	<div class="col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
      <div class="rev-box">
        <form action="#" method="POST">
          <p>Informasi akun</p>
          <hr class="divider"/>
          <div class="form-group">
            <input type="text" class="form-control input-box" name="nik" id="nik" placeholder="NIK"/>
          </div>
          <div class="form-group">
            <input type="password" class="form-control input-box" name="password" id="password" placeholder="Password"/>
          </div>
          <p>Biodata</p>
          <hr class="divider"/>
          <div class="form-group">
            <input type="text" class="form-control input-box" name="name" id="name" placeholder="Nama Lengkap"/>
          </div>
          <div class="form-group">
            <input type="text" class="form-control input-box" name="contact" id="contact" placeholder="Email / Nomor Telepon"/>
          </div>
          <div class="form-group">
            <input type="text" class="form-control input-box" name="address" id="address" placeholder="Alamat"/>
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