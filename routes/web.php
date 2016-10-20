<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
	return view('welcome');
});

Route::get('/', 'WelcomeController@index');
Route::get('/routes', function(){
	return view('routes');
});
Route::get('/one_many', function(){
	// one - many -> tra ra gia tri rong
	// da thu cac truong hop them foreign key va local key vao
	$data = App\Product::find(4)->images();
	// one - many Inverse (Many - one)
	$d = App\Images::find(3)->product()->get()->toArray();
	// dd(1);
	// echo "<pre>";
	dd($d);
	// echo "</pre>";
});

Route::get('/many_many' , function(){
	// $data = App\Car::find(4)->color()->get()->toArray();
	//
	// select('abc') phai dung truoc get()
	$data = App\Color::find(4)->car()->select('name')->get()->toJson();
	dd($data);
});

Route::get('/layout', function(){
	return view('form.layout');
});

Route::post('/layout', function(){
	return view('form.data');
})->name('send');

Route::get('/dangky',function (){
	return view('form.dangky');
});
Route::post('/post_dangky','AkKeController@them')->name('post_dangky');

Route::get('/success', function (){
	return view('success.success');
});

//Route::any('{all?}' , 'WelcomeController@error')->where('all','(.*)');

Route::get('/testbs3', function (){
	return view('testbs3');
});

Route::get('/response/json',function(){
	$arr = [
	'giatien' => 5000000,
	'monhoc' => 'Lập trình Laravel Framework 5.3',
	'giangvien' => 'Nguyễn Thanh'
	];
	return Response::json($arr,200);
});

Route::get('/response/xml', function(){
	$content = '<?xml version="1.0" encoding="UTF-8" ?>
	<root>
		<nguoigui>Nguyễn Thanh</nguoigui>
		<noidung>Đây là những thứ tôi đã gửi để test reponse</noidung>
		<noidung>Đây là những thứ tôi đã gửi để test reponse</noidung>
		<noidung>Đây là những thứ tôi đã gửi để test reponse</noidung>
	</root>';
	$status = 200;
	$value = 'text/xml';
	return response($content,$status)->header('Content-Type',$value);
});

Route::get('response/redirect',function(){
    return redirect()->route('resdemo')->with([
        'level' => 'danger',
        'access' => 'Chấp Nhận'
    ]);
});

Route::get('/response/demo',function (){
    return view('response.response');
})->name('resdemo');

Route::get('/response/redirect/back', function (){
    return redirect()->back();
});

Route::get('response/download', function(){
    // public_path() => /Applications/XAMPP/xamppfiles/htdocs/laravel/public . Đây là đường dẫn từ thư mục gốc
//	$url = public_path() . '/downloads/demo.rar';
	$url = public_path();
    $headers = array(
        'Content-Type: application/rar',
    );
    echo $url;
    // Cách 1 dùng response()
//    return response()->download($url);
    // Cách 2 dùng Response::download($url)
//    return Response::download($url);
});

Route::get('/response/downloadanddelete',function (){
    $url = public_path() . '/downloads/demo.rar';
    // deleteFileAfterSend(true) => xóa luôn file khi người dùng đã download
    return response()->download($url)->deleteFileAfterSend(true);
//    return Response::download($url)->deleteFileAfterSend(true);
});

Route::get('response/macro/cap', function(){
	return response()->cap('Khóa Học Lập Trình Laravel');
});

Route::get('response/macro/contact',function(){
	return response()->contact('http://localhost:8000/response/macro/cap');
});

Route::get('authen/login','ThanhVienController@getLogin')->name('getLogin');
Route::post('authen/login','ThanhVienController@postLogin')->name('postLogin');