<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index(){
        return view('SignInPage');
    }
    public function register(Request $request){
        $request->validate(
            [
                'name' => 'required',
                'email'=>'required|email',
                'password' => 'required',
                'confirmedPassword' => 'required|same:password'
            ]
        );

        print_r('Successfully Registered!');
    }
}
