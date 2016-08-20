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

    public function getRegister() {
        return view('registerPage', array(
            'title' => 'Register Page',
            'question' => $this->question
        ));
        return view('homePage', array(
            'title' => 'home'
        ));
    }

}
