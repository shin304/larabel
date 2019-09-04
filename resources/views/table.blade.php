<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Laravel-004</title>
    </head>
    <body>
        <table border = '3'>
            <th>{{$language[0]}}</th>
            <th>{{$language[1]}}</th>
                @foreach ($translate as $key => $value)
                    <tr>
                        <td>{{$key}}</td>
                        <td>{{$value}}</td>
                    </tr>
                @endforeach
        </table>
    </body>
</html>