<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class homeController extends Controller {

    //
    public function __construct() {
        
    }

    public function index() {
        return view('pages.index');
    }
    
    public function register() {
        return view('pages.register');
    }

 

}
