<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <style type="text/css">
        .error {
            width: 220px;
            height: 30px;
            background: #F25252;
            color: white;
            line-height: 30px;
            text-align: center;
        }
    </style>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    {{--<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>--}}
</head>
<body>
<div class="center col-xs-10 col-sm-10 col-md-10 col-lg-10">
    <div class="error">Vui Lòng Nhập</div>
    <form action="{!! route('postLogin') !!}" method="POST">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}" placeholder="">

        {{--@if(count($errors) > 0)--}}
        {{--<div class="error">--}}
        {{--<ul>--}}
        {{--{{ dd($errors->all()) }}--}}
        {{--@foreach($errors as $error)--}}
        {{--<li>--}}
        {{--<p style="color:ghostwhite;">{!! $error->first('user') !!}</p>--}}
        {{--</li>--}}
        {{--@endforeach--}}
        {{--</ul>--}}
        {{--</div>--}}
        {{--@endif--}}
        @if(count($errors) > 0)
            <div class="error">
                @foreach($errors as $error)
                    <p style="color:white;">{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="user"/>
                    <p style="color:red;">{!! $errors->first('user') !!}</p></td>
                <br>

            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="pass"/>
                    <p style="color:red;">{!! $errors->first('pass') !!}</p></td>
                <br>

            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="btnLogin" value="Login"/></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>