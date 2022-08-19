<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>地名クイズトップページ</title>
</head>
<body>
    <ul>
        @foreach($big_questions as $big_question)
        <form method="post">
            @csrf
            <li><a href="{{ url('/quiz/' . $big_question->id) }}">{{ $big_question->name }}の難読地名クイズ</a></li>
            <input type="submit" name="delete" value="削除">
            <input type="submit" name="update" value="変更">
        </form>
        @endforeach
    </ul>
    <a href="{{ url('/add') }}">追加</a>
</body>
</html>