<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;


class AuthController extends Controller
{
    // driectPage
    public function driectPage(){
        return view('authentication.home.redirect');
    }
}
