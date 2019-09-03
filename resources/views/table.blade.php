<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Laravel-004</title>
</head>
<body>
    <table border = '1' style="border-collapse:collapse;">
    @foreach ($languages as $key => $value) 
        <tr>
        <td>{{$key}}　</td><td>{{$value}}　</td>
        </tr>
    @endforeach
    </table>
</body>
</html>