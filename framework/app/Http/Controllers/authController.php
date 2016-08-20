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

    public function getLogin() {
        return view('loginPage', array(
            'title' => 'Login Page',
            'question' => $this->question->take(2)
        ));
    }

    public function postLogin(Request $request) {

        $validator = Validator::make($request->all(), [
                    'username' => 'exists:member',
        ]);
        if ($validator->fails()) {
            return redirect('/login')->withInput()->withErrors($validator);
        }

        $userdata = array(
            'username' => Input::get('username'),
            'password' => Input::get('password')
        );
        if (auth('member')->attempt($userdata)) {
            return redirect("profile/" . auth("member")->user()->username);
        } else {
            $request->session()->flash('status', 'username dan password tidak sesuai');
            return redirect('/');
        }
    }

    public function getRegister() {
        return view('registerPage', array(
            'title' => 'Register Page',
            'question' => $this->question
        ));
    }

    public function postRegister() {
        $question = $this->question->pluck('question');
        $parameterName = $this->question->pluck('parameter');
        $member = new \App\Members;
        for ($i = 0; $i < sizeof($this->question); $i++) {
            $member->$parameterName[$i] = Input::get($parameterName[$i]);
        }

        $member->save();
    }

}
