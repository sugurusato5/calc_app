<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>計算アプリ</title>
</head>
<body>
    <h1>計算アプリ</h1>
    <?php if ($operator == 'addition') : ?>
        <h2>{{$addition}}</h2>
    <?php elseif ($operator == 'subtraction') : ?>
        <h2>{{$subtraction}}</h2>
    <?php elseif ($operator == 'multiplication') : ?>
        <h2>{{$multiplication}}</h2>
    <?php elseif ($operator == 'division') : ?>
        <h2>{{$division}}</h2>
    <?php endif; ?>
    
</body>
</html>