<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Đăng Ký</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <style>
        body {
            width: 1000px;
            margin: 0px auto;
        }
    </style>
</head>
<body>
    <form enctype="multipart/form-data" action="{!! route('post_dangky') !!}" method="post" name="postForm">
        {{ csrf_token() }}
        <input type="hidden" name="_token" value="{!! csrf_token() !!}"><br>
        {{--<input style="display: none;" name="{{ csrf_field() }}">--}}

        <label for="giatien">Giá Tiền : </label>
        <input type="text" name="giatien"><br>
        <label for="first">Môn Học : </label>
        <input type="text" name="monhoc"><br>

        <label for="giangvien">Giảng Viên : </label>
        <input type="text" name="giangvien"><br>

        <label for="fileImage" class="col-sm-2">File : </label>
        <input type="file" name="hinhanh" value="">
        <button class="button" name="submit" type="submit" class="btn btn-primary">Gửi Form Đăng Ký</button>

        @if(count($errors) >0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
                @endforeach
            </ul>
        </div>
        @endif
    </form>
    <div id="result">
        
    </div>


</body>
</html>
<script>
    // $(document).ready(function () {
    //     var cart = [];
    //     $('.button').on('click', function () {
    //            $.post("/dangky",
    //            {
    //               __token: '{{ csrf_token() }}',
    //               name: $(this).parents().find('input').html()
    //           },
    //           function (result) {
    //              $('#result').html(result);
    //          },
    //          'json'
    //          );
    //            console.log(cart);
    //        });
    // });
</script>