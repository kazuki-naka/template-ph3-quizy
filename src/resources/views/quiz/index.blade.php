<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @if($id == 1)
    <title>ガチで東京の人しか解けない！＃東京の難読地名クイズ</title>
    @else
    <title>ガチで広島の人しか解けない！＃広島の難読地名クイズ</title>
    @endif
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
        @if($id == 1)
        <h1>ガチで東京の人しか解けない！ #東京の難読地名クイズ</h1>
        @else
        <h1>ガチで広島の人しか解けない！ #広島の難読地名クイズ</h1>
        @endif
        <h2 class="question">1.この地名はなんて読む？</h2>
        @if($id == 1)
        <img src="{{ asset('img/takanawa.png') }}" alt="高輪">
        @else
        <img src="{{ asset('img/mukainada.png') }}" alt="向洋">
        @endif
        @for($i = ($id - 1)*3;$i < $id * 3;$i++)
        <ul class="quizy-selection">
            <li class="choice">{{$choice[$i]}}</li>
        </ul>
        @endfor
    </div>
</body>
</html>