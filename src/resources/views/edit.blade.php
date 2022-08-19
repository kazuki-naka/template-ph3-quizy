<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>問題変更ページ</title>
</head>
<body>
    <form action="/edit" method="post">
        @csrf
        <input type="text" name="name">
        <input type="submit" value="変更">
    </form>
</body>
</html>