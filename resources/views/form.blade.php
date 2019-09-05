<!doctype html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Laravel-007</title>
    </head>
    <body>
        <form action="{{ url('/form') }}" method="POST" class="addDate">
            {{ csrf_field() }}
            <label>english： <input type="text" name="english" value=""></label>
            <label>japanese： <input type="text" name="japanese" value=""></label>
            <input type="submit" name="submit" value="送信">
        </form>
    </body>
</html>