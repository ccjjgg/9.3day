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
</head>
<body>
<form class="form-horizontal" action="/dologin" method="post">
    {{csrf_field()}}
    <div class="form-group">
        <div class="col-sm-3">
            <input type="name" class="form-control" name="name" id="inputEmail3" placeholder="昵称">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-3">
            <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="密码">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-default">登陆</button>
        </div>
    </div>
</form>
</body>
</html>