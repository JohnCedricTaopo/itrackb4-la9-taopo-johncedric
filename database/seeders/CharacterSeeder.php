<?php

namespace Database\Seeders;

use App\Models\Character;
use Illuminate\Database\Seeder;

class CharacterSeeder extends Seeder
{
    public function run(): void
    {
        Character::create([
            'name' => 'Traveler',
            'element' => 'Anemo',
            'weapon' => 'Sword',
            'rarity' => 5,
            'is_playable' => true,
            'remarks' => 'The main character of the journey.',
        ]);

        Character::create([
            'name' => 'Odette',
            'element' => 'Cryo',
            'weapon' => 'Sword',
            'rarity' => 5,
            'is_playable' => true,
            'remarks' => 'A Cryo sword character.',
        ]);

        Character::create([
            'name' => 'Sandrone',
            'element' => 'Cryo',
            'weapon' => 'Claymore',
            'rarity' => 5,
            'is_playable' => true,
            'remarks' => 'A powerful Cryo claymore character.',
        ]);

        Character::create([
            'name' => 'Raiden Shogun',
            'element' => 'Electro',
            'weapon' => 'Polearm',
            'rarity' => 5,
            'is_playable' => true,
            'remarks' => 'The Electro Archon of Inazuma.',
        ]);

        Character::create([
            'name' => 'Bennett',
            'element' => 'Pyro',
            'weapon' => 'Sword',
            'rarity' => 4,
            'is_playable' => true,
            'remarks' => 'An unlucky but cheerful adventurer.',
        ]);
    }
}