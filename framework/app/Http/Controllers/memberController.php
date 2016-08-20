<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class memberController extends Controller {

    public function __construct() {
        
    }

    public function index() {
        return view('pages/homePage', array(
            'title' => 'home'
        ));
    }

    public function getTahap1() {
        
        return view('pages/tahap1Form', array(
            'title' => 'Tahap 1'
        ));
    }

    public function postTahap1(Request $request) {
        $data = Input::get('tahap1Selection');
        $request->session()->put('data', $data);
        return redirect('tahap-2')->with($data);
    }

    public function getTahap2(Request $request) {
        if ($request->session()->has('data')) {
            $dataForm1 = $request->session()->pull('data', 'data');
        } else {
            return redirect('tahap-1');
        }
        return view('tahap2Form', array(
            'title' => 'Tahap 2'
        ));
    }

    public function postTahap2(Request $request) {
        $data1 = Input::get('tahap2Selection1');
        $data2 = Input::get('tahap2Selection2');
        $data3 = Input::get('tahap2Selection3');
        $data = array($data1, $data2, $data3);
        $request->session()->put('data', $data);
        return redirect('tahap-2')->with($data);
    }

    public function getTahap3() {
        return view('pages/tahap3Form', array(
            'title' => 'Tahap 3'
        ));
    }

    public function postTahap3() {
        
    }

}
