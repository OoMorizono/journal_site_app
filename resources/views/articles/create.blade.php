<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>article create</title>
</head>

<body>
    <h1>新規論文投稿</h1>
    <form action="/articles" method="post">
        @csrf
        <label for="title">論文タイトル</label>
        <input type="text" name="title" size="">
        <label for="body">本文</label>
        <textarea name="body"></textarea>
        <br>
        <input type="submit" value="投稿">
    </form>
</body>

</html>