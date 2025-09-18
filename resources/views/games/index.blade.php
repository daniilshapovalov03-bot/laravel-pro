<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Каталог игр</title>
</head>
<body>
<h1>Наш каталог игр</h1>

<ul>
    @foreach ($games as $game)
        <li>
            <strong>Название:</strong>
            <a href="{{route('games.show', ['game'=>$game->id])}}">
                {{$game->title}}
            </a>
            <strong>Жанр:</strong> {{ $game->genre }}
        </li>
    @endforeach
</ul>

<a href="/about">О нас</a>
</body>
</html>
