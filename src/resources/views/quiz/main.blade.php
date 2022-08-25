<!DOCTYPE html>
<html lang="ja">
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
            <a href="{{ '/quiz/' . $big_question->id }}"><input type="hidden" value="{{ $big_question->id }}" name="big_question_id">{{ $big_question->name }}の難読地名クイズ</a>
            <input type="submit" value="削除" name="delete">
            <input type="submit" onclick="location.href='./edit'" value="変更" name="update">
        </form>
        @endforeach
    </ul>
    <a href="{{ url('/add') }}">追加</a>
</body>
</html>