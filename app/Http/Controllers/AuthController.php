<?php

namespace App\Http\Controllers;

// use Illuminate\Contracts\Auth\Guard;
// use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
//use Illuminate\Http\Request;
// use App\Http\Requests;
//use Illuminate\Support\Facades\Request;
use AuthenticatesAndRegistersUsers;
use Illuminate\Contracts\Routing\Registrar;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use App\User;
use Validator;

//use Dotenv\Validator;

class AuthController extends Controller
{
    // public function __construct(Guard $auth, Registrar $registrar)
    // {
    //     $this->auth = $auth;
    //     $this->registrar = $registrar;
    //     $this->middleware('guest', ['except' => 'getLogout']);
    // }

    public function getRegister()
    {
        return view('register');
    }

    public function postRegister(Request $request)
    {
//        dd($request->all());
        $rules = [
            'name' => 'required|between:6,32',
            'email' => 'required|between:6,32|unique:laravel,users',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6'
        ];
        $messages = [
            '*.required' => ':attribute là bắt buộc phải nhập',
            '*.between' => ':attribute phải thuộc :min đến :max ký tự',
            '*.min' => ':attribute phải có ít nhất :min ký tự',
            'email.unique' => 'Email bạn nhập vào đã tồn tại'
        ];
//        dd($request->all());
        $validation = Validator::make($request->all(), $rules, $messages);
//        dd($validation->fails());
        echo "<pre>";
        var_dump($validation->fails());
        echo "</pre>";
        exit;

        if ($validation->fails()) {
            dd($validation);
            return redirect()->back()->withInput()->withErrors($validation);
            dd($validation);
        } else {
//            dd($validation);
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();
        }

    }
}
