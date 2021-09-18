<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>論文一覧</p>
    <p><a href="/articles/{{ $articles[0]->id }}">{{ $articles[0]->title }}</a></p>
    <p><a href="/articles/{{ $articles[1]->id }}">{{ $articles[1]->title }}</a></p>
    <p><a href="/articles/{{ $articles[2]->id }}">{{ $articles[2]->title }}</a></p>
</body>
</html>