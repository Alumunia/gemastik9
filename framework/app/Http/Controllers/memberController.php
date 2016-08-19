<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class memberController extends Controller {

    public function __construct() {
        
    }

    public function index() {
        
    }

    public function getTahap1() {
        return view('tahap1Form', array(
            'title' => 'Tahap 1'
        ));
    }

    public function postTahap1() {
        
    }

    public function getTahap2() {
        return view('tahap2Form', array(
            'title' => 'Tahap 2'
        ));
    }

    public function postTahap2() {
        
    }

    public function getTahap3() {
        return view('tahap3Form', array(
            'title' => 'Tahap 3'
        ));
    }

    public function postTahap3() {
        
    }

}
