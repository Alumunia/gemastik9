<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class homeController extends Controller {

    //
    public function __construct() {
        
    }

    public function index() {
        return view('homePage', array(
        'title' => 'home'
        ));
    }

}
