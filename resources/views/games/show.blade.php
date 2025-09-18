<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>{{ $game->title }}</title>
</head>
<body>
<h1>{{ $game->title }}</h1>
<p><strong>Жанр:</strong> {{ $game->genre }}</p>
<div>
    <h2>Описание</h2>
    <p>{{ $game->description }}</p>
</div>

<hr>
<a href="/games">Назад к списку игр</a>
</body>
</html>
