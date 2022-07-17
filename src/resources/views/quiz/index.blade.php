<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ガチで{{$big_questions->name}}の人しか解けない！＃{{$big_questions->name}}の難読地名クイズ</title>
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <style>
        h1{
            font-size: 19px;
        }
        .quizy-container{
            margin: 0 500px;
            font-family: "Hiragino Kaku Gothic ProN", -apple-system, BlinkMacSystemFont, "Hiragino Sans", "游ゴシック Medium", meiryo, sans-serif;
        }
        .quizy-selection{
            padding: 0;
        }
        .choice{
            font-weight: 600;
            border: 1px solid #ebebeb;
            padding: 13px;
            display: block;
            width: 600px;
            margin: 10px 0;
            cursor: pointer;
            box-shadow: 0 3px 2px -2px rgb(0 0 0 / 13%);
        }
    </style>
</head>
<body>
    <div class="quizy-container" id="quizy-container">
        <h1>ガチで{{ $big_questions->name }}の人しか解けない！ #{{ $big_questions->name }}の難読地名クイズ</h1>
        @foreach($questions as $question)
        <h2 class="question">{{ $loop->index+1 }}.この地名はなんて読む？</h2>
        <img src="{{ asset('img/' . $question->image)}}" alt="地名">
        <ul class="quizy-selection">
            @foreach($choices->where('question_id',$question->id) as $choice)
            <li class="choice">{{ $choice->name }}</li>
            @endforeach
        </ul>
        @endforeach
    </div>
</body>
</html>