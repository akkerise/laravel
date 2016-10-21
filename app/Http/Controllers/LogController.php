<?php

namespace App\Http\Controllers;

//use Dotenv\Validator;
use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use App\Reg;
use App\Http\Requests\LogRequest;
class LogController extends Controller
{
    public function getlog(){
        return view('login');
    }

    public function postlog(LogRequest $request){
//        dd($request->all());
        echo $request->email;


//        $validation = Validator::make($request->all(),$rules,$messages);
////        dd($validation);
//        $user = Reg::find($request->email);
//        dd($user);
//        if ($validation->fails()){
////            return redirect()->back()->withInput()->withErrors($validation);
////            dd("1");
//            dd($validation->fails());
//        }else{
//            $user = Reg::find($request->email);
//            if (empty($user)){
//                return redirect()->back()->withInput()->withErrors($validation);
//            }else{
//                if (Hash::check($request->password,$user->password)){
//                    return view('/')->with([
//                       'success' => 'Bạn đã đăng nhập thành con mẹ nó công'
//                    ]);
//                }else{
//                    return redirect()->back()->with([
//                        'wrongpass' => 'Bạn nhập sai password mời bạn nhập lại . Nếu sai quá 3 lần thì tài khoản của bạn sẽ bị khóa !'
//                    ]);
//                }
//            }
//        }
//        dd("1");
    }
}
