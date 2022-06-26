<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ガチで東京の人しか解けない！＃東京の難読地名クイズ</title>
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
        <h1>ガチで東京の人しか解けない！ #東京の難読地名クイズ</h1>
        <h2 class="question">1.この地名はなんて読む？</h2>
        <img src="{{ asset('/img/takanawa.png') }}" alt="高輪">
        <ul class="quizy-selection" id="selection1">
            <li class="choice" id="true">たかなわ</li>
            <li class="choice" id="false1-1">たかわ</li>
            <li class="choice" id="false1-2">こうわ</li>
        </ul>
    </div>
</body>
</html>