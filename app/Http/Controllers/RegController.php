<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reg;
use App\Http\Requests\RegRequest;
use Illuminate\Support\Facades\Hash;
class RegController extends Controller
{
    public function getreg(){
        return view('register');
    }

    public function postreg(RegRequest $request){
//        dd($request->all());
        $user = new Reg;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->pass = Hash::make($request->password);
        $user->save();
        return redirect('/')->with([
            'success' => "Congratulations . You have successfully registered ."
        ]);
    }
}
