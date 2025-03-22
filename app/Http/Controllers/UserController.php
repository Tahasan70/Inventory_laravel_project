<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function gg(){
        return view('pages.auth.registration-page');
    }

    public function userLoginPage(){
        return view('pages.auth.login');
    }

    public function resetPasswordPage(){
        return view('pages.auth.reset-pass-page');
    }


     public function sendOtpPage(){
        return view('pages.auth.sent-otp');
    }


    public function verifyOtpPage(){
        return view('pages.auth.verify-otp');
    }


    public function profilePage(){
        return view('pages.dashboard.profile-page');
    }
}
