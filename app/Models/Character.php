<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $fillable = [
        'name',
        'element',
        'weapon',
        'rarity',
        'is_playable',
        'remarks',
    ];

    protected function casts(): array
    {
        return [
            'rarity' => 'integer',
            'is_playable' => 'boolean',
        ];
    }
}