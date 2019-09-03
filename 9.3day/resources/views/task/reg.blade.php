<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        #box{
            width: 20%;
            transition: width 2s;
            background-color: #ccd0d2;
        }
        #box:hover{
            width: 100%;
            background-color: #1E9FFF;
        }
    </style>
</head>
<body>
<form class="form-horizontal" action="/doreg" method="post">
    {{csrf_field()}}
    <div class="form-group">
        <div class="col-sm-3">
            <input type="text" class="form-control" name="name" id="inputEmail3" placeholder="昵称">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-3">
            <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="密码">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-1">
            <select class="form-control" name="">
                <option selected>+86</option>
                <option>+852</option>
                <option>+853</option>
                <option>+886</option>
            </select>
        </div>
        <div class="col-sm-2">
            <input type="tel" class="form-control" name="phone" id="inputPassword3" placeholder="手机号">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-3">
            <button type="submit" id="box" class="btn btn-default">注册</button>
        </div>
    </div>
</form>

</body>
</html>