<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;

class GameSeeder extends Seeder
{
    public function run(): void
    {
        Game::create([
            'title' => 'Rhythm Master',
            'genre' => 'Ритм-игра',
            'description' => 'Динамичная игра, где нужно попадать в такт музыке.'
        ]);

        Game::create([
            'title' => 'Pixel Runner',
            'genre' => 'Раннер',
            'description' => 'Бесконечный бег в пиксельном мире с множеством препятствий.'
        ]);

        Game::create([
            'title' => 'Jewel Quest',
            'genre' => '3 в ряд',
            'description' => 'Собирайте кристаллы и решайте головоломки.'
        ]);
    }
}
