<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'genre',
        'status',
    ];
    public function scopeAvailable(Builder $query): void
    {
        $query->where('status', 'available');
    }
}
