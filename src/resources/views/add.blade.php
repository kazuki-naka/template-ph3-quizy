<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>問題追加ページ</title>
</head>
<body>
    <form action="/add" method="post">
        @csrf
        <input type="text" name="name">
        <input type="submit" value="追加">
    </form>
</body>
</html>