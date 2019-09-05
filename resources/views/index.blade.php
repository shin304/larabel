<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Laravel-006</title>
</head>
<body>
<table border = '3'>
    @foreach ($languages as $language)
        <th>{{$language}}</th>
    @endforeach
    @foreach ($translations as $translation)
        <tr>
            <td>{{$translation->english}}</td>
            <td>{{$translation->japanese}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>