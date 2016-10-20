<?php

namespace App\Http\Controllers;

use App\Khoapham;
use Illuminate\Http\Request;

use App\Http\Requests\AkKeRequest;
use Validator;

class AkKeController extends Controller
{
    public function them(AkKeRequest $request)
    {
//        dd($request->all());

//        $rules = [
//            'giatien' => 'required|numeric',
//            'monhoc' => 'required|between:6,20',
//            'giangvien' => 'required|between:6,18'
//        ];
//
//        $message = [
//            '*.required' => ':attribute không được để trống',
//            '*.between' => ':attribute phải nằm giữa :min -> :max',
//            '*.alpha_num' => ':attribute phải chứa vừa ký tự vừa số'
//        ];

//        $validation = Validator::make($request->all(), $rules, $message);
//        dd($validation);
//        if ($validation->fails()) {
//            return redirect('/dangky')->withErrors($validation)
//                ->withInput();
//        } else {

        $img = $request->file('hinhanh');
        $img_name = $img->getClientOriginalName();
        $size = $img->getClientOriginalName();
//        dd($size);
        $khoapham = new Khoapham;
        $khoapham->monhoc = $request->monhoc;
        $khoapham->giatien = $request->giatien;
        $khoapham->giangvien = $request->giangvien;
        $khoapham->image = $size;
        $khoapham->save();

        $new_id = $khoapham->id;
//            return redirect('/success')->with('success','Thành Công Gửi Thông Báo Bằng Session Qua Đây');

        return redirect('/success')->with([
            'newid' => $new_id,
            'success' => 'Thành Công Gửi Thông Báo Bằng Session Qua Đây'
        ]);

//        echo "<pre>";
//        echo "Size : " . $request->file('hinhanh')->getSize() . "<br>";
//        echo "Tên Hình : " . $request->file('hinhanh')->getClientOriginalName() . "<br>";
//        echo "Client Mime Type : " . $request->file('hinhanh')->getClientMimeType() . "<br>";
//        echo "Mime Type : " . $request->file('hinhanh')->getMimeType() . "<br>";
//        echo "ATime : " . $request->file('hinhanh')->getATime() . "<br>";
//        echo "CTime : " . $request->file('hinhanh')->getCTime() . "<br>";
//        echo "Real Path : " . $request->file('hinhanh')->getRealPath() . "<br>";
//        echo "</pre>";
        $img->move($des,$img_name);
        $des = 'public/img/upload';

//        $img = $request->file('hinhanh');
//        $des = 'public/img/upload';
//        $img_name = $request->file('hinhanh')->getClientOriginalName();
//        $img->move($des,$img_name);

//        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
