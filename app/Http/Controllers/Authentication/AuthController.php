<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('authentication/register/index');
    }

    public function login()
    {
        return view('authentication/login/index');
    }
}
