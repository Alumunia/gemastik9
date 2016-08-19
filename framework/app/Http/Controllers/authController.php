<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\question;

class authController extends Controller {

    public function __construct() {
        $this->question = \App\Question::all();
    }

    public function index() {
        return view('index');
    }

    public function getRegister() {
        return view('registerPage', array(
            'title' => 'Register Page',
            'question' => $this->question
        ));
    }

    public function postRegister() {
        $question = $this->question;
        $member = new \App\Members;
        for ($i = 0; $i < sizeof($this->question); $i++) {
             $member->nama = Input::get('namaLengkap');
//                    = Input::get($question[$i]->parameter);
        }

        $member->save();
    }

}
