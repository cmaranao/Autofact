<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function login()
    {
        $credenciales = $this->validate (request(),[
            'email' => 'email|required|string',
            'password' => 'required|string'

        ]);

        if (Auth::attempt($credenciales))
            return "OK";

        return back()->withErrors(['email' => 'Sus credenciales no son válidad, inténtelo nuevamente.']);
    }
}
