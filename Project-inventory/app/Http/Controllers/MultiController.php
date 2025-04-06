<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultiController extends Controller
{
public function login(){
    return view('pages/auth/login-page');
}
public function registration(){
    return view('pages/auth/registration-page');
}
public function reset(){
    return view('pages/auth/reset-pass-page');
}
public function send(){
    return view('pages/auth/send-otp-page');
}
public function verify(){
    return view('pages/auth/verify-otp-page');
}

public function profile(){
    return view('pages/dashboard/profile-page');
}














}
