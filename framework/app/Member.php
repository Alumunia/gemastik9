<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;

class Member extends Authenticable {

    //
    protected $primaryKey = 'id';
    protected $table = 'members';

}
