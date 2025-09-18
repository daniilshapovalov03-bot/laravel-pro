<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UpdateGameRequest;
use App\Http\Requests\StoreGameRequest;

class GameController extends Controller
{
    public function index()
    {
        // Проверяем, залогинен ли пользователь и является ли он админом
        if (Auth::check() && Auth::user()->isAdmin()) {
            $games = Game::latest()->paginate(10); // Админ видит все игры
        } else {
            $games = Game::available()->latest()->paginate(10); // Обычный юзер - только доступные
        }

        return view('games.index', ['games' => $games]);
    }
    public function show(Game $game)
    {
        return view('games.show', ['game' => $game]);
    }
    public function create()
    {
        return view('games.create');
    }
    public function store(StoreGameRequest $request)
    {
        Game::create($request->validated());

        return redirect()->route('games.index')
            ->with('success', 'Игра успешно добавлена!');
    }
    public function edit(Game $game)
    {
        return view('games.edit', ['game' => $game]);
    }
    public function update(UpdateGameRequest $request, Game $game)
    {
        $game->update($request->validated());

        return redirect()->route('games.index')
            ->with('success', 'Данные игры успешно обновлены!');
    }
    public function destroy(Game $game)
    {
        $game->delete();

        return redirect()->route('games.index')
            ->with('success', 'Игра успешно удалена!');
    }
}
