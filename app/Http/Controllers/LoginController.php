<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth;

//use Illuminate\Auth;
class LoginController extends Controller
{
    public function getlogin()
    {
        return view('login');
    }

    public function postlogin(Requests\LoginRequest $request)
    {
//        dd($request->all());
        $auth = [
            'email' => $request->email,
            'password' => $request->pass
        ];
        if (Auth::attempt($auth)) {
            echo "Thành Công";
        } else {
            echo "Thất Bại";
        }
    }
}
