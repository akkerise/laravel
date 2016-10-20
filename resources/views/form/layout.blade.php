<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	{!! Form::open(array('route' => 'send' , 'files' => true)) !!}
	{!! Form::label('hoten','Full Name') !!}
	{!! Form::text('txtHoTen','',array('class' => 'input','placeholder' => "Input Text Here !!!")) !!}<br><br>
	{!! Form::file('cgcd') !!}<br>
	{!! Form::submit('Clicked') !!}<br>
	{!! Form::reset('Delete') !!}<br>
	{!! Form::close() !!}
</body>
</html>