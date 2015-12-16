<?php

namespace App\Repositories;

use App\Character;
use App\OnlineCharacters;

class CharacterRepository
{
    public function isOnline(Character $character)
    {
        if (OnlineCharacters::where('player_id', $character->id)->get()->first() === null) {
            return false;
        }

        return true;
    }

    public function online()
    {
        return count(OnlineCharacters::all());
    }

    public function topFive()
    {
        return Character::orderBy('level', 'desc')->take(5)->get();
    }
}
