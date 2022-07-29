<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ガチで{{$big_questions->name}}の人しか解けない！＃{{$big_questions->name}}の難読地名クイズ</title>
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>
<body>
    <div class="quizy-container" id="quizy-container">
        <h1>ガチで{{ $big_questions->name }}の人しか解けない！ #{{ $big_questions->name }}の難読地名クイズ</h1>
        @foreach($questions as $question)
        <h2 class="question">{{ $loop->index+1 }}.この地名はなんて読む？</h2>
        <img src="{{ asset('img/' . $question->image)}}" alt="地名">
        <ul class="quizy-selection">
            @foreach($choices_list as $choices)
            @foreach($choices->getChoice as $choice)
            @if($question->id == $choice->question_id)
            @if($choice->valid == 1)
            <li class="choice" id={{ 'true' . ($choice->question_id-1) }}>{{ $choice->name }}</li>
            @else
            <li class="choice" id={{ 'false' . ($choice->question_id-1) . '-' . ($loop->index+1) }}>{{ $choice->name }}</li>
            @endif
            @endif
            @endforeach
            @endforeach
        </ul>
        <div class="result-box" id="{{ 'result-box' .  $loop->index }}">
            <p class="answer" id="{{ 'result' . $loop->index }}"></p>
            <p class="answer-description" id="{{ 'description' . $loop->index }}"></p>
        </div>
        @endforeach
    </div>
    <script src="{{ asset('/js/script.js') }}"></script>
</body>
</html>