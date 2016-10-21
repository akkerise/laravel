<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Reg;
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
        ];
        $userpass = new Reg;
        dd(Auth::attempt($auth));

//        dd($request->password);
//        if (Hash::check($request->password,$userpass->pass)){
//            echo "True";
//        }else{
//            echo "False";
//        }
//        if (Hash::check($request->password,$userpass->pass)){
//            dd("1");
//            if (Auth::attempt($auth)) {
//                dd("2");
//            } else {
//                echo "Thất Bại 1";
//            }
//        }else{
//            echo "Thất Bại 2";
//        }

    }
}
